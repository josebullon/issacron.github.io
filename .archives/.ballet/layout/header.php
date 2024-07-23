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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <a class="logo" href="index.php"> <img src="img/logo.png" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-menu"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link <?php echo $principal; ?>" href="index.php">Principal</a></li>
            <li class="nav-item"><a class="nav-link <?php echo $nosotros; ?>" href="about.php">Nosotros</a></li>
            <li class="nav-item"><a class="nav-link <?php echo $servicios; ?>" href="services.php">Servicios</a></li>
            <li class="nav-item"><a class="nav-link <?php echo $faq; ?>" href="faqs.php">Preguntas</a></li>
            <li class="nav-item"><a class="nav-link <?php echo $galeria; ?>" href="gallery.php">Galeria</a></li>
            <!-- Dropdown Menu example
            <li class="nav-item dropdown"> <span class="nav-link"> Dropdown <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    <li class="dropdown-item"><a href="#">Dropdown 2</a></li>
                    <li class="dropdown-item"><a href="#">Dropdown 2</a></li>
                    <li class="dropdown-item"><span>Dropdown 2 <i class="ti-angle-right"></i></span>
                        <ul class="sub-menu last">
                            <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                            <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                        </ul>
                </li>
                </ul>
            </li>
            -->
            <li class="nav-item"><a class="nav-link <?php echo $blog; ?>" href="blog.php">Blog</a></li>
            <li class="nav-item"><a class="nav-link <?php echo $contact; ?>" href="contact.php">Contactanos</a></li>
          </ul>
        </div>
      </div>
    </nav>

