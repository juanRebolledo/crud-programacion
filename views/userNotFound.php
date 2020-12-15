<?php 
  include_once('../controller/userSessions.php');
  $userSession = new UserSession();
?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php"); ?>
<title>Usuario no encontrado</title>
<body>
  <?php include("../includes/heroPrimary.php"); ?>
  <div class="columns is-mobile is-centered">
    <div class="column is-half">
      <h2 class="title is-2" style="text-align: center;">Control de usuario</h2>
      <h4 class="title is-4" style="text-align: center">Usuario no encontrado</h4>
      <a href="../index.php" class="button is-link is-centered">Regresar</a>
    </div>
  </div>

  <?php require("../includes/footer.php"); ?>
</body>
</html>