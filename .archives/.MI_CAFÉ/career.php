<?php
  include_once("layout/header.php");
?>
    <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
          <div class="container">
            <div class="inner-banner-content">
              <h1 class="page-title">Contratación</h1>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <!-- Inner Banner html end-->
      <div class="carrer-page-section">
        <div class="vacancy-section">
          <div class="container">
            <div class="section-heading text-center">
              <div class="sub-title">Nuestras Ofertas</div>
              <h2 class="section-title">Ven a trabajar con nosotros!</h2>
              <div class="title-divider">
                <img src="assets/images/title-divider.png" alt="divider">
              </div>
            </div>
            <div class="vacancy-container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="vacancy-content-wrap">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="vacancy-content">
                          <span>Tiempo Completo</span>
                          <h4>Supervisor</h4>
                          <p><?php echo $lorem1; ?></p>
                          <a href="volunteer.php" class="button-primary">Aplicar</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="vacancy-content">
                          <span>1/2 Tiempo</span>
                          <h4>Barista</h4>
                          <p><?php echo $lorem1; ?></p>
                          <a href="volunteer.php" class="button-primary">Aplicar</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="vacancy-content">
                          <span>Tiempo Completo</span>
                          <h4>Barista</h4>
                          <p><?php echo $lorem1; ?></p>
                          <a href="volunteer.php" class="button-primary">Aplicar</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="vacancy-content">
                          <span>1/2 Tiempo</span>
                          <h4>Recepcionista</h4>
                          <p><?php echo $lorem1; ?></p>
                          <a href="volunteer.php" class="button-primary">Aplicar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="vacancy-form" style="background-image: url(assets/images/footer-banner.jpg);">
                    <h4>¿Quieres trabajar en nuestra Cafeteria ?</h4>
                    <form>
                      <p>
                        <input type="text" name="name" placeholder="Nombre">
                      </p>
                      <p>
                        <input type="email" name="email" placeholder="Correo">
                      </p>
                      <p>
                        <input type="text" name="post" placeholder="Cargo que aspira">
                      </p>
                      <p>
                        <textarea rows="7" placeholder="Enviar mensaje"></textarea>
                      </p>
                      <p>
                        <input type="submit" name="submit" value="Enviar">
                      </p>
                    </form>
                    <div class="overlay"></div>
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
        <div class="about-service-wrap">
          <div class="container">
            <div class="section-head">
              <div class="row no-gutters align-items-end">
                <div class="col-lg-6">
                  <div class="section-heading">
                    <div class="sub-title">Nuestros Beneficios</div>
                    <h2 class="section-title">Ofrecemos los mejores beneficios acordes a las leyes establecidas!</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="section-disc">
                    <p><?php echo $lorem1; ?></p>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="iconbox-container">
              <div class="row">
                <div class="col-sm-6 col-lg-4">
                  <div class="iconbox-wrap iconbox-border d-flex align-items-center flex-wrap">
                    <div class="iconbox-icon primary-bg">
                      <i aria-hidden="true" class="icon icon-medal1"></i>
                    </div>
                    <div class="iconbox-content">
                      <h4>Merito</h4>
                      <p><?php echo $lorem5; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="iconbox-wrap iconbox-border d-flex align-items-center flex-wrap">
                    <div class="iconbox-icon primary-bg">
                      <i aria-hidden="true" class="icon icon-money-bag"></i>
                    </div>
                    <div class="iconbox-content">
                      <h4>Bonos</h4>
                      <p><?php echo $lorem5; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="iconbox-wrap iconbox-border d-flex align-items-center flex-wrap">
                    <div class="iconbox-icon primary-bg">
                      <i aria-hidden="true" class="icon icon-chart2"></i>
                    </div>
                    <div class="iconbox-content">
                      <h4>Crecimiento</h4>
                      <p><?php echo $lorem5; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
