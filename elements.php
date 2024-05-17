<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Cursos | Educación</title>
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
	<!-- Header Start -->
	<div class="header-area header-transparent">
		<div class="main-header ">
			<div class="header-bottom  header-sticky">
				<div class="container-fluid">
					<div class="row align-items-center">
						<!-- Logo -->
						<div class="col-xl-2 col-lg-2">
							<div class="logo">
								<a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                          <li><a href="#">Blog</a>
                                              <ul class="submenu">
                                                  <li><a href="blog.php">Blog</a></li>
                                                  <li><a href="blog_details.php">Detalle del blog</a></li>
                                                  <li><a href="elements.php">Elementos</a></li>
                                              </ul>
                                          </li>
                                          <li><a href="contact.php">Contactanos</a></li>
                                          <li><a href="pagos.php"><img src="images/icons.png"></a></li>
                                          <li><a href="#">Perfil</a>
                                            <ul class="submenu">
                                                
                                                <li><a href="perfil.php">Perfil</a></li>
                                                <li><a href="#"><img src="assets/img/menu/profile.png" width="30px">Editar perfil</a></li>
                                                <li><a href="#"><img src="assets/img/menu/setting.png" width="30px">Ajustes y privacidad</a></li>
                                                <li><a href="#"><img src="assets/img/menu/help.png" width="30px">Ayuda y soporte</a></li>
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
										</ul>
									</nav>
								</div>
							</div>
						</div> 
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
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
									<h1 data-animation="bounceIn" data-delay="0.2s">Elementos</h1>
									<!-- breadcrumb Start-->
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.html">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Elementos</a></li> 
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
		<!--? Start Sample Area -->
		<section class="sample-text-area">
			<div class="container box_1170">
				<h3 class="text-heading">Ejemplo de texto</h3>
				<p class="sample-text">
Todo cineasta independiente ávido tiene <b>negrita</b> al hacer ese documental de interés en <i>cursiva</i>,
o corto
película para mostrar su destreza creativa. Muchos tienen grandes ideas y quieren “sorprender”
la escena<sup>Superscript</sup>,
o video inquilinos con su gran proyecto. Pero una vez que tengas el <sub>Subíndice</sub> “en la lata” (no es fácil
hazaña), cómo
¿Pasas de un <del>Strike</del> a través de DVD maestros con el <u>“Subrayado”</u> marcado?
título escrito a mano
dentro de una caja de CD de segunda mano, hasta una pila de cajas de cartón llenas de DVD nuevos y brillantes, listos para la venta al por menor, con UPC
códigos de barras
y polietileno en la puerta de tu casa? Necesitas crear obras de arte llamativas y tener tu proyecto
replicado.
Utilizar una empresa acreditada de replicación de DVD de servicio completo como PacificDisc, Inc. para asociarse es
ciertamente un
opción útil para garantizar un resultado final profesional, pero para ayudarle con su proyecto de replicación de DVD, aquí
son 4 fáciles
Pasos a seguir para obtener buenos resultados de replicación de DVD:
					
				</p>
			</div>
		</section>
		<!-- End Sample Area -->
		<!--? Start Button -->
		<section class="button-area">
			<div class="container box_1170 border-top-generic">
				<h3 class="text-heading">Ejemplo de botones</h3>
				<div class="button-group-area">
					<a href="#" class="genric-btn default">Default</a>
					<a href="#" class="genric-btn primary">Primary</a>
					<a href="#" class="genric-btn success">Success</a>
					<a href="#" class="genric-btn info">Info</a>
					<a href="#" class="genric-btn warning">Warning</a>
					<a href="#" class="genric-btn danger">Danger</a>
					<a href="#" class="genric-btn link">Link</a>
					<a href="#" class="genric-btn disable">Disable</a>
				</div>
				<div class="button-group-area mt-10">
					<a href="#" class="genric-btn default-border">Default</a>
					<a href="#" class="genric-btn primary-border">Primary</a>
					<a href="#" class="genric-btn success-border">Success</a>
					<a href="#" class="genric-btn info-border">Info</a>
					<a href="#" class="genric-btn warning-border">Warning</a>
					<a href="#" class="genric-btn danger-border">Danger</a>
					<a href="#" class="genric-btn link-border">Link</a>
					<a href="#" class="genric-btn disable">Disable</a>
				</div>
				<div class="button-group-area mt-40">
					<a href="#" class="genric-btn default radius">Default</a>
					<a href="#" class="genric-btn primary radius">Primary</a>
					<a href="#" class="genric-btn success radius">Success</a>
					<a href="#" class="genric-btn info radius">Info</a>
					<a href="#" class="genric-btn warning radius">Warning</a>
					<a href="#" class="genric-btn danger radius">Danger</a>
					<a href="#" class="genric-btn link radius">Link</a>
					<a href="#" class="genric-btn disable radius">Disable</a>
				</div>
				<div class="button-group-area mt-10">
					<a href="#" class="genric-btn default-border radius">Default</a>
					<a href="#" class="genric-btn primary-border radius">Primary</a>
					<a href="#" class="genric-btn success-border radius">Success</a>
					<a href="#" class="genric-btn info-border radius">Info</a>
					<a href="#" class="genric-btn warning-border radius">Warning</a>
					<a href="#" class="genric-btn danger-border radius">Danger</a>
					<a href="#" class="genric-btn link-border radius">Link</a>
					<a href="#" class="genric-btn disable radius">Disable</a>
				</div>
				<div class="button-group-area mt-40">
					<a href="#" class="genric-btn default circle">Default</a>
					<a href="#" class="genric-btn primary circle">Primary</a>
					<a href="#" class="genric-btn success circle">Success</a>
					<a href="#" class="genric-btn info circle">Info</a>
					<a href="#" class="genric-btn warning circle">Warning</a>
					<a href="#" class="genric-btn danger circle">Danger</a>
					<a href="#" class="genric-btn link circle">Link</a>
					<a href="#" class="genric-btn disable circle">Disable</a>
				</div>
				<div class="button-group-area mt-10">
					<a href="#" class="genric-btn default-border circle">Default</a>
					<a href="#" class="genric-btn primary-border circle">Primary</a>
					<a href="#" class="genric-btn success-border circle">Success</a>
					<a href="#" class="genric-btn info-border circle">Info</a>
					<a href="#" class="genric-btn warning-border circle">Warning</a>
					<a href="#" class="genric-btn danger-border circle">Danger</a>
					<a href="#" class="genric-btn link-border circle">Link</a>
					<a href="#" class="genric-btn disable circle">Disable</a>
				</div>
				<div class="button-group-area mt-40">
					<a href="#" class="genric-btn default circle arrow">Default<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn primary circle arrow">Primary<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn success circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn info circle arrow">Info<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn warning circle arrow">Warning<span class="lnr lnr-arrow-right"></span></a>
					<a href="#" class="genric-btn danger circle arrow">Danger<span class="lnr lnr-arrow-right"></span></a>
				</div>
				<div class="button-group-area mt-10">
					<a href="#" class="genric-btn default-border circle arrow">Default<span
						class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn primary-border circle arrow">Primary<span
							class="lnr lnr-arrow-right"></span></a>
							<a href="#" class="genric-btn success-border circle arrow">Success<span
								class="lnr lnr-arrow-right"></span></a>
								<a href="#" class="genric-btn info-border circle arrow">Info<span
									class="lnr lnr-arrow-right"></span></a>
									<a href="#" class="genric-btn warning-border circle arrow">Warning<span
										class="lnr lnr-arrow-right"></span></a>
										<a href="#" class="genric-btn danger-border circle arrow">Danger<span
											class="lnr lnr-arrow-right"></span></a>
										</div>
										<div class="button-group-area mt-40">
											<a href="#" class="genric-btn primary e-large">Extra Large</a>
											<a href="#" class="genric-btn success large">Large</a>
											<a href="#" class="genric-btn primary">Default</a>
											<a href="#" class="genric-btn success medium">Medium</a>
											<a href="#" class="genric-btn primary small">Small</a>
										</div>
										<div class="button-group-area mt-10">
											<a href="#" class="genric-btn primary-border e-large">Extra Large</a>
											<a href="#" class="genric-btn success-border large">Large</a>
											<a href="#" class="genric-btn primary-border">Default</a>
											<a href="#" class="genric-btn success-border medium">Medium</a>
											<a href="#" class="genric-btn primary-border small">Small</a>
										</div>
									</div>
								</section>
								<!-- End Button -->
								<!--? Start Align Area -->
								<div class="whole-wrap">
									<div class="container box_1170">
										<div class="section-top-border">
											<h3 class="mb-30">Alineado izquierdo</h3>
											<div class="row">
												<div class="col-md-3">
													<img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
												</div>
												<div class="col-md-9 mt-sm-20">
													<p>Todo cineasta independiente ávido tiene <b>negrita</b> al hacer ese documental de interés en <i>cursiva</i>,
														o corto
														película para mostrar su destreza creativa. Muchos tienen grandes ideas y quieren “sorprender”
														la escena<sup>Superscript</sup>,
														o video inquilinos con su gran proyecto. Pero una vez que tengas el <sub>Subíndice</sub> “en la lata” (no es fácil
														hazaña), cómo
														¿Pasas de un <del>Strike</del> a través de DVD maestros con el <u>“Subrayado”</u> marcado?
														título escrito a mano
														dentro de una caja de CD de segunda mano, hasta una pila de cajas de cartón llenas de DVD nuevos y brillantes, listos para la venta al por menor, con UPC
														códigos de barras
														y polietileno en la puerta de tu casa? Necesitas crear obras de arte llamativas y tener tu proyecto
														replicado.
														Utilizar una empresa acreditada de replicación de DVD de servicio completo como PacificDisc, Inc. para asociarse es
														ciertamente un
														opción útil para garantizar un resultado final profesional, pero para ayudarle con su proyecto de replicación de DVD, aquí
														son 4 fáciles
														Pasos a seguir para obtener buenos resultados de replicación de DVD:</p>
												</div>
											</div>
										</div>
										<div class="section-top-border text-right">
											<h3 class="mb-30">Alinieado derecho</h3>
											<div class="row">
												<div class="col-md-9">
													<p class="text-right">Todo cineasta independiente ávido tiene <b>negrita</b> al hacer ese documental de interés en <i>cursiva</i>,
														o corto
														película para mostrar su destreza creativa. Muchos tienen grandes ideas y quieren “sorprender”
														la escena<sup>Superscript</sup>,
														o video inquilinos con su gran proyecto. Pero una vez que tengas el <sub>Subíndice</sub> “en la lata” (no es fácil
														hazaña), cómo
														¿Pasas de un <del>Strike</del> a través de DVD maestros con el <u>“Subrayado”</u> marcado?
														título escrito a mano
														dentro de una caja de CD de segunda mano, hasta una pila de cajas de cartón llenas de DVD nuevos y brillantes, listos para la venta al por menor, con UPC
														códigos de barras
														y polietileno en la puerta de tu casa? Necesitas crear obras de arte llamativas y tener tu proyecto
														replicado.
														Utilizar una empresa acreditada de replicación de DVD de servicio completo como PacificDisc, Inc. para asociarse es
														ciertamente un
														opción útil para garantizar un resultado final profesional, pero para ayudarle con su proyecto de replicación de DVD, aquí
														son 4 fáciles
														Pasos a seguir para obtener buenos resultados de replicación de DVD:</p>
													<p class="text-right">Antes de discutir todas las cosas que podrían estar afectando el rendimiento de su PC
														rendimiento, vamos
														hablar un poco sobre qué síntomas</p>
												</div>
												<div class="col-md-3">
													<img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
												</div>
											</div>
										</div>
										<div class="section-top-border">
											<h3 class="mb-30">Definición</h3>
											<div class="row">
												<div class="col-md-4">
													<div class="single-defination">
														<h4 class="mb-20">Definición 01</h4>
														<p>Recientemente, el gobierno federal de EE. UU. prohibió que los casinos en línea operen en Estados Unidos al
															haciendo que sea ilegal
															transferirles dinero a través de cualquier banco o sistema de pago de EE. UU. Como resultado de esta ley,
															la mayoría de los populares
															redes de casinos en línea</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-defination">
														<h4 class="mb-20">Definición 02</h4>
														<p>Recientemente, el gobierno federal de EE. UU. prohibió que los casinos en línea operen en Estados Unidos al
															haciendo que sea ilegal
															transferirles dinero a través de cualquier banco o sistema de pago de EE. UU. Como resultado de esta ley,
															la mayoría de los populares
															redes de casinos en línea</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-defination">
														<h4 class="mb-20">Definición 03</h4>
														<p>Recientemente, el gobierno federal de EE. UU. prohibió que los casinos en línea operen en Estados Unidos al
															haciendo que sea ilegal
															transferirles dinero a través de cualquier banco o sistema de pago de EE. UU. Como resultado de esta ley,
															la mayoría de los populares
															redes de casinos en línea</p>
													</div>
												</div>
											</div>
										</div>
										<div class="section-top-border">
											<h3 class="mb-30">Cotizaciones en bloque</h3>
											<div class="row">
												<div class="col-lg-12">
													<blockquote class="generic-blockquote">
“Recientemente, el gobierno federal de EE. UU. prohibió que los casinos en línea operen en Estados Unidos por
haciendo que sea ilegal
transferirles dinero a través de cualquier banco o sistema de pago de EE. UU. Como resultado de esta ley, la mayoría
de los populares
Las redes de casinos en línea como Party Gaming y PlayTech abandonaron los Estados Unidos. Durante la noche,
Casino online
Los jugadores se vieron perseguidos por el gobierno federal. Pero, después de quince días, el
Casino online
A la industria se le ocurrió una solución y nuevos casinos en línea comenzaron a echar raíces. Estos comenzaron a
operar bajo un
paraguas de negocios diferente, y al hacerlo, hizo que la transferencia de dinero hacia y desde
ellos legales. La mayor
parte de esto fue reclutar sistemas de banca electrónica que aceptaran este nuevo
aclaración y empezar a hacer
negocios conmigo. En este artículo figuran la banca electrónica”
													</blockquote>
												</div>
											</div>
										</div>
										<div class="section-top-border">
											<h3 class="mb-30">Table</h3>
											<div class="progress-table-wrap">
												<div class="progress-table">
													<div class="table-head">
														<div class="serial">#</div>
														<div class="country">Paises</div>
														<div class="visit">Visitas</div>
														<div class="percentage">Porcentajes</div>
													</div>
													<div class="table-row">
														<div class="serial">01</div>
														<div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-1" role="progressbar" style="width: 80%"
																aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">02</div>
														<div class="country"> <img src="assets/img/elements/f2.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-2" role="progressbar" style="width: 30%"
																aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">03</div>
														<div class="country"> <img src="assets/img/elements/f3.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-3" role="progressbar" style="width: 55%"
																aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">04</div>
														<div class="country"> <img src="assets/img/elements/f4.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-4" role="progressbar" style="width: 60%"
																aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">05</div>
														<div class="country"> <img src="assets/img/elements/f5.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-5" role="progressbar" style="width: 40%"
																aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">06</div>
														<div class="country"> <img src="assets/img/elements/f6.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-6" role="progressbar" style="width: 70%"
																aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">07</div>
														<div class="country"> <img src="assets/img/elements/f7.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-7" role="progressbar" style="width: 30%"
																aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
													<div class="table-row">
														<div class="serial">08</div>
														<div class="country"> <img src="assets/img/elements/f8.jpg" alt="flag">Canada</div>
														<div class="visit">645032</div>
														<div class="percentage">
															<div class="progress">
																<div class="progress-bar color-8" role="progressbar" style="width: 60%"
																aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="section-top-border">
											<h3>Image Gallery</h3>
											<div class="row gallery-item">
												<div class="col-md-4">
													<a href="assets/img/elements/g1.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g1.jpg);"></div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="assets/img/elements/g2.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g2.jpg);"></div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="assets/img/elements/g3.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g3.jpg);"></div>
													</a>
												</div>
												<div class="col-md-6">
													<a href="assets/img/elements/g4.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
													</a>
												</div>
												<div class="col-md-6">
													<a href="assets/img/elements/g5.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g5.jpg);"></div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="assets/img/elements/g6.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g6.jpg);"></div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="assets/img/elements/g7.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g7.jpg);"></div>
													</a>
												</div>
												<div class="col-md-4">
													<a href="assets/img/elements/g8.jpg" class="img-pop-up">
														<div class="single-gallery-image" style="background: url(assets/img/elements/g8.jpg);"></div>
													</a>
												</div>
											</div>
										</div>
										<div class="section-top-border">
											<div class="row">
												<div class="col-md-4">
													<h3 class="mb-20">Galeria de imagenes</h3>
													<div class="typography">
														<h1>Este es el encabezado 01</h1>
														<h2>Este es el encabezado 02</h2>
														<h3>Este es el encabezado 03</h3>
														<h4>Este es el encabezado 04</h4>
														<h5>Este es el encabezado</h5>
														<h6>Este es el encabezado</h6>
													</div>
												</div>
												<div class="col-md-4 mt-sm-30">
													<h3 class="mb-20">Lista desordenada</h3>
													<div class="">
														<ul class="unordered-list">
															<li>Claves FTA</li>
															<li>Sólo para mujeres El uso de su computadora</li>
															<li>Hechos por los que la impresión por inyección de tinta es tan atractiva
																<ul>
																	<li>Adicción cuando se convierte en juego
																		<ul>
																			<li>Mantenimiento preventivo protector</li>
																		</ul>
																	</li>
																</ul>
															</li>
															<li>Tratar con soporte técnico 10 consejos útiles</li>
															<li>Haz de Myspace tu espacio mejor diseñado</li>
															<li>Limpiar y organizar su computadora</li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 mt-sm-30">
													<h3 class="mb-20">Lista ordenada</h3>
													<div class="">
														<ol class="ordered-list">
															<li>Claves FTA</li>
															<li>Sólo para mujeres El uso de su computadora</li>
															<li>Hechos por los que la impresión por inyección de tinta es tan atractiva
																<ol class="ordered-list-alpha">
																	<li><span>Adicción cuando se convierte en juego</span>
																		<ol class="ordered-list-roman">
																			<li><span>Mantenimiento preventivo protector</span></li>
																		</ol>
																	</li>
																</ol>
															</li>
															<li>Tratar con soporte técnico 10 consejos útiles</li>
															<li>Haz de Myspace tu espacio mejor diseñado</li>
															<li>Limpiar y organizar su computadora</li>
														</ol>
													</div>
												</div>
											</div>
										</div>
										<div class="section-top-border">
											<div class="row">
												<div class="col-lg-8 col-md-8">
													<h3 class="mb-30">Elemento de formulario</h3>
													<form action="#">
														<div class="mt-10">
															<input type="text" name="first_name" placeholder="First Name"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
															class="single-input">
														</div>
														<div class="mt-10">
															<input type="text" name="last_name" placeholder="Last Name"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
															class="single-input">
														</div>
														<div class="mt-10">
															<input type="text" name="last_name" placeholder="Last Name"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
															class="single-input">
														</div>
														<div class="mt-10">
															<input type="email" name="EMAIL" placeholder="Email address"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
															class="single-input">
														</div>
														<div class="input-group-icon mt-10">
															<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
															<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
															onblur="this.placeholder = 'Address'" required class="single-input">
														</div>
														<div class="input-group-icon mt-10">
															<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
															<div class="form-select" id="default-select">
																<select>
																	<option value=" 1">Ciudad</option>
																	<option value="1">Dhaka</option>
																	<option value="1">Dilli</option>
																	<option value="1">Newyork</option>
																	<option value="1">Islamabad</option>
																</select>
															</div>
														</div>
														<div class="input-group-icon mt-10">
															<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
															<div class="form-select" id="default-select">
																<select>
																	<option value=" 1">Pais</option>
																	<option value="1">Bangladesh</option>
																	<option value="1">India</option>
																	<option value="1">England</option>
																	<option value="1">Srilanka</option>
																</select>
															</div>
														</div>
														
														<div class="mt-10">
															<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
															onblur="this.placeholder = 'Message'" required></textarea>
														</div>
														<div class="mt-10">
															<input type="text" name="first_name" placeholder="Primary color"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
															class="single-input-primary">
														</div>
														<div class="mt-10">
															<input type="text" name="first_name" placeholder="Accent color"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
															class="single-input-accent">
														</div>
														<div class="mt-10">
															<input type="text" name="first_name" placeholder="Secondary color"
															onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
															required class="single-input-secondary">
														</div>
													</form>
												</div>
												<div class="col-lg-3 col-md-4 mt-sm-30">
													<div class="single-element-widget">
														<h3 class="mb-30">Interruptores</h3>
														<div class="switch-wrap d-flex justify-content-between">
															<p>01. Interruptor de ejemplo</p>
															<div class="primary-switch">
																<input type="checkbox" id="default-switch">
																<label for="default-switch"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>02. Cambio de color primario</p>
															<div class="primary-switch">
																<input type="checkbox" id="primary-switch" checked>
																<label for="primary-switch"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>03. Confirmar cambio de color</p>
															<div class="confirm-switch">
																<input type="checkbox" id="confirm-switch" checked>
																<label for="confirm-switch"></label>
															</div>
														</div>
													</div>
													<div class="single-element-widget mt-30">
														<h3 class="mb-30">Cuadros de selección</h3>
														<div class="default-select" id="default-select"">
															<select>
																<option value=" 1">Inglés</option>
																<option value="1">Español</option>
																<option value="1">Árabe</option>
																<option value="1">Portugues</option>
																<option value="1">Bengali</option>
															</select>
														</div>
													</div>
													<div class="single-element-widget mt-30">
														<h3 class="mb-30">Casillas de verificación</h3>
														<div class="switch-wrap d-flex justify-content-between">
															<p>01. Ejemplo de casillas de verificación</p>
															<div class="primary-checkbox">
																<input type="checkbox" id="default-checkbox">
																<label for="default-checkbox"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>02. Casilla de verificación de color primario</p>
															<div class="primary-checkbox">
																<input type="checkbox" id="primary-checkbox" checked>
																<label for="primary-checkbox"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>03. Confirmar casilla de verificación de color</p>
															<div class="confirm-checkbox">
																<input type="checkbox" id="confirm-checkbox">
																<label for="confirm-checkbox"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>04. Casilla de verificación deshabilitada</p>
															<div class="disabled-checkbox">
																<input type="checkbox" id="disabled-checkbox" disabled>
																<label for="disabled-checkbox"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>05. Desactivado Casilla de verificación activa</p>
															<div class="disabled-checkbox">
																<input type="checkbox" id="disabled-checkbox-active" checked disabled>
																<label for="disabled-checkbox-active"></label>
															</div>
														</div>
													</div>
													<div class="single-element-widget mt-30">
														<h3 class="mb-30">Radios</h3>
														<div class="switch-wrap d-flex justify-content-between">
															<p>01. Ejemplo de radios</p>
															<div class="primary-radio">
																<input type="checkbox" id="default-radio">
																<label for="default-radio"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>02. Radio de color primario</p>
															<div class="primary-radio">
																<input type="checkbox" id="primary-radio" checked>
																<label for="primary-radio"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>03. Confirmar radio en color</p>
															<div class="confirm-radio">
																<input type="checkbox" id="confirm-radio" checked>
																<label for="confirm-radio"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>04. Radio discapacitada</p>
															<div class="disabled-radio">
																<input type="checkbox" id="disabled-radio" disabled>
																<label for="disabled-radio"></label>
															</div>
														</div>
														<div class="switch-wrap d-flex justify-content-between">
															<p>05. Radio deshabilitada activa</p>
															<div class="disabled-radio">
																<input type="checkbox" id="disabled-radio-active" checked disabled>
																<label for="disabled-radio-active"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Align Area -->
							</main>
							<footer>
								<div class="footer-wrappper footer-bg">
									<!-- Footer Start-->
									<div class="footer-area footer-padding">
										<div class="container">
											<div class="row justify-content-between">
												<div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
													<div class="single-footer-caption mb-50">
														<div class="single-footer-caption mb-30">
															<!-- logo -->
															<div class="footer-logo mb-25">
																<a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
															</div>
															<div class="footer-tittle">
																<div class="footer-pera">
																	<p>Disfruta</p>
																</div>
															</div>
															<!-- social -->
															<div class="footer-social">
																<a href="#"><i class="fab fa-twitter"></i></a>
																<a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
																<a href="#"><i class="fab fa-pinterest-p"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
													<div class="single-footer-caption mb-50">
														<div class="footer-tittle">
															<h4>Soporte</h4>
                                <ul>
                                    <li><a href="contact.html">Contactanos= Línea telefónica ó Correo eletrónico</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Compañia</h4>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</footer> 
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