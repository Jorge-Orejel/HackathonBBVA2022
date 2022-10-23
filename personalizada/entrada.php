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
    .col22 {
      text-align: center;
    }
    .col-example {
      margin-bottom: 30px;
      padding-top: 15px;
      padding-bottom: 15px;
      background: var(--secondary);
      color: var(--secondary-inverse);
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
<center>
<div class="container">
    <div class="col-6">
<br>
<h1>Retiro de efectivo por código</h1>
<br><br>
<form action="fin.php?cliente=<?=$cliente?>" method="POST">
<div class="col-5">
<input type="numeric" class="form-control form-control-lg" name="dinero" placeholder="¿Cuanto dinero desea retirar?">
</div>
<br><br>
<br><br>
<button class="btn btn-primary" type="sumbit">Enviar</button>
</form>
<br>
<audio src="audio/efectivo.m4a" autoplay></audio>
  </div>
  </div>
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