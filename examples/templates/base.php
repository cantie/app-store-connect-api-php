<?php

/* Ad hoc functions to make the examples marginally prettier.*/
function isWebRequest()
{
    return isset($_SERVER['HTTP_USER_AGENT']);
}

function pageHeader($title)
{
    $ret = "<!doctype html>
  <html>
  <head>
    <title>" . $title . "</title>
    <link href='styles/style.css' rel='stylesheet' type='text/css' />
  </head>
  <body>\n";
    if ($_SERVER['PHP_SELF'] != "/index.php") {
        $ret .= "<p><a href='index.php'>Back</a></p>";
    }
    $ret .= "<header><h1>" . $title . "</h1></header>";

    // Start the session (for storing access tokens and things)
    if (!headers_sent()) {
        session_start();
    }

    return $ret;
}

function pageFooter($file = null)
{
    $ret = "";
    if ($file) {
        $ret .= "<h3>Code:</h3>";
        $ret .= "<pre class='code'>";
        $ret .= htmlspecialchars(file_get_contents($file));
        $ret .= "</pre>";
    }
    $ret .= "</html>";

    return $ret;
}

function missingApiKeyPathWarning()
{
    $ret = "
    <h3 class='warn'>
      Warning: You need to set a API key path of your local machine
    </h3>";

    return $ret;
}

function missingIssuerIdWarning()
{
    $ret = "
    <h3 class='warn'>
      Warning: You need to set Issuer ID
    </h3>";

    return $ret;
}

function missingKeyIdentifierWarning()
{
    $ret = "
    <h3 class='warn'>
      Warning: You need to set Key Identifier
    </h3>";

    return $ret;
}

function getData($key)
{
    $file = __DIR__ . '/../.dat';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $content = json_decode($content);
        return isset($content->{$key}) ? $content->{$key} : null;
    }
    return null;
}

function setData($key, $value)
{
    $file = __DIR__ . '/../.dat';
    $content = file_get_contents($file);
    if (!$content) {
      $content = array();
    }
    $content = json_decode($content);
    $content->{$key} = $value;
    file_put_contents($file, json_encode($content));
}
