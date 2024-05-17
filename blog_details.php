<?php
session_start();
?><!doctype html>
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
                 <h1 data-animation="bounceIn" data-delay="0.2s">Expectativas de la empresa</h1>
                 <!-- breadcrumb Start-->
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="blog.html">Blog</a></li> 
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
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
               </div>
               <div class="blog_details">
                  <h2 style="color: #2d2d2d;">El segundo, dividido de la forma, pez, bestia, 
                     hizo cada uno de los mares, todos nos reunieron diciendo que él era nuestro
                  </h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="#"><i class="fa fa-user"></i> Viajes, Estilo de Vida</a></li>
                     <li><a href="#"><i class="fa fa-comments"></i> 03 Comentarios</a></li>
                  </ul>
                  <p class="excert">
                     Los campos de entrenamiento de MCSE tienen partidarios y detractores. 
                     Algunas personas no entienden por qué es necesario gastar dinero en 
                     un campamento de entrenamiento cuando usted mismo puede obtener los 
                     materiales de estudio de MCSE a una fracción del precio del campamento. 
                     Sin embargo, ¿quién tiene la fuerza de voluntad?
                  </p>
                  <p>
                     Los campos de entrenamiento de MCSE tienen partidarios y detractores. 
                     Algunas personas no entienden por qué es necesario gastar dinero en 
                     un campamento de entrenamiento cuando usted mismo puede obtener los 
                     materiales de estudio de MCSE a una fracción del precio del campamento.
                      Sin embargo, ¿quién tiene la fuerza de voluntad para asistir a una 
                      capacitación MCSE autoimpuesta? ¿Quién tiene la fuerza de voluntad 
                      para realmente
                  </p>
                  <div class="quote-wrapper">
                     <div class="quotes">
                        Los campos de entrenamiento de MCSE tienen partidarios y detractores. Algunas personas no entienden por qué
                         Debería tener que gastar dinero en el campo de entrenamiento cuando puede obtener los materiales de estudio de MCSE usted mismo en
                         una fracción del precio del campamento. Sin embargo, ¿quién tiene la fuerza de voluntad para sentarse durante una
                         formación MCSE autoimpuesta.
                     </div>
                  </div>
                  <p>
                     Los campos de entrenamiento de MCSE tienen partidarios y detractores. Algunas personas no entienden por qué
                      Debería tener que gastar dinero en el campo de entrenamiento cuando puede obtener los materiales de estudio de MCSE usted mismo en un
                      fracción del precio del campamento. Sin embargo, ¿quién tiene la fuerza de voluntad?
                  </p>
                  <p>
                     Los campos de entrenamiento de MCSE tienen partidarios y detractores. Algunas personas no entienden por qué
                      Debería tener que gastar dinero en el campo de entrenamiento cuando puede obtener los materiales de estudio de MCSE usted mismo en un
                      fracción del precio del campamento. Sin embargo, ¿quién tiene la fuerza de voluntad para sentarse durante una
                      formación MCSE autoimpuesta. ¿Quién tiene la fuerza de voluntad para realmente
                  </p>
               </div>
            </div>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily y 4 le gusta esto</p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                     <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                  </div>
                  <ul class="social-icons">
                     <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                     <li><a href="#"><i class="fab fa-behance"></i></a></li>
                  </ul>
               </div>
               <div class="navigation-area">
                  <div class="row">
                     <div
                     class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                     <div class="thumb">
                        <a href="#">
                           <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                        </a>
                     </div>
                     <div class="arrow">
                        <a href="#">
                           <span class="lnr text-white ti-arrow-left"></span>
                        </a>
                     </div>
                     <div class="detials">
                        <p>Prev Post</p>
                        <a href="#">
                           <h4 style="color: #2d2d2d;">Espacio de la última frontera</h4>
                        </a>
                     </div>
                  </div>
                  <div
                  class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                  <div class="detials">
                     <p>Next Post</p>
                     <a href="#">
                        <h4 style="color: #2d2d2d;">Telescopio 101</h4>
                     </a>
                  </div>
                  <div class="arrow">
                     <a href="#">
                        <span class="lnr text-white ti-arrow-right"></span>
                     </a>
                  </div>
                  <div class="thumb">
                     <a href="#">
                        <img class="img-fluid" src="assets/img/post/next.png" alt="">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="blog-author">
         <div class="media align-items-center">
            <img src="assets/img/blog/author.png" alt="">
            <div class="media-body">
               <a href="#">
                  <h4>Harvard milan</h4>
               </a>
               <p>Segundo dividido de la forma de pez hecho por la bestia. Cada uno de los mares todos reunidos usan diciendo que eres, él
                  nuestro dominio dos Segundo dividido de</p>
            </div>
         </div>
      </div>
      <div class="comments-area">
         <h4>05 Comments</h4>
         <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
               <div class="user justify-content-between d-flex">
                  <div class="thumb">
                     <img src="assets/img/blog/comment_1.png" alt="">
                  </div>
                  <div class="desc">
                     <p class="comment">
                        Multiplicar mar noche hierba cuarto día mar regla menor abierto someter hembra llenar que ellos
                         Bendito, llena el porte menor, multiplica el mar, la noche, la hierba, el cuarto día, el mar menor.
                     </p>
                     <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                           <h5>
                              <a href="#">Emilly Blunt</a>
                           </h5>
                           <p class="date">Deciembre 04, 2017 a las 3:12 pm </p>
                        </div>
                        <div class="reply-btn">
                           <a href="#" class="btn-reply text-uppercase">responder</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
               <div class="user justify-content-between d-flex">
                  <div class="thumb">
                     <img src="assets/img/blog/comment_2.png" alt="">
                  </div>
                  <div class="desc">
                     <p class="comment">
                        Multiplicar mar noche hierba cuarto día mar regla menor abierto someter hembra llenar que ellos
                         Bendito, llena el porte menor, multiplica el mar, la noche, la hierba, el cuarto día, el mar menor.
                     </p>
                     <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                           <h5>
                              <a href="#">Camilo Smith</a>
                           </h5>
                           <p class="date">Deciembre 04, 2017 a las 3:12 pm </p>
                        </div>
                        <div class="reply-btn">
                           <a href="#" class="btn-reply text-uppercase">responder</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
               <div class="user justify-content-between d-flex">
                  <div class="thumb">
                     <img src="assets/img/blog/comment_3.png" alt="">
                  </div>
                  <div class="desc">
                     <p class="comment">
                        Multiplicar mar noche hierba cuarto día mar regla menor abierto someter hembra llenar que ellos
                         Bendito, llena el porte menor, multiplica el mar, la noche, la hierba, el cuarto día, el mar menor.
                     </p>
                     <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                           <h5>
                              <a href="#">Sam Blunt</a>
                           </h5>
                           <p class="date">Deciembre 04, 2017 a las 3:12 pm </p>
                        </div>
                        <div class="reply-btn">
                           <a href="#" class="btn-reply text-uppercase">responder</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="comment-form">
         <h4>Dejar una respuesta</h4>
         <form class="form-contact comment_form" action="#" id="commentForm">
            <div class="row">
               <div class="col-12">
                  <div class="form-group">
                     <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                     placeholder="Write Comment"></textarea>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                  </div>
               </div>
               <div class="col-12">
                  <div class="form-group">
                     <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <button type="submit" class="button button-contactForm btn_1 boxed-btn">Publicar comentario</button>
            </div>
         </form>
      </div>
   </div>
   <div class="col-lg-4">
      <div class="blog_right_sidebar">
         <aside class="single_sidebar_widget search_widget">
            <form action="#">
               <div class="form-group">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder='Search Keyword'
                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                     <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                     </div>
                  </div>
               </div>
               <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
               type="submit">Buscar</button>
            </form>
         </aside>
         <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Categorias</h4>
            <ul class="list cat-list">
               <li>
                  <a href="#" class="d-flex">
                     <p>Restaurantes</p>
                     <p>(37)</p>
                  </a>
               </li>
               <li>
                  <a href="#" class="d-flex">
                     <p>Noticias de viajes</p>
                     <p>(10)</p>
                  </a>
               </li>
               <li>
                  <a href="#" class="d-flex">
                     <p>Tenología moderna</p>
                     <p>(03)</p>
                  </a>
               </li>
               <li>
                  <a href="#" class="d-flex">
                     <p>Productos</p>
                     <p>(11)</p>
                  </a>
               </li>
               <li>
                  <a href="#" class="d-flex">
                     <p>Inspiración</p>
                     <p>(21)</p>
                  </a>
               </li>
               <li>
                  <a href="#" class="d-flex">
                     <p>Cuidado de salud</p>
                     <p>(21)</p>
                  </a>
               </li>
            </ul>
         </aside>
         <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title" style="color: #2d2d2d;">Recientemente publicado</h3>
            <div class="media post_item">
               <img src="assets/img/post/post_1.png" alt="post">
               <div class="media-body">
                  <a href="blog_details.html">
                     <h3 style="color: #2d2d2d;">De la vida eras pez...</h3>
                  </a>
                  <p>Enero 12, 2019</p>
               </div>
            </div>
            <div class="media post_item">
               <img src="assets/img/post/post_2.png" alt="post">
               <div class="media-body">
                  <a href="blog_details.html">
                     <h3 style="color: #2d2d2d;">El increible Hubble</h3>
                  </a>
                  <p>Hace 02 horas</p>
               </div>
            </div>
            <div class="media post_item">
               <img src="assets/img/post/post_3.png" alt="post">
               <div class="media-body">
                  <a href="blog_details.html">
                     <h3 style="color: #2d2d2d;">Astronomía ó Astrología</h3>
                  </a>
                  <p>Hace 03 horas</p>
               </div>
            </div>
            <div class="media post_item">
               <img src="assets/img/post/post_4.png" alt="post">
               <div class="media-body">
                  <a href="blog_details.html">
                     <h3 style="color: #2d2d2d;">Telescopio de asteroides</h3>
                  </a>
                  <p>Hace 01 hora</p>
               </div>
            </div>
         </aside>
         <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Nubes de etiquetas</h4>
            <ul class="list">
               <li>
                  <a href="#">projectos</a>
               </li>
               <li>
                  <a href="#">amor</a>
               </li>
               <li>
                  <a href="#">tecnología</a>
               </li>
               <li>
                  <a href="#">viajes</a>
               </li>
               <li>
                  <a href="#">restaurantes</a>
               </li>
               <li>
                  <a href="#">Estilos de vida</a>
               </li>
               <li>
                  <a href="#">diseño</a>
               </li>
               <li>
                  <a href="#">ilustraciones</a>
               </li>
            </ul>
         </aside>
         <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title" style="color: #2d2d2d;">Feeds de Instagram</h4>
            <ul class="instagram_row flex-wrap">
               <li>
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                  </a>
               </li>
            </ul>
         </aside>
         <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Boletin informativo</h4>
            <form action="#">
               <div class="form-group">
                  <input type="email" class="form-control" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
               </div>
               <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribirse</button>
            </form>
         </aside>
      </div>
   </div>
</div>
</div>
</section>
<!-- Blog Area End -->
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
              <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
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
<!-- footer-bottom area -->
<!-- Footer End-->
</div>
</footer> 
<!-- Scroll Up -->

<div id="back-top" >
   <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script>
   document.addEventListener("DOMContentLoaded", function() {
       // Realiza una solicitud AJAX para verificar si el usuario ha iniciado sesión
       fetch('check_session.php')
           .then(response => response.json())
           .then(data => {
               if (data.loggedIn) {
                   // Si el usuario ha iniciado sesión, oculta los botones de registro e inicio de sesión
                   var buttonsToHide = document.querySelectorAll('.button-header');
                   buttonsToHide.forEach(button => {
                       button.style.display = 'none';
                   });
               }
           })
           .catch(error => console.error('Error al verificar sesión:', error));
   });
</script>

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