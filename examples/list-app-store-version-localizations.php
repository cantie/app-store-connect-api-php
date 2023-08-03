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

echo pageHeader("List App Store Version Localizations");
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
$versionId = null;
?>

<?php if (isset($_POST['version_id'])) : ?>
    <?php $versionId = $_POST['version_id'] ?>
    <span class="warn">
    Version ID set!
    </span>
<?php endif ?>

<?php if ($versionId == null) : ?>
<div class="api-key">
  <strong>Enter App Store Version ID</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    Version ID:<input type="text" name="version_id" placeholder="Version-ID" required/>
    <input type="submit" value="Set Version-ID"/>
  </form>
</div>
<?php endif ?>

<?php
if ($versionId == null) {
  return;
}
$client = new AppleClient();
$client->setApiKey($apiKeyPath);
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
$ret = $appstore->appStoreVersions->listAppStoreVersionsAppStoreVersionLocalizations($versionId);
?>

<h3>Results:</h3>
<?= "<table border='1'><tr><th>ID</th><th>description</th><th>keywords</th>
    <th>locale</th><th>marketingUrl</th><th>promotionalText</th>
    <th>supportUrl</th><th>whatsNew</th></tr>" ?>
<?php foreach ($ret->getData() as $appStoreVersionLocalization) : ?>
<?php
  $versionId = $appStoreVersionLocalization->getId();
  $attributes = $appStoreVersionLocalization->getAttributes();
  $description = $attributes->getDescription();
  $keywords = $attributes->getKeywords();
  $locale = $attributes->getLocale();
  $marketingUrl = $attributes->getMarketingUrl();
  $promotionalText = $attributes->getPromotionalText();
  $supportUrl = $attributes->getSupportUrl();
  $whatsNew = $attributes->getWhatsNew();
?>
<?= "<tr><td>$versionId</td><td>$description</td><td>$keywords</td>
    <td>$locale</td><td>$marketingUrl</td><td>$promotionalText</td>
    <td>$supportUrl</td><td>$whatsNew</td></tr>" ?>
<?php endforeach ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
