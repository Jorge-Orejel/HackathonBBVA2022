<?php
$cliente= $_GET['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
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

    </head>
    <body>
    <header>
        <!-- Header Start -->
            <?php include('../include/menu.php');?>
        <!-- Header End -->
    </header>
    <main>
<main>
    <center>
        <div class="container">
                    <br>
        <h3>Bienvenido a la <br> atención preferencial <br> Selecciona tu opción preferida</h3>
    <table class="table table">
    <tr>
        <td><a title="Asistente virtual por voz"  href="voz.php?cliente=<?=$cliente?>"><img src="img/virtual.jpg" alt="voz" /></a><center>Asistente virtual por voz</center>
            </td>
        <td><a title="Reconocimiento facial"  href="reconocimiento.php"><img src="img/reconocimiento.jpg" alt="facial" /></a><center>Reconocimiento facial</center>
        </td>
    </tr>
    <tr>
        
        <td><a title="ispositivo de autenticación"  href="dispositivo.php"><img src="img/watch.jpg" alt="watch" /></a><center>Dispositivo de autenticación</center>
        </td>
        <td><a title="Código QR"  href="qr.php"><img src="img/qr.jpg" alt="qr" /></a><center>Código QR</center>
        </td>
    </tr>
    </table>
    <audio src="audio/entrada.m4a" autoplay></audio>  

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