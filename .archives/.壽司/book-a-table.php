<?php
  include_once 'header.php';
?>

      <!-- banner-page -->
      <div class="banner-page">
        <div class="themesflat-container w1791">
          <div class="row">
            <div class="col-12">
              <div class="content book-a-table">
                <div class="heading">Reservar Mesa</div>
                <ul class="breadcrumbs">
                  <li class="item">
                    <a href="index.php">Principal</a>
                  </li>
                  <li class="active">
                    <span>Reservar Mesa</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /banner-page -->
      <!-- wg-book-table -->
      <div class="wg-book-table">
        <div class="image"></div>
        <div class="content">
          <div class="item-1">
            <img src="assets/images/box-item/book-table-1.png" alt="">
          </div>
          <div class="item-2">
            <img src="assets/images/item-background/icon-2.png" alt="">
          </div>
          <div class="heading-section style-1">
            <span class="sub sub-before wow fadeInUp">Es Hora</span>
            <div class="main wow fadeInUp">Reservar Mesa</div>
          </div>
          <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
          <form class="comment-form has-icon">
            <fieldset class="name relative">
              <input type="text" placeholder="Nombre*" class="style-1" name="name" tabindex="2" value=""
                aria-required="true" required="">
              <div></div>
            </fieldset>
            <fieldset class="email relative">
              <input type="email" placeholder="Correo*" class="style-1" name="email" tabindex="2" value=""
                aria-required="true" required="">
              <div></div>
            </fieldset>
            <div class="columns">
              <fieldset class="phone relative">
                <input type="text" placeholder="Telefono*" class="style-1" name="name" tabindex="2" value=""
                  aria-required="true" required="">
                <div></div>
              </fieldset>
              <fieldset class="time relative">
                <input type="date" class="style-1" name="date" tabindex="2" value="2024-02-14" aria-required="true"
                  required="">
                <div></div>
              </fieldset>
            </div>
            <div class="columns">
              <fieldset class="people relative">
                <input type="text" placeholder="02 Adultos" class="style-1" name="name" tabindex="2" value=""
                  aria-required="true" required="">
                <div></div>
              </fieldset>
              <fieldset class="hour relative">
                <input type="time" class="style-1" name="time" tabindex="2" value="19:00" aria-required="true"
                  required="">
                <div></div>
              </fieldset>
            </div>
            <div class="bottom">
              <button class="button-style-1 white w-full" type="submit">Reservar!</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /wg-book-table -->
      <!-- wg-policy -->
      <div class="wg-policy">
        <div class="left">
          <div class="title wow fadeInUp"><a href="#">Nuestras Politicas de Privacidad </a></div>
          <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
          <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
          <img class="signature wow fadeInUp" src="assets/images/box-item/signature.png" alt="">
        </div>
        <div class="right relative">
          <div id="map"></div>
          <div class="book-table wow fadeInLeft">
            <div class="content">
              <ul>
                <li>
                  <div class="title">Localizacion del Restaurante</div>
                  <p><?php echo $lorem2; ?></p>
                </li>
                <li>
                  <div class="title">Horario</div>
                  <p>
                    Lunes- Viernes: 9.00am - 22.00pm <br>
                    Horas:14:00pm - 20:00pm <br>
                    Fin de semana : Cerrado
                  </p>
                </li>
                <li>
                  <div class="title">Contacto</div>
                  <p>
                    Email:
                    <a href="#" class="__cf_email__" data-cfemail="bffddeccd6d3d6dcd0d5decfded1ffd8d2ded6d391dcd0d2">
                      [Correo&#160;protejido]</a>
                    </p>
                </li>
              </ul>
              <div class="numberphone">123 -1234-12345</div>
              <a href="#" class="button-style-1">RESERVAR</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /wg-policy -->

<?php
  include_once 'footer.php';
?>
