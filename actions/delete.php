<?php
  include('../models/model.php');
  $databse = new Database();

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($databse->deleteUser($id)) {
      return header('location: ../index.php');
    }
  }

  return header('location: ../index.php');
?>