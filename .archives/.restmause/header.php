<?php
	$title = 'RESTMAUSE';
	$lorem1 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo. Quo sapiente beatae est distinctio expeditaquo quam id ipsam numquam.';
	$lorem2 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo.';
	$lorem3 = 'Lorem ipsum dolor sit amet? ';
	$lorem4 = 'Lorem ipsum  ';
	$plato = 'Nombre del plato ';
?>

<!doctype html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
      <?php echo $title; ?>
    </title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/gif" sizes="20x20"/>
    <!-- Box Icon CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- Swiper Carousel CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Wow CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/YouTubePopUp.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <!-- Custom Cursor -->
    <div class="cursor d-none d-lg-block"></div>
    <!-- Custom Cursor End -->
    <!-- Preloader -->
    <div class="intro_sec ">
      <div class="animate">
        <!-- <svg width="607" height="834" viewBox="0 0 607 834" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
          <!-- <path d="M470.286 344.294C465.31 342.22 460.75 340.145 455.774 338.485C435.873 331.846 415.971 327.282 396.484 325.208C385.704 323.963 374.924 323.548 364.558 323.548C323.926 323.548 287.854 331.846 256.343 348.443C217.369 368.775 185.858 396.99 163.054 431.014C159.323 436.408 156.006 441.802 153.104 447.196L113.715 322.718C120.763 321.473 127.812 320.229 134.86 317.739C158.079 310.685 178.81 297.823 194.98 279.981C221.101 284.13 247.636 282.47 273.343 274.172C299.049 265.873 321.853 252.181 340.925 233.924C364.144 238.903 388.606 237.658 411.825 230.605C418.873 228.53 425.507 225.626 432.141 222.306L470.286 344.294Z" fill="currentColor"/> -->
          <!-- <path d="M345.486 21.4822C335.121 24.8016 325.584 29.7807 317.292 36.0046C284.123 4.47029 235.198 -8.80732 188.346 6.13C141.909 20.6524 109.154 59.6554 100.447 104.467C90.0817 104.467 79.7162 105.712 68.9362 109.032C17.109 125.629 -11.9142 180.814 4.67046 233.094C21.2552 284.96 76.3993 314.005 128.641 297.408C153.104 289.524 172.591 272.927 184.614 252.181C209.906 261.309 238.929 262.554 266.709 253.426C294.903 244.712 317.292 226.87 333.047 204.879C354.608 215.252 379.899 217.742 404.776 209.858C456.604 193.261 485.627 138.076 469.042 85.7957C452.872 33.93 397.728 5.30014 345.486 21.4822Z" fill="currentColor"/> -->
          <!-- <path d="M605.036 652.169C606.695 646.36 607.11 640.551 606.695 635.572C606.695 635.157 606.695 634.742 606.695 633.912L606.28 634.327C605.866 629.763 604.622 625.198 601.72 621.879C601.72 621.879 579.745 662.957 552.38 696.151C535.795 716.067 514.65 732.249 494.334 744.282C474.432 756.315 451.213 762.539 425.922 762.539C397.313 762.539 372.021 756.315 350.876 744.282C330.145 732.664 315.219 717.312 305.683 698.64C296.146 679.554 294.903 662.957 302.366 648.019C311.487 631.422 329.73 618.145 357.095 607.772C372.851 601.548 391.509 596.569 412.654 592.419C433.799 588.27 453.701 582.461 473.188 574.992C492.675 567.109 508.845 556.321 522.528 542.213C536.21 528.106 544.088 507.775 545.746 480.804C545.746 460.473 541.185 442.631 532.064 427.279C522.942 411.512 510.918 398.234 496.407 387.446C481.895 376.658 465.31 367.945 447.482 361.306C429.653 354.667 411.825 350.518 393.996 348.858C345.071 344.709 302.78 351.763 267.538 370.019C231.881 388.691 204.101 413.587 183.371 444.706C162.64 475.825 149.372 511.094 143.567 550.097C137.348 589.515 139.421 627.688 148.957 664.201C158.493 700.715 175.907 733.909 201.614 762.539C227.32 791.583 261.319 811.915 303.195 823.533C313.56 827.267 324.34 829.757 335.535 831.416C346.73 833.076 357.924 833.906 369.119 833.906C395.24 833.906 421.361 829.342 447.482 819.384C475.676 809.01 577.257 757.975 605.036 652.169ZM275.001 618.145C270.855 598.643 267.953 576.652 267.123 552.586C266.294 528.521 268.782 504.87 274.172 482.049C279.976 458.813 288.683 438.482 300.707 420.225C312.731 401.969 330.145 388.691 352.12 380.807C363.315 377.073 373.68 374.998 384.045 374.998C400.215 374.998 414.312 379.563 426.751 388.276C439.19 397.404 447.482 411.097 451.213 430.184C453.287 450.515 451.628 467.527 446.653 482.049C441.677 496.572 434.629 508.604 425.507 518.978C415.971 529.351 405.191 538.479 392.752 546.363C380.314 554.246 367.461 562.13 355.022 570.013C342.584 577.482 330.145 585.366 318.536 593.249C306.512 601.133 296.561 610.676 288.683 621.464C282.049 630.178 277.489 628.933 275.001 618.145Z" fill="currentColor"/> -->
        <!-- </svg> -->
        <svg class="gegga">
          <defs>
            <filter id="gegga">
              <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10" result="inreGegga" />
              <feComposite in="SourceGraphic" in2="inreGegga" operator="atop" />
            </filter>
          </defs>
        </svg>
        <svg class="snurra" width="200" height="200" viewBox="0 0 200 200">
          <defs>
            <linearGradient id="linjärGradient">
              <stop class="stopp1" offset="0" />
              <stop class="stopp2" offset="1" />
            </linearGradient>
            <linearGradient y2="160" x2="160" y1="40" x1="40" gradientUnits="userSpaceOnUse" id="gradient" xlink:href="#linjärGradient" />
          </defs>
          <path
            class="halvan"
            d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
          />
          <circle class="strecken" cx="100" cy="100" r="64" />
        </svg>
        <svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
          <path
            class="halvan"
            d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
          />
          <circle class="strecken" cx="100" cy="100" r="64" />
        </svg>
      </div>
    </div>
    <!-- Preloader End -->
    <!-- back to to button start-->
    <a href="#" id="scroll-top" class="back-to-top-btn">
      <i class="bi bi-arrow-up"></i>
    </a>
    <!-- back to to button end-->
    <!-- Header area -->
    <div class="site-wrapper">
      <header>
        <!-- Menu -->
        <div class="menu-area menu-area-two">
          <div class="container">
            <div class="row align-items-center gy-4">
              <div class="col-lg-5 d-none d-lg-block">
                <div class="mainmenu">
                  <ul>
                    <li class="has-child-menu"><a href="javascript:void(0)">Principal</a>
                    </li>
                    <li class="has-child-menu"><a href="javascript:void(0)">Blog</a>
                      <ul>
                        <li><a href='blog-grid-01.php'>Blog Grid One</a></li>
                        <li><a href='blog-grid-02.php'>Blog Grid Two</a></li>
                        <li><a href='blog-standard.php'>Blog Standard</a></li>
                        <li><a href='blog-details.php'>Blog Details</a></li>
                      </ul>
                    </li>
                    <li class="has-child-menu"><a href="javascript:void(0)">Paginas</a>
                      <ul>
                        <li><a href='about.php'>Nosotros</a></li>
                        <li><a href='chefs.php'>Chefs</a></li>
                        <li><a href='faq.php'>Preguntas</a></li>
                        <li><a href='reservation.php'>Reservacion</a></li>
                        <li class="has-child-menu"><a href="javascript:void(0)">Menu</a>
                          <ul>
                            <li><a href='food-menu-01.php'>Menu 01</a></li>
                            <li><a href='food-menu-02.php'> Menu 02</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="has-child-menu"><a href="javascript:void(0)">Contactame</a>
                      <ul>
                        <li><a href='contact-01.php'>Contactame 1</a></li>
                        <li><a href='contact-02.php'>Contactame 2</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="menu-btn-wrap flex-shrink-0 d-lg-none pb-5">
                    <a class="sign-btn common-btn mt-4" href="#">
                      <i class="bi bi-person-circle"></i>
                      <span>Ingresar</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-12 ">
                <div class="menu-logo-wrap text-center">
                  <a href='index.php'>
                    <img class="icon" src="assets/images/favicon.ico" alt=""/>
                    <h2 class="txt-menu" style="color: #fff; font-size: 30px;">
                      Restmause
                    </h2>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 hamburger-menu position-relative col-md-12">
                <div class="d-flex menu-info-item align-items-center justify-content-lg-end">
                  <div class="menu-meta d-flex align-items-center">
                    <div class="search-wrap position-relative order-2 order-lg-0">
                      <div class="search-icon">
                        <i class="bi bi-search search"></i>
                        <i class="bi bi-x-octagon cancel"></i>
                      </div>
                      <div class="search-field">
                        <form action="#">
                          <input type="search" placeholder="Search">
                          <i class="bi bi-search search"></i>
                        </form>
                      </div>
                    </div>
                    <a class="cart-icon order-lg-1" href="#"><i class="bi bi-heart"><span>3</span></i></a>
                    <a class="cart-icon order-lg-2" href="#"><i class="bi bi-cart3"><span>7</span></i></a>
                  </div>
                  <div class="menu-btn-wrap flex-shrink-0 d-none d-lg-block">
                    <a class="common-btn sign-btn" href="#">
                      <i class="bi bi-person-circle"></i>
                      <span>Ingresar</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu end -->
      </header>
