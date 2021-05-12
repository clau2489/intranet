<!DOCTYPE html>
<html lang="es">
<?php include 'header.php';?>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="col-md-12 text-center">
          <img src="img/logo.png" style="width: 200px";>
        </div>

        <p style="font-size:15px">
          <?php session_start(); ?>
          <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['name_user']; ?></strong> a la Intranet del Municipio de Marcos Paz.
        </p>        
        <form class="form-login" action="login.php" method="post">
          <div class="form-group">
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-sm" id="usuario" name="usuario" placeholder="Usuario">
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-sm" id="contrasenia" name="contrasenia" placeholder="Contraseña">
          </div>
          <button type="submit" class="btn btn-success btn-block btn-sm">Ingresar</button>
        </form>        
      </div>
    </div>
  </div>  
  <?php include 'footer.php';?>
</body>
</html>