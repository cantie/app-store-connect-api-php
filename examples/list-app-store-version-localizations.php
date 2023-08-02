<?php

include_once __DIR__ . '/../vendor/autoload.php';
include_once "templates/base.php";

echo pageHeader("List App Store Version Localizations");
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
$client->setApiKey(getData('api_key_path'));
$client->setIssuerId(getData('issuer_id'));
$client->setKeyIdentifier(getData('key_identifier'));

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
  $description = $appStoreVersionLocalization->getAttributes()->getDescription();
  $keywords = $appStoreVersionLocalization->getAttributes()->getKeywords();
  $locale = $appStoreVersionLocalization->getAttributes()->getLocale();
  $marketingUrl = $appStoreVersionLocalization->getAttributes()->getMarketingUrl();
  $promotionalText = $appStoreVersionLocalization->getAttributes()->getPromotionalText();
  $supportUrl = $appStoreVersionLocalization->getAttributes()->getSupportUrl();
  $whatsNew = $appStoreVersionLocalization->getAttributes()->getWhatsNew();
?>
<?= "<tr><td>$versionId</td><td>$description</td><td>$keywords</td>
    <td>$locale</td><td>$marketingUrl</td><td>$promotionalText</td>
    <td>$supportUrl</td><td>$whatsNew</td></tr>" ?>
<?php endforeach ?>
<?= "</table>" ?>

<?= pageFooter(__FILE__);
