<?php
  include_once("layout/header.php");
?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Facturar</h1>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </section>
            <!-- Inner Banner html end-->
            <div class="checkout-section">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 right-sidebar">
                        <div class="checkout-field-wrap">
                           <h3>Detalles</h3>
                           <div class="coupon-field">
                              <label>¿Tienes cupon? <a href="#">Ingresa codigo</a></label>
                              <div class="form-group">
                                 <input type="text" name="coupon" placeholder="Codigo del cupon">
                                 <input type="submit" name="submit" value="Aplicar">
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                   <label>Primer Nombre</label>
                                   <input type="text" name="name">
                                 </div>
                              </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Segundo Nombre</label>
                                <input type="text" name="name">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Empresa (opcional)</label>
                                 <input type="text" name="name">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Ciudad</label>
                                 <select>
                                    <option value="0">Colombia</option>
                                    <option value="0">Ecuador</option>
                                    <option value="0">Venezuela</option>
                                 </select>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <label>Dirección</label>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <input type="text" name="name" placeholder="Nombre de la calle">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <input type="text" name="address" placeholder="Direccion">
                                    </div>
                                 </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Codigo postal</label>
                                 <input type="text" name="name">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Ciudad</label>
                                 <input type="text" name="name">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Municipio</label>
                                 <select>
                                    <option value="0">Provincia 1</option>
                                    <option value="0">Provincia 2</option>
                                    <option value="0">Provincia 3</option>
                                 </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Telefono</label>
                                 <input type="text" name="name">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Correo</label>
                                 <input type="email" name="name">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                 <label>Información adicional</label>
                                 <textarea rows="6" placeholder="¿Quieres agregar informaación adicional?"></textarea>
                              </div>
                            </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <aside class="sidebar">
                           <div class="widget-bg widget-table-summary">
                              <h5 class="bg-title">Tu orden</h5>
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Nombre del producto
                                       </td>
                                       <td class="text-right">
                                          $40.00
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Nombre del producto
                                       </td>
                                       <td class="text-right">
                                          $50.00
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <strong>Subtotal</strong>
                                       </td>
                                       <td class="text-right">
                                          $100.00
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                        <i class="icon-java-duke"></i>
                                       </td>
                                       <td class="text-right">
                                         20%
                                       </td>
                                    </tr>
                                    <tr class="total">
                                       <td>
                                          <strong>Total</strong>
                                       </td>
                                       <td class="text-right">
                                          <strong>$120.00</strong>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="widget-bg widget-paymet-bank">
                              <div class="payment-wrap">
                                 <h5 class="bg-title">Metodo de pago</h5>
                                 <div class="form-group">
                                    <div class="custom-radio-field">
                                       <label>
                                          <input type="radio" checked name="s" value="1">
                                          <span class="radio-field"></span>
                                          Directa transferencia
                                       </label>
                                    </div>
                                    <div class="desc">
                                    <?php echo $lorem5; ?>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-radio-field">
                                       <label>
                                          <input type="radio" name="s" value="2">
                                          <span class="radio-field"></span>
                                          Metodo de pago #1
                                       </label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-radio-field">
                                       <label>
                                          <input type="radio" name="s" value="3">
                                          <span class="radio-field"></span>
                                          Metodo de pago #2
                                       </label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-radio-field">
                                       <label>
                                          <input type="radio" name="s" value="4">
                                          <span class="radio-field"></span>
                                          Metdodo de pago #3
                                          <img src="assets/images/cards.html" alt="">
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <button class="button-primary">Facturar</button>
                           </div>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
