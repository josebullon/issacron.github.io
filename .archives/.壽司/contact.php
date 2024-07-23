<?php
  include_once 'header.php';
?>

      <!-- banner-page -->
      <div class="banner-page">
        <div class="themesflat-container w1791">
          <div class="row">
            <div class="col-12">
              <div class="content contact">
                <div class="heading">Contactanos</div>
                <ul class="breadcrumbs">
                  <li class="item">
                    <a href="index.php">Principal</a>
                  </li>
                  <li class="active">
                    <span>Contactanos</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /banner-page -->
      <!-- wg-contact -->
      <div class="wg-contact">
        <div class="top-left">
          <img class="w-full" src="assets/images/box-item/contact-1.jpg" alt="">
        </div>
        <div class="top-right">
          <img src="assets/images/box-item/book-table-2.png" alt="">
          <div class="heading-section style-1">
            <div class="main wow fadeInUp">Nuestra Información</div>
          </div>
          <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
          <ul>
            <li class="wow fadeInUp">
              <div class="title">Localizacion del Restaurante</div>
              <p><?php echo $lorem2; ?></p>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.1s">
              <div class="title">Contacto</div>
              <p>
                123 -1234-12345 <br>
                <a href="" class="__cf_email__"
                  data-cfemail=""></a>
              </p>
            </li>
            <li class="wow fadeInUp">
              <div class="title">Horario</div>
              <p>
                Lunes- Viernes: 9.00am - 22.00pm <br>
                Horas:14:00pm - 20:00pm <br>
                Fin de semana : Cerrado
              </p>
            </li>
            <li class="wow fadeInUp" data-wow-delay="0.1s">
              <div class="title">Nuestras redes sociales</div>
              <ul class="social-1">
                <li>
                  <p><a href="#">Facebook</a></p>
                </li>
                <li>
                  <p><a href="#">Twitter</a></p>
                </li>
                <li>
                  <p><a href="#">Pinterest</a></p>
                </li>
                <li>
                  <p><a href="#">Instagram</a></p>
                </li>
                <li>
                  <p><a href="#">Skype</a></p>
                </li>
                <li>
                  <p><a href="#">Email</a></p>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="bot-left">
          <img src="assets/images/box-item/bird.png" alt="">
          <div class="heading-section style-1">
            <div class="main wow fadeInUp">Escribenos!</div>
          </div>
          <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
          <form class="comment-form has-icon relative form-1">
            <div class="columns">
              <fieldset class="name relative">
                <input type="text" placeholder="Nombre" class="style-1" name="name" tabindex="2" value=""
                  aria-required="true" required="">
                <div></div>
              </fieldset>
              <fieldset class="email relative">
                <input type="email" placeholder="Correo" class="style-1" name="email" tabindex="2" value=""
                  aria-required="true" required="">
                <div></div>
              </fieldset>
            </div>
            <fieldset class="textarea relative">
              <textarea name="textarea" placeholder="Mensaje" class="style-1" cols="30" rows="10"></textarea>
            </fieldset>
            <div class="bottom">
              <div class="check">
                <label for="check-1" class="relative">
                  <input id="check-1" type="checkbox" checked="">
                  <span class="btn-checkbox"></span>
                 Aceptar condiciones...
                </label>
              </div>
              <button class="button-style-1 white" type="submit">Enviar Mensaje<i class="icon-send"></i></button>
            </div>
          </form>
        </div>
        <div class="bot-right relative">
          <div id="map"></div>
        </div>
      </div>
      <!-- /wg-contact -->

<?php
  include_once 'footer.php';
?>
