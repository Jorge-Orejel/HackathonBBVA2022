<!doctype html>
<html class="no-js" lang="zxx">
<head><meta charset="gb18030">
	
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Calculadora Casa</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/hamburgers.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!--? Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="assets/img/logo/loder.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header>
		<!-- Header Start -->
            <?php include('include/menu.php');?>

		<!-- Header End -->
	</header>
	<main>
		<!--? Hero Start -->
		<div class="slider-area2">
			<div class="slider-height2 d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="hero-cap hero-cap2 pt-70">
								<h2>Registrar producto</h2>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
										<li class="breadcrumb-item"><a href="#">Registrar producto</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero End -->
		<!--? Start Sample Area -->
		<section class="sample-text-area">
			<div class="container box_1170">

			<?
       if(isset($_POST['enviar'])){ //ACCION AL DAR CLICK AL BOTON ENVIAR
 $nombre=$_POST["nombre"];
  $barcode=$_POST["barcode"];
  $type=$_POST["type"];
  $v=$_POST["v"];
  $hz=$_POST["hz"];
  $watts=$_POST["watts"];
  $model=$_POST["model"];
  $part_number=$_POST["part_number"];
  $photo=$_POST["photo"];
  $energy_guide=$_POST["energy_guide"];
  $description=$_POST["description"];
  echo '
  <div class="alert alert-success" role="alert">
      Se registro correctamente el producto
    </div>
  ';
  
    
    //INSERTAR DATOS DENTRO DE LA BASE DE DATOS
     //$sql="INSERT INTO `productos` (`name`, `barcode`, `type`) VALUES ('$nombre',' $barcode',' $type')";
    $sql="INSERT INTO `productos` (`name`, `barcode`, `type`, `v`, `hz`, `w`, `model`, `part_number`, `photo`, `energy_guide`, `description`, `active`) VALUES 
    ('$nombre',' $barcode',' $type','$v','$hz','$watts','$model','$part_number','$photo','$energy_guide','$description','1')";
$result=mysqli_query($conn,$sql);

}

?>






			<form action="" method="post" enctype="multipart/form-data"  align="center">
				<h1>Registra para ayudar al mundo</h1>
                 <label>Ingresa el nombre del producto: </label>
                 <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre(s)" required/>
                 <label>Ingresa el numero del codigo de barras:  </label>
                 <input type="text" class="form-control" name="barcode" id="apellido"  placeholder="12345BGA8" required/>
                 <label>Ingresa el tipo de producto:  </label>
                 <input type="text" class="form-control" name="type" id="apellido"  placeholder="12345BGA8" required/>
                 <label>Ingresa el numero del voltaje: </label>
                  <input type="number" class="form-control" name="v" placeholder="11.1V" required />
                 <label>Ingresa el numero de hz:</label>
                 <input type="number" class="form-control" name="hz" placeholder="60 hz" required />
                 <label>Ingresa el numero de w:</label>
                 <input type="number" class="form-control" name="watts" placeholder="90 w" required />
                 <label>Ingresa el modelo:</label>
                 <input type="text" class="form-control" name="model" placeholder="Ejemplo: Amazon" required />
                 <label>Ingresa el numero de parte:</label>
                 <input type="text" class="form-control" name="part_number" placeholder="Ejemplo: 321432" required />
                 <label>Sube una foto del producto:</label>
                 <input type="file" class="form-control" name="photo" required />
                 <label>Ingresa la guia de energia:</label>
                 <input type="text" class="form-control" name="energy_guide" placeholder="Ejemplo:" required />
                 <label>Ingresa la descripcion del producto:</label>
                 <input type="text" class="form-control" name="description" placeholder="Descripcion" required />
                 
					<br>
              <input type="submit" class="btn btn-success btn-lg btn-block" name="enviar" id="datos" value="enviar"> 

         </form>








			</div>
		</section>

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