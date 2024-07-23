<?php
  // var:
  $menu03 = "active";
  // header.php
  include_once 'layout/header.php';
?>
    <main>
      <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="assets/images/banner/profile-banner.jpg" ></div>
        <div class="profile-menu-area secondary-navigation-style bg-white">
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
        <!-- sendary menu start -->
        <div class="menu-secondary">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="secondary-menu-wrapper bg-white">
                <div class="page-title-inner">
                    <h4 class="page-title">Fotos</h4>
                  </div>
                  <div class="filter-menu">
                    <button class="active" data-filter="*">Todo</button>
                    <button data-filter=".timeline">Principal</button>
                    <button data-filter=".upload">Descargar</button>
                    <button data-filter=".folder">Carpeta</button>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Editar perfil</button></li>
                        <li><button>Copiar enlace</button></li>
                        <li><button>Incrustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sendary menu end -->
        <!-- photo section start -->
        <div class="photo-section mt-20">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card content-box">
                  <div class="content-body">
                    <div class="row mt--30 photo-filter">
                      <div class="col-sm-6 col-md-4 timeline upload folder">
                        <div class="photo-group active">
                          <div class="gallery-toggle">
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-blank.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Crear Carpeta</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 folder">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-7.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-8.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-9.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-7.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #1 (150)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 upload">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-8.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-8.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #2 (120)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 folder">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-1.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-10.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-1.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">
                                Office Hangout (12)
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 upload">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-8.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-11.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #3 (140)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 timeline">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-3.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-3.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #5 (160)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 timeline">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-9.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #6 (50)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 folder">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-7.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #7  (137)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 upload">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-8.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #8 (120)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 folder">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-10.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-8.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-10.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #9 (123)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 upload">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-9.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-9.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #8 (120)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 timeline">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-11.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-7.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-1.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-11.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #9 (140)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- photo section end -->
      </div>
    </main>
<?php
  include_once 'layout/footer.php';
?>
