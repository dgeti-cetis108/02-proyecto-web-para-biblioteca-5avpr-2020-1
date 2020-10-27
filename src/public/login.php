<?php
require_once '../app/layouts/header.php';
?>

<div class="login-clean">
  <form method="post">
    <h2 class="sr-only">Login Form</h2>
    <div class="illustration">
      <img src="images/logo-cetis108-gmail.png" style="height: 100px;">
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="user" placeholder="Usuario">
    </div>
    <div class="form-group">
      <input class="form-control" type="password" name="password" placeholder="Contraseña">
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit" style="background: rgb(160,55,85);">
        Iniciar sesión
      </button>
    </div>
    <a class="forgot" href="#">¿Olvidaste la contraseña?</a>
  </form>
</div>

<?php require_once '../app/layouts/footer.php'; ?>