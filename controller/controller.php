<?php
   if ($userSession->existSession('user')) {
      include_once('./views/Home.php');
   } else if (isset($_POST['name']) && isset($_POST['email'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];

      if ($database->login($name, $email)) {
         $userSession->setCurrentUser($name);
         include_once('./views/Home.php');
      } else {
         header('Location: ./views/UserNotFound.php');
      }
   } else {
      include_once('./views/Login.php');
   }
?>
