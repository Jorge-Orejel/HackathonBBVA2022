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
								<h2>Calculadora inteligente</h2>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
										<li class="breadcrumb-item"><a href="#">Calculadora inteligente</a></li>
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
                <div class="loader" style="display:none"></div>
				<div class="co2Form">
					<h1 align="center" class="mb-4">Toda tu huella verde en un escaneo</h1>
					<p class="sample-text mb-5" align="center">
					</p>
                    <p class="h5" align="center">Sube cualquier foto de un electrodom&eacute;stico a la plataforma.</p>
                    <small class="mb-4 d-flex justify-content-center" align="center">Por ejemplo, una impresora</small>
					<form id="formCalcuEmi" class="formCalcuEmi" novalidate method="post" align="center">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                        </div>

                        
                        <buttom class="genric-btn success  circle my-4" onclick="analizarImagen()">Analizar</buttom>
					</form>
				</div>
				<div class="formResultado" style="display:none" align="center">
					<h1 class="display-2">Se detecto una impresora</h1>
					<div class="result1"></div>
                    <p>Tipo de producto: Impresora hp</p>
                    <p>Consumo de energía: <b>1300 watts</b> en impresión - 2.7 en suspensión acorde con los datos de nuestra wiki verde.</p>
                    
                    <div class="alert alert-danger" role="alert">
                        <p>Vemos que el consumo de energía de tu impresora es muy alto, te recomendamos ver los siguientes productos que te ayudarán a disminuir tu huella verde.
                        </p>
                        <a href="wikiverde.php#wikiVerdes" class="genric-btn success  circle my-1">Disminuye tu huella verde</a>
                    </div>



                </div>

<style>
	.gasHover:hover {
		opacity: 0.4;
    }
    .loader,
    .loader:before,
    .loader:after {
    background: #007bff;
    -webkit-animation: load1 1s infinite ease-in-out;
    animation: load1 1s infinite ease-in-out;
    width: 1em;
    height: 4em;
    }
    .loader {
    color: #007bff;
    text-indent: -9999em;
    margin: 88px auto;
    position: relative;
    font-size: 11px;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
    }
    .loader:before,
    .loader:after {
    position: absolute;
    top: 0;
    content: '';
    }
    .loader:before {
    left: -1.5em;
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
    }
    .loader:after {
    left: 1.5em;
    }
    @-webkit-keyframes load1 {
    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 4em;
    }
    40% {
        box-shadow: 0 -2em;
        height: 5em;
    }
    }
    @keyframes load1 {
    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 4em;
    }
    40% {
        box-shadow: 0 -2em;
        height: 5em;
    }
    }
</style>

<script type="text/javascript">
    function analizarImagen(){
        $('.co2Form').hide()
        $('.loader').toggle()
        setTimeout(
            function resultAnalisis(){
                $('.loader').toggle()
                $('.formResultado').show()
            }
        , 3000);
    }

	function nuevoCalculo(){
		$('.co2Form').show()
		$('.formResultado').hide()	
		$('.formGasLPcilindro').hide()
		$('.formGasLPtanque').hide()
		$('.formGasNatural').hide()
		$('.formGenera').hide()
		


	}
    function calculoEmision(){
      var forms = document.getElementsByClassName('formCalcuEmi');
      var validation = Array.prototype.filter.call(forms, function(form) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }else{
        var para= new FormData($("#formCalcuEmi")[0]);
        $.ajax({
          url: 'assets/ajax/calculadora.php?calculoEmision=calculoEmision',
          type: 'POST',
          data: para,
          dataType:"json",
          contentType: false,
          processData: false,
          cache: false,
        }).done(function(data) {
          //if (data.estatus===1) {
			$("#formCalcuEmi")[0].reset();
			$('.co2Form').hide()
			$('.formResultado').show()
			$('.result1').html(data.result1)
			$('.result2').html(data.result2)
			$('.result3').html(data.result3)
          //}
        }).fail(function(jqXHR, textStatus, errorThrown) {
          console.log("error"+jqXHR.responseText);
        });
      }
      form.classList.add('was-validated');
      });
    }



	function tipoGas(value){
      if(value===1){
		$('.formGasLPcilindro').toggle();
		$('.formGasLPtanque').hide();
		$('.formGasNatural').hide();
		$('.formGenera').show();
		$('#GasLPcilindro').val('');
		$('#GasLPtanque').val('');
		$('#GasNatural').val('');
		$('#kw').val('');
      }
      if(value===2){
		$('.formGasLPtanque').toggle();
		$('.formGasLPcilindro').hide();
		$('.formGasNatural').hide();
		$('.formGenera').show();
		$('#GasLPcilindro').val('');
		$('#GasLPtanque').val('');
		$('#GasNatural').val('');
		$('#kw').val('');
	  }
	  if(value===3){
		$('.formGasNatural').toggle();
		$('.formGasLPtanque').hide();
		$('.formGasLPcilindro').hide();
		$('.formGenera').show();
		$('#GasLPcilindro').val('');
		$('#GasLPtanque').val('');
		$('#GasNatural').val('');
		$('#kw').val('');
      }
	}
</script>
















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