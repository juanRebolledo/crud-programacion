<?php 
  include_once('../controller/userSessions.php');
  $userSession = new UserSession();
  $userSession->closeSession();

  header('location: ../index.php');
?>