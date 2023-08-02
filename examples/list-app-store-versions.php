<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";

echo pageHeader("List App Store Versions");
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
$client->setApiKey(getData('api_key_path'));
$client->setIssuerId(getData('issuer_id'));
$client->setKeyIdentifier(getData('key_identifier'));

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
  $platform = $appStoreVersion->getAttributes()->getPlatform();
  $appStoreState = $appStoreVersion->getAttributes()->getAppStoreState();
  $copyright = $appStoreVersion->getAttributes()->getCopyright();
  $earliestReleaseDate = $appStoreVersion->getAttributes()->getEarliestReleaseDate();
  $releaseType = $appStoreVersion->getAttributes()->getReleaseType();
  $versionString = $appStoreVersion->getAttributes()->getVersionString();
  $createdDate = $appStoreVersion->getAttributes()->getCreatedDate();
  $downloadable = $appStoreVersion->getAttributes()->getDownloadable();
?>
<?= "<tr><td>$versionId</td><td>$platform</td><td>$appStoreState</td>
    <td>$copyright</td><td>$earliestReleaseDate</td><td>$releaseType</td>
    <td>$versionString</td><td>$createdDate</td><td>$downloadable</td></tr>" ?>
<?php endforeach ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
