<?php include_once "templates/base.php" ?>

<?php if (!isWebRequest()) : ?>
    To view this example, run the following command from the root directory of this repository:

        php -S localhost:8080 -t examples/

    And then browse to "localhost:8080" in your web browser
    <?php return ?>
<?php endif ?>

<?= pageHeader("App Store Connect API Library Examples"); ?>

<?php if (isset($_POST['api_key_path'])) : ?>
    <?php setData('api_key_path', $_POST['api_key_path']) ?>
    <span class="warn">
    API Key path set!
    </span>
<?php endif ?>
<?php if (isset($_POST['issuer_id'])) : ?>
    <?php setData('issuer_id', $_POST['issuer_id']) ?>
    <span class="warn">
    Issuer ID set!
    </span>
<?php endif ?>
<?php if (isset($_POST['key_identifier'])) : ?>
    <?php setData('key_identifier', $_POST['key_identifier']) ?>
    <span class="warn">
    Key identifier set!
    </span>
<?php endif ?>

<?php if (getData('api_key_path') == null) : ?>
<div class="api-key">
  <strong>You have not entered your API key path</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    API key path:<input type="text" name="api_key_path" placeholder="API-Key-Path" required/>
    <input type="submit" value="Set API-Key"/>
  </form>
</div>
<?php endif ?>
<br>
<?php if (getData('issuer_id') == null) : ?>
<div class="api-key">
  <strong>You have not entered your Issuer ID</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    Issuer ID:<input type="text" name="issuer_id" placeholder="Issuer-ID" required/>
    <input type="submit" value="Set Issuer-ID"/>
  </form>
</div>
<?php endif ?>
<br>
<?php if (getData('key_identifier') == null) : ?>
<div class="api-key">
  <strong>You have not entered your Key Identifier</strong>
  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    Key Identifier:<input type="text" name="key_identifier" placeholder="Key-Identifier" required/>
    <input type="submit" value="Set Key-Identifier"/>
  </form>
</div>
<?php endif ?>

<ul>
  <li><a href="list-apps.php">List apps</a></li>
  <!-- <li><a href="batch.php">An example of combining multiple calls into a batch request</a></li>
  <li><a href="service-account.php">A query using the service account functionality.</a></li>
  <li><a href="simple-file-upload.php">An example of a small file upload.</a></li>
  <li><a href="large-file-upload.php">An example of a large file upload.</a></li>
  <li><a href="large-file-download.php">An example of a large file download.</a></li>
  <li><a href="idtoken.php">An example of verifying and retrieving the id token.</a></li>
  <li><a href="multi-api.php">An example of using multiple APIs.</a></li> -->
</ul>

<?= pageFooter();
