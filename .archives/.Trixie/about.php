<?php
  include_once("layout/header.php");
?>


      <!-- page header -->
      <section class="page-header">
        <div class="container-xl">
          <div class="text-center">
            <h1 class="mt-0 mb-2">Sobre mi</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Principal</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Sobre mi
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </section>

      <!-- section main content -->
      <section class="main-content">
        <div class="container-xl">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="page-content bordered rounded padding-30">
                <img
                  src="images/other/about.jpg"
                  alt="Autor"
                  class="rounded mb-4"
                />

                <p>
                <?php echo $lorem1; ?>
                </p>

                <p>
                <?php echo $lorem1; ?>
                </p>

                <p>
                <?php echo $lorem1; ?>
                </p>

                <p>
                <?php echo $lorem1; ?>
                </p>

                <hr class="my-4" />
                <ul class="social-icons list-unstyled list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fab fa-medium"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- sidebar -->
              <div class="sidebar">
                <!-- widget about -->
                <div class="widget rounded">
                  <div
                    class="widget-about data-bg-image text-center"
                    data-bg-image="images/map-bg.png"
                  >
                    <img src="images/logo.svg" alt="logo" class="mb-4" />
                    <p class="mb-4">
                    <?php echo $lorem1; ?>
                    </p>
                    <ul class="social-icons list-unstyled list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#"><i class="fab fa-medium"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- widget popular posts -->
                <div class="widget rounded">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Publicaciones Populares</h3>
                    <img src="images/wave.svg" class="wave" alt="wave" />
                  </div>
                  <div class="widget-content">
                    <!-- post -->
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">1</span>
                        <a href="blog-single.php">
                          <div class="inner">
                            <img
                              src="images/posts/tabs-1.jpg"
                              alt="post-title"
                            />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0">
                          <a href="blog-single.php"
                            ><?php echo $lorem4; ?></a
                          >
                        </h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item"><?php echo $fblog2; ?></li>
                        </ul>
                      </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">2</span>
                        <a href="blog-single.php">
                          <div class="inner">
                            <img
                              src="images/posts/tabs-2.jpg"
                              alt="post-title"
                            />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0">
                          <a href="blog-single.php"
                            ><?php echo $lorem4; ?></a
                          >
                        </h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item"><?php echo $fblog4; ?></li>
                        </ul>
                      </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">3</span>
                        <a href="blog-single.php">
                          <div class="inner">
                            <img
                              src="images/posts/tabs-3.jpg"
                              alt="post-title"
                            />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0">
                          <a href="blog-single.php"
                            ><?php echo $lorem4; ?></a
                          >
                        </h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item"><?php echo $fblog4; ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- widget categories -->
                <div class="widget rounded">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Categorias</h3>
                    <img src="images/wave.svg" class="wave" alt="wave" />
                  </div>
                  <div class="widget-content">
                    <ul class="list">
                      <li><a href="#">Inspiración</a><span>(10)</span></li>
                      <li><a href="#">Arte</a><span>(20)</span></li>
                      <li><a href="#">Ideas</a><span>(45)</span></li>
                      <li><a href="#">Videos</a><span>(15)</span></li>
                      <li><a href="#">Viajes</a><span>(17)</span></li>
                      <li><a href="#">Copncejos</a><span>(31)</span></li>
                    </ul>
                  </div>
                </div>

                <!-- widget newsletter -->
                <div class="widget rounded">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Suscribete!</h3>
                    <img src="images/wave.svg" class="wave" alt="wave" />
                  </div>
                  <div class="widget-content">
                    <span class="newsletter-headline text-center mb-3"
                      >Más de 30,000 subcristores!</span
                    >
                    <form>
                      <div class="mb-2">
                        <input
                          class="form-control w-100 text-center"
                          placeholder="Escribe tu correo…"
                          type="email"
                        />
                      </div>
                      <button class="btn btn-default btn-full" type="submit">
                        Registrate
                      </button>
                    </form>
                    <span class="newsletter-privacy text-center mt-3"
                      >Al registrarte, aceptas nuestra 
                      <a href="#">Política de Privacidad</a></span
                    >
                  </div>
                </div>

                <!-- widget post carousel -->
                <div class="widget rounded">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Destacado</h3>
                    <img src="images/wave.svg" class="wave" alt="wave" />
                  </div>
                  <div class="widget-content">
                    <div class="post-carousel-widget">
                      <!-- post -->
                      <div class="post post-carousel">
                        <div class="thumb rounded">
                          <a
                            href="category.php"
                            class="category-badge position-absolute"
                            >Arte</a
                          >
                          <a href="blog-single.php">
                            <div class="inner">
                              <img
                                src="images/widgets/widget-carousel-1.jpg"
                                alt="post-title"
                              />
                            </div>
                          </a>
                        </div>
                        <h5 class="post-title mb-0 mt-4">
                          <a href="blog-single.php"
                            ><?php echo $lorem4 ?></a
                          >
                        </h5>
                        <ul class="meta list-inline mt-2 mb-0">
                          <li class="list-inline-item">
                            <a href="#">Autor</a>
                          </li>
                          <li class="list-inline-item"><?php echo $fblog4; ?></li>
                        </ul>
                      </div>
                      <!-- post -->
                      <div class="post post-carousel">
                        <div class="thumb rounded">
                          <a
                            href="category.php"
                            class="category-badge position-absolute"
                            >Ideas</a
                          >
                          <a href="blog-single.php">
                            <div class="inner">
                              <img
                                src="images/widgets/widget-carousel-2.jpg"
                                alt="post-title"
                              />
                            </div>
                          </a>
                        </div>
                        <h5 class="post-title mb-0 mt-4">
                          <a href="blog-single.php"
                            ><?php echo $lorem4; ?></a
                          >
                        </h5>
                        <ul class="meta list-inline mt-2 mb-0">
                          <li class="list-inline-item">
                            <a href="#">Autor</a>
                          </li>
                          <li class="list-inline-item"><?php echo $fblog5; ?></li>
                        </ul>
                      </div>
                      <!-- post -->
                      <div class="post post-carousel">
                        <div class="thumb rounded">
                          <a
                            href="category.php"
                            class="category-badge position-absolute"
                            >Imaginación</a
                          >
                          <a href="blog-single.php">
                            <div class="inner">
                              <img
                                src="images/widgets/widget-carousel-1.jpg"
                                alt="post-title"
                              />
                            </div>
                          </a>
                        </div>
                        <h5 class="post-title mb-0 mt-4">
                          <a href="blog-single.php"
                            ><?php echo $fblog4; ?></a
                          >
                        </h5>
                        <ul class="meta list-inline mt-2 mb-0">
                          <li class="list-inline-item">
                            <a href="#">Autor</a>
                          </li>
                          <li class="list-inline-item"><?php echo $fblog3; ?></li>
                        </ul>
                      </div>
                    </div>
                    <!-- carousel arrows -->
                    <div class="slick-arrows-bot">
                      <button
                        type="button"
                        data-role="none"
                        class="carousel-botNav-prev slick-custom-buttons"
                        aria-label="Previous"
                      >
                        <i class="icon-arrow-left"></i>
                      </button>
                      <button
                        type="button"
                        data-role="none"
                        class="carousel-botNav-next slick-custom-buttons"
                        aria-label="Next"
                      >
                        <i class="icon-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <!-- widget advertisement -->
                <div class="widget no-container rounded text-md-center">
                  <span class="ads-title">- TAGS -</span>
                  <a href="#" class="widget-ads">
                    <img src="images/ads/ad-360.png" alt="Advertisement" />
                  </a>
                </div>

                <!-- widget tags -->
                <div class="widget rounded">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Tags</h3>
                    <img src="images/wave.svg" class="wave" alt="wave" />
                  </div>
                  <div class="widget-content">
                    <a href="#" class="tag">#Imaginación</a>
                    <a href="#" class="tag">#Arte</a>
                    <a href="#" class="tag">#Ideas</a>
                    <a href="#" class="tag">#Creatividad</a>
                    <a href="#" class="tag">#Videos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
  include_once("layout/footer.php");
?>
