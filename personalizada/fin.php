<?php
$cliente= $_GET['cliente'];
?>
<!DOCTYPE html>
<html lang="en">
<head›
‹meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">
<title>Hackathon BBVA 2022 - Reto Autenticación - Retiro en efectivo</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
            body {
        background-color: #fff;
        color: #000;
      }
    .col22 {
      text-align: center;
    }
    .col-example {
      margin-bottom: 30px;
      padding-top: 15px;
      padding-bottom: 15px;
      text-align: center;
    }
    </style>
</head›
‹body>
<header>
        <!-- Header Start -->
            <?php include('../include/menu.php');?>
        <!-- Header End -->
    </header>
    <main>
<main>
<center>
        <div class="col-6">
                <br>
                <?php $dinero = $_POST['dinero']; ?>
                <h1>¡Su retiro de efectivo está listo!<br> <br> 
                Usted va a retirar $<?php echo number_format($dinero,2) ?> </h1><br> 
                <h3>Ahora solo tiene que ir a su sucursal favorita y decir este código.</h3><br>
                <h1>2123 2929 113</h1>

                <h5> 
                <br>
                <?php
                        //Agregamos la libreria para genera códigos QR
                        require "../qr/phpqrcode/qrlib.php";    
                        
                        //Declaramos una carpeta temporal para guardar la imagenes generadas
                        $dir = 'temp/';
                        
                        //Si no existe la carpeta la creamos
                        if (!file_exists($dir))
                        mkdir($dir);
                        
                        //Declaramos la ruta y nombre del archivo a generar
                        
                        $filename = $dir.'bbva.png';

                        //Parametros de Condiguración
                        
                        $tamaño = 8; //Tamaño de Pixel
                        $level = 'H'; //Precisión Baja
                        $framSize = 1; //Tamaño en blanco
                        $contenido = "https://mototli.com/hackathonBBVA2022/autenticacion.php?cliente=$cliente&transaccion=retiro&importe=$dinero"; //Texto
                        
                        //Enviamos los parametros a la Función para generar código QR 
                        QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
                        
                        //Mostramos la imagen generada
                        echo '<img width="400px" src="'.$dir.basename($filename).'" /><hr/>'; 
                ?> </h5>
                <a class="btn btn-primary" href="https://mototli.com/hackathonBBVA2022/autenticacionprevia/" target="_parent">Finalizar</a>
                </form>
                <audio src="audio/fin.m4a" autoplay></audio>
                <br><br><br><br><br><br>
        </div>
</center>
</main>
            <?php include('../include/footer.php');?>

      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>