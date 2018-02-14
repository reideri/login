<?php session_start();

require 'admin/config.php';
require 'functions.php';

// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $conexion = conexion($bd_config);
  $usuario = iniciarSession('usuarios', $conexion);

  if ($usuario['tipo_usuario'] == 'administrador') {
    header('Location: '.RUTA.'admin.php');
  } elseif ($usuario['tipo_usuario'] == 'usuario') {
    header('Location: '.RUTA.'usuario.php');
  } else {
    header('Location: '.RUTA.'login.php');
  }
} else {
  header('Location: '.RUTA.'login.php');
}





 ?>
