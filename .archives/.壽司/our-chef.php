<?php
  include_once 'header.php';
?>

      <!-- banner-page -->
      <div class="banner-page">
        <div class="themesflat-container w1791">
          <div class="row">
            <div class="col-12">
              <div class="content our-chef">
                <div class="heading">Nuestros Chefs</div>
                <ul class="breadcrumbs">
                  <li class="item">
                    <a href="index.php">Principal</a>
                  </li>
                  <li class="active">
                    <span>Nuestros Chefs</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /banner-page -->
      <!-- wg-our-chef -->
      <div class="wg-our-chef">
        <div class="swiper-container" data-swiper='{
                    "spaceBetween": 0,
                    "slidesPerView": 1,
                    "observer": true,
                    "observeParents": true,
                    "navigation": {
                        "nextEl": ".our-chef-next",
                        "prevEl": ".our-chef-prev"
                    }
                }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="our-chef-item">
                <div class="content">
                  <div class="heading-section style-1">
                    <span class="sub sub-before wow fadeInUp">Master Chef</span>
                    <div class="main wow fadeInUp">Nombre del chef<br>
                     15 años de Experiencia <br>
                    </div>
                  </div>
                  <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
                  <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
                  <div class="widget-social-text wow fadeInUp">
                    <ul class="">
                      <li><a href="#">FACEBOOK.</a></li>
                      <li><a href="#">TWITTER.</a></li>
                      <li><a href="#">SKYPE.</a></li>
                    </ul>
                  </div>
                  <img class="wow fadeInUp" src="assets/images/box-item/text-3.png" alt="">
                </div>
                <div class="image wow fadeInRight">
                  <img src="assets/images/box-item/our-chef-1.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="our-chef-item">
                <div class="content">
                  <div class="heading-section style-1">
                    <span class="sub sub-before wow fadeInUp">Master Chef</span>
                    <div class="main wow fadeInUp">
                          Nombre del chef<br>
                          20 años de Experiencia<br>
                    </div>
                  </div>
                  <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
                  <p class="wow fadeInUp"><?php echo $lorem1; ?></p>
                  <div class="widget-social-text">
                    <ul class="">
                      <li><a href="#">FACEBOOK.</a></li>
                      <li><a href="#">TWITTER.</a></li>
                      <li><a href="#">SKYPE.</a></li>
                    </ul>
                  </div>
                  <img src="assets/images/box-item/text-31.png" alt="">
                </div>
                <div class="image">
                  <img src="assets/images/box-item/our-chef-2.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="our-chef-item">
                <div class="content">
                  <div class="heading-section style-1">
                    <span class="sub sub-before wow fadeInUp">Master Chef</span>
                    <div class="main wow fadeInUp">
                        Nombre del chef<br>
                        18 años de Experiencia <br>
                    </div>
                  </div>
                  <p><?php echo $lorem1; ?></p>
                  <p><?php echo $lorem1; ?></p>
                  <div class="widget-social-text">
                    <ul class="">
                      <li><a href="#">FACEBOOK.</a></li>
                      <li><a href="#">TWITTER.</a></li>
                      <li><a href="#">SKYPE.</a></li>
                    </ul>
                  </div>
                  <img src="assets/images/box-item/text-32.png" alt="">
                </div>
                <div class="image">
                  <img src="assets/images/box-item/our-chef-3.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next style-text-1 our-chef-next">
            <div class="scroll">
              <span>SIGUIENTE</span>
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100" height="512"
                viewBox="0 0 100 100" width="512">
                <path
                  d="m53.708 80.251-2.556 3.759-.002-71.489h-2l.002 71.041-2.035-3.541-1.734.996 4.682 8.149 5.297-7.79z">
                </path>
              </svg>
            </div>
          </div>
          <div class="swiper-button-prev style-text-1 our-chef-prev">
            <div class="scroll">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100" height="512"
                viewBox="0 0 100 100" width="512">
                <path
                  d="m53.708 80.251-2.556 3.759-.002-71.489h-2l.002 71.041-2.035-3.541-1.734.996 4.682 8.149 5.297-7.79z">
                </path>
              </svg>
              <span>ANTERIOR</span>
            </div>
          </div>
        </div>
      </div>
      <!-- wg-our-chef -->

<?php
  include_once 'footer.php';
?>
