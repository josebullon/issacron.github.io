<?php
  include_once("layout/header.php");
?>
    <div id="popup-search-box">
      <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
          <input
            id="popup-search"
            type="text"
            name="s"
            placeholder="Escribe lo que quieres buscas..."
          />
          <button id="popup-search-button" type="submit" name="submit">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 14.811 14.811"
            >
              <g
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                transform="translate(-2.25 -2.25)"
              >
                <circle
                  cx="5.5"
                  cy="5.5"
                  r="5.5"
                  data-name="Ellipse 7"
                  transform="translate(3 3)"
                ></circle>
                <path d="m16 16-3.142-3.142"></path>
              </g>
            </svg>
          </button>
        </form>
        <div class="search-close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            height="24"
            viewBox="0 -960 960 960"
            width="24"
          >
            <path
              d="M256-213.847 213.847-256l224-224-224-224L256-746.153l224 224 224-224L746.153-704l-224 224 224 224L704-213.847l-224-224-224 224Z"
            />
          </svg>
        </div>
      </div>
    </div>
    <!--/.popup-search-box-->

    <div id="searchbox-overlay"></div>
    <!--/.searchbox-overlay-->

    <section class="page-header author-page">
      <div class="container">
        <div class="page-content-wrap">
          <div class="page-content mx-auto text-center">
            <h4>Creador</h4>
            <h2 class="justify-content-center">Nombre del Autor</h2>
            <p>
            <?php echo $lorem1; ?>
            </p>
          </div>
          <div class="author-thumb">
            <img src="assets/img/author-widget.jpg" alt="img" />
          </div>
        </div>
      </div>
    </section>
    <!--/.page-header-->

    <div class="padding-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="author-page-info text-center">
              <p>
              <?php echo $lorem1; ?>
              </p>
              <ul class="social-list justify-content-center">
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
                    >Facebook</a
                  >
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
                    >Twitter</a
                  >
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
                    >Instagram</a
                  >
                </li>
                <li class="tiktok">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 448 512"
                      fill="currentColor"
                    >
                      <path
                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"
                      ></path></svg
                    >Tiktok</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.author-page-info-->

    <section class="archive-page padding">
      <div class="container">
        <div class="row gy-4">
          <article class="col-lg-4 col-md-6 position-relative">
            <div class="post-card image-post img-hover-move">
              <div class="post-thumb media">
                <a href="single.php">
                  <img src="assets/img/post-7.jpg" alt="thumb" />
                </a>
                <div class="image-post-content">
                  <ul class="post-meta">
                    <li><a href="category.php">Moda</a></li>
                    <li class="sep"></li>
                    <li><a href="category.php" class="date"><?php echo $fblog1; ?></a></li>
                  </ul>
                  <h3>
                    <a href="single.php" class="text-hover"
                      ><?php echo $lorem1; ?></a
                    >
                  </h3>
                  <a href="single.php" class="read-more">Seguir Leyendo</a>
                </div>
              </div>
            </div>
          </article>
          <article class="col-lg-4 col-md-6">
            <div class="post-card format-video img-hover-move">
              <div class="post-thumb media">
                <a href="single.php">
                  <video
                    autoplay="autoplay"
                    loop="loop"
                    muted="muted"
                    playsinline=""
                  >
                    <source src="assets/video/travel.mp4" />
                  </video>
                </a>
                <a
                  class="video-popup venobox"
                  data-vbtype="video"
                  href="https://www.youtube.com/watch?v=ZLaG1migE00"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                    fill="currentColor"
                  >
                    <path
                      d="M181.925-180.001q-30.308 0-51.308-21-20.999-21-20.999-51.308v-455.382q0-30.308 20.999-51.308 21-21 51.308-21h455.382q30.308 0 51.308 21t21 51.308v183.077l140.767-140.768v370.764L709.615-435.386v183.077q0 30.308-21 51.308t-51.308 21H181.925Zm0-59.999h455.382q5.386 0 8.847-3.462 3.462-3.462 3.462-8.847v-455.382q0-5.385-3.462-8.847-3.461-3.462-8.847-3.462H181.925q-5.385 0-8.847 3.462-3.462 3.462-3.462 8.847v455.382q0 5.385 3.462 8.847Q176.54-240 181.925-240Zm-12.309 0v-480 480Z"
                    />
                  </svg>
                </a>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Viajes</a></li>
                  <li class="sep"></li>
                  <li><a href="category.php" class="date"><?php echo $fblog2; ?></a></li>
                </ul>
                <h3>
                  <a href="single.php" class="text-hover"
                    ><?php echo $lorem4; ?></a
                  >
                </h3>
                <p>
                <?php echo $lorem1; ?>
                </p>
                <ul class="post-card-footer">
                  <li>
                    <a href="single.php" class="read-more">Seguir Leyendo</a>
                  </li>
                  <li>
                    <a href="#" class="comment"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        viewBox="0 -960 960 960"
                        width="24"
                        fill="currentColor"
                      >
                        <path
                          d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                        /></svg
                      ><span>20</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="col-lg-4 col-md-6">
            <div class="post-card img-hover-move">
              <div class="post-thumb media">
                <a href="single.php">
                  <img src="assets/img/post-1.jpg" alt="thumb" />
                </a>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Moda</a></li>
                  <li class="sep"></li>
                  <li><a href="category.php" class="date"><?php echo $fblog4; ?></a></li>
                </ul>
                <h3>
                  <a href="single.php" class="text-hover"
                    ><?php echo $lorem4; ?></a
                  >
                </h3>
                <p>
                <?php echo $lorem1; ?>
                </p>
                <ul class="post-card-footer">
                  <li>
                    <a href="single.php" class="read-more">Seguir Leyendo</a>
                  </li>
                  <li>
                    <a href="#" class="comment">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        viewBox="0 -960 960 960"
                        width="24"
                        fill="currentColor"
                      >
                        <path
                          d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                        /></svg
                      ><span>20</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="col-lg-4 col-md-6">
            <div class="post-card img-hover-move">
              <div class="post-thumb media">
                <a href="single.php">
                  <img src="assets/img/post-2.jpg" alt="thumb" />
                </a>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Deporte</a></li>
                  <li class="sep"></li>
                  <li><a href="category.php" class="date"><?php echo $fblog5; ?></a></li>
                </ul>
                <h3>
                  <a href="single.php" class="text-hover"
                    ><?php echo $lorem4; ?></a
                  >
                </h3>
                <p>
                <?php echo $lorem1; ?>
                </p>
                <ul class="post-card-footer">
                  <li>
                    <a href="single.php" class="read-more">Seguir Leyendo</a>
                  </li>
                  <li>
                    <a href="#" class="comment">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        viewBox="0 -960 960 960"
                        width="24"
                        fill="currentColor"
                      >
                        <path
                          d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                        /></svg
                      ><span>30</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="col-lg-4 col-md-6">
            <div class="post-card img-hover-move">
              <div class="post-slider-wrap">
                <div class="swiper gallary-post-slider carousel-pagination">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="assets/img/post-3.jpg" alt="img" />
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/post-4.jpg" alt="img" />
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/post-8.jpg" alt="img" />
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Moda</a></li>
                  <li class="sep"></li>
                  <li><a href="category.php" class="date"><?php echo $fblog5; ?></a></li>
                </ul>
                <h3>
                  <a href="single.php" class="text-hover"
                    ><?php echo $lorem4; ?></a
                  >
                </h3>
                <p>
                <?php echo $lorem1; ?>
                </p>
                <ul class="post-card-footer">
                  <li>
                    <a href="single.php" class="read-more">Seguir Leyendo...</a>
                  </li>
                  <li>
                    <a href="#" class="comment"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        viewBox="0 -960 960 960"
                        width="24"
                        fill="currentColor"
                      >
                        <path
                          d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                        /></svg
                      ><span>28</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
          <article class="col-lg-4 col-md-6">
            <div class="post-card format-audio img-hover-move">
              <div class="post-thumb media">
                <a href="single.php">
                  <img src="assets/img/post-5.jpg" alt="thumb" />
                </a>
                <div class="audio-player">
                  <audio controls>
                    <source src="assets/audio/music.mp3" />
                  </audio>
                </div>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Moda</a></li>
                  <li class="sep"></li>
                  <li><a href="category.php" class="date"><?php echo $fblog5; ?></a></li>
                </ul>
                <h3>
                  <a href="single.php" class="text-hover"
                    ><?php echo $lorem4; ?></a
                  >
                </h3>
                <p>
                <?php echo $lorem1; ?>
                </p>
                <ul class="post-card-footer">
                  <li>
                    <a href="single.php" class="read-more">Seguir Leyendo</a>
                  </li>
                  <li>
                    <a href="#" class="comment">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="24"
                        viewBox="0 -960 960 960"
                        width="24"
                        fill="currentColor"
                      >
                        <path
                          d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                        /></svg
                      ><span>45</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
        <ul class="pagination-wrap justify-content-center">
          <li><a href="#" class="active">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li>
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="24"
                viewBox="0 -960 960 960"
                width="24"
                fill="currentColor"
              >
                <path
                  d="m553.846-253.847-42.153-43.384 152.77-152.77H180.001v-59.998h484.462l-152.77-152.77 42.153-43.384L779.999-480 553.846-253.847Z"
                ></path></svg
            ></a>
          </li>
        </ul>
        <!--/.pagination-wrap-->
      </div>
    </section>
    <!--/.archive-page-->
<?php
  include_once("layout/footer.php");
?>
