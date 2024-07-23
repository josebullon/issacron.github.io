<footer class="footer-section bg-light-red">
      <div class="container">
        <div class="row gy-lg-0 gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="footer-widget widget">
              <div class="about-widget">
                <a href="index.php" class="logo"
                  ><span class="site-title">Monchis</span></a
                >
                <p>
                <?php echo $lorem1; ?>
                </p>
                <a
                  href="subscribe.php"
                  class="default-btn text-anim"
                  data-text="Subscrbirse"
                  >Subscribirse</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="footer-widget widget">
              <div class="category-widget">
                <h3 class="widget-title">Categoria</h3>
                <ul>
                  <li><a href="category.php">Viajes</a></li>
                  <li><a href="category.php">Fotos</a></li>
                  <li><a href="category.php">Salud</a></li>
                  <li><a href="category.php">Moda</a></li>
                  <li><a href="category.php">Deporte</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="footer-widget widget">
              <div class="widget-post-items">
                <h3 class="widget-title">Publicaciones</h3>
                <div class="widget-post-item img-hover-move">
                  <div class="widget-post-thumb media">
                    <a href="single.php"
                      ><img src="assets/img/post-1.jpg" alt="thumb"
                    /></a>
                  </div>
                  <div class="widget-post-content">
                    <h3>
                      <a href="single.php" class="text-hover"
                        ><?php echo $lorem4; ?></a
                      >
                    </h3>
                    <ul class="post-meta">
                      <li><a href="category.php">Viajes</a></li>
                      <li class="sep"></li>
                      <li>
                        <a href="category.php" class="date"><?php echo $fblog1; ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="widget-post-item img-hover-move">
                  <div class="widget-post-thumb media">
                    <a href="single.php"
                      ><img src="assets/img/post-2.jpg" alt="thumb"
                    /></a>
                  </div>
                  <div class="widget-post-content">
                    <h3>
                      <a href="single.php" class="text-hover"
                        ><?php echo $lorem4; ?></a
                      >
                    </h3>
                    <ul class="post-meta">
                      <li><a href="category.php">Moda</a></li>
                      <li class="sep"></li>
                      <li>
                        <a href="category.php" class="date"><?php echo $fblog1; ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-widget widget">
              <div class="contact-widget">
                <h3 class="widget-title">Contactame</h3>
                <ul class="contact-info">
                  <li>
                    <span>Dirección:</span><?php echo $lorem4; ?>
                  </li>
                  <li>
                    <span>Telefono:</span
                    ><a href=""><?php echo $telefono; ?></a>
                  </li>
                  <li>
                    <span>Correo:</span><a href="#"><?php echo $correo; ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <div class="copyright-text">
            © <span id="currentYear"></span> Monchis, Todos los derechos reservados
            <a
              href=""
              target="_blank"
              >Issac Ron</a
            >
          </div>
          <ul class="footer-social">
            <li>Sigueme:</li>
            <li>
              <a href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  fill="currentColor"
                >
                  <path
                    d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  fill="currentColor"
                >
                  <path
                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                  ></path>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  ></path>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path
                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"
                  ></path>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <!--/.copyright-area-->
      </div>
    </footer>
    <!--/.footer-section-->

    <div id="scrollup">
      <button id="scroll-top" class="scroll-to-top">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24"
          viewBox="0 -960 960 960"
          width="24"
          fill="currentColor"
        >
          <path
            d="M450.001-180.001v-485.077L222.154-437.232 180.001-480 480-779.999 779.999-480l-42.153 42.768-227.847-227.846v485.077h-59.998Z"
          />
        </svg>
      </button>
    </div>
    <!--scrollup-->

    <div
      class="modal vixto-modal"
      id="subscribeModal"
      data-bs-backdrop="static"
      data-bs-keyboard="true"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-inner">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
            <div class="subscribe-card">
              <div class="subscribe-heading">
                <img
                  class="bell-animation"
                  src="assets/img/bell.png"
                  alt="bell"
                />
                <h3><?php echo $lorem4; ?></h3>
                <p>
                <?php echo $lorem1; ?>
                </p>
              </div>
              <form
                action=""
                id="ajax_mc_form"
                class="subscribe-form"
              >
                <div class="mc-fields">
                  <input
                    id="mc_email"
                    class="form-control"
                    type="email"
                    name="mc_email"
                    placeholder="Escribe tu correo"
                    required=""
                  />
                  <button
                    class="default-btn text-anim"
                    data-text="Subscribete"
                  >
                    Subscribete
                  </button>
                </div>
                <div class="clearfix"></div>
                <div id="mc-form-messages" class="alert" role="alert"></div>
              </form>
              <ul class="post-social-share">
                <li class="facebook">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      fill="currentColor"
                    >
                      <path
                        d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"
                      ></path></svg
                  ></a>
                </li>
                <li class="twitter">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      fill="currentColor"
                    >
                      <path
                        d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                      ></path></svg
                  ></a>
                </li>
                <li class="instagram">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 448 512"
                      fill="currentColor"
                    >
                      <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                      ></path></svg
                  ></a>
                </li>
                <li class="pinterest">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 496 512"
                      fill="currentColor"
                    >
                      <path
                        d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3 .8-3.4 5-20.3 6.9-28.1 .6-2.5 .3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"
                      ></path></svg
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Modal -->

    <button
      class="theme-toggle"
      id="theme-toggle"
      title="Toggles light & dark"
      aria-label="auto"
      aria-live="polite"
    >
      <svg
        class="sun-and-moon"
        aria-hidden="true"
        width="24"
        height="24"
        viewBox="0 0 24 24"
      >
        <mask class="moon" id="moon-mask">
          <rect x="0" y="0" width="100%" height="100%" fill="white" />
          <circle cx="24" cy="10" r="6" fill="black" />
        </mask>
        <circle
          class="sun"
          cx="12"
          cy="12"
          r="6"
          mask="url(#moon-mask)"
          fill="currentColor"
        />
        <g class="sun-beams" stroke="currentColor">
          <line x1="12" y1="1" x2="12" y2="3" />
          <line x1="12" y1="21" x2="12" y2="23" />
          <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
          <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
          <line x1="1" y1="12" x2="3" y2="12" />
          <line x1="21" y1="12" x2="23" y2="12" />
          <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
          <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
        </g>
      </svg></button
    ><!-- Switch Button -->

    <!--jQuery Lib-->
    <script src="assets/js/vendor/jquary-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/venobox.min.js"></script>
    <script src="assets/js/vendor/swiper.min.js"></script>
    <script src="assets/js/vendor/smooth-scroll.js"></script>
    <script src="assets/js/mailchimp.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

  <!-- Mirrored from html.dynamiclayers.net/dl/vixto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 06:36:11 GMT -->
</html>
