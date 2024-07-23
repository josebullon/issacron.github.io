<?php
  // header.php
  $title = 'FriendZone ';
  $tema = ' | Red Social ';
  $name = 'Issac Ron';
  $favicon = 'assets/images/favicon.ico';

  // Var:
  $lorem1 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo. Quo sapiente beatae est distinctio expeditaquo quam id ipsam numquam.';
  $lorem2 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo.';
  $lorem3 = 'Lorem ipsum dolor sit amet? ';
  $lorem4 = 'Lorem ipsum dolor sit amet';
  $lorem5 = 'Lorem ipsum';
  $correo = 'FriendZone@ejemplo.com';
  $telefono = '+123 456789123';
  $fblog =  'Jun 25, 2024';
  $fblog1 = 'Jun 24, 2024';
  $fblog2 = 'Jun 23, 2024';
  $fblog3 = 'Jun 22, 2024';
  $fblog4 = 'Jun 21, 2024';
?>
<!-- Mirrored from htmldemo.net/adda/adda/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2024 15:19:13 GMT -->
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $title; echo $tema;?></title>
    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="<?php echo $name; ?>" />
    <meta name="description" content="<?php echo $title; echo $tema;?>" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon">
    <!-- Styles -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bicon.min.css" />
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.css" />
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plyr.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css" />
    <!-- light gallery css -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="assets/fontsawesome/css/all.css">
    <link rel="stylesheet" href="assets/fontsawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fontsawesome/css/fontawesome.css">
    <link rel="stylesheet" href="assets/fontsawesome/css/fontawesome.min.css">

    <!-- Line Awesome CDN Link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
  </head>
  <body>
    <!-- header area start -->
    <header>
      <div class="header-top sticky bg-white d-none d-lg-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5">
              <!-- header top navigation start -->
              <div class="header-top-navigation">
                <nav>
                  <ul class="frame">
                    <li class="<?php echo $frame; ?>">
                      <a class="btn-15" href="index.php">
                        <i class="fa-solid fa-house"></i> Principal
                      </a>
                    </li>
                    <li class="msg-trigger">
                      <a class="msg-trigger-btn btn-15" href="#a">
                        <i class="fa-solid fa-envelope"></i> Mensaje
                      </a>
                      <div class="message-dropdown" id="a">
                        <div class="dropdown-title">
                          <p class="recent-msg">Mensaje Recientes</p>
                          <div class="message-btn-group">
                            <button>Nuevo Grupo</button>
                            <button>Nuevo Mensaje</button>
                          </div>
                        </div>
                        <ul class="dropdown-msg-list">
                          <li class="msg-list-item d-flex justify-content-between">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                              <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-3.jpg" alt="img" />
                              </figure>
                            </div>
                            <!-- profile picture end -->
                            <!-- message content start -->
                            <div class="msg-content">
                              <h6 class="author">
                                <a href="profile.php">Daniel Garcia</a>
                              </h6>
                              <p>
                              <?php echo $lorem2; ?>
                              </p>
                            </div>
                            <!-- message content end -->
                            <!-- message time start -->
                            <div class="msg-time">
                              <?php echo $fblog; ?>
                            </div>
                            <!-- message time end -->
                          </li>
                          <li class="msg-list-item d-flex justify-content-between">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                              <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-4.jpg" alt="img" />
                              </figure>
                            </div>
                            <!-- profile picture end -->
                            <!-- message content start -->
                            <div class="msg-content">
                              <h6 class="author">
                                <a href="profile.php">Jose Andrade</a>
                              </h6>
                              <p>
                              <?php echo $lorem2; ?>
                              </p>
                            </div>
                            <!-- message content end -->
                            <!-- message time start -->
                            <div class="msg-time">
                            <?php echo $fblog1; ?>
                            </div>
                            <!-- message time end -->
                          </li>
                          <li class="msg-list-item d-flex justify-content-between">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                              <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-5.jpg" alt="img" />
                              </figure>
                            </div>
                            <!-- profile picture end -->
                            <!-- message content start -->
                            <div class="msg-content">
                              <h6 class="author">
                                <a href="profile.php">Andres Armas</a>
                              </h6>
                              <p>
                              <?php echo $lorem2; ?>
                              </p>
                            </div>
                            <!-- message content end -->
                            <!-- message time start -->
                            <div class="msg-time">
                            <?php echo $fblog2; ?>
                            </div>
                            <!-- message time end -->
                          </li>
                        </ul>
                        <div class="msg-dropdown-footer">
                          <button>Ver todos los mensajes</button>
                          <button>Marcar todos como leidos</button>
                        </div>
                      </div>
                    </li>
                    <li class="notification-trigger">
                      <a class="msg-trigger-btn btn-15" href="#b">
                        <i class="fa-solid fa-bell"></i> Notificacion
                      </a>
                      <div class="message-dropdown" id="b">
                        <div class="dropdown-title">
                          <p class="recent-msg">Notificacion</p>
                          <button>
                            <i class="fa-solid fa-gear"></i>
                          </button>
                        </div>
                        <ul class="dropdown-msg-list">
                          <li class="msg-list-item d-flex justify-content-between">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                              <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-3.jpg" alt="img" />
                              </figure>
                            </div>
                            <!-- profile picture end -->
                            <!-- message content start -->
                            <div class="msg-content notification-content">
                              <a href="profile.php">Miguel Cervantes</a>,
                              <a href="profile.php">Miguel Escorcha</a>
                              <p>Y otras 65 personas reaccionaron a tu foto.</p>
                            </div>
                            <!-- message content end -->
                            <!-- message time start -->
                            <div class="msg-time">
                            <?php echo $fblog3; ?>
                            </div>
                            <!-- message time end -->
                          </li>
                          <li class="msg-list-item d-flex justify-content-between">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                              <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-4.jpg" alt="img" />
                              </figure>
                            </div>
                            <!-- profile picture end -->
                            <!-- message content start -->
                            <div class="msg-content notification-content">
                              <a href="profile.php">Daniela Diaz</a>,
                              <a href="profile.php">Tomas Rincon</a>
                              <p>Y otras 70 personas reaccionaron a tu foto.</p>
                            </div>
                            <!-- message content end -->
                            <!-- message time start -->
                            <div class="msg-time">
                              <?php echo $fblog3; ?>
                            </div>
                            <!-- message time end -->
                          </li>
                          <li class="msg-list-item d-flex justify-content-between">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                              <figure class="profile-thumb-middle">
                                <img src="assets/images/profile/profile-small-6.jpg" alt="img" />
                              </figure>
                            </div>
                            <!-- profile picture end -->
                            <!-- message content start -->
                            <div class="msg-content notification-content">
                              <a href="profile.php">Juan Batista</a>,
                              <a href="profile.php">Biatriz Suarez</a>
                              <p>Y otras personas reaccionaron a tu foto.</p>
                            </div>
                            <!-- message content end -->
                            <!-- message time start -->
                            <div class="msg-time">
                              <?php echo $fblog4; ?>
                            </div>
                            <!-- message time end -->
                          </li>
                        </ul>
                        <div class="msg-dropdown-footer">
                          <button>Ver todos los mensajes</button>
                          <button>Marcar todos como leidos</button>
                        </div>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- header top navigation start -->
            </div>
            <div class="col-md-2">
              <!-- brand logo start -->
              <div class="brand-logo text-center">
                <a href="index.php">
                  <img src="./assets/images/logo/logo.png" alt="img"/>
                </a>
              </div>
              <!-- brand logo end -->
            </div>
            <div class="col-md-5">
              <div class="header-top-right d-flex align-items-center justify-content-end">
                <!-- header top search start -->
                <div class="header-top-search">
                  <form class="top-search-box">
                    <input type="text" placeholder="Buscar" class="top-search-field" />
                    <button class="top-search-btn">
                      <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    </button>
                  </form>
                </div>
                <!-- header top search end -->
                <!-- profile picture start -->
                <div class="profile-setting-box rounded-5">
                  <div class="profile-thumb-small">
                    <a href="javascript:void(0)" class="profile-triger">
                      <figure>
                        <img src="assets/images/profile/profile-35x35-13.jpg" alt="img" />
                      </figure>
                    </a>
                    <div class="profile-dropdown">
                      <div class="profile-head">
                        <h5 class="name"><a href="#">Maria Fuentes</a></h5>
                        <a class="mail" href="#">maria.fuentes@email.com</a>
                      </div>
                      <div class="profile-body">
                        <ul>
                          <li><a href="profile.php"><i class="fa-solid fa-user"></i>   - Perfil</a></li>
                          <li><a href="#"><i class="fa-solid fa-envelope"></i>   - Mensaje</a></li>
                          <li><a href="#"><i class="fa-solid fa-file"></i>   - Historial</a></li>
                        </ul>
                        <ul>
                          <li><a href="#"><i class="fa-solid fa-gear"></i>   - Configuracion</a></li>
                          <li><a href="signup.php"><i class="fa-solid fa-unlock"></i>   - Cerrar Sesion</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- profile picture end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    <header>
      <div class="mobile-header-wrapper sticky d-block d-lg-none">
        <div class="mobile-header position-relative">
          <div class="mobile-logo">
            <a href="index.php">
              <img src="assets/images/logo/logo-white.png" alt="img" />
            </a>
          </div>
          <div class="mobile-menu w-100">
            <ul>
              <li>
                <button class="notification">
                  <i class="ico fa-regular fa-user"></i>
                  <span class="pulse">03</span>
                </button>
                <ul class="frnd-request-list">
                  <li>
                    <div class="frnd-request-member">
                      <figure class="request-thumb">
                        <a href="profile.php">
                          <img src="assets/images/profile/profile-midle-1.jpg" alt="img" />
                        </a>
                      </figure>
                      <div class="frnd-content">
                        <h6 class="author">
                          <a href="profile.php">Josefina Lopez</a>
                        </h6>
                        <p class="author-subtitle"> Trabajos</p>
                        <div class="request-btn-inner">
                          <button class="frnd-btn">confirmar</button>
                          <button class="frnd-btn delete">Borrar</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="frnd-request-member">
                      <figure class="request-thumb">
                        <a href="profile.php">
                          <img src="assets/images/profile/profile-midle-2.jpg" alt="img" />
                        </a>
                      </figure>
                      <div class="frnd-content">
                        <h6 class="author">
                          <a href="profile.php">Maria Jimenez</a>
                        </h6>
                        <p class="author-subtitle">Universidad</p>
                        <div class="request-btn-inner">
                          <button class="frnd-btn">confirmar</button>
                          <button class="frnd-btn delete">Borrar</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="frnd-request-member">
                      <figure class="request-thumb">
                        <a href="profile.html">
                          <img src="assets/images/profile/profile-midle-3.jpg" alt="img" />
                        </a>
                      </figure>
                      <div class="frnd-content">
                        <h6 class="author">
                          <a href="profile.php">Jesus Parra</a>
                        </h6>
                        <p class="author-subtitle">Trabajo</p>
                        <div class="request-btn-inner">
                          <button class="frnd-btn">confirmar</button>
                          <button class="frnd-btn delete">Borrar</button>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <button class="notification">
                  <i class="ico fa-regular fa-bell"></i>
                  <span class="pulse colorv">18</span>
                </button>
              </li>
              <li>
                <button class="chat-trigger notification">
                  <i class="ico fa-regular fa-message"></i>
                  <span class="pulse colorr">27</span>
                </button>
                <div class="mobile-chat-box">
                  <div class="live-chat-title">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                      <a href="profile.php">
                        <figure class="profile-thumb-small profile-active">
                          <img src="assets/images/profile/profile-35x35-13.jpg" alt="img" />
                        </figure>
                      </a>
                    </div>
                    <!-- profile picture end -->
                    <div class="posted-author">
                      <h6 class="author">
                        <a href="profile.php">Maria Fuentes</a>
                      </h6>
                      <span class="active-pro">Activo</span>
                    </div>
                    <div class="ml-auto pt-20">
                      <button class="chat-settings">
                        <i class="fa-solid fa-gear"></i>
                      </button>
                      <button class="close-btn">
                        <i class="fa-solid fa-xmark"></i>
                      </button>
                    </div>
                  </div>
                  <div class="message-list-inner">
                    <ul class="message-list custom-scroll">
                      <li class="text-friends">
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <div class="message-time">10 minutos</div>
                      </li>
                      <li class="text-author">
                        <p>
                          <?php echo $lorem3; ?>
                        </p>
                        <div class="message-time">5 minutos</div>
                      </li>
                      <li class="text-friends">
                        <p>
                          <?php echo $lorem4; ?>
                        </p>
                        <div class="message-time">2 minutos</div>
                      </li>
                      <li class="text-friends">
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <div class="message-time">10 minutos</div>
                      </li>
                      <li class="text-author">
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <div class="message-time">5 minutos</div>
                      </li>
                      <li class="text-friends">
                        <p>
                          <?php echo $lorem3; ?>
                        </p>
                        <div class="message-time">1 minuto</div>
                      </li>
                    </ul>
                  </div>
                  <div class="chat-text-field mob-text-box">
                    <textarea class="live-chat-field custom-scroll" placeholder="Escribir mensaje"></textarea>
                    <button class="chat-message-send" type="submit" value="submit">
                      <i class="fa-regular fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <button class="search-trigger">
                  <i class="search-icon fa-solid fa-magnifying-glass"></i>
                  <i class="close-icon fa-solid fa-xmark"></i>
                </button>
                <div class="mob-search-box">
                  <form class="mob-search-inner">
                    <input type="text" placeholder="Buscar aqui" class="mob-search-field" />
                    <button class="mob-search-btn">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                  </form>
                </div>
              </li>
            </ul>
          </div>
          <div class="mobile-header-profile">
            <!-- profile picture start -->
            <div class="profile-thumb profile-setting-box">
              <a href="javascript:void(0)" class="profile-triger">
                <figure class="profile-thumb-middle">
                  <img src="assets/images/profile/profile-small-1.jpg" alt="img" />
                </figure>
              </a>
              <div class="profile-dropdown">
                <div class="profile-head">
                  <h5 class="name"><a href="#">Maria Fuentes</a></h5>
                  <a class="mail" href="#">maria.fuentes@email.com</a>
                </div>
                <div class="profile-body">
                  <ul>
                    <li><a href="profile.php"><i class="fa-solid fa-user"></i>   - Perfil</a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope"></i>   - Mensaje</a></li>
                    <li><a href="#"><i class="fa-solid fa-file"></i>   - Historial</a></li>
                  </ul>
                  <ul>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>   - Configuracion</a></li>
                    <li><a href="signup.php"><i class="fa-solid fa-unlock"></i>   - Cerrar Sesion</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- profile picture end -->
          </div>
        </div>
      </div>
    </header>
    <!-- header area end -->
