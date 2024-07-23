<?php include_once 'header.php'; ?>

    <!-- Slider -->
    <header id="home" class="header slider-fade" data-scroll-index="0">
      <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number".You can change it using the numbers 0-9. -->
        <div class="text-left item bg-img" data-overlay-dark="4" data-background="img/slider/01.jpg">
          <div class="v-middle caption">
            <div class="container">
              <div class="row">
                <div class="col-md-7 mt-30">
                  <div class="o-hidden">
                    <h6>Agencia</h6>
                    <h1>Soluciones
                      <br />
                      <span>Tecnologicas</span>
                    </h1>
                    <a href="#0" class="btn-curve btn-borderyellow">
                      <span>Servicios</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="4" data-background="img/slider/02.jpg">
          <div class="v-middle caption">
            <div class="container">
              <div class="row">
                <div class="col-md-7 mt-30">
                  <div class="o-hidden">
                    <h6>Programación</h6>
                    <h1>Codigos Optimos
                      <br />
                      <span>Informaticos</span>
                    </h1>
                    <a href="#0" class="btn-curve btn-borderyellow">
                      <span>Portafolio</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="4" data-background="img/slider/03.jpg">
          <div class="v-middle caption">
            <div class="container">
              <div class="row">
                <div class="col-md-7 mt-30">
                  <div class="o-hidden">
                    <h6>Diseños Web</h6>
                    <h1>Creativos
                      <br />
                      <span>Actualizados</span>
                    </h1>
                    <a href="#0" class="btn-curve btn-borderyellow">
                      <span>Diseños</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- hr -->
    <hr class="line-vr-section" />
    <!-- Servicios -->
    <div id="services" class="services section-padding" data-scroll-index="1">
      <div class="container">
        <div class="row">
          <div class="section-head mb-30 col-md-12">
            <div class="section-subtitle">Que Ofrecemos?</div>
            <div class="section-title"><?php echo $nav2; ?></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            <div class="item">
              <a href="services-page.html">
                <span class="icon et-laptop"></span>
                <h5><?php echo $lorem4; ?></h5>
                <div class="line"></div>
                <p><?php echo $lorem2; ?></p>
                <div class="numb">01</div>
              </a>
            </div>
          </div>
          <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            <div class="item">
              <a href="services-page.html">
                <span class="icon et-bargraph"></span>
                <h5><?php echo $lorem4; ?></h5>
                <div class="line"></div>
                <p><?php echo $lorem2; ?></p>
                <div class="numb">02</div>
              </a>
            </div>
          </div>
          <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            <div class="item">
              <a href="services-page.html">
                <span class="icon et-basket"></span>
                <h5><?php echo $lorem4; ?></h5>
                <div class="line"></div>
                <p><?php echo $lorem2; ?></p>
                <div class="numb">03</div>
              </a>
            </div>
          </div>
          <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            <div class="item">
              <a href="services-page.html">
                <span class="icon et-browser"></span>
                <h5><?php echo $lorem4; ?></h5>
                <div class="line"></div>
                <p><?php echo $lorem2; ?></p>
                <div class="numb">04</div>
              </a>
            </div>
          </div>
          <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            <div class="item">
              <a href="services-page.html">
                <span class="icon et-target"></span>
                <h5><?php echo $lorem4; ?></h5>
                <div class="line"></div>
                <p><?php echo $lorem2; ?></p>
                <div class="numb">05</div>
              </a>
            </div>
          </div>
          <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            <div class="item">
              <a href="services-page.html">
                <span class="icon et-chat"></span>
                <h5><?php echo $lorem4; ?></h5>
                <div class="line"></div>
                <p><?php echo $lorem2; ?></p>
                <div class="numb">06</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Nosotros -->
    <div id="about" class="about section-padding bg-color" data-scroll-index="2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
            <div class="section-subtitle">Bienvenidos</div>
            <div class="section-title"><?php echo $title; ?> <br /><span><?php echo $tema; ?></span></div>
            <p class="txt">
              <?php echo $lorem1; ?>
            </p>
            <p class="txt">
              <?php echo $lorem1; ?>
            </p>
            <p class="txt">
              <?php echo $lorem1; ?>
            </p>
          </div>
          <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
            <div class="about-img">
              <div class="img"><img src="img/about.jpg" class="img-fluid" alt="" /></div>
              <div class="about-img-2 about-since"><?php echo $title; ?> <br />12 Años.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Equipo -->
    <div id="team" class="team section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section-subtitle">Nuestro</div>
            <div class="section-title">Equipo</div>
            <p class="mb-45 txt"><?php echo $lorem1; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 owl-carousel owl-theme">
            <div class="item">
              <div class="img"><img src="img/team/1.jpg" alt="" /></div>
              <div class="info">
                <h6>Nombre Apellido</h6>
                <p>Cargo que Ocupa</p>
                <div class="social valign">
                  <div class="full-width">
                    <p><?php echo $lorem4; ?></p>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="img"><img src="img/team/2.jpg" alt="" /></div>
              <div class="info">
                <h6>Nombre Apellido</h6>
                <p>Cargo que Ocupa</p>
                <div class="social valign">
                  <div class="full-width">
                    <p><?php echo $lorem4; ?></p>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="img"><img src="img/team/3.jpg" alt="" /></div>
              <div class="info">
                <h6>Nombre Apellido</h6>
                <p>Cargo que Ocupa</p>
                <div class="social valign">
                  <div class="full-width">
                    <p><?php echo $lorem4; ?></p>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="img"><img src="img/team/4.jpg" alt="" /></div>
              <div class="info">
                <h6>Nombre Apellido</h6>
                <p>Cargo que Ocupa</p>
                <div class="social valign">
                  <div class="full-width">
                    <p><?php echo $lorem4; ?></p>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="img"><img src="img/team/5.jpg" alt="" /></div>
              <div class="info">
                <h6>Nombre Apellido</h6>
                <p>Cargo que Ocupa</p>
                <div class="social valign">
                  <div class="full-width">
                    <p><?php echo $lorem4; ?></p>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="img"><img src="img/team/6.jpg" alt="" /></div>
              <div class="info">
                <h6>Nombre Apellido</h6>
                <p>Cargo que Ocupa</p>
                <div class="social valign">
                  <div class="full-width">
                    <p><?php echo $lorem4; ?></p>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Portafolio -->
    <div id="portfolio" class="section-padding bg-color" data-scroll-index="3">
      <div class="container">
        <div class="row">
          <div class="section-head mb-30 col-md-12">
            <div class="section-subtitle"><?php echo $nav4; ?></div>
            <div class="section-title">Proyectos</div>
          </div>
        </div>
        <div class="row">
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/01.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .01</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/02.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .02</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/03.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .03</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/04.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .04</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/05.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .05</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/06.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .06</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/07.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .07</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/08.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .08</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="project-container col-md-4">
            <a href="portfolio-page.html">
              <div class="project-zoomer">
                <img src="img/portfolio/09.jpg" alt="" />
                <div class="overlay">
                  <div class="project-texts">
                    <h5>Proyecto .09</h5>
                    <div class="line"></div>
                    <p class="txt" ><?php echo $lorem2; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Precios -->
    <div id="pricing" class="price section-padding" data-scroll-index="4">
      <div class="container">
        <div class="row">
          <div class="section-head mb-30 col-md-12">
            <div class="section-subtitle">Precios</div>
            <div class="section-title">Plan de <span>Precios</span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="item">
              <div class="cont">
                <div class="type">
                  <h5>PLATA</h5>
                </div>
                <div class="value">
                  <h1>3000<span>$</span></h1>
                  <p><?php echo $lorem4; ?></p>
                </div>
                <div class="feat">
                  <ul>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                    <li><del><?php echo $lorem4; ?></del></li>
                    <li><?php echo $lorem4; ?></li>
                  </ul>
                </div>
              </div>
              <a href="#0" class="btn-curve btn-borderyellow text-center">
                <span>Comprar</span>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="cont">
                <div class="type">
                  <h5>ORO</h5>
                </div>
                <div class="value">
                  <h1>6000<span>$</span></h1>
                  <p><?php echo $lorem4; ?></p>
                </div>
                <div class="feat">
                  <ul>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                    <li><del><?php echo $lorem4; ?></del></li>
                    <li><?php echo $lorem4; ?></li>
                  </ul>
                </div>
              </div>
              <a href="#0" class="btn-curve btn-borderyellow text-center">
                <span>Comprar</span>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="cont">
                <div class="type">
                  <h5>DIAMANTE</h5>
                </div>
                <div class="value">
                  <h1>9000<span>$</span></h1>
                  <p><?php echo $lorem4; ?></p>
                </div>
                <div class="feat">
                  <ul>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                    <li><del><?php echo $lorem4; ?></del></li>
                    <li><?php echo $lorem4; ?></li>
                  </ul>
                </div>
              </div>
              <a href="#0" class="btn-curve btn-borderyellow text-center">
                <span>Comprar</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Imagen & Video Gallería -->
    <div id="gallery" class="section-padding bg-color" data-scroll-index="5">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-subtitle">Productos</div>
            <div class="section-title"><?php echo $nav6; ?> <br />
              <span>Imagen & Video</span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- 2 columns -->
          <div class="col-md-6 gallery-item">
            <a href="img/portfolio/1.jpg" title="" class="img-zoom">
              <div class="gallery-box">
                <div class="gallery-img">
                  <img src="img/portfolio/1.jpg" class="img-fluid mx-auto d-block" alt="" />
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 gallery-item">
            <a href="img/portfolio/2.jpg" title="" class="img-zoom">
              <div class="gallery-box">
                <div class="gallery-img">
                  <img src="img/portfolio/2.jpg" class="img-fluid mx-auto d-block" alt="" />
                </div>
              </div>
            </a>
          </div>
          <!-- 3 columns -->
          <div class="col-md-4 gallery-item">
            <a href="img/portfolio/3.jpg" title="" class="img-zoom">
              <div class="gallery-box">
                <div class="gallery-img">
                  <img src="img/portfolio/3.jpg" class="img-fluid mx-auto d-block" alt="" />
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 gallery-item">
            <a href="img/portfolio/4.jpg" title="" class="img-zoom">
              <div class="gallery-box">
                <div class="gallery-img">
                  <img src="img/portfolio/4.jpg" class="img-fluid mx-auto d-block" alt="" />
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 gallery-item">
            <a href="img/portfolio/5.jpg" title="" class="img-zoom">
              <div class="gallery-box">
                <div class="gallery-img">
                  <img src="img/portfolio/5.jpg" class="img-fluid mx-auto d-block" alt="" />
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <!-- 3 columns video -->
          <div class="col-md-4">
            <div class="vid-area mt-20 mb-30">
              <div class="vid-icon">
                <img src="img/portfolio/07.jpg" alt="YouTube" />
                <a class="video-gallery-button vid" href="https://youtu.be/1Lct7c0ZZ5s">
                  <span class="video-gallery-polygon">
                    <i class="ti-control-play"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="vid-area mt-20 mb-30">
              <div class="vid-icon">
                <img src="img/portfolio/06.jpg" alt="YouTube" />
                <a class="video-gallery-button vid" href="https://youtu.be/1Lct7c0ZZ5s">
                  <span class="video-gallery-polygon">
                    <i class="ti-control-play"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="vid-area mt-20 mb-30">
              <div class="vid-icon">
                <img src="img/portfolio/05.jpg" alt="YouTube" />
                <a class="video-gallery-button vid" href="https://youtu.be/1Lct7c0ZZ5s">
                  <span class="video-gallery-polygon">
                    <i class="ti-control-play"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Blog -->
    <div id="blog" class="nopixel-blog section-padding" data-scroll-index="6">
      <div class="container">
        <div class="row mb-30">
          <div class="section-head col-md-12">
            <div class="section-subtitle"><?php echo $nav7; ?></div>
            <div class="section-title">Post</div>
          </div>
        </div>
        <div class="row mb-30">
          <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
            <div class="img left">
              <a href="post.html"><img src="img/slider/01.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-md-6 valign animate-box" data-animate-effect="fadeInRight">
            <div class="content">
              <div class="date">
                <h1>03</h1>
                <h6><?php echo date('M');?> <?php echo date('Y');?></h6>
              </div>
              <div class="cont">
                <div class="info">
                  <h6>Admin / <a href="#0" class="tags">9 Comentarios</a></h6>
                </div>
                <h5><?php echo $lorem4; ?></h5>
                <a href="post.html" class="more" data-splitting="">
                  <span>Leer Más</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-30">
          <div class="col-md-6 order2 valign animate-box" data-animate-effect="fadeInLeft">
            <div class="content">
              <div class="date">
                <h1>06</h1>
                <h6><?php echo date('M');?> <?php echo date('Y');?></h6>
              </div>
              <div class="cont">
                <div class="info">
                  <h6><a href="#0">Admin</a> / <a href="#0" class="tags">18 Comentarios</a></h6>
                </div>
                <h5><?php echo $lorem4; ?></h5>
                <a href="post.html" class="more" data-splitting="">
                  <span>Leer Más</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order1 animate-box" data-animate-effect="fadeInRight">
            <div class="img left">
              <a href="post.html"><img src="img/slider/03.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Contact -->
    <div id="contact" class="contact section-padding bg-color" data-scroll-index="7">
      <div class="container">
        <div class="row mb-30">
          <div class="section-head col-md-12">
            <div class="section-subtitle">Információn</div>
            <div class="section-title"> Contactanos</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-30">
            <h5><?php echo $tema, $title; ?></h5>
            <p class="txt" ><?php echo $lorem1; ?></p>
            <p><b>Teléfono :</b> <?php echo $telefono; ?></p>
            <p><b>Fax :</b> <?php echo $telefono; ?></p>
            <p><b>Correo :</b> <?php echo $correo; ?></p>
            <p><b>Dirección :</b><?php echo $lorem4; ?></p>
          </div>
          <div class="col-md-5 offset-md-1">
            <h5>Contactame</h5>
            <form method="post" class="contact__form" action="#">
              <!-- Form message -->
              <div class="row">
                <div class="col-12">
                  <div class="alert alert-success contact__msg" style="display: none" role="alert">
                    Tu mensaje fue enviado...
                  </div>
                </div>
              </div>
              <!-- Form elements -->
              <div class="row">
                <div class="col-md-12 form-group">
                  <input name="name" type="text" placeholder="Nombre *" required />
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="email" placeholder="Correo *" required />
                </div>
                <div class="col-md-6 form-group">
                  <input name="phone" type="text" placeholder="Telefono *" required />
                </div>
                <div class="col-md-12 form-group">
                  <input name="subject" type="text" placeholder="Asunto *" required />
                </div>
                <div class="col-md-12 form-group">
                  <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensaje *" required></textarea>
                </div>
                <div class="col-md-12">
                  <input name="submit" type="submit" value="Enviar Mensaje" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- hr -->
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp" />
    <!-- Promo video - Testiominals -->
    <div class="testimonials">
      <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner.jpg" data-overlay-dark="3">
        <div class="container">
          <div class="row">
            <!-- Promo video -->
            <div class="col-md-6">
              <div class="vid-area">
                <a class="play-button vid" href="https://youtu.be/qvYTCPMg33Q">
                  <svg class="circle-fill">
                    <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                  </svg>
                  <svg class="circle-track">
                    <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                  </svg>
                  <span class="polygon">
                    <i class="ti-control-play"></i>
                  </span>
                </a>
                <div class="cont mt-15 mb-30">
                  <h5>Video</h5>
                </div>
              </div>
            </div>
            <!-- Testiominals -->
            <div class="col-md-5 offset-md-1">
              <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                <div class="head-box">
                  <h4>Clientes</h4>
                </div>
                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <span class="quote"><img src="img/quot.png" alt="" /></span>
                    <p claa="txt" ><?php echo $lorem1; ?></p>
                    <div class="info">
                      <div class="author-img"><img src="img/team/1.jpg" alt="" /></div>
                      <div class="cont">
                        <h6>Nombre Apellido</h6> <span>Cargo</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span class="quote">
                      <img src="img/quot.png" alt="" />
                    </span>
                    <p claa="txt" ><?php echo $lorem1; ?></p>
                    <div class="info">
                      <div class="author-img"><img src="img/team/2.jpg" alt="" /></div>
                      <div class="cont">
                        <h6>Nombre Apellido</h6> <span>Cargo</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span class="quote">
                      <img src="img/quot.png" alt="" />
                    </span>
                    <p claa="txt" ><?php echo $lorem1; ?></p>
                    <div class="info">
                      <div class="author-img"><img src="img/team/4.jpg" alt="" /></div>
                      <div class="cont">
                        <h6>Nombre Apellido</h6> <span>Cargo</span>
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
    <!-- Clients -->
    <div class="clients">
      <div class="container">
        <div class="row">
          <div class="col-md-7 owl-carousel owl-theme">
            <div class="clients-logo">
              <a href="#0"><img src="img/clients/1.png" alt="" /></a>
            </div>
            <div class="clients-logo">
              <a href="#0"><img src="img/clients/2.png" alt="" /></a>
            </div>
            <div class="clients-logo">
              <a href="#0"><img src="img/clients/3.png" alt="" /></a>
            </div>
            <div class="clients-logo">
              <a href="#0"><img src="img/clients/4.png" alt="" /></a>
            </div>
            <div class="clients-logo">
              <a href="#0"><img src="img/clients/5.png" alt="" /></a>
            </div>
            <div class="clients-logo">
              <a href="#0"><img src="img/clients/6.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once 'footer.php'; ?>
