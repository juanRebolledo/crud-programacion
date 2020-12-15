<?php
   if ($userSession->existSession('user')) {
      include_once('./views/Home.php');
   } else {
      include_once('./views/Login.php');
   }
?>
