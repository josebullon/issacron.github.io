<?php
  include_once("layout/header.php");
?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Carrito de Compra</h1>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </section>
            <!-- Inner Banner html end-->
            <div class="cart-section">
               <div class="container">
                  <div class="cart-list-inner">
                     <form action="#">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th></th>
                                <th>Nombre del producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="">
                                  <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  <span class="cartImage"><img src="assets/images/img43.jpg" alt="image"></span>
                                </td>
                                <td data-column="Product Name">Nombre del Producto</td>
                                <td data-column="Price">$40.00</td>
                                <td data-column="Quantity" class="count-input">
                                    <div>
                                       <a class="minus-btn" href="#"><i class="fa fa-minus"></i></a>
                                       <input class="quantity" type="text" value="1">
                                       <a class="plus-btn" href="#"><i class="fa fa-plus"></i></a>
                                    </div>
                                </td>
                                <td data-column="Sub Total">$40.00</td>
                              </tr>
                               <tr>
                                   <td class="">
                                     <button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                     <span class="cartImage"><img src="assets/images/img48.jpg" alt="image"></span>
                                   </td>
                                   <td data-column="Product Name">Nombre del Producto</td>
                                   <td data-column="Price">$50.00</td>
                                   <td data-column="Quantity" class="count-input">
                                       <div>
                                          <a class="minus-btn" href="#"><i class="fa fa-minus"></i></a>
                                          <input class="quantity" type="text" value="1">
                                          <a class="plus-btn" href="#"><i class="fa fa-plus"></i></a>
                                       </div>
                                   </td>
                                   <td data-column="Sub Total">$50.00</td>
                                 </tr>
                              </tbody>
                          </table>
                        </div>
                        <div class="updateArea">
                          <div class="input-group-wrap">
                              <input type="text" class="form-control" placeholder="Ingresa numero cupon!">
                              <a href="#" class="button-primary">Aplicar cupon</a>
                          </div>
                           <a href="#" class="outline-primary update-btn">Actualizar</a>
                        </div>
                        <div class="totalAmountArea">
                           <ul class="list-unstyled">
                              <li><strong>Sub Total</strong> <span>$ 100.00</span></li>
                              <li><strong>IVA</strong> <span>$ 20.00</span></li>
                              <li><strong>Total</strong> <span class="grandTotal">$ 120.00</span></li>
                           </ul>
                        </div>
                        <div class="checkBtnArea text-right">
                          <a href="#" class="button-primary">Facturar</a>
                        </div>
                      </form>
                  </div>
               </div>
            </div>
         </main>
         <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
