<?php
  $titulo = 'Europa';
  $lorem0 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo.';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $titulo; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- css -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/color.css" />
    <link rel="stylesheet" href="css/yourstyle.css" />
    <link rel="stylesheet" href="css/style-main.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sarpanch:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <script src="js/jquery-3.3.1.min.js"></script>

    <style>
      .hero-slider-holder-bg{
        background: rgba(0, 0, 0, 0.842);
        border-radius: 9px;
      }
      .btn-br{
        border-radius: 18px
      }
      /* .p-text-align{
        text-align: justify;
        font-family: 'Noto Sans', sans-serif;
        font-size: 16px;
        font-style: italic;
        color: #494949;
        width: 100%;
      } */
    </style>
  </head>
  <body>
    <!-- loader inicio -->
    <div class="loader-holder">
      <div class="loader-inner loader-vis">
        <div class="loader"></div>
      </div>
    </div>
    <!-- loader fin -->
    <!-- main inicio -->
    <div id="main">
      <header class="main-header">
        <!-- Bloqueo -->
        <script>
          document.onkeydown = function (e) {
            if (
              e.ctrlKey &&
              (e.keyCode === 80 || e.keyCode === 83 || e.keyCode === 85)
            ) {
              return false
            }
            if (e.ctrlKey && e.shiftKey && e.which === 73) {
              e.preventDefault()
            } else {
              return true
            }
          }
        </script>
        <!-- Bloqueo -->
        <a href="index.php" class="logo-holder">
          <img src="images/favicon.ico" alt="logo" />
        </a>
        <div class="nav-button" id="open-button">
          <span class="menu-global menu-top"></span>
          <span class="menu-global menu-middle"></span>
          <span class="menu-global menu-bottom"></span>
        </div>
        <div class="show-share isShare">
          <img src="./images/share.png" alt="logo" />
        </div>
      </header>
      <div class="menu-wrap">
        <div class="menu-inner">
          <!-- menu logo inicio -->
          <a href="index.php" class="menu-logo">
            <img src="images/favicon.ico" alt="" />
          </a>
          <!-- menu logo fin -->
          <div class="hid-men-wrap alt">
            <div id="hid-men">
              <ul class="menu">
                <li><a href="index.php">Principal</a></li>
                <li><a href="index.php#sec2">Nosotros</a></li>
                <li><a href="index.php#sec4">Servicios</a></li>
                <li><a href="index.php#sec5">Habilidades</a></li>
                <li><a href="portafolio.php">Portafolio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contactanos</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
            <path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z" />
          </svg>
        </div>
      </div>
