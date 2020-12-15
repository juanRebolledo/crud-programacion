<?php 
  include_once('../controller/userSessions.php');
  $userSession = new UserSession();
  if(!$userSession->existSession('user')) header('location: ../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../includes/head.php"); ?>
  <title>Actualizar usuario</title>
</head>
<body>
  <?php include('../includes/heroPrimary.php'); ?>
  <?php include('../models/model.php'); ?>
  <?php 
    if (isset($_GET['id'])) {
      $database = new Database();
      list($email, $name, $password, $username) = $database->getUserWithID($_GET['id']);
  ?>
  <div class="mt-3 mb-4 container">
    <div class="box has-text-justified">
      <form action="../actions/update.php?idU=<?php echo ($_GET['id']); ?>" method="POST" class="column is-three-fifths is-offset-one-fifth">
        <div class="field">
          <label class="label">Nombre completo</label>
          <div class="control">
            <input class="input" id="nameU" name="nameU" placeholder="Nombre" required type="text" value="<?php echo($name) ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Nombre de usuario</label>
          <div class="control">
            <input class="input" id="usernameU" name="usernameU" placeholder="Username" required type="text" value="<?php echo $username ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Contraseña</label>
          <div class="control">
            <input class="input" id="passwordU" name="passwordU" placeholder="********" required type="text"  value="<?php echo $password ?>">
          </div>
        </div>
        <div class="field">
          <label class="label">Correo</label>
          <div class="control">
            <input class="input" id="emailU" name="emailU" placeholder="@" required type="email"  value="<?php echo $email ?>">
          </div>
        </div>
        <div class="field is-grouped">
          <div class="control">
            <button name="update_user" id="update_user" class="button is-link">Actualizar</button>
          </div>
          <div class="control">
            <a href="../index.php" class="button is-link is-danger">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php } else echo('<script> window.location="./home.php" </script>') ?>
</body>
</html>