<?php
$cliente = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head›
‹meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">
<title>Entrada</title>
    <link rel="stylesheet" href="pico-bootstrap-grid.min.css">
    <meta charset="UTF-8">
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
<center>
<div class="container">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
<br>
<h3>Felicidades <?php $cliente ?>, lograste entrar con usuario y contraseña.</h3>
<h4>Pero de eso no se trata el proyecto, intenta de otra forma.</h4>

<br>
  </div>
  </div>
</center>
</body>
</html>