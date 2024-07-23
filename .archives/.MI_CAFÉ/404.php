<?php
  include_once("layout/header.php");
?>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </section>
            <!-- Inner Banner html end-->
            <div class="no-content-section 404-page">
               <div class="container">
                  <div class="no-content-wrap">
                     <div class="title-wrap">
                        <span>404</span>
                        <h1>NO ENCONTRAMOS ESTA PAGINA</h1>
                     </div>
                     <p><?php echo $lorem1; ?></p>
                     <div class="search-form-wrap">
                        <form class="search-form">
                           <input type="text" name="search" placeholder="Search...">
                           <button class="search-btn"><i class="fas fa-search"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <?php
  include_once("layout/footer.php");
?>
