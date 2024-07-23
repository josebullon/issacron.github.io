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
                    <h1 class="text-white">Menu 02</h1>
                    <p class="text-white mt-3"><a href='index.php'>Principal</a><i class="bi bi-chevron-right ms-2 me-2"></i>Menu 02</p>
                </div>
              </div>
          </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Food Menu -->
    <div class="food-menu-two pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <span>Nuestro Menú</span>
              <h2 class="mt-2">Menu Principal</h2>
            </div>
          </div>
        </div>
        <div class="row pt-60 gy-5">
          <div class="col-lg-12 wow fadeIn" data-wow-delay=".4s">
            <div class="row gy-4">
              <div class="col-lg-3">
                <div class="food-menu-two-category d-flex flex-column align-items-center justify-content-between h-100" style="background-image: url(assets/images/food-menu/slider-bg-1.png);">
                  <h2 class="text_color_white">Desayuno</h2>
                  <div class="slider-button-wrap d-flex mt-4 mt-lg-0">
                    <div class="food-menu-two-button-prev slide-btn-prev"><i class="bi bi-arrow-left"></i></div>
                    <div class="food-menu-two-button-next slide-btn-next"><i class="bi bi-arrow-right"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="swiper food-menu-two-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-1.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$15
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-2.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$17
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-3.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-1.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 wow fadeIn" data-wow-delay=".4s">
            <div class="row gy-4">
              <div class="col-lg-3">
                <div class="food-menu-two-category d-flex flex-column align-items-center justify-content-between h-100" style="background-image: url(assets/images/food-menu/slider-bg-2.png);">
                  <h2 class="text_color_white">Almuerzo</h2>
                  <div class="slider-button-wrap d-flex mt-4 mt-lg-0">
                    <div class="food-menu-two-button-prev-two slide-btn-prev"><i class="bi bi-arrow-left"></i></div>
                    <div class="food-menu-two-button-next-two slide-btn-next"><i class="bi bi-arrow-right"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="swiper food-menu-two-slider-two">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-4.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-5.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-6.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-1.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 wow fadeIn" data-wow-delay=".4s">
            <div class="row gy-4">
              <div class="col-lg-3">
                <div class="food-menu-two-category d-flex flex-column align-items-center justify-content-between h-100" style="background-image: url(assets/images/food-menu/slider-bg-3.png);">
                  <h2 class="text_color_white">Cena</h2>
                  <div class="slider-button-wrap d-flex mt-4 mt-lg-0">
                    <div class="food-menu-two-button-prev-three slide-btn-prev"><i class="bi bi-arrow-left"></i></div>
                    <div class="food-menu-two-button-next-three slide-btn-next"><i class="bi bi-arrow-right"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="swiper food-menu-two-slider-three">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-9.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-7.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-8.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="food-menu-two-box overflow-hidden">
                        <div class="food-menu-two-img overflow-hidden">
                          <img class="w-100" src="assets/images/food-menu/menu-two-9.png" alt="">
                        </div>
                        <div class="food-menu-two-info">
                          <h2 class="h2"><?php echo $plato; ?></h2>
                          <span class="d-inline-block mb-1">Peso (250 gr.)</span>
                          <ul class="rating custom-ul d-flex align-items-center">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                          </ul>
                          <p><?php echo $lorem2; ?></p>
                          <h3>$10
                            <a href="#">
                              <svg class="add-cart-button" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13" cy="13" r="12.25" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M13 8.5V13M13 13V17.5M13 13H17.5M13 13L8.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Food Menu End -->
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
    <!-- Instagram -->
    <div class="instagram-area pt-120 pb-2">
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
