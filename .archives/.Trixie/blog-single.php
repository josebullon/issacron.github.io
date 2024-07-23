<?php
  include_once("layout/header.php");
?>


      <!-- section main content -->
      <section class="main-content mt-3">
        <div class="container-xl">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Principal</a></li>
              <li class="breadcrumb-item"><a href="#">Inspiración</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <?php echo $lorem4; ?>
              </li>
            </ol>
          </nav>

          <div class="row gy-4">
            <div class="col-lg-8">
              <!-- post single -->
              <div class="post post-single">
                <!-- post header -->
                <div class="post-header">
                  <h1 class="title mt-0 mb-3">
                  <?php echo $lorem4; ?>
                  </h1>
                  <ul class="meta list-inline mb-0">
                    <li class="list-inline-item">
                      <a href="#"
                        ><img
                          src="images/other/author-sm.png"
                          class="author"
                          alt="author"
                        />Autor</a
                      >
                    </li>
                    <li class="list-inline-item"><a href="#">Arte</a></li>
                    <li class="list-inline-item"><?php echo $fblog; ?></li>
                  </ul>
                </div>
                <!-- featured image -->
                <div class="featured-image">
                  <img src="images/posts/featured-lg.jpg" alt="post-title" />
                </div>
                <!-- post content -->
                <div class="post-content clearfix">
                  <p>
                  <?php echo $lorem1; ?>
                  </p>

                  <p>
                  <?php echo $lorem1; ?>
                  </p>

                  <figure class="figure">
                    <img
                      src="images/posts/post-lg-2.jpg"
                      class="figure-img img-fluid rounded"
                      alt="..."
                    />
                    <figcaption class="figure-caption text-center">
                    <?php echo $lorem4; ?>
                    </figcaption>
                  </figure>

                  <p>
                  <?php echo $lorem1; ?>
                  </p>

                  <img
                    src="images/posts/single-sm-1.jpg"
                    class="rounded alignleft"
                    alt="..."
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

                  <h4><?php echo $lorem4; ?></h4>

                  <ul>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                    <li><?php echo $lorem4; ?></li>
                  </ul>

                  <p>
                  <?php echo $lorem1; ?>
                  </p>
                </div>
                <!-- post bottom section -->
                <div class="post-bottom">
                  <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-12 text-center text-md-start">
                      <!-- tags -->
                      <a href="#" class="tag">#Inspiracion</a>
                      <a href="#" class="tag">#Ideas</a>
                      <a href="#" class="tag">#Fotos</a>
                    </div>
                    <div class="col-md-6 col-12">
                      <!-- social icons -->
                      <ul
                        class="social-icons list-unstyled list-inline mb-0 float-md-end"
                      >
                        <li class="list-inline-item">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="fab fa-telegram-plane"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"><i class="far fa-envelope"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="spacer" data-height="50"></div>

              <div class="about-author padding-30 rounded">
                <div class="thumb">
                  <img src="images/other/avatar-about.png" alt="Autor" />
                </div>
                <div class="details">
                  <h4 class="name"><a href="#">Autor</a></h4>
                  <p>
                  <?php echo $lorem1; ?>
                  </p>
                  <!-- social icons -->
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

              <div class="spacer" data-height="50"></div>

              <!-- section header -->
              <div class="section-header">
                <h3 class="section-title">Comentarios (33)</h3>
                <img src="images/wave.svg" class="wave" alt="wave" />
              </div>
              <!-- post comments -->
              <div class="comments bordered padding-30 rounded">
                <ul class="comments">
                  <!-- comment item -->
                  <li class="comment rounded">
                    <div class="thumb">
                      <img src="images/other/comment-1.png" alt="Autor" />
                    </div>
                    <div class="details">
                      <h4 class="name"><a href="#">Autor</a></h4>
                      <span class="date"><?php echo $fblog; ?></span>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <a href="#" class="btn btn-default btn-sm">Responder</a>
                    </div>
                  </li>
                  <!-- comment item -->
                  <li class="comment child rounded">
                    <div class="thumb">
                      <img src="images/other/comment-2.png" alt="Autor" />
                    </div>
                    <div class="details">
                      <h4 class="name"><a href="#">Autor</a></h4>
                      <span class="date"><?php echo $fblog; ?></span>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <a href="#" class="btn btn-default btn-sm">Responder</a>
                    </div>
                  </li>
                  <!-- comment item -->
                  <li class="comment rounded">
                    <div class="thumb">
                      <img src="images/other/comment-3.png" alt="Autor" />
                    </div>
                    <div class="details">
                      <h4 class="name"><a href="#">Autor</a></h4>
                      <span class="date"><?php echo $fblog; ?></span>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <a href="#" class="btn btn-default btn-sm">Responder</a>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="spacer" data-height="50"></div>

              <!-- section header -->
              <div class="section-header">
                <h3 class="section-title">Enviar Comentario</h3>
                <img src="images/wave.svg" class="wave" alt="wave" />
              </div>
              <!-- comment form -->
              <div class="comment-form rounded bordered padding-30">
                <form id="comment-form" class="comment-form" method="post">
                  <div class="messages"></div>

                  <div class="row">
                    <div class="column col-md-12">
                      <!-- Comment textarea -->
                      <div class="form-group">
                        <textarea
                          name="InputComment"
                          id="InputComment"
                          class="form-control"
                          rows="4"
                          placeholder="Escribe tu comentario..."
                          required="required"
                        ></textarea>
                      </div>
                    </div>

                    <div class="column col-md-6">
                      <!-- Email input -->
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control"
                          id="InputEmail"
                          name="InputEmail"
                          placeholder="Correo electronico"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="column col-md-6">
                      <!-- Name input -->
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          name="InputWeb"
                          id="InputWeb"
                          placeholder="Sitio web"
                          required="required"
                        />
                      </div>
                    </div>

                    <div class="column col-md-12">
                      <!-- Email input -->
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          id="InputName"
                          name="InputName"
                          placeholder="Nombre"
                          required="required"
                        />
                      </div>
                    </div>
                  </div>

                  <button
                    type="submit"
                    name="submit"
                    id="submit"
                    value="Submit"
                    class="btn btn-default"
                  >
                    Enviar</button
                  ><!-- Submit Button -->
                </form>
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
