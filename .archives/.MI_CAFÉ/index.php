<?php
  include_once 'layout/header.php';
?>
        <main id="content" class="site-main">
          <!-- home banner section html start -->
          <section class="home-banner" style="background-image: url(assets/images/banner-img1.jpg);">
              <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                      <div class="banner-content text-center">
                          <div class="sub-title">Bienvenido a nuestra cafeteria</div>
                          <h2 class="banner-title">Ven por el mejor café!</h2>
                          <div class="banner-button">
                            <a href="our-menu.php" class="button-primary">Nuestro menú</a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="overlay"></div>
          </section>
          <!-- home banner section html end -->
          <!-- home about section html start -->
          <section class="section-about">
              <div class="section-about-container">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-7 col-md-6">
                          <div class="section-heading">
                            <div class="sub-title">Como en casa</div>
                            <h2 class="section-title">La mejor opción!</h2>
                            <div class="title-divider">
                                <img src="assets/images/title-divider.png" alt="divider">
                            </div>
                          </div>
                          <div class="about-image">
                            <figure>
                                <img src="assets/images/img1.jpg" alt="about-image">
                            </figure>
                            <div class="about-contact">
                                <h4>Llamanos</h4>
                                <h3>+1 (123) 456789</h3>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-5 col-md-6">
                          <div class="about-content">
                            <p><?php echo $lorem1; ?></p>
                            <ul>
                                <li><i aria-hidden="true" class="icon icon-checked1"></i><?php echo $lorem4; ?></li>
                                <li><i aria-hidden="true" class="icon icon-checked1"></i><?php echo $lorem4; ?></li>
                                <li><i aria-hidden="true" class="icon icon-checked1"></i><?php echo $lorem4; ?>.</li>
                                <li><i aria-hidden="true" class="icon icon-checked1"></i><?php echo $lorem4; ?></li>
                            </ul>
                            <a href="about.php" class="button-primary">Más sobre nosotros</a>
                          </div>
                          <div class="about-video-banner d-flex align-items-center justify-content-center" style="background-image: url(assets/images/img2.jpg);">
                            <div class="video-button">
                                <a id="video-container" data-video-id="IUN664s7N-c">
                                  <i aria-hidden="true" class="icon icon-play1"></i>
                                </a>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="left-background-pattern">
                    <img src="assets/images/img5.png" alt="">
                </div>
                <div class="right-background-pattern">
                    <img src="assets/images/img4.png" alt="">
                </div>
              </div>
              <div class="about-icon-wrap">
                <div class="container">
                    <div class="about-icon-box icon-box-wrap" style="background-image: url(assets/images/img3.jpg);">
                      <div class="row">
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon-box">
                                  <i aria-hidden="true" class="icon icon-hot-stone"></i>
                                </div>
                                <div class="icon-box-content">
                                  <h4>Deliciosas Galletas</h4>
                                  <p><?php echo $lorem5; ?></p>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon-box">
                                  <i aria-hidden="true" class="icon icon-Money-2"></i>
                                </div>
                                <div class="icon-box-content">
                                  <h4>Excelentes Precios</h4>
                                  <p><?php echo $lorem5; ?></p>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon-box">
                                  <i aria-hidden="true" class="icon icon-house-2"></i>
                                </div>
                                <div class="icon-box-content">
                                  <h4>Como en casa</h4>
                                  <p><?php echo $lorem5; ?></p>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon-box">
                                  <i aria-hidden="true" class="icon icon-Coffee-cup"></i>
                                </div>
                                <div class="icon-box-content">
                                  <h4>Buen servicio</h4>
                                  <p><?php echo $lorem5; ?></p>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon-box">
                                  <i aria-hidden="true" class="icon icon-music-note"></i>
                                </div>
                                <div class="icon-box-content">
                                  <h4>Musica</h4>
                                  <p><?php echo $lorem5; ?></p>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="icon-box-item">
                                <div class="icon-box">
                                  <i aria-hidden="true" class="icon icon-wifi"></i>
                                </div>
                                <div class="icon-box-content">
                                  <h4>Internet gratis</h4>
                                  <p><?php echo $lorem5; ?></p>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="overlay"></div>
                    </div>
                </div>
              </div>
          </section>
          <!-- home about section html end -->
          <!-- home offer section html start -->
          <section class="offer-section" style="background-image: url(assets/images/img6.jpg);">
              <div class="container">
                <div class="section-heading text-center">
                    <div class="sub-title">UNA EXCELENTE ATENCIÓN</div>
                    <h2 class="section-title">Nuestros servicios</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                </div>
                <div class="offer-section-inner">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6">
                          <div class="offer-item text-center" style="background-image: url(assets/images/img11.jpg);">
                            <div class="offer-image">
                                <img src="assets/images/img7.png" alt="">
                            </div>
                            <div class="offer-content">
                                <h3>Café</h3>
                                <p><?php echo $lorem5; ?></p>
                                <a href="our-menu.php" class="button-primary">Ver Menú</a>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <div class="offer-item text-center" style="background-image: url(assets/images/img12.jpg);">
                            <div class="offer-image">
                                <img src="assets/images/img8.png" alt="">
                            </div>
                            <div class="offer-content">
                                <h3>Desayunos</h3>
                                <p><?php echo $lorem5; ?></p>
                                <a href="our-menu.php" class="button-primary">Ver Menú</a>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <div class="offer-item text-center" style="background-image: url(assets/images/img13.jpg);">
                            <div class="offer-image">
                                <img src="assets/images/img9.png" alt="">
                            </div>
                            <div class="offer-content">
                                <h3>Postres</h3>
                                <p><?php echo $lorem5; ?></p>
                                <a href="our-menu.php" class="button-primary">Ver Menú</a>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <div class="offer-item text-center" style="background-image: url(assets/images/img14.jpg);">
                            <div class="offer-image">
                                <img src="assets/images/img10.png" alt="">
                            </div>
                            <div class="offer-content">
                                <h3>Bebidas</h3>
                                <p><?php echo $lorem5; ?></p>
                                <a href="our-menu.php" class="button-primary">Ver Menú</a>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="overlay"></div>
          </section>
          <!-- home offer section html end -->
          <!-- home menu section html start -->
          <section class="section-menu">
              <div class="container">
                <div class="section-heading text-center">
                    <div class="sub-title">Nuestro Menú</div>
                    <h2 class="section-title">Ven por el mejor café</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                </div>
                <div class="menu-section-inner">
                    <div class="row g-0">
                      <div class="col-md-5 col-lg-4">
                          <div class="menu-column-wrap">
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$30.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$18.50</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$22.50</div>
                                </div>
                                <div class="menu-cat">
                                  <span>Baked Clams, Fried Calamari</span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$25.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$40.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$25.50</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$30.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$40.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-2 col-lg-4">
                          <div class="menu-image" style="background-image: url(assets/images/img23.png);"></div>
                      </div>
                      <div class="col-md-5 col-lg-4">
                          <div class="menu-column-wrap">
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$45.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$50.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$30.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$30.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$40.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$50.50</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$60.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-content">
                                  <h5>Nompre del producto</h5>
                                  <div class="dotted-divider"></div>
                                  <div class="menu-price">$35.00</div>
                                </div>
                                <div class="menu-cat">
                                  <span><?php echo $lorem5; ?></span>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="list-more-btn text-center">
                      <a href="our-menu.php" class="button-primary">Ver menú completo</a>
                    </div>
                </div>
              </div>
              <div class="left-background-pattern">
                <img src="assets/images/img24.png" alt="">
              </div>
              <div class="right-background-pattern">
                <img src="assets/images/img25.png" alt="">
              </div>
          </section>
          <!-- home menu section html end -->
          <!-- home our dishes section html start -->
          <section class="section-dish">
              <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                      <div class="dist-item">
                          <figure class="dist-image">
                            <img src="assets/images/img26.jpg" alt="">
                          </figure>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                      <div class="dist-item">
                          <div class="section-heading text-center">
                            <div class="sub-title">Galeria</div>
                            <h2 class="section-title">Fotos de nuestros platos</h2>
                            <div class="title-divider">
                                <img src="assets/images/title-divider.png" alt="divider">
                            </div>
                            <p><?php echo $lorem5; ?></p>
                            <a href="gallery.php" class="button-primary">Ver mas fotos</a>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="dist-item">
                          <figure class="dist-image">
                            <img src="assets/images/img27.jpg" alt="">
                          </figure>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="dist-item">
                          <figure class="dist-image">
                            <img src="assets/images/img28.jpg" alt="">
                          </figure>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                      <div class="dist-item">
                          <figure class="dist-image">
                            <img src="assets/images/img29.jpg" alt="">
                          </figure>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                      <div class="dist-item">
                          <figure class="dist-image">
                            <img src="assets/images/img30.jpg" alt="">
                          </figure>
                      </div>
                    </div>
                </div>
              </div>
          </section>
          <!-- home our dishes section html end -->
          <!-- home callback section html start -->
          <section class="section-callback imagebg-callback" style="background-image: url(assets/images/footer-banner.jpg);">
              <div class="overlay"></div>
              <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="section-heading">
                          <div class="sub-title">OFERTA</div>
                          <h2 class="section-title">Este producto a 50% de descuento!</h2>
                          <div class="title-divider">
                            <img src="assets/images/title-divider.png" alt="divider">
                          </div>
                          <p><?php echo $lorem1; ?></p>
                          <a href="reservation.php" class="button-primary">Ordenar ahora!</a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <figure class="callback-img text-center">
                          <div class="discount-badge">
                            <h4>HOY!</h4>
                            <h3>-50% <span></span></h3>
                            <span>Pidelo ya!</span>
                          </div>
                          <img src="assets/images/img65.png" alt="">
                      </figure>
                    </div>
                </div>
              </div>
          </section>
          <!-- home callback section html end -->
          <!-- home Main Course section html start -->
          <section class="section-cousre">
              <div class="container">
                <div class="section-heading text-center">
                    <div class="sub-title">Lo más solicitado</div>
                    <h2 class="section-title">En nuestro menú</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                </div>
                <div class="cousre-section-inner">
                    <div class="row">
                      <div class="col-md-4">
                          <article class="course-item">
                            <div class="meta-cat">
                                <span>Producto #1</span>
                            </div>
                            <div class="course-image">
                                <img src="assets/images/img32.png" alt="">
                                <span class="course-price">
                                  $30
                                </span>
                            </div>
                            <div class="course-content">
                                <h4>Nombre del producto</h4>
                                <p><?php echo $lorem2; ?></p>
                            </div>
                          </article>
                      </div>
                      <div class="col-md-4">
                          <article class="course-item">
                            <div class="meta-cat">
                                <span>Producto #2</span>
                            </div>
                            <div class="course-image">
                                <img src="assets/images/img33.png" alt="">
                                <span class="course-price">
                                $40
                                </span>
                            </div>
                            <div class="course-content">
                                <h4>Nombre del producto</h4>
                                <p><?php echo $lorem2; ?></p>
                            </div>
                          </article>
                      </div>
                      <div class="col-md-4">
                          <article class="course-item">
                            <div class="meta-cat">
                                <span>Producto #3</span>
                            </div>
                            <div class="course-image">
                                <img src="assets/images/img34.png" alt="">
                                <span class="course-price">
                                  $50
                                </span>
                            </div>
                            <div class="course-content">
                                <h4>Nombre del producto</h4>
                                <p><?php echo $lorem2; ?></p>
                            </div>
                          </article>
                      </div>
                    </div>
                    <div class="list-more-btn text-center">
                      <a href="main-course.php" class="button-primary">Ver más</a>
                    </div>
                </div>
              </div>
              <div class="left-background-pattern">
                <img src="assets/images/img35.png" alt="">
              </div>
          </section>
          <!-- home Main Course section html end -->
          <!-- home Testimonial section html start -->
          <section class="section-testimonial">
              <div class="container">
                <div class="section-heading text-center">
                    <div class="sub-title">Testimonios</div>
                    <h2 class="section-title">Nuestro Clientes</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                </div>
                <div class="testimonial-section-inner testimonial-slider">
                    <div class="testimonial-item">
                      <div class="row align-items-center">
                          <div class="col-md-6">
                            <div class="testimonial-content">
                                <span class="quote-icon">
                                  <img src="assets/images/img36.png" alt="">
                                </span>
                                <p><?php echo $lorem1; ?></p>
                                <h3>Nombre Apellido</h3>
                                <span class="company">Profesión</span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <figure class="testimonial-img">
                                <img src="assets/images/img37.jpg" alt="">
                            </figure>
                          </div>
                      </div>
                    </div>
                    <div class="testimonial-item">
                      <div class="row align-items-center">
                          <div class="col-md-6">
                            <div class="testimonial-content">
                                <span class="quote-icon">
                                  <img src="assets/images/img36.png" alt="">
                                </span>
                                <p><?php echo $lorem1; ?></p>
                                <h3>Nombre Apellido</h3>
                                <span class="company">Profesión</span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <figure class="testimonial-img">
                                <img src="assets/images/img39.jpg" alt="">
                            </figure>
                          </div>
                      </div>
                    </div>
                    <div class="testimonial-item">
                      <div class="row align-items-center">
                          <div class="col-md-6">
                            <div class="testimonial-content">
                                <span class="quote-icon">
                                  <img src="assets/images/img38.html" alt="">
                                </span>
                                <p><?php echo $lorem1; ?></p>
                                <h3>Nombre Apellido</h3>
                                <span class="company">Profesión</span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <figure class="testimonial-img">
                                <img src="assets/images/img37.jpg" alt="">
                            </figure>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="left-background-pattern">
                <img src="assets/images/img5.png" alt="">
              </div>
              <div class="right-background-pattern">
                <img src="assets/images/img4.png" alt="">
              </div>
          </section>
          <!-- home Testimonial section html end -->
          <!-- home Form section html start -->
          <section class="section-booking" style="background-image: url(assets/images/img41.jpg);">
              <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-7">
                      <div class="booking-form-wrap">
                          <div class="section-heading">
                            <div class="sub-title">Reservar</div>
                            <h2 class="section-title">Reserva tu Mesa</h2>
                            <div class="title-divider">
                                <img src="assets/images/title-divider.png" alt="divider">
                            </div>
                          </div>
                          <form method="get" class="booking-form">
                            <p class="full-width">
                                <input type="text" name="name" placeholder="Nombre">
                            </p>
                            <p>
                                <input type="number" name="number" placeholder="N° de personas">
                            </p>
                            <p>
                                <input class="input-date-picker" type="text" name="s" placeholder="D/ M / A" autocomplete="off" readonly="readonly">
                            </p>
                            <p>
                                <input class="input-time-picker" type="text" name="s" placeholder="Tiempo" autocomplete="off" readonly="readonly">
                            </p>
                            <p >
                                <input type="number" name="guest" placeholder="Numero">
                            </p>
                            <p class="full-width">
                                <input type="submit" name="travel-search" value="Reservar">
                            </p>
                          </form>
                          <div class="right-background-pattern">
                            <img src="assets/images/img4.png" alt="">
                          </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <figure class="booking-img">
                          <img src="assets/images/img40.png" alt="">
                      </figure>
                    </div>
                </div>
              </div>
              <div class="overlay"></div>
          </section>
          <!-- home Form section html end -->
          <!-- home blog section html start -->
          <section class="blog-section">
              <div class="container">
                <div class="section-heading text-center">
                    <div class="sub-title">Articulos</div>
                    <h2 class="section-title">Recientes Articulos</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <article class="post">
                          <figure class="feature-image">
                            <a href="blog-single.php">
                                <img src="assets/images/img15.jpg" alt="">
                            </a>
                          </figure>
                          <div class="entry-content">
                            <h4>
                                <a href="blog-single.php">TITULO DE BLOG #1</a>
                            </h4>
                            <div class="entry-meta">
                                <span class="posted-on">
                                  <a href="blog-archive.php">Marzo 18, 2024</a>
                                </span>
                                <span class="comments-link">
                                  <a href="blog-single.php">10 Comentarios</a>
                                </span>
                            </div>
                          </div>
                      </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <article class="post">
                          <figure class="feature-image">
                            <a href="blog-single.php">
                                <img src="assets/images/img16.jpg" alt="">
                            </a>
                          </figure>
                          <div class="entry-content">
                            <h4>
                                <a href="blog-single.php">TITULO DE BLOG #2</a>
                            </h4>
                            <div class="entry-meta">
                                <span class="posted-on">
                                  <a href="blog-archive.php">Marzo 17, 2024</a>
                                </span>
                                <span class="comments-link">
                                  <a href="blog-single.php">10 comentarios</a>
                                </span>
                            </div>
                          </div>
                      </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <article class="post">
                          <figure class="feature-image">
                            <a href="blog-single.html">
                                <img src="assets/images/img17.jpg" alt="">
                            </a>
                          </figure>
                          <div class="entry-content">
                            <h4>
                                <a href="blog-single.php">TITULO DE BLOG #3</a>
                            </h4>
                            <div class="entry-meta">
                                <span class="posted-on">
                                  <a href="blog-archive.php">Marzo 16, 2024</a>
                                </span>
                                <span class="comments-link">
                                  <a href="blog-single.php">15 comentarios</a>
                                </span>
                            </div>
                          </div>
                      </article>
                    </div>
                </div>
              </div>
          </section>
          <!-- home blog section html end -->
          <!-- home client section html start -->
          <div class="section-client">
              <div class="container">
                <div class="client-wrap client-slider text-center">
                    <div class="client-item">
                      <figure>
                          <img src="assets/images/img18.png" alt="">
                      </figure>
                    </div>
                    <div class="client-item">
                      <figure>
                          <img src="assets/images/img19.png" alt="">
                      </figure>
                    </div>
                    <div class="client-item">
                      <figure>
                          <img src="assets/images/img20.png" alt="">
                      </figure>
                    </div>
                    <div class="client-item">
                      <figure>
                          <img src="assets/images/img21.png" alt="">
                      </figure>
                    </div>
                    <div class="client-item">
                      <figure>
                          <img src="assets/images/img22.png" alt="">
                      </figure>
                    </div>
                    <div class="client-item">
                      <figure>
                          <img src="assets/images/img19.png" alt="">
                      </figure>
                    </div>
                </div>
              </div>
          </div>
          <!-- home client section html end -->
        </main>
<?php
  include_once 'layout/footer.php';
?>
