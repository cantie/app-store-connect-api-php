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

echo pageHeader("List App Store Versions");
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
$appId = null;
?>

<?php if (isset($_POST['app_id'])) : ?>
    <?php $appId = $_POST['app_id'] ?>
    <span class="warn">
    App ID set!
    </span>
<?php endif ?>

<?php if ($appId == null) : ?>
<div class="api-key">
  <strong>Enter App ID</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    App ID:<input type="text" name="app_id" placeholder="App-ID" required/>
    <input type="submit" value="Set App-ID"/>
  </form>
</div>
<?php endif ?>

<?php
if ($appId == null) {
  return;
}
$client = new AppleClient();
$client->setApiKey($apiKeyPath);
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
$ret = $appstore->apps->listAppsAppStoreVersions($appId);
?>

<h3>Results:</h3>
<?= "<table border='1'><tr><th>ID</th><th>platform</th><th>appStoreState</th>
    <th>copyright</th><th>earliestReleaseDate</th><th>releaseType</th>
    <th>versionString</th><th>createdDate</th><th>downloadable</th></tr>" ?>
<?php foreach ($ret->getData() as $appStoreVersion) : ?>
<?php
  $versionId = $appStoreVersion->getId();
  $attributes = $appStoreVersion->getAttributes();
  $platform = $attributes->getPlatform();
  $appStoreState = $attributes->getAppStoreState();
  $copyright = $attributes->getCopyright();
  $earliestReleaseDate = $attributes->getEarliestReleaseDate();
  $releaseType = $attributes->getReleaseType();
  $versionString = $attributes->getVersionString();
  $createdDate = $attributes->getCreatedDate();
  $downloadable = $attributes->getDownloadable();
?>
<?= "<tr><td>$versionId</td><td>$platform</td><td>$appStoreState</td>
    <td>$copyright</td><td>$earliestReleaseDate</td><td>$releaseType</td>
    <td>$versionString</td><td>$createdDate</td><td>$downloadable</td></tr>" ?>
<?php endforeach ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
