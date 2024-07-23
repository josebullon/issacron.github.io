<?php
  include_once("layout/header.php");
?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Detalles del Producto</h1>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- product section html start -->
               <div class="product-outer-wrap product-wrap">
                  <div class="product-inner-wrap">
                     <div class="container">
                        <div class="row align-items-center">
                           <div class="col-sm-6">
                              <div class="product-thumbnails">
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img43.jpg" alt="">
                                    </figure>
                                    <div class="image-search-icon">
                                       <a href="assets/images/img43.jpg" data-fancybox="gallery">
                                          <i class="fas fa-search"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img44.jpg" alt="">
                                    </figure>
                                    <div class="image-search-icon">
                                       <a href="assets/images/img44.jpg" data-fancybox="gallery">
                                          <i class="fas fa-search"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img46.jpg" alt="">
                                    </figure>
                                    <div class="image-search-icon">
                                       <a href="assets/images/img46.jpg" data-fancybox="gallery">
                                          <i class="fas fa-search"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img47.jpg" alt="">
                                    </figure>
                                    <div class="image-search-icon">
                                       <a href="assets/images/img47.jpg" data-fancybox="gallery">
                                          <i class="fas fa-search"></i>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img48.jpg" alt="">
                                    </figure>
                                    <div class="image-search-icon">
                                       <a href="assets/images/img48.jpg" data-fancybox="gallery">
                                          <i class="fas fa-search"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="product-thumb-nav">
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img43.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img44.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img46.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img47.jpg" alt="">
                                    </figure>
                                 </div>
                                 <div class="single-product-item">
                                    <figure class="feature-image">
                                       <img src="assets/images/img48.jpg" alt="">
                                    </figure>
                                 </div>
                              </div>
                           </div>
                        <div class="col-sm-6">
                              <div class="product-summary">
                                 <nav aria-label="breadcrumb" class="breadcrumb-content">
                                    <ul class="breadcrumb">
                                       <li class="breadcrumb-item">
                                          <a href="index.html">Home</a>
                                       </li>
                                       <li class="breadcrumb-item active">
                                          <a href="product-detail.html">Furniture</a>
                                       </li>
                                       <li class="breadcrumb-item active">
                                          <a href="product-detail.html">Dining Table</a>
                                       </li>
                                    </ul>
                                 </nav>
                                 <h2>Nombre del Producto</h2>
                                 <div class="product-price">
                                    <del>$40.00</del>
                                    <ins>$35.00</ins>
                                 </div>
                                 <form class="cart-item">
                                    <input type="number" name="quantity" value="1">
                                    <button class="button-primary">Comprar</button>
                                 </form>
                                 <div class="product-meta">
                                    <div class="cat-detail">
                                       <strong>Categoria:</strong>
                                       <a href="product-right.php">Categoria1</a>
                                       <a href="product-right.php">Categoria2</a>
                                    </div>
                                    <div class="tag-detail">
                                       <strong>Etiquetas:</strong>
                                       <a href="product-right.php">Etiqueta1</a>
                                       <a href="product-right.php">Etiqueta2</a>
                                       <a href="product-right.php">Etiqueta3</a>
                                    </div>
                                 </div>
                                 <div class="product-desc">
                                    <p><?php echo $lorem1; ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>   
                  </div>
                  <div class="product-tab-outer">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-8 right-sidebar">
                              <div class="tab-container">
                                 <div class="responsive-tabs">
                                       <ul class="nav nav-tabs" role="tablist">
                                          <li class="nav-item">
                                             <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                                                Descripción
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                                               Información
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">
                                               Requerimientos
                                             </a>
                                          </li>
                                       </ul>
                                       <div id="nav-tab-content" class="tab-content" role="tablist">
                                          <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                                             <div class="card-header" role="tab" id="heading-A">
                                                <h5 class="mb-0">
                                                   <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                     Descripción
                                                   </a>
                                                </h5>
                                             </div>
                                             <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel"
                                                  aria-labelledby="heading-A">
                                                <div class="card-body">
                                                   <p><?php echo $lorem1; ?></p>
                                                   <p><?php echo $lorem1; ?></p>
                                                   <p><?php echo $lorem1; ?></p>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                             <div class="card-header" role="tab" id="heading-B">
                                                <h5 class="mb-0">
                                                   <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                                     Información Adicional
                                                   </a>
                                                </h5>
                                             </div>
                                             <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel"
                                                  aria-labelledby="heading-B">
                                                <div class="card-body">
                                                   <table>
                                                      <tr>
                                                         <th>Peso</th>
                                                         <td>1/2 kg</td>
                                                      </tr>
                                                      <tr>
                                                         <th>Dimensions</th>
                                                         <td>200 x 100</td>
                                                      </tr>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                             <div class="card-header" role="tab" id="heading-C">
                                                <h5 class="mb-0">
                                                   <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                                                      Review
                                                   </a>
                                                </h5>
                                             </div>
                                             <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel"
                                                  aria-labelledby="heading-C">
                                                <div class="card-body">
                                                <!-- review comment html -->
                                                   <div class="comment-area">
                                                      <h3 class="comment-title">creado por:</h3>
                                                      <div class="comment-area-inner">
                                                         <ol>
                                                            <li>
                                                               <figure class="comment-thumb">
                                                                  <img src="assets/images/unbound-img12.html" alt="">
                                                               </figure>
                                                               <div class="comment-content">
                                                                  <div class="comment-header">
                                                                     <h5 class="author-name">Nombre Apellido</h5>
                                                                     <span class="post-on">Marzo 17, 2024</span>
                                                                     <div class="rating-wrap">
                                                                        <div class="rating-start" title="Rated 5 out of 5">
                                                                           <span></span>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <p><?php echo $lorem1; ?></p>
                                                                  <a href="#replyForm" class="reply"><i class="fas fa-reply"></i>Responder</a>
                                                               </div>
                                                            </li>
                                                         </ol>
                                                      </div>
                                                      <div id="replyForm" class="comment-form-wrap">
                                                         <h3 class="comment-title">Lorem ipsum</h3>
                                                         <p><?php echo $lorem1; ?></p>
                                                         <form class="comment-form">
                                                            <div class="rate-wrap">
                                                               <label>Evalua el producto</label>
                                                               <div class="procduct-rate">
                                                                  <span></span>
                                                               </div>
                                                            </div>
                                                            <p>
                                                               <label>Escribir</label>
                                                               <textarea rows="6"></textarea>
                                                            </p>
                                                            <p>
                                                               <label>Nombre</label>
                                                               <input type="text" name="name">
                                                            </p>
                                                            <p>
                                                               <label>Correo</label>
                                                               <input type="email" name="email">
                                                            </p>
                                                            <p>
                                                               <input type="submit" name="submit" value="Enviar" >
                                                            </p>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              <div class="related-product">
                                 <div class="related-title">
                                    <h3>Productos Relacionados</h3>
                                 </div>
                                 <div class="row">
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
                                                <ins>$18.00</ins>
                                             </div>
                                             <a href="product-cart.php" class="button-primary">Comprar</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="product-item text-center">
                                          <figure class="product-image">
                                             <a href="product-detail.php">
                                                <img src="assets/images/img45.jpg" alt="">
                                             </a>
                                          </figure>
                                          <div class="product-content">
                                             <h4>
                                                <a href="product-detail.php">Nombre del producto</a>
                                             </h4>
                                             <div class="product-price">
                                                <ins>$15.99</ins>
                                             </div>
                                             <a href="product-cart.php" class="button-primary">Comprar</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="sidebar">
                                 <aside class="widget search_widget">
                                    <form>
                                       <input type="text" name="search" placeholder="Buscar..">
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
               </div>
            <!-- product section html end -->
         </main>
         <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
 