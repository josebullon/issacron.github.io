<?php
  include_once("layout/header.php");
?>
    <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
          <div class="container">
            <div class="inner-banner-content">
              <h1 class="page-title">Blog Detalles </h1>
              <div class="entry-meta">
                <span class="byline">
                  <a href="blog-archive.php">Administrador</a>
                </span>
                <span class="posted-on">
                  <a href="blog-archive.php">Marzo 17, 2024</a>
                </span>
                <span class="comments-link">
                  <a href="#commentArea">02 comentarios</a>
                </span>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <!-- Inner Banner html end-->
      <!-- Blog html start -->
      <div class="single-post-section">
        <div class="single-post-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 primary right-sidebar">
                <!-- single blog post html start -->
                <figure class="feature-image">
                  <img src="assets/images/img42.jpg" alt="">
                </figure>
                <article class="single-content-wrap">
                  <p><?php echo $lorem1, $lorem1; ?></p>
                  <blockquote>
                    <p><?php echo $lorem1; ?></p>
                  </blockquote>
                  <p><?php echo $lorem1, $lorem1; ?></p>
                </article>
                <div class="meta-wrap">
                  <div class="tag-links">
                    <a href="blog-archive.php">Café</a>,
                    <a href="blog-archive.php">Postres</a>,
                    <a href="blog-archive.php">Desayunos</a>
                  </div>
                </div>
                <div class="post-socail-wrap">
                  <div class="social-icon-wrap">
                    <div class="social-icon social-facebook">
                      <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                      </a>
                    </div>
                    <div class="social-icon social-google">
                      <a href="https://www.google.com/" target="_blank">
                        <i class="fab fa-google-plus-g"></i>
                        <span>Google</span>
                      </a>
                    </div>
                    <div class="social-icon social-pinterest">
                      <a href="https://www.pinterest.com/" target="_blank">
                        <i class="fab fa-pinterest"></i>
                        <span>Pinterest</span>
                      </a>
                    </div>
                    <div class="social-icon social-linkedin">
                      <a href="https://www.linkedin.com/" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        <span>Linkedin</span>
                      </a>
                    </div>
                    <div class="social-icon social-twitter">
                      <a href="https://www.twitter.com/" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="author-wrap">
                  <div class="author-thumb">
                    <img src="assets/images/user-img.png" alt="">
                  </div>
                  <div class="author-content">
                    <h4 class="author-name">Administrador</h4>
                    <p><?php echo $lorem1; ?></p>
                    <a href="blog-archive.php" class="button-text">Ver todos.. </a>
                  </div>
                </div>
                <!-- post comment html -->
                <div id="commentArea" class="comment-area">
                  <h3 class="comment-title">06 Comentarios</h3>
                  <div class="comment-area-inner">
                    <ol>
                      <li>
                        <figure class="comment-thumb">
                          <img src="assets/images/img52.jpg" alt="">
                        </figure>
                        <div class="comment-content">
                          <div class="comment-header">
                            <h5 class="author-name">Nombre Apellido</h5>
                            <span class="post-on">Marzo 17, 2024</span>
                          </div>
                          <p><?php echo $lorem1; ?></p>
                          <a href="#replyComment" class="reply"><i class="fas fa-reply"></i>Responder</a>
                        </div>
                      </li>
                      <li>
                        <ol>
                          <li>
                            <figure class="comment-thumb">
                              <img src="assets/images/img53.jpg" alt="">
                            </figure>
                            <div class="comment-content">
                              <div class="comment-header">
                                <h5 class="author-name">Nombre Apellido</h5>
                                <span class="post-on">Marzo 17, 2024<</span>
                              </div>
                              <p><?php echo $lorem1; ?></p>
                              <a href="#replyComment" class="reply"><i class="fas fa-reply"></i>Responder</a>
                            </div>
                          </li>
                        </ol>
                      </li>
                    </ol>
                    <ol>
                      <li>
                        <figure class="comment-thumb">
                          <img src="assets/images/img54.jpg" alt="">
                        </figure>
                        <div class="comment-content">
                          <div class="comment-header">
                            <h5 class="author-name">Nombre Apellido</h5>
                            <span class="post-on">Marzo 16, 2024<</span>
                          </div>
                          <p><?php echo $lorem1; ?></p>
                          <a href="#replyComment" class="reply"><i class="fas fa-reply"></i>Responder</a>
                        </div>
                      </li>
                    </ol>
                  </div>
                  <div id="replyComment" class="comment-form-wrap">
                    <h3 class="comment-title">Comentar</h3>
                    <p><?php echo $lorem1; ?></p>
                    <form class="comment-form">
                      <p class="full-width">
                        <label>Comentario</label>
                        <textarea rows="9"></textarea>
                      </p>
                      <p>
                        <label>Nombre</label>
                        <input type="text" name="name">
                      </p>
                      <p>
                        <label>Correo</label>
                        <input type="email" name="email">
                      </p>
                      <p>
                        <label>Sitio web</label>
                        <input type="text" name="web">
                      </p>
                      <p>
                        <label>
                          <input type="checkbox" name="s">
                          Lorem ipsum dolor ...
                        </label>
                      </p>
                      <p class="full-width">
                        <input type="submit" name="submit" value="Publicar">
                      </p>
                    </form>
                  </div>
                  <!-- post navigation html -->
                  <div class="post-navigation">
                    <div class="nav-prev">
                      <a href="blog-single.html">
                        <span class="nav-label">Anterior</span>
                        <span class="nav-title">Publñicacion del Blog #1.</span>
                      </a>
                    </div>
                    <div class="nav-next">
                      <a href="blog-single.html">
                        <span class="nav-label">Siguiente</span>
                        <span class="nav-title">Publicacion del Blog #4</span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- blog post item html end -->
              </div>
              <div class="col-lg-4 secondary">
                <div class="sidebar">
                  <aside class="widget author_widget">
                    <h4 class="widget-title">Administrador</h4>
                    <div class="widget-content text-center">
                      <div class="profile">
                        <figure class="avatar">
                          <a href="#">
                            <img src="assets/images/img53.jpg" alt="">
                          </a>
                        </figure>
                        <div class="text-content">
                          <div class="name-title">
                            <h4>
                              <a href="#">Nombre Apellido</a>
                            </h4>
                          </div>
                          <p><?php echo $lorem1; ?></p>
                        </div>
                        <div class="socialgroup">
                          <ul>
                            <li>
                              <a target="_blank" href="https://www.facebook.com/">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>
                            <li>
                              <a target="_blank" href="https://www.google.com/">
                                <i class="fab fa-google"></i>
                              </a>
                            </li>
                            <li>
                              <a target="_blank" href="https://www.twitter.com/">
                                <i class="fab fa-twitter"></i>
                              </a>
                            </li>
                            <li>
                              <a target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>
                            <li>
                              <a target="_blank" href="https://www.pinterest.com/">
                                <i class="fab fa-pinterest"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </aside>
                  <aside class="widget widget_latest_post widget-post-thumb">
                    <h3 class="widget-title">Publicaciones Recientes...</h3>
                    <ul>
                      <li>
                        <figure class="post-thumb">
                          <a href="blog-single.php"><img src="assets/images/img17.jpg" alt=""></a>
                        </figure>
                        <div class="post-content">
                          <h5>
                            <a href="blog-single.php">Publicación de Blog #4</a>
                          </h5>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="blog-archive.php">Aug 17, 2022</a>
                            </span>
                            <span class="comments-link">
                              <a href="blog-archive.php">06 Comentarios</a>
                            </span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <figure class="post-thumb">
                          <a href="blog-single.php"><img src="assets/images/img17.jpg" alt=""></a>
                        </figure>
                        <div class="post-content">
                          <h5>
                            <a href="blog-single.php">Publicación de Blog #3</a>
                          </h5>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="blog-archive.php">Aug 17, 2022</a>
                            </span>
                            <span class="comments-link">
                              <a href="blog-archive.php">07 Comentarios</a>
                            </span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <figure class="post-thumb">
                          <a href="blog-single.php"><img src="assets/images/img16.jpg" alt=""></a>
                        </figure>
                        <div class="post-content">
                          <h5>
                            <a href="blog-single.php">Publicación de Blog #2</a>
                          </h5>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="blog-archive.php">Aug 17, 2022</a>
                            </span>
                            <span class="comments-link">
                              <a href="blog-archive.php">10 Comentarios</a>
                            </span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <figure class="post-thumb">
                          <a href="blog-single.php"><img src="assets/images/img15.jpg" alt=""></a>
                        </figure>
                        <div class="post-content">
                          <h5>
                            <a href="blog-single.php">Publicación de Blog #1</a>
                          </h5>
                          <div class="entry-meta">
                            <span class="posted-on">
                              <a href="blog-archive.php">Aug 17, 2022</a>
                            </span>
                            <span class="comments-link">
                              <a href="blog-archive.php">20 comentarios</a>
                            </span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </aside>
                  <aside class="widget widget_social">
                    <h3 class="widget-title">Compartir</h3>
                    <div class="social-icon-wrap">
                      <div class="social-icon social-facebook">
                        <a href="https://www.facebook.com/">
                          <i class="fab fa-facebook-f"></i>
                          <span>Facebook</span>
                        </a>
                      </div>
                      <div class="social-icon social-pinterest">
                        <a href="https://www.pinterest.com/">
                          <i class="fab fa-pinterest"></i>
                          <span>Pinterest</span>
                        </a>
                      </div>
                      <div class="social-icon social-whatsapp">
                        <a href="https://www.whatsapp.com/">
                          <i class="fab fa-whatsapp"></i>
                          <span>WhatsApp</span>
                        </a>
                      </div>
                      <div class="social-icon social-linkedin">
                        <a href="https://www.linkedin.com/">
                          <i class="fab fa-linkedin"></i>
                          <span>Linkedin</span>
                        </a>
                      </div>
                      <div class="social-icon social-twitter">
                        <a href="https://www.twitter.com/">
                          <i class="fab fa-twitter"></i>
                          <span>Twitter</span>
                        </a>
                      </div>
                      <div class="social-icon social-google">
                        <a href="https://www.google.com/">
                          <i class="fab fa-google-plus-g"></i>
                          <span>Google</span>
                        </a>
                      </div>
                    </div>
                  </aside>
                  <aside class="widget widget_gallery">
                    <h3 class="widget-title">Nuestra Galeria</h3>
                    <div class="gallery gallery-colum-3">
                      <figure class="gallery-item">
                        <a href="blog-single.php"><img src="assets/images/img15.jpg" alt=""></a>
                      </figure>
                      <figure class="gallery-item">
                        <a href="blog-single.php"><img src="assets/images/img16.jpg" alt=""></a>
                      </figure>
                      <figure class="gallery-item">
                        <a href="blog-single.php"><img src="assets/images/img17.jpg" alt=""></a>
                      </figure>
                      <figure class="gallery-item">
                        <a href="blog-single.php"><img src="assets/images/img17.jpg" alt=""></a>
                      </figure>
                      <figure class="gallery-item">
                        <a href="blog-single.php"><img src="assets/images/img15.jpg" alt=""></a>
                      </figure>
                      <figure class="gallery-item">
                        <a href="blog-single.php"><img src="assets/images/img16.jpg" alt=""></a>
                      </figure>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog html end -->
    </main>
    <!-- site footer html start  -->

<?php
  include_once("layout/footer.php");
?>
