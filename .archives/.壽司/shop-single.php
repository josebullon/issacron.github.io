<?php
  include_once 'header.php';
?>

      <!-- banner-page -->
      <div class="banner-page">
        <div class="themesflat-container w1791">
          <div class="row">
            <div class="col-12">
              <div class="content shop">
                <div class="heading">Detalles de Tienda </div>
                <ul class="breadcrumbs">
                  <li class="item">
                    <a href="index.php">Principal</a>
                  </li>
                  <li class="active">
                    <span>Detalles de la tienda</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /banner-page -->
      <!-- wg-shop-detail -->
      <div class="wg-shop-detail">
        <div class="themesflat-container">
          <div class="row justify-between">
            <div class="col-lg-6">
              <div class="images">
                <div class="image-top">
                  <img class="w-full" src="assets/images/box-item/shop-detail-1.jpg" alt="">
                </div>
                <div class="image-bottom">
                  <div class="product-top">
                    <img src="assets/images/box-item/shop-detail-2.jpg" alt="">
                  </div>
                  <div class="product-center">
                    <img src="assets/images/box-item/shop-detail-3.jpg" alt="">
                  </div>
                  <div class="product-bottom">
                    <img src="assets/images/box-item/shop-detail-4.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-inner">
                <div class="product-item">
                  <div class="content">
                    <div class="name"><a href="#">Nombre del plato</a></div>
                    <div class="price">$35.00</div>
                    <div class="rating">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                    </div>
                  </div>
                </div>

                <p><?php echo $lorem1; ?></p>

                <div class="title">Cantidad</div>
                <div class="wg-quantity">
                  <div class="quantity">
                    <span class="btn-quantity minus-btn"><i class="icon-arrow_down"></i></span>
                    <input type="text" name="number" value="1">
                    <span class="btn-quantity plus-btn"><i class="icon-arrow_up"></i></span>
                  </div>
                  <a href="#" class="button-style-1 black">
                    <span>Agregar al carrito</span>
                    <i class="icon-shoppingcart"></i>
                  </a>
                </div>
                <div class="add-wishlist">
                  <a href="#" class=""><i class="icon-heart"></i>Tu favorito</a>
                </div>

                <div class="more-infor">
                  <ul>
                    <li>Codigo:<span>&nbsp; 123456</span></li>
                    <li>Categoria: <span>Almuerzo</span></li>
                    <li>Etiquetas:<a href="#">&nbsp;&nbsp; comida</a>, <a href="#">clasica</a>, <a href="#">bebida</a></li>
                  </ul>
                </div>

                <div class="widget-social style-1">
                  <div class="title">Compartir:</div>
                  <ul class="">
                    <li><a href="#" class="icon-fb"></a></li>
                    <li><a href="#" class="icon-trip"></a></li>
                    <li><a href="#" class="icon-envelope"></a></li>
                    <li><a href="#" class="icon-instagram"></a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /wg-shop-detail -->
      <!-- tabs-description -->
      <div class="tabs-description">
        <div class="themesflat-container">
          <div class="row">
            <div class="col-12">
              <div class="widget-tabs style-1">
                <ul class="widget-menu-tab">
                  <li class="item-title active">
                    <span class="inner">Descripción</span>
                  </li>
                  <li class="item-title">
                    <span class="inner">Información Adicional</span>
                  </li>
                  <li class="item-title">
                    <span class="inner">Receta</span>
                  </li>
                </ul>
                <div class="widget-content-tab">
                  <div class="widget-content-inner active">
                    <P><?php echo $lorem1,$lorem1,$lorem1; ?></p>
                  </div>
                  <div class="widget-content-inner">
                    <p><?php echo $lorem1,$lorem1,$lorem1; ?></p>
                  </div>
                  <div class="widget-content-inner">
                    <p><?php echo $lorem1,$lorem1,$lorem1; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /tabs-description -->
      <!-- wg-related -->
      <div class="wg-related">
        <div class="themesflat-container">
          <div class="row">
            <div class="col-12">
              <div class="wrap">
                <div class="item-1">
                  <img src="assets/images/item-background/icon-2.png" alt="">
                </div>
                <div class="heading-section">
                  <span class="sub sub-before wow fadeInUp">Descubre más</span>
                  <div class="main wow fadeInUp">PRODUCTOS RELACIONADOS</div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="swiper-container" data-swiper='{
                                "spaceBetween": 30,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "navigation": {
                                    "nextEl": ".related-next",
                                    "prevEl": ".related-prev"
                                },
                                "breakpoints": {
                                    "768": {
                                        "slidesPerView": 3
                                    }
                                }
                            }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="product-item wow fadeInUp">
                      <div class="image">
                        <img src="assets/images/box-item/shop-1.jpg" alt="">
                        <div class="icon">
                          <div class="add">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="16" viewBox="0 0 18 16">
                                <image data-name="" width="18" height="16"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAQCAYAAAAbBi9cAAAA40lEQVQ4jZ1TCQ2DQBCcbWoAC1jAQi2gBQtUApXQSqASWgkgASRMs2RJr5e9Tegkl5CbY3b2EwAgWQOo9FtE3vgDQlIFpl0IwM3OEcwwRw3JluTE/zD9BCU5BDI9yVeBG8+Z/TlIZ69d43DP3NHFiTZYM5Sv7CzZmyYXqgrWJwvSOyJbfU6pkIishfRqS6lJuuunlbi6H+xbq//lxd6LquQVwOpG+2IWkUckBBOJuoiQDwruYbHNgBTEaqeoHlYRCV2NFs0bPuU7G4k+EkmH0n2YrMoS+jVHGrHkSBdcHXfbBYAPseerlQ82leMAAAAASUVORK5CYII=">
                                </image>
                              </svg>
                            </a>
                          </div>
                          <div class="like">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="17" height="14" viewBox="0 0 17 14">
                                <image data-name="" width="17" height="14"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAYAAADJ7fe0AAAAn0lEQVQokZ2S7Q2DMAxEz2zQFegIXYEVugI7dRdGoCOkI4QRrnLFh2vASng/fdGT4rPAQPIGoNWJiLzhIPmYJx8RmXyuD54kMzeSzkyWTJaXzAo6nvMKss5KxuBhxPj7OkndQdr9r5x7A2C/oDqmZt7ycFEwrC1pda6ZErKpvKihuJmLomNBhSgWGJFe6BH/V1og6p2lrxI4kbZwLgDwBXeVpZbemOdBAAAAAElFTkSuQmCC">
                                </image>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="price">$50.00</div>
                        <div class="name"><a href="shop-single.php">Nombre del plato</a></div>
                        <div class="rating">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item wow fadeInUp sale-off" data-wow-delay="0.1s">
                      <div class="image">
                        <img src="assets/images/box-item/shop-2.jpg" alt="">
                        <div class="icon">
                          <div class="add">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="16" viewBox="0 0 18 16">
                                <image data-name="" width="18" height="16"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAQCAYAAAAbBi9cAAAA40lEQVQ4jZ1TCQ2DQBCcbWoAC1jAQi2gBQtUApXQSqASWgkgASRMs2RJr5e9Tegkl5CbY3b2EwAgWQOo9FtE3vgDQlIFpl0IwM3OEcwwRw3JluTE/zD9BCU5BDI9yVeBG8+Z/TlIZ69d43DP3NHFiTZYM5Sv7CzZmyYXqgrWJwvSOyJbfU6pkIishfRqS6lJuuunlbi6H+xbq//lxd6LquQVwOpG+2IWkUckBBOJuoiQDwruYbHNgBTEaqeoHlYRCV2NFs0bPuU7G4k+EkmH0n2YrMoS+jVHGrHkSBdcHXfbBYAPseerlQ82leMAAAAASUVORK5CYII=">
                                </image>
                              </svg>
                            </a>
                          </div>
                          <div class="like">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="17" height="14" viewBox="0 0 17 14">
                                <image data-name="" width="17" height="14"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAYAAADJ7fe0AAAAn0lEQVQokZ2S7Q2DMAxEz2zQFegIXYEVugI7dRdGoCOkI4QRrnLFh2vASng/fdGT4rPAQPIGoNWJiLzhIPmYJx8RmXyuD54kMzeSzkyWTJaXzAo6nvMKss5KxuBhxPj7OkndQdr9r5x7A2C/oDqmZt7ycFEwrC1pda6ZErKpvKihuJmLomNBhSgWGJFe6BH/V1og6p2lrxI4kbZwLgDwBXeVpZbemOdBAAAAAElFTkSuQmCC">
                                </image>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="price"><span>$30.00</span> - $10.00</div>
                        <div class="name"><a href="shop-single.php">Nombre del plato</a></div>
                        <div class="rating">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                      <div class="image">
                        <img src="assets/images/box-item/shop-4.jpg" alt="">
                        <div class="icon">
                          <div class="add">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="16" viewBox="0 0 18 16">
                                <image data-name="" width="18" height="16"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAQCAYAAAAbBi9cAAAA40lEQVQ4jZ1TCQ2DQBCcbWoAC1jAQi2gBQtUApXQSqASWgkgASRMs2RJr5e9Tegkl5CbY3b2EwAgWQOo9FtE3vgDQlIFpl0IwM3OEcwwRw3JluTE/zD9BCU5BDI9yVeBG8+Z/TlIZ69d43DP3NHFiTZYM5Sv7CzZmyYXqgrWJwvSOyJbfU6pkIishfRqS6lJuuunlbi6H+xbq//lxd6LquQVwOpG+2IWkUckBBOJuoiQDwruYbHNgBTEaqeoHlYRCV2NFs0bPuU7G4k+EkmH0n2YrMoS+jVHGrHkSBdcHXfbBYAPseerlQ82leMAAAAASUVORK5CYII=">
                                </image>
                              </svg>
                            </a>
                          </div>
                          <div class="like">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="17" height="14" viewBox="0 0 17 14">
                                <image data-name="" width="17" height="14"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAYAAADJ7fe0AAAAn0lEQVQokZ2S7Q2DMAxEz2zQFegIXYEVugI7dRdGoCOkI4QRrnLFh2vASng/fdGT4rPAQPIGoNWJiLzhIPmYJx8RmXyuD54kMzeSzkyWTJaXzAo6nvMKss5KxuBhxPj7OkndQdr9r5x7A2C/oDqmZt7ycFEwrC1pda6ZErKpvKihuJmLomNBhSgWGJFe6BH/V1og6p2lrxI4kbZwLgDwBXeVpZbemOdBAAAAAElFTkSuQmCC">
                                </image>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="price">$50.00</div>
                        <div class="name"><a href="shop-single.php">Nombre del plato</a></div>
                        <div class="rating">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-item wow fadeInUp">
                      <div class="image">
                        <img src="assets/images/box-item/shop-3.jpg" alt="">
                        <div class="icon">
                          <div class="add">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18" height="16" viewBox="0 0 18 16">
                                <image data-name="" width="18" height="16"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAQCAYAAAAbBi9cAAAA40lEQVQ4jZ1TCQ2DQBCcbWoAC1jAQi2gBQtUApXQSqASWgkgASRMs2RJr5e9Tegkl5CbY3b2EwAgWQOo9FtE3vgDQlIFpl0IwM3OEcwwRw3JluTE/zD9BCU5BDI9yVeBG8+Z/TlIZ69d43DP3NHFiTZYM5Sv7CzZmyYXqgrWJwvSOyJbfU6pkIishfRqS6lJuuunlbi6H+xbq//lxd6LquQVwOpG+2IWkUckBBOJuoiQDwruYbHNgBTEaqeoHlYRCV2NFs0bPuU7G4k+EkmH0n2YrMoS+jVHGrHkSBdcHXfbBYAPseerlQ82leMAAAAASUVORK5CYII=">
                                </image>
                              </svg>
                            </a>
                          </div>
                          <div class="like">
                            <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="17" height="14" viewBox="0 0 17 14">
                                <image data-name="" width="17" height="14"
                                  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAYAAADJ7fe0AAAAn0lEQVQokZ2S7Q2DMAxEz2zQFegIXYEVugI7dRdGoCOkI4QRrnLFh2vASng/fdGT4rPAQPIGoNWJiLzhIPmYJx8RmXyuD54kMzeSzkyWTJaXzAo6nvMKss5KxuBhxPj7OkndQdr9r5x7A2C/oDqmZt7ycFEwrC1pda6ZErKpvKihuJmLomNBhSgWGJFe6BH/V1og6p2lrxI4kbZwLgDwBXeVpZbemOdBAAAAAElFTkSuQmCC">
                                </image>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="price">$20.00</div>
                        <div class="name"><a href="shop-single.php">Nombre del plato</a></div>
                        <div class="rating">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next style-arow related-next"></div>
              <div class="swiper-button-prev style-arow related-prev"></div>
            </div>

          </div>
        </div>
      </div>
      <!-- /wg-related -->

<?php
  include_once 'footer.php';
?>
