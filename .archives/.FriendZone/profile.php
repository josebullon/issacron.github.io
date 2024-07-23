<?php
  // var:
  $menu01 = "active";
  // header.php
  include_once 'layout/header.php';
?>
    <main>
      <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="assets/images/banner/profile-banner.jpg" ></div>
        <div class="profile-menu-area bg-white">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-3">
                <div class="profile-picture-box">
                  <figure class="profile-picture">
                    <a href="profile.php">
                      <img class="img-profile" src="assets/images/profile/profile-1.jpg" alt="img" />
                    </a>
                  </figure>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 offset-lg-1">
                <div class="profile-menu-wrapper">
                  <div class="main-menu-inner header-top-navigation">
                    <nav>
                      <ul class="main-menu">
                        <li class="<?php echo $menu01; ?>"><a class="btn-15" href="profile.php">Perfil</a></li>
                        <li class="<?php echo $menu02; ?>"><a class="btn-15" href="about.php">Sobre mi</a></li>
                        <li class="<?php echo $menu03; ?>"><a class="btn-15" href="photos.php">Fotos</a></li>
                        <li class="<?php echo $menu04; ?>"><a class="btn-15" href="friends.php">Amigos</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 d-none d-md-block">
                <div class="profile-edit-panel">
                  <button class="edit-btn">Editar Perfil</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
              <aside class="widget-area profile-sidebar">
                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Maria Fuentes</h4>
                  <div class="widget-body">
                    <div class="about-author">
                      <p>
                        <?php echo $lorem2; ?>
                      </p>
                      <ul class="author-into-list">
                        <li><a href="#"><i class="fa-solid fa-briefcase"></i> Diseñadora web</a></li>
                        <li><a href="#"><i class="fa-solid fa-house"></i> Caracas, Venezuela</a></li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> El paraiso</a></li>
                        <li><a href="#"><i class="fa-solid fa-heart-pulse"></i> Tecnologia, Correr</a></li>
                      </ul>
                      <div class="row pt-20">
                        <div class="col-lg-4">
                          <a href=""><i class="ico fa-brands fa-facebook"></i></a>
                        </div>
                        <div class="col-lg-4">
                          <a href=""><i class="ico fa-brands fa-github"></i></a>
                        </div>
                        <div class="col-lg-4">
                          <a href=""><i class="ico fa-brands fa-instagram"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- widget single item end -->
                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Recuerdos</h4>
                  <div class="widget-body">
                    <div class="sweet-galley img-gallery">
                      <div class="row row-5">
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-1.jpg" >
                                <img src="assets/images/gallery/gallery-1.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-2.jpg" >
                                <img src="assets/images/gallery/gallery-2.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-3.jpg" >
                                <img src="assets/images/gallery/gallery-3.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-4.jpg" >
                                <img src="assets/images/gallery/gallery-4.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-5.jpg" >
                                <img src="assets/images/gallery/gallery-5.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-6.jpg" >
                                <img src="assets/images/gallery/gallery-6.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-7.jpg" >
                                <img src="assets/images/gallery/gallery-7.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-8.jpg" >
                                <img src="assets/images/gallery/gallery-8.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="gallery-tem">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/gallery/gallery-9.jpg" >
                                <img src="assets/images/gallery/gallery-9.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- widget single item end -->
                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Paginas Favoritas</h4>
                  <div class="widget-body">
                    <ul class="like-page-list-wrapper">
                      <li class="unorder-list">
                        <!-- profile picture start -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img src="assets/images/profile/profile-35x35-1.jpg" alt="img" />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->
                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Viajes por el mundo</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Aventura</a></p>
                        </div>
                        <button class="like-button active">
                          <img class="heart" src="assets/images/icons/heart.png" alt="img" />
                          <img class="heart-color" src="assets/images/icons/heart-color.png" alt="img" />
                        </button>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture start -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img src="assets/images/profile/profile-35x35-11.jpg" alt="img" />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->
                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Tecnologia al dia</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Tecnologia</a></p>
                        </div>
                        <button class="like-button">
                          <img class="heart" src="assets/images/icons/heart.png" alt="img" />
                          <img class="heart-color" src="assets/images/icons/heart-color.png" alt="img" />
                        </button>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture start -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img src="assets/images/profile/profile-35x35-15.jpg" alt="img" />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->
                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Salud y bienestar</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Salud</a></p>
                        </div>
                        <button class="like-button">
                          <img class="heart" src="assets/images/icons/heart.png" alt="img" />
                          <img class="heart-color" src="assets/images/icons/heart-color.png" alt="img" />
                        </button>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture start -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img src="assets/images/profile/profile-35x35-18.jpg" alt="img" />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->
                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Peliculas actuales</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Entretenimiento</a></p>
                        </div>
                        <button class="like-button">
                          <img class="heart" src="assets/images/icons/heart.png" alt="img" />
                          <img class="heart-color" src="assets/images/icons/heart-color.png" alt="img" />
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- widget single item end -->
              </aside>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <!-- share box start -->
              <div class="card card-small">
                <div class="share-box-inner">
                  <!-- profile picture end -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-37.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <!-- share content box start -->
                  <div class="share-content-box w-100">
                    <form class="share-text-box">
                      <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Escribir algun texto" data-bs-toggle="modal" data-bs-target="#textbox" id="email" ></textarea>
                      <button class="btn-share" type="submit">Compartir</button>
                    </form>
                  </div>
                  <!-- share content box end -->
                  <!-- Modal start -->
                  <div class="modal fade" id="textbox" aria-labelledby="textbox" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Compartir</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body custom-scroll">
                          <textarea name="share" class="share-field-big custom-scroll" placeholder="Escribe algo" ></textarea>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="post-share-btn" data-bs-dismiss="modal" >
                            Cancelar
                          </button>
                          <button type="button" class="post-share-btn">
                            Publicar
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal end -->
                </div>
              </div>
              <!-- share box end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture end -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-25.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Maria Fuentes</a>
                    </h6>
                    <span class="post-time">15 minutos</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Copiar enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc">
                    <?php echo $lorem2; ?>
                  </p>
                  <div class="post-thumb-gallery img-gallery">
                    <div class="row g-0">
                      <div class="col-8">
                        <figure class="post-thumb">
                          <a class="gallery-selector" href="assets/images/post/post-2.jpg" >
                            <img src="assets/images/post/post-2.jpg" alt="img" />
                          </a>
                        </figure>
                      </div>
                      <div class="col-4">
                        <div class="row">
                          <div class="col-12">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/post/post-3.jpg" >
                                <img src="assets/images/post/post-3.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                          <div class="col-12">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/post/post-4.jpg" >
                                <img src="assets/images/post/post-4.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                          <div class="col-12">
                            <figure class="post-thumb">
                              <a class="gallery-selector" href="assets/images/post/post-5.jpg" >
                                <img src="assets/images/post/post-5.jpg" alt="img" />
                              </a>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 300 personas les gusto esta publicacion</span>
                      <strong>100</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>50</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>20</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture start -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-3.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Victor Gutierrez</a>
                    </h6>
                    <span class="post-time">25 minutos</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Copia enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc pb-0">
                  <?php echo $lorem2; ?>
                  </p>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 175 personas les gusto esta publicacion</span>
                      <strong>300</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>60</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>10</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture start -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img
                          src="assets/images/profile/profile-small-4.jpg"
                          alt="img"
                        />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Miguel Dosantos</a>
                    </h6>
                    <span class="post-time">35 minutos</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Copia enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc">
                  <?php echo $lorem2; ?>
                  </p>
                  <div class="plyr__video-embed plyr-video">
                    <iframe src="https://www.youtube.com/watch?v=YLslsZuEaNE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                  </div>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 200 personas les gusto esta publicacion</span>
                      <strong>200</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>75</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>25</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture start -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-8.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Santiago Toro</a>
                    </h6>
                    <span class="post-time">50 minutos</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Copia enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc">
                  <?php echo $lorem2; ?>
                  </p>
                  <div class="post-thumb-gallery img-gallery">
                    <div class="row g-0">
                      <div class="col-6">
                        <figure class="post-thumb">
                          <a class="gallery-selector" href="assets/images/post/post-6.jpg" >
                            <img src="assets/images/post/post-6.jpg" alt="img" />
                          </a>
                        </figure>
                      </div>
                      <div class="col-6">
                        <figure class="post-thumb">
                          <a class="gallery-selector" href="assets/images/post/post-7.jpg" >
                            <img src="assets/images/post/post-7.jpg" alt="img" />
                          </a>
                        </figure>
                      </div>
                    </div>
                  </div>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 150 personas les gusto esta publicacion</span>
                      <strong>132</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>85</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>19</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture start -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-6.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Robert Hidalgo</a>
                    </h6>
                    <span class="post-time">1 hora</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Copia enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc pb-0">
                  <?php echo $lorem2; ?>
                  </p>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 133 personas les gusto esta publicacion</span>
                      <strong>100</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>45</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>16</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture start -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-2.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Andres Contreras</a>
                    </h6>
                    <span class="post-time">20 min ago</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Copia enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc">
                    <?php echo $lorem2; ?>
                  </p>
                  <div class="post-thumb-gallery">
                    <figure class="post-thumb img-popup">
                      <a href="assets/images/post/post-1.jpg">
                        <img src="assets/images/post/post-1.jpg" alt="img" />
                      </a>
                    </figure>
                  </div>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 170 personas les gusto esta publicacion</span>
                      <strong>140</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>80</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>20</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
              <!-- post status start -->
              <div class="card">
                <!-- post title start -->
                <div class="post-title d-flex align-items-center">
                  <!-- profile picture start -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img src="assets/images/profile/profile-small-3.jpg" alt="img" />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  <div class="posted-author">
                    <h6 class="author">
                      <a href="profile.php">Antonio Oliveira</a>
                    </h6>
                    <span class="post-time">1 dia</span>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                      <li><button>Copia enlace</button></li>
                        <li><button>Editar</button></li>
                        <li><button>Inscrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- post title start -->
                <div class="post-content">
                  <p class="post-desc pb-0">
                    <?php echo $lorem2; ?>
                  </p>
                  <div class="post-meta">
                    <button class="post-meta-like">
                      <span><i class="fa-solid fa-heart-pulse"></i></span>
                      <span>A 230 personas les gusto esta publicacion</span>
                      <strong>120</strong>
                    </button>
                    <ul class="comment-share-meta">
                      <li>
                        <button class="post-comment">
                          <span><i class="fa-regular fa-comments"></i></span>
                          <span>95</span>
                        </button>
                      </li>
                      <li>
                        <button class="post-share">
                          <span><i class="fa-solid fa-share-nodes"></i></span>
                          <span>21</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- post status end -->
            </div>
            <div class="col-lg-3 order-3">
              <aside class="widget-area">
                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Notificaciones Recientes</h4>
                  <div class="widget-body">
                    <ul class="like-page-list-wrapper">
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-9.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#"><?php echo $lorem4; ?></a>
                          </h3>
                          <p class="list-subtitle">5 minutos</p>
                        </div>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-8.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#"><?php echo $lorem4; ?></a>
                          </h3>
                          <p class="list-subtitle">15 minutos</p>
                        </div>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-7.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#"><?php echo $lorem4; ?></a>
                          </h3>
                          <p class="list-subtitle">20 minutos</p>
                        </div>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-6.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#"><?php echo $lorem4; ?></a>
                          </h3>
                          <p class="list-subtitle">35 minutos</p>
                        </div>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-5.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#"><?php echo $lorem4; ?></a>
                          </h3>
                          <p class="list-subtitle">50 minutos</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- widget single item end -->

                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Publicidad</h4>
                  <div class="widget-body">
                    <div class="add-thumb">
                      <a href="#">
                        <img
                          src="assets/images/banner/advertise.jpg"
                          alt="advertisement"
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- widget single item end -->

                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Amigos</h4>
                  <div class="widget-body">
                    <ul class="like-page-list-wrapper">
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-1.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title"><a href="#">Jose Maldonado</a></h3>
                          <p class="list-subtitle"><a href="#">10 minutos</a></p>
                        </div>
                        <button class="like-button">
                          <img
                            class="heart"
                            src="assets/images/icons/heart.png"
                            alt="img"
                          />
                          <img
                            class="heart-color"
                            src="assets/images/icons/heart-color.png"
                            alt="img"
                          />
                        </button>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-2.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Hennry Rodriguez</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Salud</a></p>
                        </div>
                        <button class="like-button active">
                          <img
                            class="heart"
                            src="assets/images/icons/heart.png"
                            alt="img"
                          />
                          <img
                            class="heart-color"
                            src="assets/images/icons/heart-color.png"
                            alt="img"
                          />
                        </button>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-3.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Ricardo Figueroa</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Tecnologia</a></p>
                        </div>
                        <button class="like-button">
                          <img
                            class="heart"
                            src="assets/images/icons/heart.png"
                            alt="img"
                          />
                          <img
                            class="heart-color"
                            src="assets/images/icons/heart-color.png"
                            alt="img"
                          />
                        </button>
                      </li>
                      <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-small">
                              <img
                                src="assets/images/profile/profile-35x35-4.jpg"
                                alt="img"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                          <h3 class="list-title">
                            <a href="#">Miguel Quintana</a>
                          </h3>
                          <p class="list-subtitle"><a href="#">Aventura</a></p>
                        </div>
                        <button class="like-button">
                          <img
                            class="heart"
                            src="assets/images/icons/heart.png"
                            alt="img"
                          />
                          <img
                            class="heart-color"
                            src="assets/images/icons/heart-color.png"
                            alt="img"
                          />
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- widget single item end -->
              </aside>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php
  include_once 'layout/footer.php';
?>
