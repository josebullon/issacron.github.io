<?php
  $title = 'URANO';
  $lorem1 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo. Quo sapiente beatae est distinctio expeditaquo quam id ipsam numquam.';
  $lorem2 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo.';
  $lorem3 = 'Lorem ipsum dolor sit amet? ';
  $lorem4 = 'Lorem ipsum dolor sit amet';
  $correo = 'Urano@ejemplo.com';
  $telefono = '+123456789';
  $fecha  = 'OCT 2023';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="img/favicon.png" />
  <link rel="stylesheet" href="css/plugins.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-144098545-1');
  </script>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader-bg"></div>
  <div id="preloader">
    <div id="preloader-status">
      <div class="preloader-position loader"> <span></span> </div>
    </div>
  </div>
  <!-- Progress scroll totop -->
  <div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo -->
      <a class="logo" href="index.php"> <img src="img/logo-light.png" alt=""> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
          class="icon-bar"><i class="ti-line-double"></i></span> </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php" data-scroll-nav="0">Principal</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#services" data-scroll-nav="1">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#about" data-scroll-nav="2">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#portfolio" data-scroll-nav="3">Portafolio</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#pricing" data-scroll-nav="4">Precios</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#gallery" data-scroll-nav="5">Galeria</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#blog" data-scroll-nav="6">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#contact" data-scroll-nav="7">Contactame</a></li>
        </ul>
      </div>
    </div>
  </nav>
