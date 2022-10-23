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
  $adultomayor = 0;

	if($errores>1){
        $necesario = 0;
        $sql       = "SELECT * FROM transacciones_clientes WHERE NU_CTE_COD LIKE '$usuario'";
        $result    = mysqli_query($conexion,$sql);
        $edadsql="SELECT edad as edad FROM clientes WHERE NU_CTE_COD LIKE '$usuario'";
        $edadconsult = mysqli_query($conexion,$edadsql);
        $edadarray = mysqli_fetch_array($edadconsult);
        $edad = $edadarray['edad'];
        if($edad > 69){
                $necesario  = $necesario + 3; 
                $adultomayor = 1;
            }
            
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
               if($giro == "5976"){
                  $problemaorto = $problemaorto + 1;
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
          $mensaje         .= "Posible problema de vision detectado<br>";
      }
      if($problemaorto >= 2){
          $movideficiente = 1;
          $mensaje         .= "Posible problema ortopedico (movilidad) detectado<br>";
      }
      if($adultomayor == 1){
          $visiondeficiente = 1;
          $mensaje         .= "Adulto mayor detectado<br>";
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
    <title>Hackathon BBVA 2022 - Reto Autenticaci&oacute;n - Autenticaci&oacute;n Previa - Prototipo</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>

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
  <header>
        <!-- Header Start -->
            <?php include('include/menu.php');?>
        <!-- Header End -->
    </header>
    <main>
    <br><br>
     <a href="https://scribehow.com/shared/Autenticacion_Previa__AJhd8RUNSh-ALCemh6ZhNw" class="btn btn-secondary " target="_blank"> ->> Instructivo para usar el Prototipo <<-- </a>
    <br><br><br><br><br><br>
    <div class="row justify-content-center">
      <div class="col-4"><p class="text-white bg-dark code"><?php echo $mensaje; ?></p></div>
          <div class="col-5">
              <form method="POST" action="" class="form-signin">
              <img src="huella_xoxoktli.png" class="img-fluid" alt="logo">
              <br><br>
                <h1 class="h3 mb-3 font-weight-normal">Por favor inicia sesión</h1>
                <br>
                <h4 class="h3 mb-3 font-weight-normal" id="estatus"></h4>
                <label for="inputEmail" class="sr-only">Usuario</label>
                <input type="text" id="inputEmail" name="correo" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="inputPassword" name="psw" class="form-control" placeholder="Contraseña" required>
                <input type="hidden" name="accion_ini" value="1">
                <br><br>
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
      <br><br><br><br><br><br>


     </main> 
      <?php include('include/footer.php');?>


  
       <!-- Scroll Up -->
       <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>