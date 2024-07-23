
<?php
  $title = "Titulo | Ballet";
  $contact = "active";
?>

<?php
  include_once("layout/header.php");
?>

    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img-position-center bg-fixed" data-overlay-light="3" data-background="img/blog/blog1.jpg"></section>
        <!-- Contact -->
        <section class="contact section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
                            <span>Localizacion</span>
                            <h2>Contactanos</h2>
                        </div>
				    </div>
				</div>
				<div class="row mb-90">
					<div class="col-md-5 mb-30">
						<h6>Lorem ipsum dolor sit amet</h6>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, nemo soluta officiis veniam animi ducimus fugiat cumque asperiores deleniti rerum fuga eligendi distinctio natus commodi numquam iusto placeat, unde voluptatibus.</p>
						<ul class="list-unstyled contact-list">
                        <li>
                            <div class="icon"><span class="ti-headphone-alt"></span></div>
                            <div class="text">
                                <p><a href="tel:+18004446666">+0123 01234567</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-email"></span> </div>
                            <div class="text">
                                <p><a href="mailto:makeup@belenava.com">ballet@gmail.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-location-pin"></span> </div>
                            <div class="text">
                                <p>Buenos Aires, Argentina</p>
                            </div>
                        </li>
                    </ul>
					</div>
					<div class="col-md-6 offset-md-1">
						<h6>Envia tu mensaje</h6>
						 <form method="post" class="contact__form" action="">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                       Su mensaje fue enviado exitosamente.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Nombre *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Correo *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Telefono *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Asunto *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensaje *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit"  value="Enviar Mensaje">
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<!-- Map Section-->
				<div class="row">
					<div class="col-md-12">
						<div class="contactMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d842654.2676876641!2d-59.30057289516287!3d-34.41104825128181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1694198884354!5m2!1ses!2sve" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Promo video - Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding pb-0" data-overlay-dark="2" data-background="img/footer.jpg">
                <div class="container">
                    <div class="row">
                        <!-- Promo video -->
                        <div class="col-md-6">
                            <div class="vid-area">
                                <div class="vid-icon">
                                    <a class="play-button vid" href="https://www.youtube.com/watch?v=Gxt7KxZ47W8">
                                        <svg class="circle-fill">
                                            <circle cx="43" cy="43" r="39" stroke="#613228" stroke-width="1.5"></circle>
                                        </svg>
                                        <svg class="circle-track">
                                            <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1.5" fill="none"></circle>
                                        </svg> <span class="polygon">
                                            <i class="ti-control-play"></i>
                                        </span> </a>
                                </div>
                                <div class="cont mt-15 mb-30">
                                    <h5>Nuestro Video</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Testiominals -->
                        <div class="col-md-5 offset-md-1">
                            <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                <div class="head-box">
                                    <h4>Testimonios</h4>
                                </div>
                                <div class="owl-carousel owl-theme">
                                    <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ut quod, architecto modi repellat, reiciendis hic dolor error magnam quasi autem, eum quos fugit nisi obcaecati. Quod debitis a qui.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="img/equipo/testimonio1.png" alt=""> </div>
                                            <div class="cont">
                                                <h6>Victoria Andrade</h6> <span>Bailarina</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="img/quot.png" alt="">
                                        </span>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, quaerat nostrum ut iure modi, ad distinctio quam repellendus exercitationem nobis dicta saepe vero iste aliquid eum voluptatem id soluta dolorum?</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="img/equipo/testimonio2.png" alt=""> </div>
                                            <div class="cont">
                                                <h6>Monica Duarte</h6> <span>Bailarina</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="img/quot.png" alt="">
                                        </span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur unde, corrupti doloremque ipsa dolor tempora magni dicta nam voluptatibus cumque, inventore quibusdam ullam alias hic distinctio nobis id, aperiam aspernatur!</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="img/equipo/testimonio3.png" alt=""> </div>
                                            <div class="cont">
                                                <h6>Victor Ruiz</h6> <span>Representante</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients -->
        <section class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clientes/1.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clientes/2.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clientes/3.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clientes/4.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clientes/5.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clientes/6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
  include_once("layout/footer.php");
?>
