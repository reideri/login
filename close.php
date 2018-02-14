<?php session_start();

require 'admin/config.php';
require 'functions.php';

session_destroy();

header('Location: '.RUTA.'login.php');



 ?>
