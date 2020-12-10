<?php 
  include('../models/model.php');
  $databse = new Database();

  include_once('./valuesPost.php');
  $id = $_GET['idU'];
  if (isset($_POST['update_user'])) {
    list ($email, $name, $password, $username) = update_user();
    if ($databse->updateUser($email, $id, $name, $password, $username)) {
      return header('location: ../index.php');
    }
  }
  header("location: ../views/UpdateUser.php?id='$id'");
?>