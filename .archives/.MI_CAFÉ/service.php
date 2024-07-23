<?php
  include_once("layout/header.php");
?>
    <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
          <div class="container">
            <div class="inner-banner-content">
              <h1 class="page-title">Services</h1>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <!-- Inner Banner html end-->
      <!-- service html start -->
      <div class="service-page-section">
        <div class="service-page-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="service-icon-box d-flex align-items-center flex-wrap">
                  <div class="service-icon">
                    <i aria-hidden="true" class="icon icon-dinner"></i>
                  </div>
                  <div class="service-icon-content">
                    <h4>Servicio #1</h4>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="service-icon-box d-flex align-items-center flex-wrap">
                  <div class="service-icon">
                    <i aria-hidden="true" class="icon icon-users"></i>
                  </div>
                  <div class="service-icon-content">
                    <h4>Servicio #2</h4>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="service-icon-box d-flex align-items-center flex-wrap">
                  <div class="service-icon">
                    <i aria-hidden="true" class="icon icon-hot-stone"></i>
                  </div>
                  <div class="service-icon-content">
                    <h4>Servicio #3</h4>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="service-icon-box d-flex align-items-center flex-wrap">
                  <div class="service-icon">
                    <i aria-hidden="true" class="icon icon-document"></i>
                  </div>
                  <div class="service-icon-content">
                    <h4>Servicio #4</h4>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="service-icon-box d-flex align-items-center flex-wrap">
                  <div class="service-icon">
                    <i aria-hidden="true" class="icon icon-van"></i>
                  </div>
                  <div class="service-icon-content">
                    <h4>Servicio #5</h4>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="service-icon-box d-flex align-items-center flex-wrap">
                  <div class="service-icon">
                    <i aria-hidden="true" class="icon icon-drink-glass"></i>
                  </div>
                  <div class="service-icon-content">
                    <h4>Servicio #6</h4>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="left-background-pattern">
            <img src="assets/images/img55.png" alt="">
          </div>
          <div class="right-background-pattern">
            <img src="assets/images/img4.png" alt="">
          </div>
        </div>
        <div class="section-callback">
          <div class="container">
            <div class="row text-center">
              <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                  <div class="sub-title">¿Tienes alguna pregunta?</div>
                  <h2 class="section-title">Puedes contactarte con nosotros!!</h2>
                  <div class="title-divider">
                    <img src="assets/images/title-divider.png" alt="divider">
                  </div>
                  <p><?php echo $lorem1; ?></p>
                  <a href="contact.php" class="button-primary">Contactanos!</a>
                </div>
              </div>
            </div>
          </div>
          <div class="left-background-pattern">
            <img src="assets/images/img57.png" alt="">
          </div>
          <div class="right-background-pattern">
            <img src="assets/images/img5.png" alt="">
          </div>
        </div>
      </div>
      <!-- service html end -->
    </main>
    <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
