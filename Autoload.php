<?php 
  class Autoload {
    public function __constructor() {
      spl_autoload_register(function($class) {
        if(file_exists("./controller/$class"))
          require("./controller/$class");
        else echo("No existe la clase: $class");
      });
    }
  }
?>