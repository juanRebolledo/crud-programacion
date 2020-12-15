<?php 
  include('../controller/userSessions.php');
  include('../models/model.php');
  $userSession = new UserSession();
  $database = new Database();

  include_once('./valuesPost.php');

  if (isset($_POST['login'])) {
    $name = $_POST['name'];
      $email = $_POST['email'];

    if ($database->login($name, $email)) {
       $userSession->setCurrentUser($name);
       header('location: ../index.php');
    } else {
       header('Location: ../views/UserNotFound.php');
    }
  }
?>