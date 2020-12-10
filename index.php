<?php
  require("./models/model.php");
  $database = new Database();

  include_once('./controller/userSessions.php');
  $userSession = new UserSession();

  include_once("./controller/controller.php");
?>