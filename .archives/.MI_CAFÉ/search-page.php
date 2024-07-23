<?php
  include_once("layout/header.php");
?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Recetas</h1>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </section>
            <!-- search section html start -->
            <div class="search-section">
               <div class="container">
                  <div class="search-outer-wrap">
                     <div class="row grid">
                        <div class="col-lg-4 grid-item">
                           <div class="search-content-wrap">
                              <article class="post">
                                 <div class="entry-content">
                                    <h4>
                                       <a href="#">Texto #1</a>
                                    </h4>
                                    <div class="entry-meta">
                                       <span class="byline">
                                          <a href="#">Administrador</a>
                                       </span>
                                       <span class="posted-on">
                                          <a href="#">Mayo 13, 2024 <</a>
                                       </span>
                                    </div>
                                    <p><?php echo $lorem1; ?></p>
                                    <div class="button-container">
                                       <a href="#" class="button-text">Leer más</a>
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                        <div class="col-lg-4 grid-item">
                           <div class="search-content-wrap">
                              <article class="post">
                                 <div class="entry-content">
                                    <h4 class="entry-title">
                                       <a href="#">Receta #2</a>
                                    </h4>
                                    <div class="entry-meta">
                                       <span class="byline">
                                          <a href="#">Administrador</a>
                                       </span>
                                       <span class="post-on">
                                          <a href="#">Mayo 15, 2024 </a>
                                       </span>
                                    </div>
                                    <div class="entry-text">
                                       <p><?php echo $lorem1; ?></p>
                                    </div>
                                    <div class="button-container">
                                       <a href="#" class="button-text">Leer más</a>
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                        <div class="col-lg-4 grid-item">
                           <div class="search-content-wrap">
                              <article class="post">
                                 <div class="entry-content">
                                    <h4 class="entry-title">
                                       <a href="#">Receta #3</a>
                                    </h4>
                                    <div class="entry-text">
                                       <p><?php echo $lorem1; ?></p>
                                    </div>
                                    <div class="button-container">
                                       <a href="#" class="button-text">Leer más</a>
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                        <div class="col-lg-4 grid-item">
                           <div class="search-content-wrap">
                              <article class="post">
                                 <div class="entry-content">
                                    <h4>
                                       <a href="#">Receta #4</a>
                                    </h4>
                                    <div class="entry-meta">
                                       <span class="byline">
                                          <a href="#">Administrador</a>
                                       </span>
                                       <span class="posted-on">
                                          <a href="#">Mayo 14, 2024</a>
                                       </span>
                                    </div>
                                    <p><?php echo $lorem1; ?></p>
                                    <div class="button-container">
                                       <a href="#" class="button-text">Leer más</a>
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                        <div class="col-lg-4 grid-item">
                           <div class="search-content-wrap">
                               <div class="search-content-wrap">
                              <article class="post">
                                 <div class="entry-content">
                                    <h4>
                                       <a href="#">Receta #5</a>
                                    </h4>
                                    <p><?php echo $lorem1; ?></p>
                                    <div class="button-container">
                                       <a href="#" class="button-text">Leer más</a>
                                    </div>
                                 </div>
                              </article>
                           </div>
                           </div>
                        </div>
                        <div class="col-lg-4 grid-item">
                           <div class="search-content-wrap">
                             <article class="post">
                                 <div class="entry-content">
                                    <h4>
                                       <a href="#">Receta #6</a>
                                    </h4>
                                    <p><?php echo $lorem1; ?></p>
                                    <div class="button-container">
                                       <a href="#" class="button-text">Leer más<</a>
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                     </div>
                     <!-- pagination html start-->
                     <div class="post-navigation-wrap">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#">
                                <i class="fas fa-arrow-left"></i>
                              </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                              <a href="#">
                                <i class="fas fa-arrow-right"></i>
                              </a>
                            </li>
                          </ul>
                        </nav>
                     </div>
                     <!-- pagination html start-->
                  </div>
               </div>
               <div class="content-search-from">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                           <h4><?php echo $lorem5; ?></h4>
                           <h2>Buscar ahora !!</h2>
                           <form class="search-form">
                              <input type="text" name="search" placeholder="Buscar receta..">
                              <button class="search-btn">
                                 <i class="fas fa-search"></i>
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- search section html end -->
         </main>
<?php
  include_once("layout/footer.php");
?>
