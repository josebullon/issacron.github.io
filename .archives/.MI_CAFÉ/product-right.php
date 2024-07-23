<?php
  include_once("layout/header.php");
?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Tienda</h1>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- product section html start -->
            <div class="product-outer-wrap product-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 right-sidebar">
                        <div class="product-notices-wrapper">
                           <p class="product-result-count">Mostrando los 8 resultados</p>
                           <form method="get">
                              <select name="orderby" class="orderby" aria-label="Shop order">
                                 <option value="menu_order" selected="selected">Orden predeterminado</option>
                                 <option value="popularity">Sort by popularity</option>
                                 <option value="rating">Ordenar por popularidad</option>
                                 <option value="date">Ordenar por último</option>
                                 <option value="price">Ordenar por precio: de menor a mayor</option>
                                 <option value="price-desc">Ordenar por precio: de mayor a menor</option>
                              </select>
                           </form>
                        </div>
                        <div class="product-item-wrapper">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="product-item text-center">
                                    <figure class="product-image">
                                       <a href="product-detail.php">
                                          <img src="assets/images/img44.jpg" alt="">
                                       </a>
                                    </figure>
                                    <div class="product-content">
                                       <h4>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h4>
                                       <div class="product-price">
                                          <ins>$15.00</ins>
                                       </div>
                                       <a href="product-cart.php" class="button-primary">Comprar</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="product-item text-center">
                                    <figure class="product-image">
                                       <a href="product-detail.php">
                                          <img src="assets/images/img50.jpg" alt="">
                                       </a>
                                       <span class="onsale">Descuento</span>
                                    </figure>
                                    <div class="product-content">
                                       <h4>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h4>
                                       <div class="product-price">
                                          <del>$30.00</del>
                                          <ins>$19.00</ins>
                                       </div>
                                       <a href="product-cart.php" class="button-primary">Comprar</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="product-item text-center">
                                    <figure class="product-image">
                                       <a href="product-detail.php">
                                          <img src="assets/images/img48.jpg" alt="">
                                       </a>
                                    </figure>
                                    <div class="product-content">
                                       <h4>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h4>
                                       <div class="product-price">
                                          <ins>$35.00</ins>
                                       </div>
                                       <a href="product-cart.php" class="button-primary">Comprar</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="product-item text-center">
                                    <figure class="product-image">
                                       <a href="product-detail.php">
                                          <img src="assets/images/img47.jpg" alt="">
                                       </a>
                                    </figure>
                                    <div class="product-content">
                                       <h4>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h4>
                                       <div class="product-price">
                                          <ins>$30.00</ins>
                                       </div>
                                       <a href="product-cart.php" class="button-primary">Comprar</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="product-item text-center">
                                    <figure class="product-image">
                                       <a href="product-detail.php">
                                          <img src="assets/images/img46.jpg" alt="">
                                       </a>
                                    </figure>
                                    <div class="product-content">
                                       <h4>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h4>
                                       <div class="product-price">
                                          <ins>$25.00</ins>
                                       </div>
                                       <a href="product-cart.php" class="button-primary">Comprar</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="product-item text-center">
                                    <figure class="product-image">
                                       <a href="product-detail.php">
                                          <img src="assets/images/img49.jpg" alt="">
                                       </a>
                                       <span class="onsale">Descuento</span>
                                    </figure>
                                    <div class="product-content">
                                       <h4>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h4>
                                       <div class="product-price">
                                          <del>$30.00</del>
                                          <ins>$19.00</ins>
                                       </div>
                                       <a href="product-cart.php" class="button-primary">Comprar</a>
                                    </div>
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
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="sidebar">
                           <aside class="widget search_widget">
                              <form>
                                 <input type="text" name="search" placeholder="Buscar...">
                                 <button class="search-btn">
                                    <i class="fas fa-search"></i>
                                 </button>
                              </form>
                           </aside>
                           <aside class="widget widget_category_product_thumb colum-3">
                              <h3 class="widget-title">Categorias</h3>
                              <ul>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.php"><img src="assets/images/img44.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>Categoria1</h5>
                                       <span class="count">(9)</span>
                                    </div>
                                 </li>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.php"><img src="assets/images/img46.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>Categoria2</h5>
                                       <span class="count">(6)</span>
                                    </div>
                                 </li>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.html"><img src="assets/images/img45.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>Categoria3</h5>
                                       <span class="count">(9)</span>
                                    </div>
                                 </li>
                              </ul>
                           </aside>
                           <aside class="widget widget_product_post widget-product-thumb">
                              <h3 class="widget-title">Productos Recientes</h3>
                              <ul>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.php"><img src="assets/images/img44.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h5>
                                       <div class="entry-meta">
                                          <span class="byline">
                                             <a href="product-detail.php">Administrador</a>
                                          </span>
                                          <span class="posted-on">
                                             <a href="product-detail.php">Marzo 17, 2024</a>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.php"><img src="assets/images/img50.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h5>
                                       <div class="entry-meta">
                                          <span class="byline">
                                             <a href="product-detail.php">Administrador</a>
                                          </span>
                                          <span class="posted-on">
                                             <a href="product-detail.php">Marzo 16, 2024</a>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.php"><img src="assets/images/img46.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h5>
                                       <div class="entry-meta">
                                          <span class="byline">
                                             <a href="product-detail.php">Administrador</a>
                                          </span>
                                          <span class="posted-on">
                                             <a href="product-detail.php">Marzo 15, 2024</a>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <figure class="product-thumb">
                                       <a href="product-detail.php"><img src="assets/images/img43.jpg" alt=""></a>
                                    </figure>
                                    <div class="product-content">
                                       <h5>
                                          <a href="product-detail.php">Nombre del producto</a>
                                       </h5>
                                       <div class="entry-meta">
                                          <span class="byline">
                                             <a href="product-detail.php">Administrador</a>
                                          </span>
                                          <span class="posted-on">
                                             <a href="product-detail.php">Marzo 14, 2024</a>
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </aside>
                           <aside class="widget widget_gallery">
                              <h3 class="widget-title">Galeria</h3>
                              <div class="gallery gallery-colum-3">
                                 <figure class="gallery-item">
                                    <a href="product-detail.php"><img src="assets/images/img43.jpg" alt=""></a>
                                 </figure>
                                 <figure class="gallery-item">
                                    <a href="product-detail.php"><img src="assets/images/img49.jpg" alt=""></a>
                                 </figure>
                                 <figure class="gallery-item">
                                    <a href="product-detail.php"><img src="assets/images/img48.jpg" alt=""></a>
                                 </figure>
                                 <figure class="gallery-item">
                                    <a href="product-detail.php"><img src="assets/images/img46.jpg" alt=""></a>
                                 </figure>
                                 <figure class="gallery-item">
                                    <a href="product-detail.php"><img src="assets/images/img47.jpg" alt=""></a>
                                 </figure>
                                 <figure class="gallery-item">
                                    <a href="product-detail.php"><img src="assets/images/img44.jpg" alt=""></a>
                                 </figure>
                              </div>
                           </aside>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- product section html end -->
         </main>
         <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
