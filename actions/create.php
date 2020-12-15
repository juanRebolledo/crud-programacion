<?php session_start(); ?>
<?php 
  include('../models/model.php');
  include('../controller/userSessions.php');
  $databse = new Database();
  $userSession = new UserSession();

  include_once('./valuesPost.php');

  if (isset($_POST['create_user']) && $userSession->existSession('user')) {
    list ($email, $name, $password, $username) = create_user();
    if ($databse->createUser($email, $name, $password, $username)) {
      return header('location: ../index.php');
    }
  }
  header('location: ../index.php');
?>