<?php
  // var:
  $menu02 = "active";
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
        <!-- sendary menu start -->
        <div class="menu-secondary">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="secondary-menu-wrapper bg-white">
                  <div class="page-title-inner">
                    <h4 class="page-title">Sobre mi</h4>
                  </div>
                  <div class="main-menu-inner header-top-navigation">
                    <nav>
                      <ul>
                        <li><a href="#"><i class="ico fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="ico fa-brands fa-github"></i></a></li>
                        <li><a href="#"><i class="ico fa-brands fa-instagram"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Editar perfil</button></li>
                        <li><button>Copiar</button></li>
                        <li><button>Incerustar en codigo</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sendary menu end -->
        <!-- about author details start -->
        <div class="about-author-details">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="card widget-item">
                  <div class="about-me">
                    <ul class="nav flex-column about-author-menu">
                      <li><a href="#one" data-bs-toggle="tab" class="active">Sobre mi</a></li>
                      <li><a href="#two" data-bs-toggle="tab">Trabajo</a></li>
                      <li><a href="#three" data-bs-toggle="tab">Educacion</a></li>
                      <li><a href="#four" data-bs-toggle="tab">Cursos</a></li>
                      <li><a href="#five" data-bs-toggle="tab">Hobbie</a></li>
                      <li><a href="#six" data-bs-toggle="tab">Contactame</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card about-description">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="one">
                      <div class="work-zone">
                        <div class="author-desc-title d-flex">
                          <h6 class="author">
                            Sobre mi
                          </h6>
                          <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                              <ul>
                              <li><button>Editar perfil</button></li>
                              <li><button>Copiar</button></li>
                              <li><button>Incerustar en codigo</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <div class="skills-bar pt-20">
                          <div class="bar">
                            <div class="info">
                              <span>HTML</span>
                            </div>
                            <div class="progress-line"><span class="html"></span></div>
                            <div class="bar">
                              <div class="info">
                                <span>CSS</span>
                              </div>
                              <div class="progress-line"><span class="css"></span></div>
                              <div class="bar">
                                <div class="info">
                                  <span>BOOTSTRAP</span>
                                </div>
                                <div class="progress-line"><span class="bootstrap"></span></div>
                                <div class="bar">
                                  <div class="info">
                                    <span>JAVASCRIPT</span>
                                  </div>
                                  <div class="progress-line">
                                    <span class="javascript"></span>
                                  </div>
                                  <div class="bar">
                                    <div class="info">
                                      <span>JAVA</span>
                                    </div>
                                    <div class="progress-line"><span class="c"></span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="two">
                      <div class="work-zone">
                        <div class="author-desc-title d-flex">
                          <h6 class="author">
                            Trabajo
                          </h6>
                          <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                              <ul>
                                <li><button>Editar perfil</button></li>
                                <li><button>Copiar</button></li>
                                <li><button>Incerustar en codigo</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <ul class="linetime">
                          <!-- Item 1 -->
                          <li>
                            <div class="direction-r">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre de Empresa</span>
                                <span class="time-wrapper"><span class="time">2020 - presente</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2; ?></div>
                            </div>
                          </li>
                          <!-- Item 2 -->
                          <li>
                            <div class="direction-l">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre de Empresa</span>
                                <span class="time-wrapper"><span class="time">2015 - 2020</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2 ?></div>
                            </div>
                          </li>
                          <!-- Item 3 -->
                          <li>
                            <div class="direction-r">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre de Empresa</span>
                                <span class="time-wrapper"><span class="time">2012 - 2015</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2; ?></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="three">
                      <div class="work-zone">
                        <div class="author-desc-title d-flex">
                          <h6 class="author">
                            Educacion
                          </h6>
                          <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                              <ul>
                                <li><button>Editar perfil</button></li>
                                <li><button>Copiar</button></li>
                                <li><button>Incerustar en codigo</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <ul class="linetime">
                          <!-- Item 1 -->
                          <li>
                            <div class="direction-r">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre del Instituto</span>
                                <span class="time-wrapper"><span class="time">2020 - presente</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2; ?></div>
                            </div>
                          </li>
                          <!-- Item 2 -->
                          <li>
                            <div class="direction-l">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre del Instituto</span>
                                <span class="time-wrapper"><span class="time">2015 - 2020</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2 ?></div>
                            </div>
                          </li>
                          <!-- Item 3 -->
                          <li>
                            <div class="direction-r">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre del Instituto</span>
                                <span class="time-wrapper"><span class="time">2014 - 2015</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2; ?></div>
                            </div>
                          </li>
                          <!-- Item 4-->
                          <li>
                            <div class="direction-l">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre del Instituto</span>
                                <span class="time-wrapper"><span class="time">2010 - 2014</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2 ?></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="four">
                      <div class="work-zone">
                        <div class="author-desc-title d-flex">
                          <h6 class="author">
                            Cursos
                          </h6>
                          <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                              <ul>
                                <li><button>Editar perfil</button></li>
                                <li><button>Copiar</button></li>
                                <li><button>Incerustar en codigo</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <p>
                          <?php echo $lorem2; ?>
                        </p>
                        <ul class="linetime">
                            <!-- Item 1 -->
                            <li>
                              <div class="direction-l">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2023 - 2024</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 2 -->
                            <li>
                              <div class="direction-l">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2020 - 2023</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 3 -->
                            <li>
                              <div class="direction-l">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2019 - 2020</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 4 -->
                            <li>
                              <div class="direction-l">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2017 - 2019</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 5 -->
                            <li>
                              <div class="direction-l">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2016 - 2017</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 6 -->
                            <li>
                              <div class="direction-r">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2015 - 2016</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 7 -->
                            <li>
                              <div class="direction-r">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2013 - 2015</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 8 -->
                            <li>
                              <div class="direction-r">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2012 - 2013</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                            <!-- Item 9 -->
                            <li>
                              <div class="direction-r">
                                <div class="flag-wrapper">
                                  <span class="flag">Nombre del Curso</span>
                                  <span class="time-wrapper"><span class="time">2011 - 2012</span></span>
                                </div>
                                <div class="desc"><?php echo $lorem2; ?></div>
                              </div>
                            </li>
                          <!-- Item 10 -->
                          <li>
                            <div class="direction-r">
                              <div class="flag-wrapper">
                                <span class="flag">Nombre del Curso</span>
                                <span class="time-wrapper"><span class="time">2010- 2011</span></span>
                              </div>
                              <div class="desc"><?php echo $lorem2; ?></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="five">
                      <div class="work-zone">
                        <div class="author-desc-title d-flex">
                          <h6 class="author">
                            Hobbie
                          </h6>
                          <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                              <ul>
                              <li><button>Editar perfil</button></li>
                              <li><button>Copiar</button></li>
                              <li><button>Incerustar en codigo</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="hobbie">
                          <h2>Mis hobbies Favoritos</h2>
                          <div class="radio-buttons">
                            <label class="custom-radio">
                              <input type="radio" name="radio" checked />
                              <span class="radio-btn">
                                <i class="ico las la-check"></i>
                                <div class="hobbies-icon">
                                  <i class="ico fa-solid fa-person-biking"></i>
                                  <h3><?php echo $lorem5; ?></h3>
                                </div>
                              </span>
                            </label>
                            <label class="custom-radio">
                              <input type="radio" name="radio" />
                              <span class="radio-btn">
                                <i class="ico las la-check"></i>
                                <div class="hobbies-icon">
                                  <i class="ico fa-solid fa-futbol"></i>
                                  <h3><?php echo $lorem5; ?></h3>
                                </div>
                              </span>
                            </label>
                            <label class="custom-radio">
                              <input type="radio" name="radio" />
                              <span class="radio-btn">
                                <i class="ico las la-check"></i>
                                <div class="hobbies-icon">
                                  <i class="ico fa-solid fa-table-tennis-paddle-ball"></i>
                                  <h3><?php echo $lorem5; ?></h3>
                                </div>
                              </span>
                            </label>
                            <label class="custom-radio">
                              <input type="radio" name="radio" />
                              <span class="radio-btn">
                                <i class="ico las la-check"></i>
                                <div class="hobbies-icon">
                                  <i class="ico fa-solid fa-ellipsis"></i>
                                  <h3><?php echo $lorem5; ?></h3>
                                </div>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="six">
                      <div class="work-zone">
                        <div class="author-desc-title d-flex">
                          <h6 class="author">
                            Contactame
                          </h6>
                          <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                              <ul>
                              <li><button>Editar perfil</button></li>
                              <li><button>Copiar</button></li>
                              <li><button>Incerustar en codigo</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <h1>Contactame </h1>
                        <form action="" method="post">
                          <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="form-control" id="name" type="text" name="Name">
                          </div>
                          <div class="form-group">
                            <label for="email">Correo</label>
                            <input class="form-control" id="email" type="email" name="Email">
                          </div>
                          <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="Message"></textarea>
                          </div>
                          <div class="profile-edit-panel pt-20" >
                            <input class="edit-btn" type="submit" value="Enviar" />
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- about author details end -->
        <!-- section start -->
        <div class="friends-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card content-box">
                  <h5 class="content-title">Fotos</h5>
                  <div class="content-body">
                    <div class="row mt--30">
                      <div class="col-sm-6 col-md-4">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-1.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-3.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-1.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #1 (17)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #2 (20)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-3.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-3.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #3 (18)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-1.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #4 (30)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-4.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-5.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #5 (40)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="photo-group">
                          <div class="gallery-toggle">
                            <div class="d-none product-thumb-large-view">
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-3.jpg" alt="Photo Gallery" />
                              <img src="assets/images/photos/photo-2.jpg" alt="Photo Gallery" />
                            </div>
                            <div class="gallery-overlay">
                              <img src="assets/images/photos/photo-6.jpg" alt="Photo Gallery" />
                              <div class="view-icon"></div>
                            </div>
                            <div class="photo-gallery-caption">
                              <h3 class="photos-caption">Coleccion #6 (60)</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="load-more text-center">
                          <button class="load-more-btn">Ver mas</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- section end -->
        <!-- section start -->
        <div class="friends-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card content-box">
                  <h5 class="content-title">Amigos</h5>
                  <div class="content-body">
                    <div class="row mt--20">
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-1.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-4.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-7.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-22.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">
                            Amigo
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-10.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">
                            Amigo
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-13.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-18.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-25.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-16.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-12.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-9.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">
                            Amigo
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-17.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-11.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-20.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">
                            Amigo
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-32.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-18.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-29.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-26.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-19.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="friend-list-view">
                          <!-- profile picture end -->
                          <div class="profile-thumb">
                            <a href="#">
                              <figure class="profile-thumb-middle">
                                <img
                                  src="assets/images/profile/profile-small-17.jpg"
                                  alt="profile picture"
                                />
                              </figure>
                            </a>
                          </div>
                          <!-- profile picture end -->

                          <div class="posted-author">
                            <h6 class="author">
                              <a href="profile.php">Nombre y Apellido</a>
                            </h6>
                            <button class="add-frnd">Amigo</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="load-more text-center">
                          <button class="load-more-btn">Leer mas</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- section end -->
        <!-- section start -->
        <div class="friends-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card content-box">
                  <h5 class="content-title">Mis libros favoritos</h5>
                  <div class="content-body">
                    <div class="row favorite-item-carousel">
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/books/book-1.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/books/book-2.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/books/book-3.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/books/book-4.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/books/book-5.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/books/book-6.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="load-more text-center">
                          <button class="load-more-btn">Ver mas</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- section end -->
        <!-- section start -->
        <div class="friends-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card content-box">
                  <h5 class="content-title">Mis Deportes Favoritos</h5>
                  <div class="content-body">
                    <div class="row favorite-item-carousel">
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/sports/sport-1.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/sports/sport-2.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/sports/sport-3.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/sports/sport-4.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/sports/sport-5.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col">
                        <figure class="favorite-item">
                          <a href="#">
                            <img src="assets/images/sports/sport-6.jpg" alt="" />
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="load-more text-center">
                          <button class="load-more-btn"> Ver mas</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- section end -->
      </div>
    </main>
<?php
  include_once 'layout/footer.php';
?>
