<?php
  include_once("layout/header.php");
?>
  <!-- Header Banner -->
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
    data-background="img/slider/04.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center caption mt-90">
          <h5 class="animate-box" data-animate-effect="fadeInUp"><a href="index.php#portfolio">Principal</a> / Proyectos</h5>
          <h1 class="animate-box" data-animate-effect="fadeInUp">Proyecto .01</h1>
          <hr class="animate-box" data-animate-effect="fadeInUp">
          <p class="animate-box" data-animate-effect="fadeInUp" style="text-align: justify;"><?php echo $lorem3; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- hr -->
  <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
  <!-- Project Page -->
  <div class="section-padding bg-color">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12 gallery-item">
              <a href="img/portfolio/05.jpg" title="" class="img-zoom">
                <div class="gallery-box">
                  <div class="gallery-img"> <img src="img/portfolio/05.jpg" class="img-fluid mx-auto d-block" alt="">
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-15">
          <p style="text-align: justify;"><?php echo $lorem1; echo $lorem1;  ?></p>
          <p><b>Fecha : </b> 10 Oct 2023</p>
          <p><b>Cliente : </b> Maria Jimenez</p>
          <p><b>Autor : </b> Designioss</p>
          <p><b>Categoria : </b><?php echo $lorem1; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Prev-Next Projects -->
  <div class="projects-prev-next">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="d-sm-flex align-items-center justify-content-between">
            <div class="projects-prev-next-left">
              <a href="index.php#portfolio"> <i class="ti-arrow-left"></i> Anterior</a>
            </div> <a href="index.php#portfolio"><i class="ti-layout-grid3-alt"></i></a>
            <div class="projects-prev-next-right"> <a href="portfolio-page.php">Siguiente<i
                  class="ti-arrow-right"></i></a> </div>
          </div>
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
