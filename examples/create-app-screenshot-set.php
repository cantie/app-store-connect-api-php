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
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotSetCreateRequest;

echo pageHeader("Create App Screenshot Sets");
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
$localizationId = null;
?>

<?php if (isset($_POST['localization_id'])) : ?>
    <?php $localizationId = $_POST['localization_id'] ?>
    <span class="warn">
    App Localization ID set!
    </span>
<?php endif ?>

<?php if ($localizationId == null) : ?>
<div class="api-key">
  <strong>Enter App Localization ID</strong>
  <strong>This example will create set APP_IPHONE_67</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    App Localization ID:<input type="text" name="localization_id" placeholder="Localization-ID" required/>
    <input type="submit" value="Set Localization-ID"/>
  </form>
</div>
<?php endif ?>

<?php
if ($localizationId == null) {
  return;
}
$client = new AppleClient();
$client->setApiKey($apiKeyPath);
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
$request = new AppScreenshotSetCreateRequest([
  'data' => [
    'type' => 'appScreenshotSets',
    'attributes' => [
      'screenshotDisplayType' => 'APP_IPHONE_67'
    ],
    'relationships' => [
      'appStoreVersionLocalization' => [
        'data' => [
          'type' => 'appStoreVersionLocalizations',
          'id' => $localizationId
        ]
      ]
    ]
  ]
]);
$ret = $appstore->appScreenshotSets->createAppScreenshotSets($request);
?>

<h3>Results:</h3>
<?= "<table border='1'><tr><th>ID</th><th>screenshotDisplayType</th></tr>" ?>
<?php foreach ($ret->getData() as $appScreenshotSet) : ?>
<?php
  $screenshotSetId = $appScreenshotSet->getId();
  $screenshotDisplayType = $appScreenshotSet->getAttributes()->getScreenshotDisplayType();
?>
<?= "<tr><td>$screenshotSetId</td><td>$screenshotDisplayType</td></tr>" ?>
<?php endforeach ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
