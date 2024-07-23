<!DOCTYPE html>
<?php
  $title = 'FRIENDS';
  $lorem1 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo. Quo sapiente beatae est distinctio expeditaquo quam id ipsam numquam.';
  $lorem2 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo.';
  $lorem3 = 'Lorem ipsum dolor sit amet? ';
  $lorem4 = 'Lorem ipsum dolor sit amet';
  $correo = 'friends@ejemplo.com';
  $telefono = '+123456789';
  $fblog =  'Junio 20';
  $fblog1 = 'Junio 21';
  $fblog2 = 'Junio 22';
  $fblog3 = 'Junio 23';
  $fblog4=  'Junio 24';
  $fblog5 = 'Junio 25';
  $fblog6 = '2024';
  $favicon = 'assets/images/favicon.ico';
  $autor = 'Issac Ron';
  $video = 'https://www.youtube.com/watch?v=YLslsZuEaNE'; // video
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/remixicon.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/simplebar.min.css" />
    <link rel="stylesheet" href="assets/css/metismenu.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/dark.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="<?php echo $favicon; ?>" />
  </head>
  <body>
    <script src="assets/js/iron.js"></script>
    <!-- Start Preloader Area -->
    <div class="preloader-area">
      <div class="spinner">
        <div class="inner">
          <div class="disc"></div>
          <div class="disc"></div>
          <div class="disc"></div>
        </div>
      </div>
    </div>
    <!-- End Preloader Area -->
    <!-- Start Main Content Wrapper Area -->
    <div class="main-content-wrapper d-flex flex-column">
      <!-- Start Navbar Area -->
      <div class="navbar-area">
        <div class="main-responsive-nav">
          <div class="main-responsive-menu">
            <div class="responsive-burger-menu d-lg-none d-block">
              <span class="top-bar"></span>
              <span class="middle-bar"></span>
              <span class="bottom-bar"></span>
            </div>
          </div>
        </div>

        <div class="main-navbar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
              <img src="assets/images/logo.png" alt="image" />
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-burger-menu m-auto">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
              </div>

              <div class="search-box m-auto">
                <form>
                  <input
                    type="text"
                    class="input-search"
                    placeholder="Buscar..."
                  />
                  <button type="submit"><i class="ri-search-line"></i></button>
                </form>
              </div>

              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                  <a href="index.php" class="home-btn"
                    ><i class="flaticon-home"></i
                  ></a>
                </div>
                <div class="option-item">
                  <div class="dropdown friend-requests-nav-item">
                    <a
                      href="#"
                      class="dropdown-bs-toggle"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <div class="friend-requests-btn">
                        <i class="flaticon-user"></i>
                        <span>3</span>
                      </div>
                    </a>

                    <div class="dropdown-menu">
                      <div
                        class="friend-requests-header d-flex justify-content-between align-items-center"
                      >
                        <h3>Solicitud de Amistad</h3>
                        <i class="flaticon-menu"></i>
                      </div>

                      <div class="friend-requests-body" data-simplebar>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-2.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Maria Peréz</a></h4>
                              <span>12 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-3.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Juan Rojas</a></h4>
                              <span>20 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-4.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Sofia Álvarez</a></h4>
                              <span>2 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-5.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Luis Torres</a></h4>
                              <span>5 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-6.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Luisa Ramirez</a></h4>
                              <span>9 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-7.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Valentina Contreras</a></h4>
                              <span>11 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-8.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Mia Sandoval</a></h4>
                              <span>40 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="item d-flex align-items-center">
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-9.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>

                          <div
                            class="content d-flex justify-content-between align-items-center"
                          >
                            <div class="text">
                              <h4><a href="#">Marcos Rojas</a></h4>
                              <span>15 Amigos en común</span>
                            </div>
                            <div class="btn-box d-flex align-items-center">
                              <button
                                class="delete-btn d-inline-block me-2"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Delete"
                                type="button"
                              >
                                <i class="ri-close-line"></i>
                              </button>

                              <button
                                class="confirm-btn d-inline-block"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Confirm"
                                type="button"
                              >
                                <i class="ri-check-line"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="view-all-requests-btn">
                          <a href="friends.html" class="default-btn"
                            >Ver todas las solicitudes</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="option-item">
                  <div class="dropdown messages-nav-item">
                    <a
                      href="#"
                      class="dropdown-bs-toggle"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <div class="messages-btn">
                        <i class="flaticon-email"></i>
                        <span>2</span>
                      </div>
                    </a>

                    <div class="dropdown-menu">
                      <div
                        class="messages-header d-flex justify-content-between align-items-center"
                      >
                        <h3>Mensajes</h3>
                        <i class="flaticon-menu"></i>
                      </div>
                      <div class="messages-search-box">
                        <form>
                          <input
                            type="text"
                            class="input-search"
                            placeholder="Buscar Mensaje..."
                          />
                          <button type="submit">
                            <i class="ri-search-line"></i>
                          </button>
                        </form>
                      </div>
                      <div class="messages-body" data-simplebar>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-11.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Juan Fernadez</a></h4>
                            <span>Hola como estas...</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-12.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Alicia Roman</a></h4>
                            <span>Amigo necesito un favor...</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-13.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Jose Sánchez</a></h4>
                            <span>Gracias!</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-14.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Emily Diaz</a></h4>
                            <span>Con gusto!</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-1.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Victor Rivera</a></h4>
                            <span>Vamos con Carla!</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-2.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Alejandro Vargas</a></h4>
                            <span>Cuenta con eso!</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-3.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Sebastián Ortega</a></h4>
                            <span>Te lo dije...</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-4.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Gabriela Seijas </a></h4>
                            <span>Me lo imagine!</span>
                          </div>
                        </div>
                        <div class="view-all-messages-btn">
                          <a href="messages.html" class="default-btn"
                            >Ver todos los mensajes</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="option-item">
                  <div class="dropdown notifications-nav-item">
                    <a
                      href="#"
                      class="dropdown-bs-toggle"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <div class="notifications-btn">
                        <i class="flaticon-bell"></i>
                        <span>1</span>
                      </div>
                    </a>

                    <div class="dropdown-menu">
                      <div
                        class="notifications-header d-flex justify-content-between align-items-center"
                      >
                        <h3>Notificaciones</h3>
                        <i class="flaticon-menu"></i>
                      </div>
                      <div class="notifications-body" data-simplebar>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-11.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Victor Nuñez</a></h4>
                            <span>Le gusto tu mensaje</span>
                            <span class="main-color">25 Minutos</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-12.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Luisa Moreno</a></h4>
                            <span>Publicó un video</span>
                            <span class="main-color">2 Dias</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-13.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Gabriel Lopéz</a></h4>
                            <span>Agrego un comentario en tu publicación</span>
                            <span class="main-color">4 Dias</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-5.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Carlos Romero</a></h4>
                            <span>Te envio un mensaje</span>
                            <span class="main-color">5 Dias</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-6.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Beatriz Flores</a></h4>
                            <span>Le gusto tu comentario</span>
                            <span class="main-color">2 Days Ago</span>
                          </div>
                        </div>
                        <div
                          class="item d-flex justify-content-between align-items-center"
                        >
                          <div class="figure">
                            <a href="#"
                              ><img
                                src="assets/images/user/user-7.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="text">
                            <h4><a href="#">Armando Martinez</a></h4>
                            <span>Agrego un foto al grupo</span>
                            <span class="main-color">6 Dias</span>
                          </div>
                        </div>
                        <div class="view-all-notifications-btn">
                          <a href="notifications.php" class="default-btn"
                            >Leer todas las notificaciones</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="option-item">
                  <div class="dropdown language-option">
                    <button
                      class="dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="flaticon-global"></i>
                      <span class="lang-name"></span>
                    </button>
                    <div class="dropdown-menu language-dropdown-menu">
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/uk.png" alt="flag" />
                        Ingles
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/china.png" alt="flag" />
                        简体中文
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/uae.png" alt="flag" />
                        العربيّة
                      </a>
                    </div>
                  </div>
                </div>
                <div class="option-item">
                  <div class="dropdown profile-nav-item">
                    <a
                      href="#"
                      class="dropdown-bs-toggle"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <div class="menu-profile">
                        <img
                          src="assets/images/user/user-1.jpg"
                          class="rounded-circle"
                          alt="image"
                        />
                        <span class="name">Rafael</span>
                        <span class="status-online"></span>
                      </div>
                    </a>

                    <div class="dropdown-menu">
                      <div class="profile-header">
                        <h3>Rafael Bullón</h3>
                        <a href="#">
                          <span class="__cf_email__" data-cfemail="#!">
                            [correo&#160;protegido]
                          </span>
                        </a>
                      </div>
                      <ul class="profile-body">
                        <li>
                          <i class="flaticon-user"></i>
                          <a href="my-profile.php">Mi Perfil</a>
                        </li>
                        <li>
                          <i class="flaticon-settings"></i>
                          <a href="setting.php">Configuración</a>
                        </li>
                        <li class="<?php echo $nav15; ?>">
                          <i class="flaticon-privacy"></i>
                          <a href="privacy.php">Privacidad</a>
                        </li>
                        <li>
                          <i class="flaticon-information"></i>
                          <a href="help-and-support.php">Soporte</a>
                        </li>
                        <li>
                          <i class="flaticon-logout"></i>
                          <a href="index.php">Salir</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <div class="others-option-for-responsive">
          <div class="container">
            <div class="dot-menu">
              <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
              </div>
            </div>

            <div class="container">
              <div class="option-inner">
                <div class="others-options d-flex align-items-center">
                  <div class="option-item">
                    <a href="index.php" class="home-btn"
                      ><i class="flaticon-home"></i
                    ></a>
                  </div>
                  <div class="option-item">
                    <div class="dropdown friend-requests-nav-item">
                      <a
                        href="#"
                        class="dropdown-bs-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <div class="friend-requests-btn">
                          <i class="flaticon-user"></i>
                          <span>3</span>
                        </div>
                      </a>

                      <div class="dropdown-menu">
                        <div
                          class="friend-requests-header d-flex justify-content-between align-items-center"
                        >
                          <h3>Solicitud de Amistad</h3>
                          <i class="flaticon-menu"></i>
                        </div>

                        <div class="friend-requests-body">
                          <div class="item d-flex align-items-center">
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-2.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>

                            <div
                              class="content d-flex justify-content-between align-items-center"
                            >
                              <div class="text">
                                <h4><a href="#">Maria Perez</a></h4>
                                <span>12 Amigos en común</span>
                              </div>
                              <div class="btn-box d-flex align-items-center">
                                <button
                                  class="delete-btn d-inline-block me-2"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Delete"
                                  type="button"
                                >
                                  <i class="ri-close-line"></i>
                                </button>

                                <button
                                  class="confirm-btn d-inline-block"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Confirm"
                                  type="button"
                                >
                                  <i class="ri-check-line"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="item d-flex align-items-center">
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-3.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>

                            <div
                              class="content d-flex justify-content-between align-items-center"
                            >
                              <div class="text">
                                <h4><a href="#">Juan Rojas</a></h4>
                                <span>20 Amigos en Común</span>
                              </div>
                              <div class="btn-box d-flex align-items-center">
                                <button
                                  class="delete-btn d-inline-block me-2"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Delete"
                                  type="button"
                                >
                                  <i class="ri-close-line"></i>
                                </button>

                                <button
                                  class="confirm-btn d-inline-block"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Confirm"
                                  type="button"
                                >
                                  <i class="ri-check-line"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="item d-flex align-items-center">
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-4.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>

                            <div
                              class="content d-flex justify-content-between align-items-center"
                            >
                              <div class="text">
                                <h4><a href="#">Sofia Alvarez</a></h4>
                                <span>2 Amigos en Común</span>
                              </div>
                              <div class="btn-box d-flex align-items-center">
                                <button
                                  class="delete-btn d-inline-block me-2"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Delete"
                                  type="button"
                                >
                                  <i class="ri-close-line"></i>
                                </button>

                                <button
                                  class="confirm-btn d-inline-block"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Confirm"
                                  type="button"
                                >
                                  <i class="ri-check-line"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="item d-flex align-items-center">
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-5.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>

                            <div
                              class="content d-flex justify-content-between align-items-center"
                            >
                              <div class="text">
                                <h4><a href="#">Luis Torres </a></h4>
                                <span>5 Amigos en Común</span>
                              </div>
                              <div class="btn-box d-flex align-items-center">
                                <button
                                  class="delete-btn d-inline-block me-2"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Delete"
                                  type="button"
                                >
                                  <i class="ri-close-line"></i>
                                </button>

                                <button
                                  class="confirm-btn d-inline-block"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="Confirm"
                                  type="button"
                                >
                                  <i class="ri-check-line"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="view-all-requests-btn">
                            <a href="friends.html" class="default-btn"
                              >Ver todas las Solicitudes</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="option-item">
                    <div class="dropdown messages-nav-item">
                      <a
                        href="#"
                        class="dropdown-bs-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <div class="messages-btn">
                          <i class="flaticon-email"></i>
                          <span>2</span>
                        </div>
                      </a>

                      <div class="dropdown-menu">
                        <div
                          class="messages-header d-flex justify-content-between align-items-center"
                        >
                          <h3>Mensajes</h3>
                          <i class="flaticon-menu"></i>
                        </div>
                        <div class="messages-search-box">
                          <form>
                            <input
                              type="text"
                              class="input-search"
                              placeholder="Buscar Mensaje..."
                            />
                            <button type="submit">
                              <i class="ri-search-line"></i>
                            </button>
                          </form>
                        </div>
                        <div class="messages-body">
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-11.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Juan Fernandez</a></h4>
                              <span>Hola como estas...</span>
                            </div>
                          </div>
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-12.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Alicia Roman</a></h4>
                              <span>Amigo Necesito un favor</span>
                            </div>
                          </div>
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-13.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Jose Sanchez</a></h4>
                              <span>Gracias!</span>
                            </div>
                          </div>
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-14.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Emily Diaz</a></h4>
                              <span>Con gusto!</span>
                            </div>
                          </div>
                          <div class="view-all-messages-btn">
                            <a href="messages.html" class="default-btn"
                              >View All Messages</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="option-item">
                    <div class="dropdown notifications-nav-item">
                      <a
                        href="#"
                        class="dropdown-bs-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <div class="notifications-btn">
                          <i class="flaticon-bell"></i>
                          <span>1</span>
                        </div>
                      </a>

                      <div class="dropdown-menu">
                        <div
                          class="notifications-header d-flex justify-content-between align-items-center"
                        >
                          <h3>Notificaciones</h3>
                          <i class="flaticon-menu"></i>
                        </div>
                        <div class="notifications-body">
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-11.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Victor Nuñez</a></h4>
                              <span>Le gusto tu mensaje</span>
                              <span class="main-color">25  Minutos</span>
                            </div>
                          </div>
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-12.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Luisa Moreno</a></h4>
                              <span>Publicó un video</span>
                              <span class="main-color">2 Dias</span>
                            </div>
                          </div>
                          <div
                            class="item d-flex justify-content-between align-items-center"
                          >
                            <div class="figure">
                              <a href="#"
                                ><img
                                  src="assets/images/user/user-13.jpg"
                                  class="rounded-circle"
                                  alt="image"
                              /></a>
                            </div>
                            <div class="text">
                              <h4><a href="#">Gabriel López </a></h4>
                              <span>Agregó un comentario en tu publicación</span>
                              <span class="main-color">4 Dias</span>
                            </div>
                          </div>
                          <div class="view-all-notifications-btn">
                            <a href="notifications.php" class="default-btn"
                              >Ver todas las notificaciones</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="option-item">
                    <div class="dropdown language-option">
                      <button
                        class="dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="flaticon-global"></i>
                        <span class="lang-name"></span>
                      </button>
                      <div class="dropdown-menu language-dropdown-menu">
                        <a class="dropdown-item" href="#">
                          <img src="assets/images/uk.png" alt="flag" />
                          Eng
                        </a>
                        <a class="dropdown-item" href="#">
                          <img src="assets/images/china.png" alt="flag" />
                          简体中文
                        </a>
                        <a class="dropdown-item" href="#">
                          <img src="assets/images/uae.png" alt="flag" />
                          العربيّة
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="option-item">
                    <div class="dropdown profile-nav-item">
                      <a
                        href="#"
                        class="dropdown-bs-toggle"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <div class="menu-profile">
                          <img
                            src="assets/images/user/user-1.jpg"
                            class="rounded-circle"
                            alt="image"
                          />
                          <span class="name">Rafael</span>
                          <span class="status-online"></span>
                        </div>
                      </a>

                      <div class="dropdown-menu">
                        <div class="profile-header">
                          <h3>Rafael Bullon</h3>
                          <a
                            href="/cdn-cgi/l/email-protection#a0cdc1d4d4c8c5d7959097e0c7cdc1c9cc8ec3cfcd"
                            ><span
                              class="__cf_email__"
                              data-cfemail="2b464a5f5f434e5c1e1b1c6b4c464a424705484446"
                              >[correo&#160;protegido]</span
                            ></a
                          >
                        </div>
                        <ul class="profile-body">
                          <li>
                            <i class="flaticon-user"></i>
                            <a href="my-profile.php">Mi Perfil</a>
                          </li>
                          <li>
                            <i class="flaticon-settings"></i>
                            <a href="setting.php">Configuracion</a>
                          </li>
                          <li>
                            <i class="flaticon-privacy"></i>
                            <a href="privacy.php">Privacidad</a>
                          </li>
                          <li>
                            <i class="flaticon-information"></i>
                            <a href="help-and-support.php">Soporte</a>
                          </li>
                          <li>
                            <i class="flaticon-logout"></i>
                            <a href="index.php">Salir</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="option-item">
                    <div class="search-box">
                      <form>
                        <input
                          type="text"
                          class="input-search"
                          placeholder="Buscar..."
                        />
                        <button type="submit">
                          <i class="ri-search-line"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar Area -->

      <!-- Start Sidemenu Area -->
      <div class="sidemenu-area">
        <div class="responsive-burger-menu d-lg-none d-block">
          <span class="top-bar"></span>
          <span class="middle-bar"></span>
          <span class="bottom-bar"></span>
        </div>

        <div class="sidemenu-body">
          <ul
            class="sidemenu-nav metisMenu h-100"
            id="sidemenu-nav"
            data-simplebar
          >
            <li class="nav-item <?php echo $nav01; ?>">
              <a href="index.php" class="nav-link">
                <span class="icon"><i class="flaticon-newspaper"></i></span>
                <span class="menu-title">Principal</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav02; ?>">
              <a href="notifications.php" class="nav-link">
                <span class="icon"><i class="flaticon-bell"></i></span>
                <span class="menu-title">Notificationes</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav03; ?>">
              <a href="messages.php" class="nav-link">
                <span class="icon"><i class="flaticon-comment-1"></i></span>
                <span class="menu-title">Mensajes</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav04; ?>">
              <a href="friends.php" class="nav-link">
                <span class="icon"><i class="flaticon-friends"></i></span>
                <span class="menu-title">Amigos</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav05; ?>">
              <a href="groups.php" class="nav-link">
                <span class="icon"><i class="flaticon-team"></i></span>
                <span class="menu-title">Grupos</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav06; ?>">
              <a href="favorite.php" class="nav-link">
                <span class="icon"><i class="flaticon-star"></i></span>
                <span class="menu-title">Favoritos</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav07; ?>">
              <a href="events.php" class="nav-link">
                <span class="icon"><i class="flaticon-calendar"></i></span>
                <span class="menu-title">Eventos</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav08; ?>">
              <a href="live-chat.php" class="nav-link">
                <span class="icon"><i class="flaticon-live-chat"></i></span>
                <span class="menu-title">Chat</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav09; ?>">
              <a href="birthday.php" class="nav-link">
                <span class="icon"><i class="flaticon-cake"></i></span>
                <span class="menu-title">Cumpleaños</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav10; ?>">
              <a href="video.php" class="nav-link">
                <span class="icon"><i class="flaticon-video"></i></span>
                <span class="menu-title">Video</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav11; ?>">
              <a href="weather.php" class="nav-link">
                <span class="icon"><i class="flaticon-cloudy"></i></span>
                <span class="menu-title">Clima</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav12; ?>">
              <a href="marketplace.php" class="nav-link">
                <span class="icon"
                  ><i class="flaticon-online-shopping"></i
                ></span>
                <span class="menu-title">Tienda</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav13; ?>">
              <a href="login.php" class="nav-link">
                <span class="icon"><i class="flaticon-user"></i></span>
                <span class="menu-title">Sesion</span>
              </a>
            </li>
            <li class="nav-item <?php echo $nav14; ?>">
              <a href="register.php" class="nav-link">
                <span class="icon"><i class="flaticon-information"></i></span>
                <span class="menu-title">Registro</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End Sidemenu Area -->
