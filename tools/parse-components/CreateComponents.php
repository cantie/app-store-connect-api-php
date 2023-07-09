<?php

$config_file_path = dirname(__FILE__) . "/openapi.json";
$template_header_file_path = dirname(__FILE__) . "/template-header.txt";
$template_class_file_path = dirname(__FILE__) . "/template-class.txt";

$config = fopen($config_file_path, "r") or die("Unable to open config file!");
$content = fread($config, filesize($config_file_path));
fclose($config);

$headerFile = fopen($template_header_file_path, "r") or die("Unable to open header template file!");
$header = fread($headerFile, filesize($template_header_file_path));
fclose($headerFile);

$clazzFile = fopen($template_class_file_path, "r") or die("Unable to open class template file!");
$clazz = fread($clazzFile, filesize($template_class_file_path));
fclose($clazzFile);
// echo $clazz;

$config = json_decode($content);
// echo json_encode($config->components->schemas->Actor);


function genPrimitiveAttribute($key, $possibleValues) {
    $str = "\tpublic $@key@;@comment@\n";
    $str = str_replace("@key@", $key, $str);
    $str = str_replace("@comment@", isset($possibleValues) ? (" // " . implode(", ", $possibleValues)) : "", $str);
    return $str;
}

function genClassAttribute($key, $className, $type = null) {
    $str = "\tprotected $@key@Type = @className@::class;\n\tprotected $@key@DataType = '@type@';\n";
    $str = str_replace("@key@", $key, $str);
    $str = str_replace("@className@", $className, $str);
    $str = str_replace("@type@", $type == "array" ? $type : "", $str);
    return $str;
}

function genGetterAndSetter($key, $className = null, $type = null) {
    $getterStr = "";
    if (isset($className)) {
        $commentStr = "\t/**\n\t* @return  @className@@array@\n\t*/\n";
        $getterStr = str_replace('@className@', $className, $commentStr);
    }
    $getterStr .= "\tpublic function get@ucfirstkey@()\n\t{\n\t\treturn \$this->@key@;\n\t}\n";
    $getterStr = str_replace("@ucfirstkey@", ucfirst($key), $getterStr);
    $getterStr = str_replace("@key@", $key, $getterStr);
    $getterStr = str_replace("@array@", $type == "array" ? "[]" : "", $getterStr);

    $setterStr = "";
    if (isset($className)) {
        $commentStr = "\t/**\n\t* @param  @className@@array@\n\t*/\n";
        $setterStr = str_replace('@className@', $className, $commentStr);
    }
    $setterStr .= "\tpublic function set@ucfirstkey@($@key@)\n\t{\n\t\t\$this->@key@ = $@key@;\n\t\treturn $@key@;\n\t}\n";
    $setterStr = str_replace("@ucfirstkey@", ucfirst($key), $setterStr);
    $setterStr = str_replace("@key@", $key, $setterStr);
    $setterStr = str_replace("@array@", $type == "array" ? "[]" : "", $setterStr);
    return $getterStr . $setterStr;
}

function genClass($className, $classData, $classTemplate) {
    $REF_INDEX_PREFIX_LENGTH = 21; // "#/components/schemas/"
    $str = str_replace("@className@", $className, $classTemplate);
    $str = str_replace("@model@", 'Model', $str);
    $attString = '';
    $getSetString = '';
    $subClassesString = '';
    if (property_exists($classData, 'properties')) {
        foreach ($classData->properties as $k => $v) {
            if (property_exists($v, '$ref')) {
                $refClassName = substr($v->{'$ref'}, $REF_INDEX_PREFIX_LENGTH);
                $attString .= genClassAttribute($k, $refClassName, property_exists($v, 'type') ? $v->type : null);
                $getSetString .= genGetterAndSetter($k, $refClassName, property_exists($v, 'type') ? $v->type : null);
            }
            else if ($v->type == 'array') {
                if (property_exists($v->items, 'type')) {
                    if ($v->items->type == 'object') {
                        $subClassName = $className . '_' . ucfirst($k);
                        $attString .= genClassAttribute($k, $subClassName, $v->type);
                        $getSetString .= genGetterAndSetter($k, $subClassName, $v->type);
            
                        // recursively
                        $subClassesString .= genClass($subClassName, $v->items, $classTemplate);
                        continue;
                    }
                }
                else if (property_exists($v->items, 'oneOf')) {
                    // can be one of many classes
                    $refClassName = 'Model';
                } else {
                    if (property_exists($v->items, '$ref')) {
                        $refClassName = substr($v->items->{'$ref'}, $REF_INDEX_PREFIX_LENGTH);
                    } else {
                        $refClassName = 'Model';
                    }
                }
                $attString .= genClassAttribute($k, $refClassName, $v->type);
                $getSetString .= genGetterAndSetter($k, $refClassName, $v->type);
            }
            else if ($v->type == 'object') {
                $subClassName = $className . '_' . ucfirst($k);
                $attString .= genClassAttribute($k, $subClassName, $v->type);
                $getSetString .= genGetterAndSetter($k, $subClassName, $v->type);
    
                // recursively
                $subClassesString .= genClass($subClassName, $v, $classTemplate);
            }
            else {
    
                $attString .= genPrimitiveAttribute($k, property_exists($v, 'enum') ? $v->enum : null);
                $getSetString .= genGetterAndSetter($k);
            }
        }
    }
    else {
        $attString  = "\t// TODO: no properties\n";
    }
    $str = str_replace("@attributes@", $attString, $str);
    $str = str_replace("@getterandsetter@", $getSetString, $str);
    echo $className . "\n";
    return $subClassesString . $str;
}


$primitiveAttribute = "public $@key@;";
$objectAttribute = "protected $@key@Type = @classType@::class;";
foreach ($config->components->schemas as $key => $value) {
    // if ($key != "xcodeMetrics") {
    //     continue;
    // }
    $str = genClass($key, $value, $clazz);
    file_put_contents(
        'zzzz/' . $key . ".php",
        $header . $str
    );
    // echo $key . "\n";
}

echo "\n" . 'end';