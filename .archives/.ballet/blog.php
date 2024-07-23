
<?php
  $title = "Titulo | Ballet";
  $blog = "active";
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
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/bg.jpg"></section>
        <!-- Blog  -->
        <section class="blog section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title"> <span>Leer Blog</span>
                            <h2>Nuevas Publicaciones</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="post-img">
                                        <a href="post.php"> <img src="img/blog/blog1.jpg" alt=""> </a>
                                    </div>
                                    <div class="post-cont"> <a href="blog.php"><span class="tag">danza</span></a> <i>|</i> <span class="date">Septiembre 7, 2023</span>
                                        <h5>
                                            <a href="post.php">La Danza Moderna</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptate rem perspiciatis dolores cupiditate quod, consectetur vel quos nemo atque. Id debitis sit veniam iste alias similique nesciunt pariatur quisquam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="post-img">
                                        <a href="post2.php"> <img src="img/blog/blog2.jpg" alt=""> </a>
                                    </div>
                                    <div class="post-cont"> <a href="blog.php"><span class="tag">ballet</span></a> <i>|</i> <span class="date">Septiembre 6, 2023</span>
                                        <h5>
                                            <a href="post2.php">La Magia del Ballet</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit non veniam pariatur, labore totam est necessitatibus. Dolore animi, sequi unde ullam eum totam tempora, sint illum esse fugiat enim temporibus!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="post-img">
                                        <a href="post3.php"> <img src="img/blog/blog3.jpg" alt=""> </a>
                                    </div>
                                    <div class="post-cont"> <a href="blog.php"><span class="tag">tips</span></a> <i>|</i> <span class="date">Septiembre 5, 2023</span>
                                        <h5>
                                            <a href="post3.php">¿Como mejorar tus habilidades en la danza?</a>
                                        </h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel excepturi non quas. Nobis ratione iste atque! Qui sapiente eaque tempora excepturi, ipsa exercitationem, quibusdam iste doloribus ducimus, nemo quidem est?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <!-- Pagination -->
                                <ul class="blog-pagination-wrap align-center mb-30">
                                    <li><a href="#0"><i class="ti-angle-left"></i></a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0" class="active">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0"><i class="ti-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar row">
                            <div class="col-md-12">
                                <div class="widget search">
                                    <form action="">
                                        <input type="text" name="search" placeholder="Escribe aqui...">
                                        <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h6>Post Recientes</h6>
                                    </div>
                                    <ul class="recent">
                                        <li>
                                            <div class="thum"> <img src="img/blog/blog3.jpg" alt=""> </div> <a href="post.php">Como mejorar tus habilidades de danza?</a>
                                        </li>
                                        <li>
                                            <div class="thum"> <img src="img/blog/blog2.jpg" alt=""> </div> <a href="post.php">La magia del Ballet</a>
                                        </li>
                                        <li>
                                            <div class="thum"> <img src="img/blog/blog1.jpg" alt=""> </div> <a href="post.php">La Danza Moderna</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h6>Archivos</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Diciembre 2023</a></li>
                                        <li><a href="#">Noviembre 2023</a></li>
                                        <li><a href="#">Octubre 2023</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h6>Categorias</h6>
                                    </div>
                                    <ul>
                                        <li><a href="blog.html"><i class="ti-angle-right"></i>tips</a></li>
                                        <li><a href="blog.html"><i class="ti-angle-right"></i>danza</a></li>
                                        <li><a href="blog.html"><i class="ti-angle-right"></i>ballet</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h6>Etiquetas</h6>
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">tips</a></li>
                                        <li><a href="#">danza</a></li>
                                        <li><a href="#">ballet</a></li>
                                        <li><a href="#">musica</a></li>
                                        <li><a href="#">accesorios</a></li>
                                        <li><a href="#">Tecnicas</a></li>
                                    </ul>
                                </div>
                            </div>
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
