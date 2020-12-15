<?php
  $uri = './actions/logout.php';
  if (file_exists("../controller/userSessions.php")) {
    $uri = '../actions/logout.php';
  }
?>
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">Universidad de Colima</h1>
      <h2 class="subtitle">Facultad de Telemática</h2>
   	</div>
    <?php 
      if ($userSession->existSession('user')) {
        ?>
          <div class="level">
            <div class="level-left">
          </div>
          <div class="level-right">
            <div class="level-item">
              <p style="margin-right: 5px;">Bienvenido: <?php echo($_SESSION['user']); ?></p>
              <a class="button is-danger" href="<?php echo($uri) ?>">Cerrar sesión</a>
            </div>
          </div>
        <?php 
      }
    ?>
  </div>
 	</div>
</section>