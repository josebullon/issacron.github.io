<?php
  include_once("layout/header.php");
?>
    <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
          <div class="container">
            <div class="inner-banner-content">
              <h1 class="page-title">Reservación</h1>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <!-- Inner Banner html end-->
      <!-- reservation form html start -->
      <div class="reservation-page-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="form-section-inner" style="background-image: url(assets/images/banner-img1.jpg);">
                <form method="get" class="reservation-form">
                  <p>
                    <input type="text" name="name" placeholder="Nombre Completo">
                  </p>
                  <p>
                    <input type="number" name="guest" placeholder="Numero de Personas">
                  </p>
                  <p>
                  <input class="input-date-picker" type="text" name="s" placeholder="D/ M / A" autocomplete="off" readonly="readonly">
                  </p>
                  <p>
                  <input class="input-time-picker" type="text" name="s" placeholder="Tiempo" autocomplete="off" readonly="readonly">
                  </p>
                  <p>
                    <input type="text" name="name" placeholder="Requerimiento especial">
                  </p>
                  <p>
                    <input type="text" name="email" placeholder="Correo electronico">
                  </p>
                  <p>
                    <input type="text" name="name" placeholder="Ocasión">
                  </p>
                  <p>
                    <input type="number" name="number" placeholder="Numero de Telefono">
                  </p>
                  <p>
                    <input type="submit" name="travel-search" value="Reservar ahora!">
                  </p>
                </form>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="left-background-pattern">
          <img src="assets/images/img35.png" alt="">
        </div>
        <div class="right-background-pattern">
          <img src="assets/images/img4.png" alt="">
        </div>
      </div>
      <!-- reservation form html end -->
    </main>
    <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
