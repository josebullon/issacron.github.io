<?php
  include_once 'header.php';
?>

  <div>
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-info text-center">
              <h1 class="text-white">Blog Estandar</h1>
              <p class="text-white mt-3"><a href='index.php'>Principal</a><i
                  class="bi bi-chevron-right ms-2 me-2"></i>Blog Estandar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Blog -->
    <section class="blog-section pt-120 pb-120">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-8">
            <div class="blog-post-wrap d-flex flex-column">
              <div class="blog-box">
                <div class="blog-box-img overflow-hidden">
                  <a href='blog-details.php'><img class="w-100" src="assets/images/blog/sidebar-post-1.png" alt=""></a>
                </div>
                <ul class="blog-box-meta custom-ul d-flex mt-3 flex-wrap">
                  <li>
                    <i class="bi bi-person-circle"></i>
                    <a href='blog-details.php'>Administrador</a>
                  </li>
                  <li>
                    <i class="bi bi-calendar2"></i>
                    <a href='blog-details.php'>28 Feb, 2024</a>
                  </li>
                  <li>
                    <i class="bi bi-eye"></i>
                    <a href='blog-details.php'>5.7k</a>
                  </li>
                </ul>
                <h2 class="h2 mt-3 mb-2"><a href='blog-details.php'><?php echo $lorem2; ?></a></h2>
                <p><?php echo $lorem1; ?></p>
                <a class='blog-btn d-flex align-items-center mt-4' href='blog-details.php'>Continuar Leyendo <i
                    class="bi bi-arrow-right"></i></a>
              </div>
              <div class="blog-box">
                <div class="blog-box-img overflow-hidden">
                  <a href='blog-details.php'><img class="w-100" src="assets/images/blog/sidebar-post-2.png" alt=""></a>
                </div>
                <ul class="blog-box-meta custom-ul d-flex mt-3 flex-wrap">
                  <li>
                    <i class="bi bi-person-circle"></i>
                    <a href='blog-details.php'>Aministrador</a>
                  </li>
                  <li>
                    <i class="bi bi-calendar2"></i>
                    <a href='blog-details.php'>27 Feb, 2024</a>
                  </li>
                  <li>
                    <i class="bi bi-eye"></i>
                    <a href='blog-details.php'>2.6k</a>
                  </li>
                </ul>
                <h2 class="h2 mt-3 mb-2"><a href='blog-details.php'><?php echo $lorem2; ?></a></h2>
                <p><?php echo $lorem1; ?></p>
                <a class='blog-btn d-flex align-items-center mt-4' href='blog-details.php'>Continuar Leyendo  <i
                    class="bi bi-arrow-right"></i></a>
              </div>
              <div class="blog-box">
                <div class="blog-box-img overflow-hidden">
                  <a href='blog-details.php'><img class="w-100" src="assets/images/blog/sidebar-post-3.png" alt=""></a>
                </div>
                <ul class="blog-box-meta custom-ul d-flex mt-3 flex-wrap">
                  <li>
                    <i class="bi bi-person-circle"></i>
                    <a href='blog-details.php'>Administrador</a>
                  </li>
                  <li>
                    <i class="bi bi-calendar2"></i>
                    <a href='blog-details.php'>26 Feb, 2024</a>
                  </li>
                  <li>
                    <i class="bi bi-eye"></i>
                    <a href='blog-details.php'>3.6k</a>
                  </li>
                </ul>
                <h2 class="h2 mt-3 mb-2"><a href='blog-details.php'><?php echo $lorem2; ?></a></h2>
                <p><?php echo $lorem1; ?></p>
                <a class='blog-btn d-flex align-items-center mt-4' href='blog-details.php'>Continuar Leyendo  <i
                    class="bi bi-arrow-right"></i></a>
              </div>
              <div class="blog-box">
                <div class="blog-box-img overflow-hidden">
                  <a href='blog-details.php'><img class="w-100" src="assets/images/blog/sidebar-post-4.png" alt=""></a>
                </div>
                <ul class="blog-box-meta custom-ul d-flex mt-3 flex-wrap">
                  <li>
                    <i class="bi bi-person-circle"></i>
                    <a href='blog-details.php'>Administrador</a>
                  </li>
                  <li>
                    <i class="bi bi-calendar2"></i>
                    <a href='blog-details.php'>28 Feb, 2024</a>
                  </li>
                  <li>
                    <i class="bi bi-eye"></i>
                    <a href='blog-details.php'>3.6k</a>
                  </li>
                </ul>
                <h2 class="h2 mt-3 mb-2"><a href='blog-details.php'><?php echo $lorem2; ?></a></h2>
                <p><?php echo $lorem1; ?></p>
                <a class='blog-btn d-flex align-items-center mt-4' href='blog-details.php'>Continuar Leyendo <i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="row pt-60">
              <div class="col-lg-12">
                <ul class="page-list custom-ul d-flex align-items-center flex-wrap">
                  <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar-wrap">
              <div class="sidebar-item">
                <h2 class="sidebar-title">Buscar</h2>
                <form class="sidebar-form position-relative overflow-hidden">
                  <input type="email" placeholder="Search Here">
                  <button class="position-absolute end-0 top-50 translate-middle-y h-100 border-0 common-btn"
                    type="submit"><i class="bi bi-search search"></i><span>Buscar</span></button>
                </form>
              </div>
              <div class="sidebar-item">
                <h2 class="sidebar-title">Sobre mi</h2>
                <div class="sidebar-about-wrap text-center">
                  <div class="sidebar-about-img overflow-hidden">
                    <img src="assets/images/blog/sidebar.png" alt="">
                  </div>
                  <h2 class="h2 mt-3 mb-2">Administrador</h2>
                  <p><?php echo $lorem1; ?></p>
                </div>
              </div>
              <div class="sidebar-item">
                <h2 class="sidebar-title">Post reciente</h2>
                <div class="recent-post-wrap d-flex flex-column">
                  <div class="blog-box">
                    <div class="blog-box-img overflow-hidden">
                      <a href='blog-details.php'><img class="w-100" src="assets/images/blog/recent-post-1.png"
                          alt=""></a>
                    </div>
                    <ul class="blog-box-meta custom-ul d-flex mt-3 flex-wrap">
                      <li>
                        <i class="bi bi-person-circle"></i>
                        <a href='blog-details.php'>Administrador</a>
                      </li>
                      <li>
                        <i class="bi bi-calendar2"></i>
                        <a href='blog-details.php'>27 Feb, 2024</a>
                      </li>
                    </ul>
                    <h2 class="h2 mt-3"><a href='blog-details.php'><?php echo $lorem2; ?></a></h2>
                  </div>
                  <div class="blog-box">
                    <div class="blog-box-img overflow-hidden">
                      <a href='blog-details.php'><img class="w-100" src="assets/images/blog/recent-post-2.png"
                          alt=""></a>
                    </div>
                    <ul class="blog-box-meta custom-ul d-flex mt-3 flex-wrap">
                      <li>
                        <i class="bi bi-person-circle"></i>
                        <a href='blog-details.php'>Administrador</a>
                      </li>
                      <li>
                        <i class="bi bi-calendar2"></i>
                        <a href='blog-details.php'>26 Feb, 2024</a>
                      </li>
                    </ul>
                    <h2 class="h2 mt-3"><a href='blog-details.php'><?php echo $lorem2; ?></a></h2>
                  </div>
                </div>
              </div>
              <div class="sidebar-item">
                <h2 class="sidebar-title">Etiquetas</h2>
                <ul class="sidebar-tag custom-ul d-flex flex-wrap">
                  <li><a href="#">Postres</a></li>
                  <li><a href="#">Bebidas</a></li>
                  <li><a href="#">Asados</a></li>
                  <li><a href="#">Ensaladas</a></li>
                  <li><a href="#">Pescados</a></li>
                  <li><a href="#">Pastas</a></li>
                  <li><a href="#">FRUTAS</a></li>
                  <li><a href="#">Comida rapida</a></li>
                  <li><a href="#">Tips de Cocina</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog End -->
    <!-- Instagram -->
    <div class="instagram-area pb-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div class="swiper instagram-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-1.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-2.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-3.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-4.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-5.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-6.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-3.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0"
                    href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Instagram End -->
  </div>

<?php
  include_once 'footer.php';
?>
