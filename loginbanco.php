<?php
require_once('include/conexion.php');
session_start();
$errores        = $_SESSION['errores'];
$personalizada  = 0;
$intentos       = 2;
$completos      = "";
$mensaje        = "";
$sesioniniciada = false;

if(isset($_POST['login'])){

  $usuario        = $_POST['correo'];
  $problemavision = 0;

	if($errores>1){
        $necesario = 0;
        $sql       = "SELECT * FROM transacciones_clientes WHERE NU_CTE_COD LIKE '$usuario'";
        $result    = mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
              $IDss       = $mostrar['ID'];
              $afiliacion = $mostrar['NU_AFILIACION'];
              $sqla       = "SELECT CD_GIRO as giro FROM catalogo_giros WHERE NU_AFILIACION LIKE '$afiliacion'";
              $girocons   = mysqli_query($conexion,$sqla);
              $giroarray  = mysqli_fetch_array($girocons);
              $giro       = $giroarray['giro'];
              //$subgiro = $giroarray['giro'];
          
          
          if ($giro == "5976" || $giro == "8021" || $giro == "8031" || $giro == "8041" || $giro == "8042" || $giro == "8043" || $giro == "8049" || $giro == "8351" || $giro == "8011"){
              
              if($giro == "8042" || $giro == "8043"){
                  $problemavision = $problemavision + 1;
              }
              
              $sqla       = "SELECT NB_SUBGIRO as giro FROM catalogo_giros WHERE NU_AFILIACION LIKE '$afiliacion'";
              $girocons   = mysqli_query($conexion,$sqla);
              $giroarray  = mysqli_fetch_array($girocons);
              $giro       = $giroarray['giro'];
              $completos  = $completos + $giro;
              $mensaje   .= "$giro <br>";
              
              $necesario  = $necesario + 1;
          }
        
        
        }
        
        
      if ($necesario >= $intentos){
          $personalizada = 1;
          $mensaje .= "Se detectaron estas $necesario compras candidatas a atención preferencial\n";
          $mensaje .= "por lo que se le dará acceso a nuestro sistema de autenticacion previa <br>";
      }
      if($problemavision >= 2){
          $visiondeficiente = 1;
          $mensaje         .= "posible problema de vision detectado<br>";
      }
          
    }

    $clave    = $_POST['psw'];
    $sql      = "SELECT COUNT(*) as contar from clientes where NU_CTE_COD = '$usuario' and CD_POSTAL = '$clave' ";
    $consulta = mysqli_query($conexion,$sql);
    $array    = mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['username'] = $usuario;
        $_SESSION['errores']  = 0;
        header("location: personalizada/finalterno.php");
        
    } else {
                  $errores   = $errores + 1;
        $_SESSION['errores'] = $errores;
        
    }
}
//  $contrasena = password_hash(123, PASSWORD_DEFAULT);

?>
<!DOCTYPE html>
<html lang="es_MX">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagenes/huella_xoxoktli.png/">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
      html,
      body {
        height: 100%;
      }
      body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .code {
        font-family  : Consolas, 'courier new';
        font-size    : 13px;
      }
    </style>
  </head>
  <body class="text-center">
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-4"><p class="text-white bg-dark code"><?php echo $mensaje; ?></p></div>
      <div class="col-5">
        <form method="POST" action="" class="form-signin">
        <img src="huella_xoxoktli.png" class="img-fluid" alt="logo">
          <h1 class="h3 mb-3 font-weight-normal">Por favor inicia sesión</h1>
          <h4 class="h3 mb-3 font-weight-normal" id="estatus"></h4>
          <label for="inputEmail" class="sr-only">Usuario</label>
          <input type="text" id="inputEmail" name="correo" class="form-control" placeholder="Usuario" required autofocus>
          <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" id="inputPassword" name="psw" class="form-control" placeholder="Contraseña" required>
          <input type="hidden" name="accion_ini" value="1">
          <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Iniciar sesión</button>
          <?php if($personalizada==1){
              echo('<a title="Seleccionar"  href="personalizada/inicio.php?cliente='.$usuario.'"><img src="guar2.png" class="img-fluid" alt="personalizada" /></a>');
              if($visiondeficiente==1){
              echo('<audio src="personalizada/audio/desea.m4a" autoplay></audio>');
              }
          }?>
        </form>
        </div>
        <div class="col-3"></div>
      </div>
      <p class="text-muted">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Autenticación Previa. <i class="fa fa-heart" aria-hidden="true"></i></p>

    </div>
  </body>
</html>