<!--Ya hice commit-->
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Cursos | Educación</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<!--Ya hice commit-->
		<!-- CSS here -->
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
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="header-area header-transparent">
                    <div class="main-header ">
                        <div class="header-bottom  header-sticky">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <!-- Logo -->
                                    <div class="col-xl-2 col-lg-2">
                                        <div class="logo">
                                            <a href="index.html"><img src="assets/img/logo/logoclass.png" width="150px"></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10">
                                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                            <!-- Main-menu -->
                                            <div class="main-menu d-none d-lg-block">
                                                <nav>
                                                    <ul id="navigation">                                                                                          
                                                    <li class="active" ><a href="index.php">Home</a></li>
                                        <li><a href="courses.php">Cursos</a></li>
                                          <li><a href="about.php">Acerca</a></li>
                                          <li><a href="contact.php">Contactanos</a></li>
                                          <li><a href="pagos.php"><img src="images/icons.png"></a></li>
                                          <li><a href="#">Perfil</a>
                                            <ul class="submenu">
                                                
                                                <li><a href="perfil.php">Perfil</a></li>
                                                <li><a href="#"><img src="assets/img/menu/profile.png" width="30px">Editar perfil</a></li>
                                                <li><a href="php/cerrarSesion.php"><img src="assets/img/menu/logout.png" width="30px">Salir</a></li>
				
															</ul>
														</li>
														  <!-- Button -->
														  <?php
                                          if (!isset($_SESSION['user'])) {
                                            ?>
                                          <li class="button-header margin-left "><a href="register.html" class="btn">únete</a></li>
                                          <li class="button-header"><a href="login.html" class="btn btn3">Iniciar sesión</a></li>
                                          <?php
                                                }
                                                ?>    
                                                </nav>
                                            </div>
                                        </div>
                                    </div> 
				
		</nav>
		<!-- End Header/Navigation -->
        <main>
			<!--? slider Area Start-->
			<section class="slider-area slider-area2">
				<div class="slider-active">
					<!-- Single Slider -->
					<div class="single-slider slider-height2">
						<div class="container">
							<div class="row">
								<div class="col-xl-8 col-lg-11 col-md-12">
									<div class="hero__caption hero__caption2">
										<h1 data-animation="bounceIn" data-delay="0.2s">Nuestros Cursos</h1>
										<!-- breadcrumb Start-->
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.php">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Servicios</a></li> 
											</ol><br>
										</nav>
										<!-- breadcrumb End -->
									</div>
								</div>
							</div>
						</div>          
					</div>
				</div>
			</section>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1></h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center pt-5">
          <span class="display-3 thankyou-icon text-primary">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check mb-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
          </span>
          <h2 class="display-3 text-black">¡GRACIAS POR TU COMPRA!</h2>
          <p class="lead mb-5">Tu orden fue completada con éxito</p>
          <p><a href="courses.html" class="btn btn-sm btn-outline-black">Volver a comprar</a></p>
        </div>
      </div>
    </div>
  </div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						
						</div>


					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
