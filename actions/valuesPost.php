<?php 
  function create_user() {
    $username = $_POST['usernameC'];
    $password = $_POST['passwordC'];
    $name = $_POST['nameC'];
    $email = $_POST['emailC'];
      
    return array ($email, $name, $password, $username);
  }

  function update_user() {
    $username = $_POST['usernameU'];
    $password = $_POST['passwordU'];
    $name = $_POST['nameU'];
    $email = $_POST['emailU'];
      
    return array ($email, $name, $password, $username);
  }
?>