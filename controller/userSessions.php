<?php 
  class UserSession {
    public function __construct() {
      if(!isset($_SESSION)) {
        session_start();
      }
    }

    public function setCurrentUser($user) {
      $_SESSION['user'] = $user;
    }

    public function existSession($name) {
      return isset($_SESSION["$name"]);
    }

    public function getCurrentUser() {
      return $_SESSION['user'];
    }

    public function closeSession(){
      session_unset();
      session_destroy();
    }
  }
?>