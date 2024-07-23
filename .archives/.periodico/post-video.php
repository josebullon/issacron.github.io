<?php
  include_once './layout/header.php';
?>
        <div class="container-fluid">
          <div class="container animate-box">
            <div class="row">
              <div class="post-header">
                <div class="bread">
                  <ul class="breadcrumbs" id="breadcrumbs">
                    <li class="item-home">
                      Estas aqui:
                      <a
                        class="bread-link bread-home"
                        href="index-2.php"
                        title="Home"
                        >Principal</a
                      >
                    </li>
                    <li class="separator separator-home">/</li>
                    <li class="item-current item-cat">
                      <a
                        class="bread-link bread-home"
                        href="index-2.php"
                        title="Home"
                        >Deporte</a
                      >
                    </li>
                    <li class="separator separator-home">/</li>
                    <li class="item-current item-cat">
                      <strong class="bread-current bread-cat"
                        >Publicacion</strong
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="container">
            <div class="primary margin-15">
              <div class="row">
                <div class="col-md-12">
                  <figure class="alith_news_img animate-box section_margin_30">
                    <div class="alith_video_thumb">
                      <iframe
                        src="https://player.vimeo.com/video/69161321?title=0&amp;byline=0&amp;portrait=0"
                        frameborder="0"
                        webkitallowfullscreen
                        mozallowfullscreen
                        allowfullscreen
                      ></iframe>
                    </div>
                    <script src="../player.vimeo.com/api/player.js"></script>
                  </figure>
                  <div class="single-header">
                    <h3 class="alith_post_title">
                    <?php echo $lorem2; ?>
                    </h3>
                    <div class="post_meta">
                      <a class="meta_author_avatar" href="page-author.php"
                        ><img
                          src="assets/images/author-avatar.png"
                          alt="author details"
                      /></a>
                      <span class="meta_author_name"
                        ><a class="author" href="page-author.php"
                          >Nombre del Autor</a
                        ></span
                      >
                      <span class="meta_categories"
                        ><a href="archive.php">Salud</a>,
                        <a href="archive.php">Noticias</a></span
                      >
                      <span class="meta_date"><?php echo $fblog; ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <article class="section_margin">
                    <div class="post-content">
                      <div class="single-content animate-box">
                        <p class="alith_post_except animate-box">
                        <?php echo $lorem1; ?>
                        </p>
                        <div class="dropcap column-2 animate-box">
                          <p>
                          <?php echo $lorem1; ?>
                          </p>
                          <p>
                          <?php echo $lorem1; ?>
                            <strong><?php echo $lorem3; ?></strong> 
                            <?php echo $lorem1; ?>
                          </p>
                          <p><img alt="" src="assets/images/news-5.jpg" /></p>
                          <p>
                          <?php echo $lorem1; ?>
                            >
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
                          <blockquote>
                            <p>
                            <?php echo $lorem1; ?>
                            </p>
                          </blockquote>
                          <p>
                          <?php echo $lorem1; ?>
                          </p>
                          <p>
                          <?php echo $lorem1; ?>
                          </p>
                          <p>
                          <?php echo $lorem1; ?>
                          </p>
                          <h2>Titulo Ejemplo</h2>
                          <p>
                          <?php echo $lorem1; ?>
                          </p>
                          <p>
                          <?php echo $lorem1; ?>
                          </p>
                        </div>
                        <div class="post-tags">
                          <div class="post-tags-inner">
                            <a href="category-grid.php" rel="tag">#Salus</a>
                            <a href="category-grid.php" rel="tag">#Moda</a>
                            <a href="category-grid.php" rel="tag"
                              >#Noticias</a
                            >
                            <a href="category-grid.html" rel="tag">#Ciencia</a>
                          </div>
                        </div>
                        <div class="post-share">
                          <ul>
                            <li class="facebook">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter">
                              <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="google-plus">
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="instagram">
                              <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                          </ul>
                        </div>
                        <div class="post-author section_margin_40">
                          <figure>
                            <a href="page-author.php"
                              ><img src="assets/images/post-author-avatar.jpg"
                            /></a>
                          </figure>
                          <div class="post-author-info">
                            <h3><a href="page-author.php">Nombre del Autor</a></h3>
                            <p>
                            <?php echo $lorem2; ?>
                            </p>
                            <ul>
                              <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                              </li>
                              <li>
                                <a href="#"
                                  ><i class="fa fa-google-plus"></i
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="post-related section_margin_40">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="sidebar-widget">
                                <div class="widget-title-cover">
                                  <h4 class="widget-title">
                                    <span>Publicaciones Relacionadas</span>
                                  </h4>
                                </div>
                                <div class="latest_style_3">
                                  <div class="latest_style_3_item">
                                    <span class="item-count vertical-align"
                                      >1.</span
                                    >
                                    <div class="alith_post_title_small">
                                      <a href="single.php"
                                        ><strong
                                          ><?php echo $lorem2; ?></strong
                                        ></a
                                      >
                                    </div>
                                  </div>
                                  <div class="latest_style_3_item">
                                    <span class="item-count vertical-align"
                                      >2.</span
                                    >
                                    <div class="alith_post_title_small">
                                      <a href="single.php"
                                        ><strong
                                          ><?php echo $lorem2; ?></strong
                                        ></a
                                      >
                                    </div>
                                  </div>
                                  <div class="latest_style_3_item">
                                    <span class="item-count vertical-align"
                                      >3.</span
                                    >
                                    <div class="alith_post_title_small">
                                      <a href="single.php"
                                        ><strong
                                          ><?php echo $lorem2; ?></strong
                                        ></a
                                      >
                                    </div>
                                  </div>
                                  <div class="latest_style_3_item">
                                    <span class="item-count vertical-align"
                                      >4.</span
                                    >
                                    <div class="alith_post_title_small">
                                      <a href="single.php"
                                        ><strong
                                          ><?php echo $lorem2; ?></strong
                                        ></a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--post-related-->
                            <div class="col-md-6">
                              <div class="post-navigation">
                                <div class="latest_style_2">
                                  <h5><span>Anterior Publicacion</span></h5>
                                  <div class="latest_style_2_item">
                                    <figure class="alith_news_img">
                                      <a href="single.php"
                                        ><img
                                          class="hover_grey"
                                          src="assets/images/thumb-square-1.png"
                                          alt=""
                                      /></a>
                                    </figure>
                                    <h3 class="alith_post_title">
                                      <a href="single.php"
                                        ><?php echo $lorem1; ?></a
                                      >
                                    </h3>
                                  </div>

                                  <h5><span>Siguiente Publicacion</span></h5>
                                  <div class="latest_style_2_item">
                                    <figure class="alith_news_img">
                                      <a href="single.php"
                                        ><img
                                          class="hover_grey"
                                          src="assets/images/thumb-square-1.png"
                                          alt=""
                                      /></a>
                                    </figure>
                                    <h3 class="alith_post_title">
                                      <a href="single.php"
                                        ><?php echo $lorem1; ?></a
                                      >
                                    </h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--post-related and navigation-->
                      </div>
                      <!--single content-->
                      <div class="single-comment">
                        <section id="comments">
                          <h4 class="single-comment-title">Comentarios</h4>
                          <div class="comments-inner clr">
                            <div class="comments-title">
                              <p><?php echo $lorem2; ?></p>
                            </div>
                            <ol class="commentlist">
                              <li id="li-comment-4">
                                <article
                                  class="comment even thread-even depth-1 clr"
                                  id="comment-4"
                                >
                                  <div class="comment-author vcard">
                                    <img
                                      width="60"
                                      height="60"
                                      src="assets/images/post-author-avatar.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="comment-details clr">
                                    <header class="comment-meta">
                                      <strong class="fn"> Administrador </strong>
                                      <span class="comment-date"
                                        ><?php echo $fblog; ?>
                                      </span>
                                    </header>
                                    <div class="comment-content entry clr">
                                      <p>
                                      <?php echo $lorem1; ?>
                                    </div>
                                    <div class="reply comment-reply-link-div">
                                      <a
                                        aria-label="Reply to spadmin"
                                        href="#respond"
                                        class="comment-reply-link"
                                        rel="nofollow"
                                        >Resp</a
                                      >
                                    </div>
                                  </div>
                                </article>
                                <ul class="children">
                                  <li id="li-comment-6">
                                    <article
                                      class="comment odd alt depth-2 clr"
                                      id="comment-6"
                                    >
                                      <div class="comment-author vcard">
                                        <img
                                          width="60"
                                          height="60"
                                          src="assets/images/post-author-avatar.jpg"
                                          alt=""
                                        />
                                      </div>
                                      <div class="comment-details clr">
                                        <header class="comment-meta">
                                          <strong class="fn">
                                            Usuario
                                          </strong>
                                          <span class="comment-date"
                                            ><?php echo $fblog1; ?>
                                          </span>
                                        </header>
                                        <div class="comment-content entry clr">
                                          <p>
                                          <?php echo $lorem1; ?>
                                          </p>
                                        </div>
                                        <div
                                          class="reply comment-reply-link-div"
                                        >
                                          <a
                                            aria-label="Reply to spadmin"
                                            href="#respond"
                                            class="comment-reply-link"
                                            rel="nofollow"
                                            >Resp</a
                                          >
                                        </div>
                                      </div>
                                    </article>
                                  </li>
                                </ul>
                              </li>
                              <li id="li-comment-5">
                                <article
                                  class="comment even thread-odd thread-alt depth-1 clr"
                                  id="comment-5"
                                >
                                  <div class="comment-author vcard">
                                    <img
                                      width="60"
                                      height="60"
                                      src="assets/images/post-author-avatar.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="comment-details clr">
                                    <header class="comment-meta">
                                      <strong class="fn"> Adminador </strong>
                                      <span class="comment-date"
                                        ><?php echo $fblog2; ?>
                                      </span>
                                    </header>
                                    <div class="comment-content entry clr">
                                      <p>
                                      <?php echo $lorem2; ?>
                                      </p>
                                    </div>
                                    <div class="reply comment-reply-link-div">
                                      <a
                                        aria-label="Reply to spadmin"
                                        href="#respond"
                                        class="comment-reply-link"
                                        rel="nofollow"
                                        >Resp</a
                                      >
                                    </div>
                                  </div>
                                </article>
                              </li>
                              <li id="li-comment-85">
                                <article
                                  class="comment byuser comment-author-spadmin bypostauthor odd alt thread-even depth-1 clr"
                                  id="comment-85"
                                >
                                  <div class="comment-author vcard">
                                    <img
                                      width="60"
                                      height="60"
                                      src="assets/images/post-author-avatar.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="comment-details clr">
                                    <header class="comment-meta">
                                      <strong class="fn">
                                      Usario
                                        <span class="author-badge"></span>
                                      </strong>
                                      <span class="comment-date"
                                        ><?php echo $fblog3; ?>
                                      </span>
                                    </header>
                                    <div class="comment-content entry clr">
                                      <p>
                                      <?php echo $lorem1; ?>
                                      </p>
                                    </div>
                                    <div class="reply comment-reply-link-div">
                                      <a
                                        aria-label="Reply to spadmin"
                                        href="#respond"
                                        class="comment-reply-link"
                                        rel="nofollow"
                                        >Resp</a
                                      >
                                    </div>
                                  </div>
                                </article>
                              </li>
                              <li id="li-comment-86">
                                <article
                                  class="comment byuser comment-author-spadmin bypostauthor even thread-odd thread-alt depth-1 clr"
                                  id="comment-86"
                                >
                                  <div class="comment-author vcard">
                                    <img
                                      width="60"
                                      height="60"
                                      src="assets/images/post-author-avatar.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="comment-details clr">
                                    <header class="comment-meta">
                                      <strong class="fn">
                                        Administrador
                                        <span class="author-badge"></span>
                                      </strong>
                                      <span class="comment-date"
                                        ><?php echo $fblog4; ?>
                                      </span>
                                    </header>
                                    <div class="comment-content entry clr">
                                      <p>
                                      <?php echo $lorem2; ?>
                                      </p>
                                    </div>
                                    <div class="reply comment-reply-link-div">
                                      <a
                                        aria-label="Reply to spadmin"
                                        href="#respond"
                                        class="comment-reply-link"
                                        rel="nofollow"
                                        >Resp</a
                                      >
                                    </div>
                                  </div>
                                </article>
                              </li>
                            </ol>
                            <!--comment list-->
                            <nav
                              role="navigation"
                              class="comment-navigation clr"
                            >
                              <div
                                class="nav-previous span_1_of_2 col col-1"
                              ></div>
                              <div class="nav-next span_1_of_2 col">
                                <a href="#comments">NUEVOS COMENTARIOS →</a>
                              </div>
                            </nav>
                            <!--comment nav-->
                            <div class="comment-respond" id="respond">
                              <h3 class="comment-reply-title" id="reply-title">
                                RESPONDER
                                <small
                                  ><a
                                    href="#respond"
                                    id="cancel-comment-reply-link"
                                    rel="nofollow"
                                    ><i class="fa fa-times"></i></a
                                ></small>
                              </h3>
                              <form
                                novalidate=""
                                class="comment-form"
                                id="commentform"
                                method="post"
                                action="#"
                              >
                                <p class="comment-notes">
                                  <span id="email-notes"
                                    >Tú identidad sera protegida</span
                                  >
                                </p>
                                <div class="row">
                                  <div
                                    class="comment-form-author col-sm-12 col-md-6"
                                  >
                                    <label for="author">Nombre (opcional)</label>
                                    <input
                                      type="text"
                                      size="30"
                                      value=""
                                      placeholder="Nombre *"
                                      name="author"
                                      id="author"
                                    />
                                  </div>
                                  <div
                                    class="comment-form-email col-sm-12 col-md-6"
                                  >
                                    <label for="email">Correo (opcional)</label>
                                    <input
                                      type="email"
                                      size="30"
                                      value=""
                                      placeholder="Correo *"
                                      name="email"
                                      id="email"
                                    />
                                  </div>
                                </div>
                                <p class="comment-form-comment">
                                  <label for="comment">Comentario</label
                                  ><textarea
                                    aria-required="true"
                                    placeholder="Comentario"
                                    rows="8"
                                    cols="45"
                                    name="comment"
                                    id="comment"
                                  ></textarea>
                                </p>

                                <p class="form-submit">
                                  <input
                                    type="submit"
                                    value="Enviar"
                                    class="submit"
                                    id="submit"
                                    name="submit"
                                  />
                                  <input
                                    type="hidden"
                                    id="comment_post_ID"
                                    value="80"
                                    name="comment_post_ID"
                                  />
                                  <input
                                    type="hidden"
                                    value="0"
                                    id="comment_parent"
                                    name="comment_parent"
                                  />
                                </p>
                              </form>
                            </div>
                            <!--comment form-->
                          </div>
                        </section>
                      </div>
                    </div>
                  </article>
                </div>
                <!--Start Sidebar-->
                <aside class="col-md-4">
                  <div class="sidebar_right">
                    <div class="sidebar-widget animate-box">
                      <div class="widget-title-cover">
                        <h4 class="widget-title">
                          <span>Articulos Populares</span>
                        </h4>
                      </div>
                      <div class="latest_style_1">
                        <div class="latest_style_1_item">
                          <span class="item-count vertical-align">1.</span>
                          <div class="alith_post_title_small">
                            <a href="single.php"
                              ><strong
                                ><?php echo $lorem4; ?></strong
                              ></a
                            >
                            <p class="meta">
                              <span><?php echo $fblog; ?></span> <span>300 vistas</span>
                            </p>
                          </div>
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-1.png"
                                alt=""
                            /></a>
                          </figure>
                        </div>
                        <div class="latest_style_1_item">
                          <span class="item-count vertical-align">2.</span>
                          <div class="alith_post_title_small">
                            <a href="single.php"
                              ><strong
                                ><?php echo $lorem4; ?></strong
                              ></a
                            >
                            <p class="meta">
                              <span><?php echo $fblog1; ?></span> <span>200 vistas</span>
                            </p>
                          </div>
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-2.png"
                                alt=""
                            /></a>
                          </figure>
                        </div>
                        <div class="latest_style_1_item">
                          <span class="item-count vertical-align">3.</span>
                          <div class="alith_post_title_small">
                            <a href="single.php"
                              ><strong
                                ><?php echo $lorem4; ?></strong
                              ></a
                            >
                            <p class="meta">
                              <span><?php echo $fblog2; ?></span> <span>160 vistas</span>
                            </p>
                          </div>
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-3.png"
                                alt=""
                            /></a>
                          </figure>
                        </div>
                        <div class="latest_style_1_item">
                          <span class="item-count vertical-align">4.</span>
                          <div class="alith_post_title_small">
                            <a href="single.php"
                              ><strong
                                ><?php echo $lorem4; ?></strong
                              ></a
                            >
                            <p class="meta">
                              <span><?php echo $fblog3; ?></span> <span>100 vistas</span>
                            </p>
                          </div>
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-4.png"
                                alt=""
                            /></a>
                          </figure>
                        </div>
                        <div class="latest_style_1_item">
                          <span class="item-count vertical-align">5.</span>
                          <div class="alith_post_title_small">
                            <a href="single.php"
                              ><strong
                                ><?php echo $lorem4; ?></strong
                              ></a
                            >
                            <p class="meta">
                              <span><?php echo $fblog4; ?></span> <span>120 vistas</span>
                            </p>
                          </div>
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-5.png"
                                alt=""
                            /></a>
                          </figure>
                        </div>
                      </div>
                    </div>
                    <!--.sidebar-widget-->


                    <div class="sidebar-widget animate-box">
                      <div class="widget-title-cover">
                        <h4 class="widget-title"><span>BUSCAR</span></h4>
                      </div>
                      <form
                        action="#"
                        class="search-form"
                        method="get"
                        role="Buscar"
                      >
                        <label>
                          <input
                            type="search"
                            name="s"
                            value=""
                            placeholder="Buscar …"
                            class="search-field"
                          />
                        </label>
                        <input
                          type="submit"
                          value="Search"
                          class="search-submit"
                        />
                      </form>
                    </div>
                    <!--.sidebar-widget-->


                    <div class="sidebar-widget animate-box">
                      <div class="widget-title-cover">
                        <h4 class="widget-title"><span>Categoria</span></h4>
                      </div>
                      <div class="latest_style_2">
                        <div class="latest_style_2_item_first">
                          <figure class="alith_post_thumb_big">
                            <span class="post_meta_categories_label"
                              >Categoria1, Categoria2</span
                            >
                            <a href="single.php"
                              ><img src="assets/images/thumb-large.jpg" alt=""
                            /></a>
                          </figure>
                          <h3 class="alith_post_title">
                            <a href="single.php"
                              ><strong
                                ><?php echo $lorem1; ?></strong
                              ></a
                            >
                          </h3>
                        </div>
                        <div class="latest_style_2_item">
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-1.png"
                                alt=""
                            /></a>
                          </figure>
                          <h3 class="alith_post_title">
                            <a href="single.php"
                              ><?php echo $lorem1; ?></a
                            >
                          </h3>
                          <div class="post_meta">
                            <span class="meta_date"><?php echo $fblog2; ?></span>
                          </div>
                        </div>
                        <div class="latest_style_2_item">
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-2.png"
                                alt=""
                            /></a>
                          </figure>
                          <h3 class="alith_post_title">
                            <a href="single.php"
                              ><?php echo $lorem1; ?></a
                            >
                          </h3>
                          <div class="post_meta">
                            <span class="meta_date"><?php echo $fblog3; ?></span>
                          </div>
                        </div>
                        <div class="latest_style_2_item">
                          <figure class="alith_news_img">
                            <a href="single.php"
                              ><img
                                src="assets/images/thumb-square-3.png"
                                alt=""
                            /></a>
                          </figure>
                          <h3 class="alith_post_title">
                            <a href="single.php"
                              ><?php echo $lorem1; ?></a
                            >
                          </h3>
                          <div class="post_meta">
                            <span class="meta_date"><?php echo $fblog4; ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.sidebar-widget-->

                    <div class="sidebar-widget animate-box">
                      <div class="widget-title-cover">
                        <h4 class="widget-title"><span>Etiquetas</span></h4>
                      </div>
                      <div class="alith_tags_all">
                        <a href="#" class="alith_tagg">Negocios</a>
                        <a href="#" class="alith_tagg">Tecnologia</a>
                        <a href="#" class="alith_tagg">Deporte</a>
                        <a href="#" class="alith_tagg">Arte</a>
                        <a href="#" class="alith_tagg">Estilo de vida</a>
                        <a href="#" class="alith_tagg">musica</a>
                        <a href="#" class="alith_tagg">Fotografia</a>
                        <a href="#" class="alith_tagg">Idiomas</a>
                        <a href="#" class="alith_tagg">Cocina</a>
                        <a href="#" class="alith_tagg">Educación</a>
                        <a href="#" class="alith_tagg">Social</a>
                        <a href="#" class="alith_tagg">Moda</a>
                      </div>
                    </div>
                    <!--.sidebar-widget-->
                  </div>
                </aside>
                <!--End Sidebar-->
              </div>
            </div>
            <!--.primary-->
<?php
  include_once './layout/footer.php';
?>
