<?php
  // var:
  $menu04 = "active";
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
                    <h4 class="page-title">...</h4>
                  </div>
                  <div class="filter-menu">
                    <button class="active" data-filter="*">Todo</button>
                    <button data-filter=".recently">Cat #1</button>
                    <button data-filter=".relative">Cat #2</button>
                    <button data-filter=".collage">Cat #3</button>
                    <button data-filter=".request">Cat #4</button>
                  </div>
                  <div class="post-settings-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="post-settings arrow-shape">
                      <ul>
                        <li><button>Editar perfil</button></li>
                        <li><button>Historial</button></li>
                        <li><button>Incrustar codigo</button></li>
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
        <div class="friends-section mt-20">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card content-box friends-zone">
                  <div class="row mt--20 friends-list">
                    <div class="col-lg-3 col-sm-6 recently request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 collage request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently request">
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
                            <a href="profile.php">musa kollins</a>
                          </h6>
                          <button class="add-frnd">add friend</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 request collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently relative">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative collage request">
                      <div class="friend-list-view">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-middle">
                              <img
                                src="assets/images/profile/profile-small-31.jpg"
                                alt="profile picture"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                          <h6 class="author">
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 request recently">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently request">
                      <div class="friend-list-view">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-middle">
                              <img
                                src="assets/images/profile/profile-small-23.jpg"
                                alt="profile picture"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                          <h6 class="author">
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 collage request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently request">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 request collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently relative">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative collage request">
                      <div class="friend-list-view">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-middle">
                              <img
                                src="assets/images/profile/profile-small-31.jpg"
                                alt="profile picture"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                          <h6 class="author">
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 request recently">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 relative collage">
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
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 recently request">
                      <div class="friend-list-view">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                          <a href="#">
                            <figure class="profile-thumb-middle">
                              <img
                                src="assets/images/profile/profile-small-23.jpg"
                                alt="profile picture"
                              />
                            </figure>
                          </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                          <h6 class="author">
                            <a href="profile.php">Nombre Apellido</a>
                          </h6>
                          <button class="add-frnd">Amigo</button>
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
