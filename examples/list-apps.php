<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";

echo pageHeader("List Apps");
if (!$apiKeyPath = getData('api_key_path')) {
    echo missingApiKeyPathWarning();
    return;
}
if (!$issuerId = getData('issuer_id')) {
    echo missingIssuerIdWarning();
    return;
}
if (!$keyIdentifier = getData('key_identifier')) {
    echo missingKeyIdentifierWarning();
    return;
}

$client = new AppleClient();
$client->setApiKey($apiKeyPath);
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

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
