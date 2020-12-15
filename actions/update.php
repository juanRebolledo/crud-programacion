<?php 
  include('../models/model.php');
  include('../controller/userSessions.php');
  $databse = new Database();
  $userSession = new UserSession();

  include_once('./valuesPost.php');
  $id = $_GET['idU'];
  if (isset($_POST['update_user']) && $userSession->existSession('user')) {
    list ($email, $name, $password, $username) = update_user();
    if ($databse->updateUser($email, $id, $name, $password, $username)) {
      return header('location: ../index.php');
    }
  }
  header('location: ../index.php');
?>