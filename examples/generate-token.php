<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";

echo pageHeader("Generate JWT Token");

$client = new AppleClient();
$client->setApiKey(getData('api_key_path'));
$client->setIssuerId(getData('issuer_id'));
$client->setKeyIdentifier(getData('key_identifier'));

$token = $client->generateToken();
?>

<h3>JWT Token:</h3>
<?= $token ?>

<?= pageFooter(__FILE__);
