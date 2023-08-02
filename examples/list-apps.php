<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";

echo pageHeader("List Apps");

$client = new AppleClient();
$client->setApiKey(getData('api_key_path'));
$client->setIssuerId(getData('issuer_id'));
$client->setKeyIdentifier(getData('key_identifier'));

$appstore = new AppleService_AppStore($client);
$ret = $appstore->apps->listApps([
  'limit' => 10
]);
?>

<h3>Results:</h3>
<?= "<table border='1'><tr><th>App ID</th><th>App name</th><th>Bundle ID</th></tr>" ?>
<?php foreach ($ret->getData() as $app) : ?>
<?php
  $appName = $app->getAttributes()->getName();
  $appId = $app->getId();
  $bundleId = $app->getAttributes()->getBundleId();
?>
<?= "<tr><td>$appId</td><td>$appName</td><td>$bundleId</td></tr>" ?>
<?php endforeach ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
