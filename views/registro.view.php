<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body class="bg-image">
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
      </div>

      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
      </div>

      <div class="input-group">
        <select class="form-control" name="rol">
          <option value="">Selecciona un privilegio</option>
          <option value="administrador">Administrador</option>
          <option value="usuario">Usuario</option>
        </select>
      </div>

      <?php if (!empty($errores)): ?>
        <ul>
          <?php echo $errores; ?>
        </ul>
      <?php endif; ?>

      <button type="submit" name="submit" class="btn btn-flat-green">Registrar</button>
    </form>

    <a href="<?php echo RUTA.'login.php' ?>" class="login-link">¿Ya tienes cuenta?</a>
  </div>
</body>
</html>
