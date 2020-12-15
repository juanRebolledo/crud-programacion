<?php 
  include_once('../controller/userSessions.php');
  $userSession = new UserSession();
  if(!$userSession->existSession('user')) header('location: ../');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../includes/head.php"); ?>
  <title>Crear usuario</title>
</head>
<body>
  <?php include('../includes/heroPrimary.php'); ?>
  <div class="mt-3 mb-4 container">
    <div class="box has-text-justified">
      <form action="../actions/create.php" method="POST" class="column is-three-fifths is-offset-one-fifth">
        <div class="field">
          <label class="label">Nombre completo</label>
          <div class="control">
            <input class="input" name="nameC" id="nameC" type="text" placeholder="Nombre" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Nombre de usuario</label>
          <div class="control">
            <input class="input" name="usernameC" id="usernameC" type="text" placeholder="Username" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Contraseña</label>
          <div class="control">
            <input class="input" name="passwordC" id="passwordC" type="password" placeholder="********" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Correo</label>
          <div class="control">
            <input class="input" name="emailC" id="emailC" type="email" placeholder="@" required>
          </div>
        </div>
        <div class="field is-grouped">
          <div class="control">
            <button name="create_user" class="button is-link">Guardar</button>
          </div>
          <div class="control">
            <a href="../index.php" class="button is-link is-danger">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>