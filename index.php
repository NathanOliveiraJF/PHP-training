<?php

// autoload for composer
// require "./vendor/autoload.php";
// my autoload
require "./myAutoload.php";

// include "App/Models/MyClass.php";
use App\Models\MyClass;

$myclass = new MyClass();

echo $myclass->foo();

