<?php
  include_once './layout/header.php';
?>

			<div class="container-fluid">
				<div class="container animate-box">
					<div class="row">
						<div class="archive-header">
							<div class="archive-title"><h2>Noticias &amp; Entretenimiento</h2></div>
							<div class="archive-description"><p><?php echo $lorem4; ?></p></div>
							<div class="bread">
								<ul class="breadcrumbs" id="breadcrumbs">
								   <li class="item-home"><a class='bread-link bread-home' href='index-2.php' title='Home'>Principal</a></li>
								   <li class="separator separator-home"> /</li>
								   <li class="item-current item-cat"><strong class="bread-current bread-cat">Noticias &amp; Entretenimiento</strong></li>
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
						<div class="col-md-8">
							<div class="post_list post_list_big">
									<article class="post_list_big_item section_margin">
										<figure class="alith_post_thumb_big">
											<span class="post_meta_categories_label">Noticias, Blog</span>
											<a href='single.php'><img alt="" src="assets/images/slideshow-3.jpg"></a>
										</figure>
										<h3 data-animate-effect="fadeInUp" class="alith_post_title animate-box fadeInUp animated-fast">
											<a href='single.php'><?php echo $lorem4; ?></a>
										</h3>
										<div class="alith_post_content_big">
											<div class="row">
												<div class="col-md-4 col-sm-12">
													<div class="post_meta_center animate-box fadeInUp animated-fast">
														<p><a href='page-author.php'><img alt="author details" src="assets/images/author-avatar.png"></a></p>
														<p><a class='author' href='page-author.php'><strong>Nombre del Autor</strong></a></p>
														<span class="post_meta_date"><?php echo $fblog; ?></span>
													</div>
												</div>
												<div class="col-md-8 col-sm-12 animate-box fadeInUp animated-fast">
													<p class="alith_post_except"><?php echo $lorem1; ?></p>
												</div>
											</div>
										</div>
									</article>
									<article class="post_list_big_item section_margin">
										<figure class="alith_post_thumb_big">
											<span class="post_meta_categories_label">Noticias</span>
											<a href='single.php'><img alt="" src="assets/images/slideshow-2.jpg"></a>
										</figure>
										<h3 data-animate-effect="fadeInUp" class="alith_post_title animate-box fadeInUp animated-fast">
											<a href='single.php'><?php echo $lorem4; ?></a>
										</h3>
										<div class="alith_post_content_big">
											<div class="row">
												<div class="col-md-4 col-sm-12">
													<div class="post_meta_center animate-box fadeInUp animated-fast">
														<p><a href='page-author.php'><img alt="author details" src="assets/images/author-avatar.png"></a></p>
														<p><a class='author' href='page-author.php'><strong>Nombre del Autor</strong></a></p>
														<span class="post_meta_date"><?php echo $fblog1; ?></span>
													</div>
												</div>
												<div class="col-md-8 col-sm-12 animate-box fadeInUp animated-fast">
													<p class="alith_post_except"><?php echo $lorem1; ?></p>
												</div>
											</div>
										</div>
									</article>
									<article class="post_list_big_item section_margin">
										<figure class="alith_post_thumb_big">
											<span class="post_meta_categories_label">Noticias</span>
											<a href='single.php'><img alt="" src="assets/images/slideshow-1.jpg"></a>
										</figure>
										<h3 data-animate-effect="fadeInUp" class="alith_post_title animate-box fadeInUp animated-fast">
											<a href='single.php'><?php echo $lorem4; ?></a>
										</h3>
										<div class="alith_post_content_big">
											<div class="row">
												<div class="col-md-4 col-sm-12">
													<div class="post_meta_center animate-box fadeInUp animated-fast">
														<p><a href='page-author.php'><img alt="author details" src="assets/images/author-avatar.png"></a></p>
														<p><a class='author' href='page-author.php'><strong>Nombre del Autor</strong></a></p>
														<span class="post_meta_date"><?php echo $fblog2; ?></span>
													</div>
												</div>
												<div class="col-md-8 col-sm-12 animate-box fadeInUp animated-fast">
													<p class="alith_post_except"><?php echo $lorem1; ?></p>
												</div>
											</div>
										</div>
									</article>
							</div>
							<div class="site-pagination animate-box">
              <ul class="page-numbers">
                        <li><a href="#" class="prev page-numbers">ANTERIOR</a></li>
                        <li>
                          <span class="page-numbers current" aria-current="page"
                            >1.</span
                          >
                        </li>
                        <li><a href="#" class="page-numbers">2.</a></li>
                        <li><a href="#" class="page-numbers">3.</a></li>
                        <li><a href="#" class="page-numbers">4.</a></li>
                        <li><a href="#" class="next page-numbers">SIGUIENTE</a></li>
                      </ul>
							</div>
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
								</div> <!--.sidebar-widget-->


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
                    </div><!--.sidebar-widget-->

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
<?php
  include_once './layout/footer.php';
?>
