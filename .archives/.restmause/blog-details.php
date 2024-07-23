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
              <h1 class="text-white">Detalles del Blog</h1>
              <p class="text-white mt-3"><a href='index.php'>Principal</a><i
                  class="bi bi-chevron-right ms-2 me-2"></i>Detalles del blog</p>
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
            <div class="blog-details-wrap">
              <div class="blog-box">
                <div class="blog-box-img overflow-hidden">
                  <img class="w-100" src="assets/images/blog/sidebar-post-1.png" alt="">
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
                    <a href='blog-details.php'>2.6k</a>
                  </li>
                </ul>
                <h2 class="h2 mt-3 mb-3"><?php echo $lorem2; ?></h2>
                <p><?php echo $lorem1; ?></p>
                <p class="mt-3"><?php echo $lorem1; ?></p>
              </div>
              <div class="details-img-wrap pt-3 pb-3">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <div class="row gy-4">
                      <div class="col-lg-12">
                        <img class="w-100" src="assets/images/blog/details-2.png" alt="">
                      </div>
                      <div class="col-lg-12">
                        <img class="w-100" src="assets/images/blog/details-3.png" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img class="w-100 details-img-one-side" src="assets/images/blog/details-1.png" alt="">
                  </div>
                </div>
                <p class="details-img-wrap-quote mt-3"><?php echo $lorem2; ?></p>
              </div>
              <h2 class="h2 mb-2"><?php echo $lorem2; ?></h2>
              <p><?php echo $lorem2; ?></p>
              <ul class="custom-ul check-list mt-3 mb-3">
                <li><i class="bi bi-check-circle"></i>lorem ipsum dolor</li>
                <li><i class="bi bi-check-circle"></i>lorem ipsum dolor</li>
                <li><i class="bi bi-check-circle"></i>lorem ipsum dolor</li>
              </ul>
              <blockquote class="wp-block-quote">
                <p><?php echo $lorem1; ?></p><cite>Administrador</cite>
              </blockquote>
              <p class="mt-3"><?php echo $lorem1; ?></p>
              <div class="details-tag-wrap d-flex flex-column flex-md-row mt-4">
                <span>Etiquetas:</span>
                <ul class="sidebar-tag custom-ul d-flex flex-wrap">
                  <li><a href="#">Postres</a></li>
                  <li><a href="#">Comida</a></li>
                  <li><a href="#">Bebidas</a></li>
                  <li><a href="#">Tips de cocina</a></li>
                </ul>
              </div>
              <div class="comments-section mt-5">
                <h2 class="h2 mb-5">08 Comentarios</h2>
                <div class="comments-wrap">
                  <div class="single-comments-box">
                    <div class="comments-img flex-shrink-0">
                      <img src="assets/images/blog/comments-1.png" alt="">
                    </div>
                    <div class="comments-info">
                      <h3>Nombre y Apellido - <span>Febrero 28, 2024</span><a href="#"><i
                            class="bi bi-reply-fill"></i>Responder</a></h3>
                      <p><?php echo $lorem1; ?></p>
                    </div>
                  </div>
                  <div class="single-comments-box">
                    <div class="comments-img flex-shrink-0">
                      <img src="assets/images/blog/comments-2.png" alt="">
                    </div>
                    <div class="comments-info">
                      <h3>Nombre y Apellido - <span>Febrero 28, 2024</span><a href="#"><i
                            class="bi bi-reply-fill"></i>Responder</a></h3>
                      <p><?php echo $lorem1; ?></p>
                    </div>
                  </div>
                  <div class="single-comments-box">
                    <div class="comments-img flex-shrink-0">
                      <img src="assets/images/blog/comments-3.png" alt="">
                    </div>
                    <div class="comments-info">
                      <h3>Nombre y Apellido - <span>Febrero 28, 2024</span><a href="#"><i
                            class="bi bi-reply-fill"></i>Responder</a></h3>
                      <p><?php echo $lorem1; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="reply-form mt-5">
                <h2 class="h2 mb-4">Escribe un comentario</h2>
                <form class="contact-submit-wrap" action="#">
                  <div class="row gy-3">
                    <div class="col-lg-12">
                      <label class="d-inline-block">Escribir comentario</label>
                      <textarea cols="30" rows="5" placeholder="Escribir texto"></textarea>
                    </div>
                    <div class="col-lg-4">
                      <label class="d-inline-block">Nombre completo</label>
                      <input type="text" placeholder="Enter your name">
                    </div>
                    <div class="col-lg-4">
                      <label class="d-inline-block">Correo</label>
                      <input type="email" placeholder="Escribir correo">
                    </div>
                    <div class="col-lg-4">
                      <label class="d-inline-block">Numero de telefono</label>
                      <input type="tel" placeholder="Escribir telefono">
                    </div>
                    <div class="col-lg-12">
                      <button type="submit" class="common-btn border-0 mt-3 border-radius-0"><span>Enviar ahora!</span></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar-wrap">
              <div class="sidebar-item">
                <h2 class="sidebar-title">Buscar</h2>
                <form class="sidebar-form position-relative overflow-hidden">
                  <input type="email" placeholder="Buscar aqui">
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
                        <a href='blog-details.php'></a>
                      </li>
                      <li>
                        <i class="bi bi-calendar2"></i>
                        <a href='blog-details.php'>15 Sept, 2023</a>
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
                        <a href='blog-details.php'>Harrison Garton</a>
                      </li>
                      <li>
                        <i class="bi bi-calendar2"></i>
                        <a href='blog-details.php'>15 Sept, 2023</a>
                      </li>
                    </ul>
                    <h2 class="h2 mt-3"><a href='blog-details.php'><?php echo $lorem1; ?></a></h2>
                  </div>
                </div>
              </div>
              <div class="sidebar-item">
                <h2 class="sidebar-title">Etiquetas</h2>
                <ul class="sidebar-tag custom-ul d-flex flex-wrap">
                  <li><a href="#">Comida</a></li>
                  <li><a href="#">Bebida</a></li>
                  <li><a href="#">Ensalada</a></li>
                  <li><a href="#">Postres</a></li>
                  <li><a href="#">Cocteles</a></li>
                  <li><a href="#">Sopas</a></li>
                  <li><a href="#">Pastas</a></li>
                  <li><a href="#">Comida rapida</a></li>
                  <li><a href="#">Aperitivos</a></li>
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
