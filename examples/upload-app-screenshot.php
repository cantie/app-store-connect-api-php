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
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotUpdateRequest;

echo pageHeader("Upload App Screenshot");
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
$screenshotSetId = null;
$fileName = 'ss1.png';
$filePath = 'screenshots/ss1.png';
?>

<?php if (isset($_POST['screenshot_set_id'])) : ?>
    <?php $screenshotSetId = $_POST['screenshot_set_id'] ?>
    <span class="warn">
    Screenshot Set ID set!
    </span>
<?php endif ?>

<?php if ($screenshotSetId == null) : ?>
<div class="api-key">
  <strong>Enter Screenshot Set ID</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    Screenshot Set ID:<input type="text" name="screenshot_set_id" placeholder="Screenshot-Set-ID" required/>
    <input type="submit" value="Set Screenshot-Set-ID"/>
  </form>
</div>
<?php endif ?>

<?php
if ($screenshotSetId == null) {
  return;
}
$client = new AppleClient();
$client->setApiKey($apiKeyPath);
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
$requestCreateAppScreenshot = new AppScreenshotCreateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'attributes' => [
            'fileSize' => filesize($filePath),
            'fileName' => $fileName
        ],
        'relationships' => [
            'appScreenshotSet' => [
                'data' => [
                    'type' => 'appScreenshotSets',
                    'id' => $screenshotSetId
                ]
            ]
        ]
    ]
]);
$ret = $appstore->appScreenshots->createAppScreenshots($requestCreateAppScreenshot);

$screenshotId = $ret->getData()->getId();
foreach ($ret->getData()->getAttributes()->getUploadOperations() as $uploadOperation) {
    $upload = new AppleService_Upload($client, $uploadOperation);
    $uploadRet = $upload->uploadAssets->upload($uploadOperation, $filePath);
}
$appScreenshotUpdateRequest = new AppScreenshotUpdateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'id' => $screenshotId,
        'attributes' => [
            'sourceFileChecksum' => md5_file($filePath),
            'uploaded' => true
        ]
    ]
]);
$commitRet = $appstore->appScreenshots->updateAppScreenshots($screenshotId, $appScreenshotUpdateRequest);
?>

<h3>Results:</h3>
<?= "<table border='1'><tr><th>ID</th><th>fileName</th><th>fileSize</th></tr>" ?>
<?php
  $appScreenshot = $ret->getData();
  $fileName = $appScreenshot->getAttributes()->getFilename();
  $fileSize = $appScreenshot->getAttributes()->getFileSize();
?>
<?= "<tr><td>$screenshotId</td><td>$fileName</td><td>$fileSize</td></tr>" ?>
<?= "</table>" ?>

<h3>Upload Results:</h3>
<?= "<table border='1'><tr><th>ID</th><th>assetDeliveryState</th><th>assetToken</th>
    <th>assetType</th><th>fileName</th><th>fileSize</th>
    <th>height</th><th>width</th><th>sourceFileChecksum</th><th>fileSize</th></tr>" ?>
<?php
  $appScreenshotUpdate = $commitRet->getData();
  $attributes = $appScreenshotUpdate->getAttributes();
  $assetDeliveryState = $attributes->getAssetDeliveryState()->getState();
  $assetToken = $attributes->getAssetToken();
  $assetType = $attributes->getAssetType();
  $fileName = $attributes->getFileName();
  $fileSize = $attributes->getFileSize();
  $height = $attributes->getImageAsset()->getHeight();
  $width = $attributes->getImageAsset()->getWidth();
  $sourceFileChecksum = $attributes->getSourceFileChecksum();
  $fileSize = $attributes->getFileSize();
?>
<?= "<tr><td>$screenshotId</td><td>$assetDeliveryState</td><td>$assetToken</td>
    <td>$assetType</td><td>$fileName</td><td>$fileSize</td>
    <td>$height</td><td>$width</td><td>$sourceFileChecksum</td><td>$fileSize</td></tr>" ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
