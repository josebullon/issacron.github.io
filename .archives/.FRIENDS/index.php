<?php
  // var:
  $nav01 = 'active';
  // header.php
  include_once 'layout/header.php';
?>
      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <aside class="widget-area">
              <div class="widget widget-view-profile">
                <div
                  class="profile-box d-flex justify-content-between align-items-center"
                >
                  <a href="my-profile.php"
                    ><img src="assets/images/user/user-1.jpg" alt="image"
                  /></a>
                  <div class="text ms-2">
                    <h3><a href="my-profile.php">Rafael Bullón</a></h3>
                    <span>Caracas, Venezuela</span>
                  </div>
                </div>
                <ul class="profile-statistics">
                  <li>
                    <a href="#">
                      <span class="item-number">400</span>
                      <span class="item-text">Me Gusta</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="item-number">8000</span>
                      <span class="item-text">Seguidos</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="item-number">9500</span>
                      <span class="item-text">Seguidores</span>
                    </a>
                  </li>
                </ul>
                <div class="profile-likes">
                  <span
                    ><i class="flaticon-heart-shape-outline"></i> Nuevos Me Gusta esta semana</span
                  >

                  <ul>
                    <li>
                      <a href="#"
                        ><img src="assets/images/user/user-22.jpg" alt="image"
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/images/user/user-23.jpg" alt="image"
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/images/user/user-24.jpg" alt="image"
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/images/user/user-25.jpg" alt="image"
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/images/user/user-26.jpg" alt="image"
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="assets/images/user/user-27.jpg" alt="image"
                      /></a>
                    </li>
                  </ul>
                </div>
                <div class="profile-btn">
                  <a href="my-profile.php" class="default-btn">Ver Perfil</a>
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
                    <h3 class="widget-title"><a href="video.php">Ver videos</h3></a>

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
                  <div class="widget widget-advertisement">
                    <h3 class="widget-title">Publicidad</h3>

                    <div class="advertisement-image">
                      <a href="#"
                        ><img src="assets/images/advertisement.jpg" alt="image"
                      /></a>
                    </div>
                  </div>
                  <div class="widget widget-suggested-groups">
                    <h3 class="widget-title"><a href="groups.php">Grupos Sugeridos</h3></a>
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
                              <a href="my-profile.">Maria Linares</a>
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
                      <h3><a href="birthday.php">Cumpleaños</h3></a>
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
                  <div class="widget widget-explore-events"> <a href="my-profile."></a>
                    <h3 class="widget-title"><a href="events.php">Explorar Eventos</h3></a>

                    <article class="item">
                      <a href="events.php">
                        <img
                          src="assets/images/explore-events/explore-1.jpg"
                          alt="image"
                      /></a>
                    </article>
                    <article class="item">
                      <a href="events.php"
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
      <!-- End Content Page Box Area -->
<?php
  include_once 'layout/footer.php';
?>
