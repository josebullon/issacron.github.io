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
              <h1 class="text-white">Nosotros</h1>
              <p class="text-white mt-3">
                <a href='index.php'>Principal</a>
                <i class="bi bi-chevron-right ms-2 me-2"></i>
                Nosotros
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- About -->
    <div class="about-area pt-120 pb-120 position-relative z-index-one">
      <div class="container">
        <div class="row justify-content-between align-items-center gy-4">
          <div class="col-lg-6 col-xl-5">
            <div class="about-img-wrap position-relative">
              <div class="about-img-main-wrap">
              </div>
              <div class="about-img-hover-wrap position-absolute">
                <img class="hover-img" src="assets/images/about/about-3.png" alt="">
                <a class="vid position-absolute start-50 top-50 translate-middle" href="https://vimeo.com/225811446"><i class="bi bi-play-fill vid-icon"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="section-title">
              <span>Nosotros</span>
              <h2 class="mt-2"><?php echo $lorem4; ?></h2>
            </div>
            <div class="about-content mt-lg-4 mt-3">
              <p><?php echo $lorem1, $lorem1; ?></p>
              <div class="about-content-info-wrap align-items-center mt-4 d-flex justify-content-between position-relative">
                <ul class="custom-ul check-list flex-shrink-0 flex-grow-1 w-50 pe-3">
                  <li><i class="bi bi-check-circle"></i><b><?php echo $lorem4; ?></b></li>
                  <li><i class="bi bi-check-circle"></i><b><?php echo $lorem4; ?></b></li>
                </ul>
                <div class="about-content-info-single d-flex flex-column flex-sm-row align-items-center">
                  <img class="flex-shrink-0" src="assets/images/about/ceo-img.png" alt="">
                  <div class="about-content-info-details text-center text-sm-start">
                    <img src="assets/images/about/signature.svg" alt="">
                    <p><b>Fundador</b></p>
                  </div>
                </div>
              </div>
              <a class='common-btn mt-5 wow fadeInUp' data-wow-delay='.4s' href='about.html'><span>Leer más</span></a>
            </div>
          </div>
        </div>
      </div>
      <img class="position-absolute z-index-minus-one bottom-0 end-0" src="assets/images/shape/sp-bag.svg" alt="">
      <img class="position-absolute z-index-minus-one top-50 start-0" src="assets/images/shape/sp-veg.svg" alt="">
    </div>
    <!-- About End -->
    <!-- Trending -->
    <div class="trending-area pt-120 pb-120 mt-120 bg_color_off_white overflow-hidden">
      <div class="container custom-container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4">
            <div class="section-title">
              <span>Prueba ahora!</span>
              <h2 class="mt-2">Nuestros Nuevos Postres</h2>
              <p class="mt-3"><?php echo $lorem1; ?></p>
            </div>
            <div class="slider-button-wrap d-flex mt-4">
              <div class="trending-button-prev-two slide-btn-prev"><i class="bi bi-arrow-left"></i></div>
              <div class="trending-button-next-two slide-btn-next"><i class="bi bi-arrow-right"></i></div>
            </div>
          </div>
          <div class="col-lg-7 pe-lg-0">
            <div class="swiper trending-slider-wrap-two">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="trending-box-two position-relative overflow-hidden">
                    <img class="w-100" src="assets/images/trending/trending-two-1.png" alt="">
                    <div class="trending-two-hover-info w-100 h-100 d-flex justify-content-center align-items-end position-absolute text-center start-0 bottom-0">
                      <p class="text_color_white"><?php echo $lorem4; ?></p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="trending-box-two position-relative overflow-hidden">
                    <img class="w-100" src="assets/images/trending/trending-two-2.png" alt="">
                    <div class="trending-two-hover-info w-100 h-100 d-flex justify-content-center align-items-end position-absolute text-center start-0 bottom-0">
                      <p class="text_color_white"><?php echo $lorem4; ?></p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="trending-box-two position-relative overflow-hidden">
                    <img class="w-100" src="assets/images/trending/trending-two-3.png" alt="">
                    <div class="trending-two-hover-info w-100 h-100 d-flex justify-content-center align-items-end position-absolute text-center start-0 bottom-0">
                      <p class="text_color_white"><?php echo $lorem4; ?></p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="trending-box-two position-relative overflow-hidden">
                    <img class="w-100" src="assets/images/trending/trending-two-1.png" alt="">
                    <div class="trending-two-hover-info w-100 h-100 d-flex justify-content-center align-items-end position-absolute text-center start-0 bottom-0">
                      <p class="text_color_white"><?php echo $lorem4; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Trending End -->
    <!-- Chef -->
    <div class="chefs-area pt-120 pb-120">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-sm-6 wow fadeIn" data-wow-delay=".2s">
            <div class="chefs-box position-relative overflow-hidden" style="background-image: url(assets/images/chef/chef-1.png);">
              <div class="chefs-hover-info text-center position-absolute d-flex flex-column">
                <h2 class="h2">Nombre Apellido</h2>
                <span class="d-block mt-2"> Master Chef</span>
                <p class="text-white"><?php echo $lorem2; ?></p>
                <ul class="mt-3 custom-ul social-list chefs-social-list d-flex justify-content-center align-items-center">
                  <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                  <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                  <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeIn" data-wow-delay=".4s">
            <div class="chefs-box position-relative overflow-hidden" style="background-image: url(assets/images/chef/chef-2.png);">
              <div class="chefs-hover-info text-center position-absolute d-flex flex-column">
                <h2 class="h2">Nombre Apellido</h2>
                <span class="d-block mt-2">Chef Ejecutivo</span>
                <p class="text-white"><?php echo $lorem2; ?></p>
                <ul class="mt-3 custom-ul social-list chefs-social-list d-flex justify-content-center align-items-center">
                  <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                  <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                  <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeIn" data-wow-delay=".6s">
            <div class="chefs-box position-relative overflow-hidden" style="background-image: url(assets/images/chef/chef-3.png);">
              <div class="chefs-hover-info text-center position-absolute d-flex flex-column">
                <h2 class="h2">Nombre Apellido</h2>
                <span class="d-block mt-2"> Master Chef</span>
                <p class="text-white"><?php echo $lorem2; ?></p>
                <ul class="mt-3 custom-ul social-list chefs-social-list d-flex justify-content-center align-items-center">
                  <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                  <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                  <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <div class="row pt-60">
              <div class="col-lg-12">
                <ul class="page-list custom-ul d-flex align-items-center justify-content-center flex-wrap">
                    <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
              </div>
          </div>
      </div>
    </div>
    <!-- Chef End -->
    <!-- About Video -->
    <div class="about-video-area pt-120 pb-120 mb-120">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
          <div class="section-title text-center">
            <h2 class="text-white">Nuestra Historia</h2>
                  <p class="text-white about-video-text mt-2"><?php echo $lorem1; ?></p>
          </div>
                <div class="about-page-video-icon mt-3 mt-lg-5">
                  <a class="vid" href="https://vimeo.com/225811446"><i class="bi bi-play-fill vid-icon"></i></a>
                </div>
            </div>
          </div>
      </div>
    </div>
    <!-- About Video End -->
    <!-- Visit -->
    <div class="visit-area pb-120">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="section-title">
              <span>porque visitarnos?</span>
              <h2>Productos organicos</h2>
                    <p class="mt-2"><?php echo $lorem2; ?></p>
            </div>
            <ul class="custom-ul check-list mt-3">
              <li><i class="bi bi-check-circle"></i>lorem ipsum dolor</li>
              <li><i class="bi bi-check-circle"></i>lorem ipsum dolor</li>
            </ul>
            <a class='common-btn mt-4' href='contact-01.php'><span>Leer más</span></a>
          </div>
          <div class="col-lg-7">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="visit-box">
                  <img src="assets/images/icon/icon-food-1.svg" alt="">
                  <h2 class="h2">Ingredientes de Calidad</h2>
                  <p><?php echo $lorem2; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="visit-box">
                  <img src="assets/images/icon/icon-food-2.svg" alt="">
                  <h2 class="h2">Menú Especial</h2>
                  <p><?php echo $lorem2; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="visit-box">
                  <img src="assets/images/icon/icon-food-3.svg" alt="">
                  <h2 class="h2">Las mejores cenas</h2>
                  <p><?php echo $lorem2; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="visit-box">
                  <img src="assets/images/icon/icon-food-4.svg" alt="">
                  <h2 class="h2"> WIFI gratis</h2>
                  <p><?php echo $lorem2; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Visit End -->
    <!-- CTA -->
    <div class="cta-area">
      <div class="container">
        <div class="row gy-5 cta-wrap">
          <div class="col-lg-3 col-md-6 cta-single">
            <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".0s">
              <h2 class="counter-item text-white">
                <span class="odometer d-inline-block" data-odometer-final="20">.</span>
                <em>+</em>
              </h2>
              <p class="text-white">Años de Experiencia</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 cta-single">
            <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".2s">
              <h2 class="counter-item text-white">
                <span class="odometer d-inline-block" data-odometer-final="6">.</span>
                <em>+</em>
              </h2>
              <p class="text-white">Chefs Profesionales</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 cta-single">
            <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".4s">
              <h2 class="counter-item text-white">
                <span class="odometer d-inline-block" data-odometer-final="250">.</span>
                <em>+</em>
              </h2>
              <p class="text-white">Visitas diarias</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 cta-single">
            <div class="cta-info text-center wow fadeInLeft" data-wow-delay=".6s">
              <h2 class="counter-item text-white">
                <span class="odometer d-inline-block" data-odometer-final="25">.</span>
                <em>+</em>
              </h2>
              <p class="text-white">Reconocimientos</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CTA End -->
    <!-- Testimonial -->
    <div class="testimonial-area bg_color_off_white pt-120 pb-120 position-relative z-index-one overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <span>Testimonios</span>
              <h2 class="mt-2">Clientes</h2>
            </div>
          </div>
        </div>
        <div class="row pt-60">
          <div class="col-lg-12">
            <div class="swiper testimonial-card">
              <div class="swiper-wrapper">
                <div class="swiper-slide testimonial-card-single text-center">
                  <div class="testimonial-card-img">
                    <img src="assets/images/testimonial/card-1.png" alt="">
                  </div>
                  <div class="testimonial-card-info">
                    <p><?php echo $lorem2; ?></p>
                    <h2 class="h2">Miguelina Ortiz</h2>
                    <span>Ama de casa</span>
                    <ul class="rating custom-ul d-flex justify-content-center align-items-center">
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide testimonial-card-single text-center">
                  <div class="testimonial-card-img">
                    <img src="assets/images/testimonial/card-1.png" alt="">
                  </div>
                  <div class="testimonial-card-info">
                    <p><?php echo $lorem2; ?></p>
                    <h2 class="h2">Miguel Perez</h2>
                    <span>Abogado</span>
                    <ul class="rating custom-ul d-flex justify-content-center align-items-center">
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide testimonial-card-single text-center">
                  <div class="testimonial-card-img">
                    <img src="assets/images/testimonial/card-1.png" alt="">
                  </div>
                  <div class="testimonial-card-info">
                    <p><?php echo $lorem2; ?></p>
                    <h2 class="h2">Daniela Perdomo</h2>
                    <span>Enfermera</span>
                    <ul class="rating custom-ul d-flex justify-content-center align-items-center">
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="testimonial-card-pagination mt-5 common-pagination text-center"></div>
            </div>
          </div>
        </div>
      </div>
      <img class="testimonial-anim-1 d-none d-lg-block position-absolute z-index-minus-one" src="assets/images/testimonial/testimonial-anim-1.svg" alt="">
      <img class="testimonial-anim-2 d-none d-lg-block position-absolute z-index-minus-one" src="assets/images/testimonial/testimonial-anim-2.svg" alt="">

      <img class="position-absolute z-index-minus-one top-0 start-0" src="assets/images/shape/sp-corn.svg" alt="">
      <img class="position-absolute z-index-minus-one bottom-0 end-0" src="assets/images/shape/sp-drinks.svg" alt="">
    </div>
    <!-- Testimonial End -->
    <!-- Instagram -->
    <div class="instagram-area pb-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div class="swiper instagram-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-1.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-2.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-3.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-4.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-5.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-6.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="swiper-slide instagram-img-wrap position-relative ">
                  <img src="assets/images/instagram/instagram-3.png" alt="">
                  <a class="instagram-icon position-absolute h-100 w-100 d-flex justify-content-center align-items-center top-0 start-0" href="#"><i class="bi bi-instagram"></i></a>
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
