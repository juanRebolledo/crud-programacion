<?php 
  include('../models/model.php');
  $databse = new Database();

  include_once('./valuesPost.php');

  if (isset($_POST['create_user'])) {
    list ($email, $name, $password, $username) = create_user();
    if ($databse->createUser($email, $name, $password, $username)) {
      return header('location: ../index.php');
    }
  }
  header('location: ../views/CreateUser.php');
?>