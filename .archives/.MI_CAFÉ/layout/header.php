<?php
  $lorem1 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo. Quo sapiente beatae est distinctio expeditaquo quam id ipsam numquam.';
  $lorem2 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo.';
  $lorem3 = 'Lorem ipsum dolor sit amet? ';
  $lorem4 = 'Lorem ipsum dolor sit amet ';
  $lorem5 = 'Lorem ipsum dolor sit amet, consectetur adipiscing luctus. ';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/timepicker/jquery-ui-timepicker.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
      rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MI_CAFÉ</title>
  </head>
  <body class="home">
    <div id="siteLoader" class="site-loader">
      <div class="preloader-content">
        <img src="assets/images/loader1.html" alt="">
      </div>
    </div>
    <div id="page" class="full-page">
      <header id="masthead" class="site-header site-header-transparent">
        <!-- header html start -->
        <div class="top-header">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-4 d-none d-md-block">
                <div class="header-contact-info">
                  <a href="tel:+01977259912">
                    <i aria-hidden="true" class="icon icon-phone-call2"></i>
                    <div class="header-contact-details">
                      <span class="contact-label">Llamarnos:</span>
                      <span class="header-contact-no">+01 (123) 456789</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="site-identity">
                  <h1 class="site-title">
                    <a href="index.php">
                      <img src="assets/images/site-logo.png" alt="Logo">
                    </a>
                  </h1>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="offcanvas-icon text-right">
                  <a href="#">
                    <i aria-hidden="true" class="icon icon-burger-menu"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-header">
          <div class="container">
            <div class="bottom-header-inner d-flex justify-content-between align-items-center">
              <div class="bottom-header-icon justify-content-lg-end justify-content-between">
                <div class="header-social social-links">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.twitter.com/" target="_blank">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/" target="_blank">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="header-search-icon">
                  <button class="search-icon">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
              <div class="main-navigation">
                <nav id="navigation" class="navigation d-none d-lg-inline-block">
                  <ul>
                    <li class="current-menu-item">
                      <a href="index.php">Principal</a>
                    </li>
                    <li>
                      <a href="about.php">Nosotros</a>
                    </li>
                    <li>
                      <a href="our-menu.php">Menú</a>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="#">Paginas</a>
                      <ul>
                        <li>
                          <a href="main-course.php">Productos</a>
                        </li>
                        <li>
                          <a href="reservation.php">Reservación</a>
                        </li>
                        <li>
                          <a href="team.php">Nuestros Baristas</a>
                        </li>
                        <li>
                          <a href="service.php">Servicios</a>
                        </li>
                        <li class="menu-item-has-children">
                          <a href="#">Blog</a>
                          <ul>
                            <li><a href="blog-archive.php">Blog Lista</a></li>
                            <li><a href="blog-single.php">Blog Detalles</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="gallery.php">Galeria</a>
                        </li>
                        <li>
                          <a href="career.php">Contratación</a>
                        </li>
                        <li>
                          <a href="career-detail.php">C. Detalles</a>
                        </li>
                        <li>
                          <a href="faq.php">Preguntas</a>
                        </li>
                        <li>
                          <a href="testimonial-page.php">Testimonios</a>
                        </li>
                        <li>
                          <a href="search-page.php">Recetas</a>
                        </li>
                        <li>
                          <a href="single-page.php">Receta Detalles</a>
                        </li>
                        <li>
                          <a href="404.php">Error 404</a>
                        </li>
                        <li>
                          <a href="comming-soon.php">Comming Soon</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="#">Tienda</a>
                      <ul>
                        <li>
                          <a href="product-right.php">Tienda</a>
                        </li>
                        <li>
                          <a href="product-detail.php">Detalles Tienda</a>
                        </li>
                        <li>
                          <a href="product-cart.php">Carrito de compra</a>
                        </li>
                        <li>
                          <a href="product-checkout.php">Factura</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.php">Contactanos</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="header-btn d-inline-block">
                <a href="reservation.php" class="button-primary">Reservar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-menu-container"></div>
      </header>
