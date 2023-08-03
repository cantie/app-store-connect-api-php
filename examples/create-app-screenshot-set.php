<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";
use Cantie\AppStoreConnect\Services\AppStore\AppScreenshotSetCreateRequest;

echo pageHeader("Create App Screenshot Sets");
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
$client->setApiKey(getData('api_key_path'));
$client->setIssuerId(getData('issuer_id'));
$client->setKeyIdentifier(getData('key_identifier'));

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
