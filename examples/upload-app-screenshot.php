<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotUpdateRequest;

echo pageHeader("Upload App Screenshot");
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
$client->setApiKey(getData('api_key_path'));
$client->setIssuerId(getData('issuer_id'));
$client->setKeyIdentifier(getData('key_identifier'));

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
  $assetDeliveryState = $appScreenshotUpdate->getAttributes()->getAssetDeliveryState()->getState();
  $assetToken = $appScreenshotUpdate->getAttributes()->getAssetToken();
  $assetType = $appScreenshotUpdate->getAttributes()->getAssetType();
  $fileName = $appScreenshotUpdate->getAttributes()->getFileName();
  $fileSize = $appScreenshotUpdate->getAttributes()->getFileSize();
  $height = $appScreenshotUpdate->getAttributes()->getImageAsset()->getHeight();
  $width = $appScreenshotUpdate->getAttributes()->getImageAsset()->getWidth();
  $sourceFileChecksum = $appScreenshotUpdate->getAttributes()->getSourceFileChecksum();
  $fileSize = $appScreenshotUpdate->getAttributes()->getFileSize();
?>
<?= "<tr><td>$screenshotId</td><td>$assetDeliveryState</td><td>$assetToken</td>
    <td>$assetType</td><td>$fileName</td><td>$fileSize</td>
    <td>$height</td><td>$width</td><td>$sourceFileChecksum</td><td>$fileSize</td></tr>" ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
