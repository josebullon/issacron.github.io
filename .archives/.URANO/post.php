<?php
  include_once("layout/header.php");
?>
  <!-- Header Banner -->
  <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
    data-background="img/slider/04.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left caption mt-90">
          <h5 class="animate-box" data-animate-effect="fadeInUp"><a href="index.php#blog">Principal</a> /Post Ejemplo</h5>
          <h1 class="animate-box" data-animate-effect="fadeInUp"><?php echo $lorem3; ?></h1>
          <hr class="animate-box" data-animate-effect="fadeInUp">
          <p class="animate-box" data-animate-effect="fadeInUp" style="text-align: justify;"><?php echo $lorem2; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- hr -->
  <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
  <!-- Post -->
  <div class="section-padding bg-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-30" style="text-align: justify;"><?php echo $lorem1;  echo $lorem1;?></p>
          <img src="img/slider/02.jpg" class="mb-30" alt="">
          <p style="text-align: justify;"><?php echo $lorem1;  echo $lorem1;?></p>
        </div>
      </div>
      <div class="nopixel-comment-section">
        <div class="row">
          <!-- Comment -->
          <div class="col-md-7">
            <div class="nopixel-post-comment-wrap">
              <div class="nopixel-user-comment"> <img src="img/team/1.jpg" alt=""> </div>
              <div class="nopixel-user-content">
                <h6>Nombre Apellido<span> 04 Oct 2023</span></h6>
                <p style="text-align: justify;"><?php echo $lorem2;  ;?></p> <a class="nopixel-repay" href="#">Responder<i
                    class="ti-back-left"></i></a>
              </div>
            </div>
          </div>
          <!-- Contact Form -->
          <div class="col-md-4 offset-md-1">
            <h6>Enviar Mensaje</h6>
            <form method="post" class="contact__form"
              action="">
              <!-- Form message -->
              <div class="row">
                <div class="col-12">
                  <div class="alert alert-success contact__msg" style="display: none" role="alert">
                    El mensaje fue enviado...
                  </div>
                </div>
              </div>
              <!-- Form elements -->
              <div class="row">
                <div class="col-md-12 form-group">
                  <input name="name" type="text" placeholder="Nombre *" required>
                </div>
                <div class="col-md-12 form-group">
                  <input name="email" type="email" placeholder="Correo *" required>
                </div>
                <div class="col-md-12 form-group">
                  <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensaje *"
                    required></textarea>
                </div>
                <div class="col-md-12">
                  <input name="submit" type="submit" value="Enviar">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Prev-Next Post -->
  <div class="nopixel-post-prev-next">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="d-sm-flex align-items-center justify-content-between">
            <div class="nopixel-post-prev-next-left">
              <a href="blog.php"> <i class="ti-arrow-left"></i> Anterior</a>
            </div> <a href="blog.php"><i class="ti-layout-grid3-alt"></i></a>
            <div class="nopixel-post-prev-next-right"> <a href="post.php">Siguiente <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Promo video - Testiominals -->
  <div class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner.jpg" data-overlay-dark="4">
      <div class="container">
        <div class="row">
<?php
  include_once("layout/footer.php");
?>
