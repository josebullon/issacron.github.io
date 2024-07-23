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
            placeholder="Escribe lo que quieres buscar..."
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

    <section class="page-header">
      <div class="container">
        <div class="page-content-wrap">
          <div class="page-content">
            <h4>Categoria</h4>
            <h2>Deporte<span>20 Publicaciones</span></h2>
            <p>
            <?php echo $lorem4; ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--/.page-header-->

    <section class="category-page padding">
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
                    <li><a href="category.php" class="date"><?php echo $fblog; ?></a></li>
                  </ul>
                  <h3>
                    <a href="single.php" class="text-hover"
                      ><?php echo $lorem4; ?></a
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
                  <li><a href="category.php" class="date"><?php echo $fblog1; ?></a></li>
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
                      ><span>25</span></a
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
                  <img src="assets/img/post-9.jpg" alt="thumb" />
                </a>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Salud</a></li>
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
                      ><span>28</span>
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
                  <img src="assets/img/post-10.jpg" alt="thumb" />
                </a>
              </div>
              <div class="post-content">
                <ul class="post-meta">
                  <li><a href="category.php">Deporte</a></li>
                  <li class="sep"></li>
                  <li><a href="category.php" class="date"><?php echo $fblog3; ?></a></li>
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
                      ><span>05</span>
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
                  <li><a href="category.php">Salud</a></li>
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
                      ><span>40</span>
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
                  <img src="assets/img/post-13.jpg" alt="thumb" />
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
                      ><span>25</span>
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
      </div>
    </section>
<?php
  include_once("layout/footer.php");
?>
