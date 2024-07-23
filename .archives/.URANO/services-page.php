<?php
  include_once("layout/header.php");
?>
  <!-- Header Banner -->
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
    data-background="img/slider/05.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-left caption mt-90">
          <h5 class="animate-box" data-animate-effect="fadeInUp"><a href="index.php#services">Services</a> / Ejemplo</h5>
          <h1 class="animate-box" data-animate-effect="fadeInUp">Diseño web</h1>
          <hr class="animate-box" data-animate-effect="fadeInUp">
          <p class="animate-box" data-animate-effect="fadeInUp" style="text-align: justify;"><?php echo $lorem2; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- hr -->
  <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
  <!-- Services Page -->
  <div class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p style="text-align: justify;"><?php echo $lorem1; $lorem;  ?></p>
          <!-- Gallery -->
          <div class="row mb-30">
            <div class="col-md-6 gallery-item animate-box" data-animate-effect="fadeInUp">
              <a href="img/portfolio/02.jpg" title="NoPixel" class="img-zoom">
                <div class="gallery-box">
                  <div class="gallery-img"> <img src="img/portfolio/02.jpg" class="img-fluid mx-auto d-block"
                      alt="Lfa."> </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 gallery-item animate-box" data-animate-effect="fadeInUp">
              <a href="img/portfolio/04.jpg" title="NoPixel" class="img-zoom">
                <div class="gallery-box">
                  <div class="gallery-img"> <img src="img/portfolio/04.jpg" class="img-fluid mx-auto d-block"
                      alt="E.E."> </div>
                </div>
              </a>
            </div>
            <div class="col-md-12 gallery-item animate-box" data-animate-effect="fadeInUp">
              <a href="img/portfolio/09.jpg" title="NoPixel" class="img-zoom">
                <div class="gallery-box">
                  <div class="gallery-img"> <img src="img/portfolio/09.jpg" class="img-fluid mx-auto d-block"
                      alt="Yvonne Scott"> </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- Sidebar -->
        <div class="col-md-4 sidebar-side">
          <aside class="sidebar blog-sidebar">
            <div class="sidebar-widget services">
              <div class="widget-inner">
                <div class="sidebar-title">
                  <h5>Todos los Servicios</h5>
                </div>
                <ul>
                  <li class="active"><a href="services-page.php">Servicio 1</a></li>
                  <li><a href="services-page.php">Servicio 2</a></li>
                  <li><a href="services-page.php">Servicio 3</a></li>
                  <li><a href="services-page.php">Servicio 4</a></li>
                  <li><a href="services-page.php">Servicio 5</a></li>
                  <li><a href="services-page.php">Servicio 6</a></li>
                </ul>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <!-- hr -->
  <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
  <!-- Promo video - Testiominals -->
  <div class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner.jpg" data-overlay-dark="3">
      <div class="container">
        <div class="row">
  <?php
  include_once("layout/footer.php");
?>
