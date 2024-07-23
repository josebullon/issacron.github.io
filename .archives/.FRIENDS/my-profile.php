<?php
  include_once("layout/header.php");
?>

      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="my-profile-inner-box">
          <div class="profile-cover-image">
            <a href="#">
              <img src="assets/images/my-profile-bg.jpg" alt="image" />
            </a>
            <a href="#" class="edit-cover-btn">Editar Portada</a>
          </div>

          <div class="profile-info-box">
            <div
              class="inner-info-box d-flex justify-content-between align-items-center"
            >
              <div class="info-image">
                <a href="#">
                  <img src="assets/images/my-profile.jpg" alt="image" />
                </a>
                <div class="icon">
                  <a href="#"><i class="flaticon-photo-camera"></i></a>
                </div>
              </div>
              <div class="info-text ms-3">
                <h3><a href="#">Rafael Bullon</a></h3>
                <span
                  ><a
                    href="/cdn-cgi/l/email-protection#0865697c7c606d7f486f65696164266b6765"
                    ><span
                      class="__cf_email__"
                      data-cfemail="4a272b3e3e222f3d0a2d272b232664292527"
                      >[correo&#160;protegido]</span
                    ></a
                  ></span
                >
              </div>
              <ul class="statistics">
                <li>
                  <a href="#">
                    <span class="item-number">400</span>
                    <span class="item-text">Me Gusta </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="item-number">954</span>
                    <span class="item-text">Seguidores</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="item-number">475</span>
                    <span class="item-text">Seguidos</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="profile-list-tabs">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="timeline-tab"
                    data-bs-toggle="tab"
                    href="#timeline"
                    role="tab"
                    aria-controls="timeline"
                    >Principal</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="about-tab"
                    data-bs-toggle="tab"
                    href="#about"
                    role="tab"
                    aria-controls="about"
                    >Sobre mi</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="friends-tab"
                    data-bs-toggle="tab"
                    href="#friends"
                    role="tab"
                    aria-controls="friends"
                    >Amigos</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="photos-tab"
                    data-bs-toggle="tab"
                    href="#photos"
                    role="tab"
                    aria-controls="photos"
                    >Fotos</a
                  >
                </li>
              </ul>
            </div>

            <ul class="profile-social">
              <li>
                <a href="https://www.facebook.com/" target="_blank">
                  <img src="assets/images/social/facebook.png" alt="image" />
                </a>
              </li>
              <li>
                <a href="https://twitter.com/" target="_blank">
                  <img src="assets/images/social/twitter.png" alt="image" />
                </a>
              </li>
              <li>
                <a href="https://www.pinterest.com/" target="_blank">
                  <img src="assets/images/social/pinterest.png" alt="image" />
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/" target="_blank">
                  <img src="assets/images/social/linkedin.png" alt="image" />
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/" target="_blank">
                  <img src="assets/images/social/instagram.png" alt="image" />
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="timeline" role="tabpanel">
            <div class="row">
              <div class="col-lg-3 col-md-12">
                <aside class="widget-area">
                  <div class="widget widget-suggested-groups">
                    <h3 class="widget-title">Grupos Sugeridos</h3>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg1" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Programación web</a>
                        </h4>
                        <span>7500+ Miembros</span>
                        <a href="#" class="join-btn">Unirte</a>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg2" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Lectura</a>
                        </h4>
                        <span>4100+ Members</span>
                        <a href="#" class="join-btn">Unirte</a>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg3" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Fotografia</a>
                        </h4>
                        <span>500+ Miembros</span>
                        <a href="#" class="join-btn">Unirte</a>
                      </div>
                    </article>
                  </div>
                  <div class="widget widget-advertisement">
                    <h3 class="widget-title">Publicidad</h3>

                    <div class="advertisement-image">
                      <a href="#"
                        ><img src="assets/images/advertisement.jpg" alt="image"
                      /></a>
                    </div>
                  </div>
                  <div class="widget widget-page-you-like">
                    <h3 class="widget-title">Página que te gusta</h3>

                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg1" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Diseño Gráfico</a>
                        </h4>
                        <span>1300 Miembros</span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg2" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Marketing Digital</a>
                        </h4>
                        <span>1600 Miembros</span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg3" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Ciclismo</a>
                        </h4>
                        <span>2000 Miembros</span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg4" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Comida Italiana</a>
                        </h4>
                        <span>5300 Miembros</span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg5" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Viajes</a>
                        </h4>
                        <span>10000 Miembros</span>
                      </div>
                    </article>
                  </div>
                  <div class="widget widget-watch-video">
                    <h3 class="widget-title">Ver videos</h3>

                    <div class="watch-video-slides owl-carousel owl-theme">
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-1.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-2.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-3.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="news-feed-area">
                  <div class="news-feed news-feed-form">
                    <h3 class="news-feed-title">Publica algo...</h3>

                    <form>
                      <div class="form-group">
                        <textarea
                          name="message"
                          class="form-control"
                          placeholder="¿Como te sientes?"
                        ></textarea>
                      </div>
                      <ul
                        class="button-group d-flex justify-content-between align-items-center"
                      >
                        <li class="photo-btn">
                          <button type="submit">
                            <i class="flaticon-gallery"></i> Foto
                          </button>
                        </li>
                        <li class="video-btn">
                          <button type="submit">
                            <i class="flaticon-video"></i> Video
                          </button>
                        </li>
                        <li class="tag-btn">
                          <button type="submit">
                            <i class="flaticon-tag"></i> Etiqueta Amigos
                          </button>
                        </li>
                        <li class="post-btn">
                          <button type="submit">Publicar</button>
                        </li>
                      </ul>
                    </form>
                  </div>

                  <div class="news-feed news-feed-stories">
                    <div
                      class="stories-title d-flex justify-content-between align-items-center"
                    >
                      <h3>Historias</h3>
                      <span><a href="#">Ver todas</a></span>
                    </div>

                    <div class="row">
                      <div class="col-lg-2 col-sm-4 col-4">
                        <div class="stories-item">
                          <div class="stories-image">
                            <a href="#">
                              <img
                                src="assets/images/user/user-1.jpg"
                                alt="image"
                              />
                            </a>
                            <div class="add-icon">
                              <a href="#"><i class="flaticon-add"></i></a>
                            </div>
                          </div>
                          <span><a href="#">Agregar Historia</a></span>
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-4 col-4">
                        <div class="stories-item">
                          <a href="#">
                            <img
                              src="assets/images/user/user-28.jpg"
                              alt="image"
                            />
                          </a>
                          <span><a href="#">Manuel</a></span>
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-4 col-4">
                        <div class="stories-item">
                          <a href="#">
                            <img
                              src="assets/images/user/user-29.jpg"
                              alt="image"
                            />
                          </a>
                          <span><a href="#">Oriana</a></span>
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-4 col-4">
                        <div class="stories-item">
                          <a href="#">
                            <img
                              src="assets/images/user/user-13.jpg"
                              alt="image"
                            />
                          </a>
                          <span><a href="#">Marcos</a></span>
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-4 col-4">
                        <div class="stories-item">
                          <a href="#">
                            <img
                              src="assets/images/user/user-30.jpg"
                              alt="image"
                            />
                          </a>
                          <span><a href="#">Rosaura</a></span>
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-4 col-4">
                        <div class="stories-item">
                          <a href="#">
                            <img
                              src="assets/images/user/user-31.jpg"
                              alt="image"
                            />
                          </a>
                          <span><a href="#">Carlos</a></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="news-feed news-feed-post">
                    <div
                      class="post-header d-flex justify-content-between align-items-center"
                    >
                      <div class="image">
                        <a href="my-profile.php"
                          ><img
                            src="assets/images/user/user-32.jpg"
                            class="rounded-circle"
                            alt="image"
                        /></a>
                      </div>
                      <div class="info ms-3">
                        <span class="name"
                          ><a href="my-profile.php">Cristina Rosales</a></span
                        >
                        <span class="small-text"
                          ><a href="#">15 Minutos</a></span
                        >
                      </div>
                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i> Ocultar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i>Borrar Publicación</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="post-body">
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <div class="post-image">
                        <img
                          src="assets/images/news-feed-post/post-1.jpg"
                          alt="image"
                        />
                      </div>
                      <ul
                        class="post-meta-wrap d-flex justify-content-between align-items-center"
                      >
                        <li class="post-react">
                          <a href="#"
                            ><i class="flaticon-like"></i><span>Me Gusta</span>
                            <span class="number">150 </span></a
                          >

                          <ul class="react-list">
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-1.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-2.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-3.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-4.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-5.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-6.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-7.png"
                                  alt="Like"
                              /></a>
                            </li>
                          </ul>
                        </li>
                        <li class="post-comment">
                          <a href="#"
                            ><i class="flaticon-comment"></i
                            ><span>Comentarios</span>
                            <span class="number">20</span></a
                          >
                        </li>
                        <li class="post-share">
                          <a href="#"
                            ><i class="flaticon-share"></i><span>Compartir</span>
                            <span class="number">5 </span></a
                          >
                        </li>
                      </ul>
                      <div class="post-comment-list">
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-14.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.Maria">Maria Linares</a>
                            </h3>
                            <span>7 Minutos</span>
                            <p>
                            <?php echo $lorem2; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (15)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-15.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.php">Antonio Andrade</a>
                            </h3>
                            <span>40 Minutos</span>
                            <p>
                            <?php echo $lorem4; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (30)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-16.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.php">Laura Mejias</a>
                            </h3>
                            <span>45 Minutos </span>
                            <p>
                            <?php echo $lorem1; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (9)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="more-comments">
                          <a href="#">Mas Comentarios</a>
                        </div>
                      </div>
                      <form class="post-footer">
                        <div class="footer-image">
                          <a href="#"
                            ><img
                              src="assets/images/user/user-1.jpg"
                              class="rounded-circle"
                              alt="image"
                          /></a>
                        </div>
                        <div class="form-group">
                          <textarea
                            name="message"
                            class="form-control"
                            placeholder="Escribe tu comentario..."
                          ></textarea>
                          <label
                            ><a href="#"
                              ><i class="flaticon-photo-camera"></i></a
                          ></label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="news-feed news-feed-post">
                    <div
                      class="post-header d-flex justify-content-between align-items-center"
                    >
                      <div class="image">
                        <a href="my-profile.php"
                          ><img
                            src="assets/images/user/user-35.jpg"
                            class="rounded-circle"
                            alt="image"
                        /></a>
                      </div>
                      <div class="info ms-3">
                        <span class="name"
                          ><a href="my-profile.php">Manuel Burgos</a></span
                        >
                        <span class="small-text"
                          ><a href="#">50 Minutos</a></span
                        >
                      </div>
                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i> Ocultar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i>Borrar Publicación</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="post-body">
                      <p>💗</p>
                      <div class="post-image">
                        <img
                          src="assets/images/news-feed-post/post-2.jpg"
                          alt="image"
                        />
                      </div>
                      <ul
                        class="post-meta-wrap d-flex justify-content-between align-items-center"
                      >
                        <li class="post-react">
                          <a href="#"
                            ><i class="flaticon-like"></i><span>Me Gusta </span>
                            <span class="number">3 </span></a
                          >

                          <ul class="react-list">
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-1.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-2.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-3.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-4.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-5.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-6.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-7.png"
                                  alt="Like"
                              /></a>
                            </li>
                          </ul>
                        </li>
                        <li class="post-comment">
                          <a href="#"
                            ><i class="flaticon-comment"></i
                            ><span>Comentarios</span>
                            <span class="number">6 </span></a
                          >
                        </li>
                        <li class="post-share">
                          <a href="#"
                            ><i class="flaticon-share"></i><span>Compartir</span>
                            <span class="number">4 </span></a
                          >
                        </li>
                      </ul>
                      <div class="post-comment-list">
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-14.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.Maria">Maria Linares</a>
                            </h3>
                            <span>7 Minutos</span>
                            <p>
                            <?php echo $lorem2; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (15)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-15.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.php">Antonio Andrade</a>
                            </h3>
                            <span>40 Minutos</span>
                            <p>
                            <?php echo $lorem4; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (30)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="more-comments">
                          <a href="#">Mas Comentarios</a>
                        </div>
                      </div>
                      <form class="post-footer">
                        <div class="footer-image">
                          <a href="#"
                            ><img
                              src="assets/images/user/user-2.jpg"
                              class="rounded-circle"
                              alt="image"
                          /></a>
                        </div>
                        <div class="form-group">
                          <textarea
                            name="message"
                            class="form-control"
                            placeholder="Escribir tu Comentario..."
                          ></textarea>
                          <label
                            ><a href="#"
                              ><i class="flaticon-photo-camera"></i></a
                          ></label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="news-feed news-feed-post">
                    <div
                      class="post-header d-flex justify-content-between align-items-center"
                    >
                      <div class="image">
                        <a href="my-profile.php"
                          ><img
                            src="assets/images/user/user-36.jpg"
                            class="rounded-circle"
                            alt="image"
                        /></a>
                      </div>
                      <div class="info ms-3">
                        <span class="name"
                          ><a href="my-profile.php">Patricia Diaz</a></span
                        >
                        <span class="small-text"
                          ><a href="#">2 Horas</a></span
                        >
                      </div>
                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i>Editar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i>Ocultar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i>Borrar Publicación</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="post-body">
                      <p>Sonrie Siempre 🧡</p>
                      <div class="post-image">
                        <img
                          src="assets/images/news-feed-post/post-3.jpg"
                          alt="image"
                        />
                      </div>
                      <ul
                        class="post-meta-wrap d-flex justify-content-between align-items-center"
                      >
                        <li class="post-react">
                          <a href="#"
                            ><i class="flaticon-like"></i><span>Me Gusta </span>
                            <span class="number">20 </span></a
                          >

                          <ul class="react-list">
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-1.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-2.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-3.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-4.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-5.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-6.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-7.png"
                                  alt="Like"
                              /></a>
                            </li>
                          </ul>
                        </li>
                        <li class="post-comment">
                          <a href="#"
                            ><i class="flaticon-comment"></i
                            ><span>Comentarios</span>
                            <span class="number">0 </span></a
                          >
                        </li>
                        <li class="post-share">
                          <a href="#"
                            ><i class="flaticon-share"></i><span>Compartir</span>
                            <span class="number">7 </span></a
                          >
                        </li>
                      </ul>
                      <form class="post-footer">
                        <div class="footer-image">
                          <a href="#"
                            ><img
                              src="assets/images/user/user-15.jpg"
                              class="rounded-circle"
                              alt="image"
                          /></a>
                        </div>
                        <div class="form-group">
                          <textarea
                            name="message"
                            class="form-control"
                            placeholder="Escribir tu Comentario..."
                          ></textarea>
                          <label
                            ><a href="#"
                              ><i class="flaticon-photo-camera"></i></a
                          ></label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="news-feed news-feed-post">
                    <div
                      class="post-header d-flex justify-content-between align-items-center"
                    >
                      <div class="image">
                        <a href="my-profile.php"
                          ><img
                            src="assets/images/user/user-5.jpg"
                            class="rounded-circle"
                            alt="image"
                        /></a>
                      </div>
                      <div class="info ms-3">
                        <span class="name"
                          ><a href="my-profile.php">Victor Farias</a></span
                        >
                        <span class="small-text"
                          ><a href="#">1 Dia</a></span
                        >
                      </div>
                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i>Ocultar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i>Borrar Publicación</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="post-body">
                      <p>
                      <?php echo $lorem2; ?>
                      </p>
                      <div class="post-image">
                        <img
                          src="assets/images/news-feed-post/post-4.jpg"
                          alt="image"
                        />
                      </div>
                      <ul
                        class="post-meta-wrap d-flex justify-content-between align-items-center"
                      >
                        <li class="post-react">
                          <a href="#"
                            ><i class="flaticon-like"></i><span>Me Gusta </span>
                            <span class="number">200 </span></a
                          >

                          <ul class="react-list">
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-1.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-2.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-3.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-4.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-5.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-6.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-7.png"
                                  alt="Like"
                              /></a>
                            </li>
                          </ul>
                        </li>
                        <li class="post-comment">
                          <a href="#"
                            ><i class="flaticon-comment"></i
                            ><span>Comentarios</span>
                            <span class="number">24 </span></a
                          >
                        </li>
                        <li class="post-share">
                          <a href="#"
                            ><i class="flaticon-share"></i><span>Compartir</span>
                            <span class="number">10 </span></a
                          >
                        </li>
                      </ul>
                      <div class="post-comment-list">
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-21.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.php">Daniel Gutierrez</a>
                            </h3>
                            <span>1 Dia</span>
                            <p>
                            <?php echo $lorem1; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta(15)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-22.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.php">Antonieta Castellano</a>
                            </h3>
                            <span>1 Dia</span>
                            <p>
                            <?php echo $lorem2; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (20)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="comment-list">
                          <div class="comment-image">
                            <a href="my-profile.php"
                              ><img
                                src="assets/images/user/user-24.jpg"
                                class="rounded-circle"
                                alt="image"
                            /></a>
                          </div>
                          <div class="comment-info">
                            <h3>
                              <a href="my-profile.php">Xiomara Hidalgo</a>
                            </h3>
                            <span>1 Dia</span>
                            <p>
                            <?php echo $lorem2; ?>
                            </p>
                            <ul class="comment-react">
                              <li><a href="#" class="like">Me Gusta (2)</a></li>
                              <li><a href="#">Responder</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="more-comments">
                          <a href="#">Mas Comentarios</a>
                        </div>
                      </div>
                      <form class="post-footer">
                        <div class="footer-image">
                          <a href="#"
                            ><img
                              src="assets/images/user/user-19.jpg"
                              class="rounded-circle"
                              alt="image"
                          /></a>
                        </div>
                        <div class="form-group">
                          <textarea
                            name="message"
                            class="form-control"
                            placeholder="Escribir tu Comentario..."
                          ></textarea>
                          <label
                            ><a href="#"
                              ><i class="flaticon-photo-camera"></i></a
                          ></label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="news-feed news-feed-post">
                    <div
                      class="post-header d-flex justify-content-between align-items-center"
                    >
                      <div class="image">
                        <a href="my-profile.php"
                          ><img
                            src="assets/images/user/user-18.jpg"
                            class="rounded-circle"
                            alt="image"
                        /></a>
                      </div>
                      <div class="info ms-3">
                        <span class="name"
                          ><a href="my-profile.php">Daniel Vivas</a></span
                        >
                        <span class="small-text"
                          ><a href="#">3 Horas</a></span
                        >
                      </div>
                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i> Ocultar Publicación</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i>Borrar Publicación</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="post-body">
                      <p>
                      <?php echo $lorem2; ?>
                      </p>
                      <div class="post-image">
                        <img
                          src="assets/images/news-feed-post/post-5.jpg"
                          alt="image"
                        />
                      </div>
                      <ul
                        class="post-meta-wrap d-flex justify-content-between align-items-center"
                      >
                        <li class="post-react">
                          <a href="#"
                            ><i class="flaticon-like"></i><span>Me Gusta </span>
                            <span class="number">30 </span></a
                          >

                          <ul class="react-list">
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-1.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-2.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-3.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-4.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-5.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-6.png"
                                  alt="Like"
                              /></a>
                            </li>
                            <li>
                              <a href="#"
                                ><img
                                  src="assets/images/react/react-7.png"
                                  alt="Like"
                              /></a>
                            </li>
                          </ul>
                        </li>
                        <li class="post-comment">
                          <a href="#"
                            ><i class="flaticon-comment"></i
                            ><span>Comentarios</span>
                            <span class="number">0 </span></a
                          >
                        </li>
                        <li class="post-share">
                          <a href="#"
                            ><i class="flaticon-share"></i><span>Compartir</span>
                            <span class="number">5 </span></a
                          >
                        </li>
                      </ul>
                      <form class="post-footer">
                        <div class="footer-image">
                          <a href="#"
                            ><img
                              src="assets/images/user/user-22.jpg"
                              class="rounded-circle"
                              alt="image"
                          /></a>
                        </div>
                        <div class="form-group">
                          <textarea
                            name="message"
                            class="form-control"
                            placeholder="Escribir tu Comentario..."
                          ></textarea>
                          <label
                            ><a href="#"
                              ><i class="flaticon-photo-camera"></i></a
                          ></label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="load-more-posts-btn">
                    <a href="#"
                      ><i class="flaticon-loading"></i>Leer más Comentarios</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12">
                <aside class="widget-area">
                  <div class="widget widget-birthday">
                    <div
                      class="birthday-title d-flex justify-content-between align-items-center"
                    >
                      <h3>Cumpleaños</h3>
                      <span><a href="#">Ver todas</a></span>
                    </div>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg1" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Manuela Estrada</a>
                        </h4>
                        <span>Hoy</span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg2" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Paul Herrera</a>
                        </h4>
                        <span>Hoy</span>
                      </div>
                    </article>

                    <div
                      class="birthday-title d-flex justify-content-between align-items-center"
                    >
                      <h3>Recientes</h3>
                      <span><a href="#">Ver todos</a></span>
                    </div>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg3" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Monica Jimenez</a>
                        </h4>
                        <span><?php echo $fblog; ?></span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg4" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Andres Fernandez</a>
                        </h4>
                        <span><?php echo $fblog; ?></span>
                      </div>
                    </article>

                    <div
                      class="birthday-title d-flex justify-content-between align-items-center"
                    >
                      <h3>Siguientes</h3>
                      <span><a href="#">Ver todos</a></span>
                    </div>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg5" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Ximena Suarez</a>
                        </h4>
                        <span><?php echo $fblog1; ?></span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg6" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Joel Contreras</a>
                        </h4>
                        <span><?php echo $fblog2; ?></span>
                      </div>
                    </article>
                    <article class="item">
                      <a href="#" class="thumb">
                        <span class="fullimage bg7" role="img"></span>
                      </a>

                      <div class="info">
                        <h4 class="title">
                          <a href="#">Tomas López</a>
                        </h4>
                        <span><?php echo $fblog3; ?></span>
                      </div>
                    </article>
                  </div>
                  <div class="widget widget-explore-events">
                    <h3 class="widget-title">Explorar Eventos</h3>

                    <article class="item">
                      <a href="#"
                        ><img
                          src="assets/images/explore-events/explore-1.jpg"
                          alt="image"
                      /></a>
                    </article>
                    <article class="item">
                      <a href="#"
                        ><img
                          src="assets/images/explore-events/explore-2.jpg"
                          alt="image"
                      /></a>
                    </article>
                  </div>
                  <div class="widget widget-who-following">
                    <h3 class="widget-title">Seguidores</h3>

                    <div
                      class="following-item d-flex justify-content-between align-items-center"
                    >
                      <a href="#"
                        ><img
                          src="assets/images/user/user-42.jpg"
                          class="rounded-circle"
                          alt="image"
                      /></a>
                      <span class="name"><a href="#">Rosmery Seijas</a></span>
                      <span class="add-friend"><a href="#">Agregar</a></span>
                    </div>
                    <div
                      class="following-item d-flex justify-content-between align-items-center"
                    >
                      <a href="#"
                        ><img
                          src="assets/images/user/user-43.jpg"
                          class="rounded-circle"
                          alt="image"
                      /></a>
                      <span class="name"><a href="#">Franklin Romero</a></span>
                      <span class="add-friend"><a href="#">Agregar</a></span>
                    </div>
                    <div
                      class="following-item d-flex justify-content-between align-items-center"
                    >
                      <a href="#"
                        ><img
                          src="assets/images/user/user-44.jpg"
                          class="rounded-circle"
                          alt="image"
                      /></a>
                      <span class="name"><a href="#">Tatiana Ramirez</a></span>
                      <span class="add-friend"><a href="#">Agregar</a></span>
                    </div>
                    <div
                      class="following-item d-flex justify-content-between align-items-center"
                    >
                      <a href="#"
                        ><img
                          src="assets/images/user/user-45.jpg"
                          class="rounded-circle"
                          alt="image"
                      /></a>
                      <span class="name"><a href="#">Guillermo Hernandez</a></span>
                      <span class="add-friend"><a href="#">Agregar</a></span>
                    </div>
                    <div
                      class="following-item d-flex justify-content-between align-items-center"
                    >
                      <a href="#"
                        ><img
                          src="assets/images/user/user-46.jpg"
                          class="rounded-circle"
                          alt="image"
                      /></a>
                      <span class="name"><a href="#">Aurora Borges</a></span>
                      <span class="add-friend"><a href="#">Agregar</a></span>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="about" role="tabpanel">
            <div class="row">
              <div class="col-lg-3 col-md-12">
                <div class="about-personal-information">
                  <div
                    class="about-header d-flex justify-content-between align-items-center"
                  >
                    <div class="title">Información Personal</div>

                    <div class="dropdown">
                      <button
                        class="dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="flaticon-menu"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            ><i class="flaticon-edit"></i> Editar Información</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            ><i class="flaticon-private"></i>Ocultar Información</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item d-flex align-items-center"
                            href="#"
                            ><i class="flaticon-trash"></i>Borrar Información</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>

                  <ul class="information-list">
                    <li>
                      <span>Correo:</span>
                      <a
                        href="/cdn-cgi/l/email-protection#3e575058517e444b4d4a105d5153"
                        ><span
                          class="__cf_email__"
                          data-cfemail="51383f373e112b2422257f323e3c"
                          >[correo&#160;Protegido</span
                        ></a
                      >
                    </li>
                    <li><span>Cumpleaños:</span><?php echo $fblog; ?></li>
                    <li><span>Ocupación:</span>Informático</li>
                    <li>
                      <span>Dirección:</span><?php echo $lorem1; ?>
                    </li>
                    <li>
                      <span>Telefono:</span>
                      <a href="tel:916-879-7755"><?php echo $telefono; ?></a>
                    </li>
                    <li><span>Genero:</span> Hombre</li>
                    <li><span>Estado Civil:</span> Soltero</li>
                    <li><span>Grupo Sanguineo:</span> B+ Positivo</li>
                    <li><span>Sitio Web</span> <a href="#">www.friends.com</a></li>
                    <li>
                      <span>Red Social:</span> <a href="#">www.friends1.com</a>
                    </li>
                    <li><span>Idioma:</span> Español, Portugues</li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-9 col-md-12">
                <div class="about-details-information">
                  <div class="information-box-content">
                    <div
                      class="information-header d-flex justify-content-between align-items-center"
                    >
                      <div class="title">Sobre mi!</div>

                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Información</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i> Ocultar Información</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i> Borrar Información</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <p>
                      <?php echo $lorem2; ?>
                      <?php echo $lorem1; ?>
                      </p>
                    </div>
                  </div>

                  <div class="information-box-content">
                    <div
                      class="information-header d-flex justify-content-between align-items-center"
                    >
                      <div class="title">Educación</div>

                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Información</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i>
                              Ocultar Información</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i> Borrar Informaión</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-content">
                      <p class="designation">
                        Titulo Obtenido<span>(2021 - 2024)</span>
                      </p>
                      <span class="title">Nombre del Instituto</span>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                    </div>

                    <div class="box-content">
                      <p class="designation">
                        Titulo Obtenido <span>(2020 - 2021)</span>
                      </p>
                      <span class="title"
                        >Nombre del Instituto</span
                      >
                      <p>
                      <?php echo $lorem2; ?>
                      </p>
                    </div>

                    <div class="box-content">
                      <p class="designation">
                        Titulo Obtenido<span>(Jun 2018 - 2020)</span>
                      </p>
                      <span class="title">Nombre del Instito</span>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                    </div>

                    <div class="box-content">
                      <p class="designation">
                        Titulo Obtenido <span>(2017 - 2018)</span>
                      </p>
                      <span class="title">Instituto</span>
                      <p>
                      <?php echo $lorem2; ?>
                      </p>
                    </div>
                  </div>

                  <div class="information-box-content">
                    <div
                      class="information-header d-flex justify-content-between align-items-center"
                    >
                      <div class="title">Intereses</div>

                      <div class="dropdown">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="flaticon-menu"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-edit"></i> Editar Información</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-private"></i> Ocultar Información</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item d-flex align-items-center"
                              href="#"
                              ><i class="flaticon-trash"></i> Borrar Información</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-content">
                      <p class="designation">Deporte Favorito:</p>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <div class="widget widget-watch-video">
                    <h3 class="widget-title"></h3>

                    <div class="watch-video-slides owl-carousel owl-theme">
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-1.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-2.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-3.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                    </div>

                    <div class="box-content">
                      <p class="designation">Libros Favoritos:</p>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <div class="widget widget-watch-video">
                    <h3 class="widget-title"></h3>

                    <div class="watch-video-slides owl-carousel owl-theme">
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-1.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-2.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-3.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                    </div>

                    <div class="box-content">
                      <p class="designation">Musica FAvorita:</p>
                      <p>
                      <?php echo $lorem1; ?>
                      <div class="widget widget-watch-video">
                    <h3 class="widget-title"></h3>

                    <div class="watch-video-slides owl-carousel owl-theme">
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-1.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-2.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                      <div class="video-item">
                        <img
                          src="assets/images/watch-video/video-3.jpg"
                          alt="image"
                        />

                        <a
                          href="<?php echo $video; ?>"
                          class="video-btn popup-youtube"
                        >
                          <i class="ri-play-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="friends" role="tabpanel">
            <div
              class="friends-inner-box-style d-flex justify-content-between align-items-center"
            >
              <div class="title">
                <h3>Amigos</h3>
                <span>300</span>
              </div>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="all-friends-tab"
                    data-bs-toggle="tab"
                    href="#all-friends"
                    role="tab"
                    aria-controls="all-friends"
                    >Todos los Amigos</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="recently-added-tab"
                    data-bs-toggle="tab"
                    href="#recently-added"
                    role="tab"
                    aria-controls="recently-added"
                    >Añadido Recientemente</a
                  >
                </li>
              </ul>

              <div class="friends-search-box">
                <form>
                  <input
                    type="text"
                    class="input-search"
                    placeholder="Buscar Amigos.."
                  />
                  <button type="submit"><i class="ri-search-line"></i></button>
                </form>
              </div>
            </div>

            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="all-friends"
                role="tabpanel"
              >
                <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-1.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-1.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Juaquin Rodriguez</a></h3>
                            <span>30 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">862</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">100</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">600</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-2.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-2.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Nineva León</a></h3>
                            <span>60 Amigos en Común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">170</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">90</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">420</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-3.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-3.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Eduardo Blanco</a></h3>
                            <span>74 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">452</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">120</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">1000</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-4.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-4.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Mariana Ruiz</a></h3>
                            <span>40 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">65</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">70</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">705</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-5.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-5.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Ana Andrade</a></h3>
                            <span>30 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">800</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">900</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-6.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-6.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alberto Romero</a></h3>
                            <span>70 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">156</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">130</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">850</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-7.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-7.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Rita Moreno</a></h3>
                            <span>90 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">46</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">200</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">450</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-8.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-8.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Gustavo Acosta</a></h3>
                            <span>200 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">700</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">740</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-9.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-9.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Antonieta Parra</a></h3>
                            <span>02 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">180</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-10.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-10.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Luisa Martinez</a></h3>
                            <span>45 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">20</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">150</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">850</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-11.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-11.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Maira Sanz</a></h3>
                            <span>70 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">100</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">350</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">900</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigos</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-12.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-12.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alicia Duran</a></h3>
                            <span>63 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">783</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">800</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">700</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-13.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-13.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Sofia Quintana</a></h3>
                            <span>90 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">500</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">600</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-14.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-14.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alvaro Suarez</a></h3>
                            <span>85 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">500</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">356</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">900</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-15.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-15.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Guillermo Sosa</a></h3>
                            <span>03 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">500</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-16.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-16.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Fernanda Rivera</a></h3>
                            <span>96 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">754</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">589</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">822</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigos</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="load-more-posts-btn">
                  <a href="#"><i class="flaticon-loading"></i> Ver más</a>
                </div>
              </div>

              <div class="tab-pane fade" id="recently-added" role="tabpanel">
                <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-1.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-10.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Jose Marroquin</a></h3>
                            <span>10 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">862</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">91</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">514</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-2.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-11.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Myrtle Lewis</a></h3>
                            <span>45 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">82</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">50</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">314</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-3.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-12.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Howard Tam</a></h3>
                            <span>19 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">452</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">120</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">328</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-4.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-13.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Kimberly Blum</a></h3>
                            <span>18 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">685</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">16</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">675</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-5.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-14.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Mary Mercado</a></h3>
                            <span>10 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">687</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">152</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">657</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-6.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-15.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Robert Ward</a></h3>
                            <span>22 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">156</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">73</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">642</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-7.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-16.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Pauline Hughes</a></h3>
                            <span>26 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">483</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">241</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">965</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-8.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-17.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Brad Snowden</a></h3>
                            <span>30 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">383</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">541</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">265</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-9.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-18.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Mark S. Perry</a></h3>
                            <span>33 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">583</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">441</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">165</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-10.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-19.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Josefina Wells</a></h3>
                            <span>45 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">683</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">841</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">965</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-11.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-20.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Richard Smith</a></h3>
                            <span>65 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">483</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">241</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">865</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-12.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-21.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alma Smith</a></h3>
                            <span>61 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">783</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">541</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">565</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-13.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-22.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Bessie Smith</a></h3>
                            <span>24 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">183</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">441</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">765</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-14.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-23.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Anthony Hogg</a></h3>
                            <span>75 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">683</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">841</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">365</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-15.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-24.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Shel Williams</a></h3>
                            <span>25 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">583</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">941</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">265</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-16.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-25.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Carol Miller</a></h3>
                            <span>20 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">683</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">341</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">565</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="load-more-posts-btn">
                  <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="photos" role="tabpanel">
            <div
              class="photos-inner-box-style d-flex justify-content-between align-items-center"
            >
              <div class="title">
                <h3>Fotos</h3>
                <span>750</span>
              </div>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="all-photos-tab"
                    data-bs-toggle="tab"
                    href="#all-photos"
                    role="tab"
                    aria-controls="all-photos"
                    >Todas las Fotos</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="photos-albums-tab"
                    data-bs-toggle="tab"
                    href="#photos-albums"
                    role="tab"
                    aria-controls="photos-albums"
                    >Fotos de Albun</a
                  >
                </li>
              </ul>

              <div class="photos-search-box">
                <form>
                  <input
                    type="text"
                    class="input-search"
                    placeholder="Buscar Fotos..."
                  />
                  <button type="submit"><i class="ri-search-line"></i></button>
                </form>
              </div>
            </div>

            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="all-photos"
                role="tabpanel"
              >
                <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-1.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-2.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-3.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-4.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-5.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-6.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-7.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-8.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-9.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-10.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-11.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-12.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-13.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-14.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-15.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-16.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="load-more-posts-btn">
                  <a href="#"><i class="flaticon-loading"></i> Ver más</a>
                </div>
              </div>

              <div class="tab-pane fade" id="photos-albums" role="tabpanel">
                <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-16.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-15.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-14.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-13.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-12.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-11.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-10.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-9.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-8.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-7.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-6.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-5.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-4.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-3.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-2.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-photos-card">
                      <a href=""
                        ><img
                          src="assets/images/photos/photos-1.jpg"
                          alt="image"
                      /></a>

                      <div class="icon">
                        <a href="#"><i class="flaticon-remove-user"></i></a>
                        <a href="#"><i class="flaticon-download"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="load-more-posts-btn">
                  <a href="#"><i class="flaticon-loading"></i> Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content Page Box Area -->
<?php
  include_once("layout/footer.php");
?>
