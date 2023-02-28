<?php

spl_autoload_register(function($class) {
  // Windows Users
  $className = str_replace("\\", "/", $class);
  require_once $className.'.php';
})

?>
