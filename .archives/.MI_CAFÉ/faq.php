<?php
  include_once("layout/header.php");
?>
    <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
          <div class="container">
            <div class="inner-banner-content">
              <h1 class="page-title">Preguntas</h1>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <!-- Inner Banner html end-->
      <!-- faq html start -->
      <div class="faq-page-section">
        <div class="container">
          <div class="faq-page-container">
            <div class="row">
              <div class="col-lg-6">
                <div class="section-heading">
                  <div class="sub-title">Algunas Preguntas</div>
                  <h2 class="section-title">Preguntas frecuentes</h2>
                  <div class="title-divider">
                    <img src="assets/images/title-divider.png" alt="divider">
                  </div>
                  <p><?php echo $lorem1; ?></div>
                <div id="accordion-tab-one" class="accordion-content" role="tablist">
                  <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel"
                    aria-labelledby="accordion-A">
                    <div class="card-header" role="tab" id="qus-A">
                      <h5 class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true"
                          aria-controls="collapse-one">
                          ¿Pregunta #1?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-one" class="collapse show" data-bs-parent="#accordion-tab-one" role="tabpanel"
                      aria-labelledby="qus-A">
                      <div class="card-body"><?php echo $lorem1; ?></div>
                    </div>
                  </div>
                  <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-B">
                    <div class="card-header" role="tab" id="qus-B">
                      <h5 class="mb-0">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false"
                          aria-controls="collapse-two">
                          ¿Pregunta #2?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-two" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel"
                      aria-labelledby="qus-B">
                      <div class="card-body"><?php echo $lorem1; ?></div>
                    </div>
                  </div>
                  <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-C">
                    <div class="card-header" role="tab" id="qus-C">
                      <h5 class="mb-0">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true"
                          aria-controls="collapse-three">
                          ¿Pregunta #3?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-three" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel"
                      aria-labelledby="qus-C">
                      <div class="card-body"><?php echo $lorem1; ?></div>
                    </div>
                  </div>
                  <div id="accordion-D" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-D">
                    <div class="card-header" role="tab" id="qus-D">
                      <h5 class="mb-0">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-four" aria-expanded="true"
                          aria-controls="collapse-four">
                          ¿Pregunta #4?
                        </a>
                      </h5>
                    </div>
                    <div id="collapse-four" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel"
                      aria-labelledby="qus-D">
                      <div class="card-body"><?php echo $lorem1; ?></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="qsn-form-container" style="background-image: url(assets/images/img1.jpg);">
                  <h3>¿Pregunta #5?</h3>
                  <p><?php echo $lorem1; ?></p>
                  <form>
                    <p>
                      <input type="text" name="name" placeholder="Nombre">
                    </p>
                    <p>
                      <input type="email" name="email" placeholder="Correo">
                    </p>
                    <p>
                      <input type="number" name="number" placeholder="Numero">
                    </p>
                    <p>
                      <textarea rows="8" placeholder="Enviar mensaje"></textarea>
                    </p>
                    <p>
                      <input type="submit" name="submit" value="Enviar Pregunta">
                    </p>
                  </form>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="faq-page-container">
            <div class="row">
              <div class="col-lg-5">
                <div class="faq-testimonial">
                  <figure class="faq-image">
                    <img src="assets/images/img37.jpg" alt="">
                  </figure>
                  <div class="testimonial-content">
                    <span class="quote-icon">
                      <i class="fas fa-quote-left"></i>
                    </span>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="faq-content-wrap">
                  <div class="section-heading">
                    <div class="sub-title">Preguntas</div>
                    <h2 class="section-title">Beneficios</h2>
                    <div class="title-divider">
                      <img src="assets/images/title-divider.png" alt="divider">
                    </div>
                    <p><?php echo $lorem1; ?></p>
                  </div>
                  <div id="accordion-tab-two" class="accordion-content" role="tablist">
                    <div id="accordion-E" class="card tab-pane fade show active" role="tabpanel"
                      aria-labelledby="accordion-E">
                      <div class="card-header" role="tab" id="qus-E">
                        <h5 class="mb-0">
                          <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true"
                            aria-controls="collapse-five">
                            ¿Pregunta #1?
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel"
                        aria-labelledby="qus-E">
                        <div class="card-body"><?php echo $lorem1; ?></div>
                      </div>
                    </div>
                    <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                      <div class="card-header" role="tab" id="qus-F">
                        <h5 class="mb-0">
                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false"
                            aria-controls="collapse-six">
                            ¿Pregunta #2?
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel"
                        aria-labelledby="qus-F">
                        <div class="card-body"><?php echo $lorem1; ?></div>
                      </div>
                    </div>
                    <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                      <div class="card-header" role="tab" id="qus-G">
                        <h5 class="mb-0">
                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true"
                            aria-controls="collapse-seven">
                            ¿Pregunta #3?
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel"
                        aria-labelledby="qus-G">
                        <div class="card-body"><?php echo $lorem1; ?></div>
                      </div>
                    </div>
                    <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                      <div class="card-header" role="tab" id="qus-H">
                        <h5 class="mb-0">
                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true"
                            aria-controls="collapse-eight">
                            ¿Pregunta #4?
                          </a>
                        </h5>
                      </div>
                      <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel"
                        aria-labelledby="qus-H">
                        <div class="card-body"><?php echo $lorem1; ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="left-background-pattern">
          <img src="assets/images/img56.png" alt="">
        </div>
        <div class="right-background-pattern">
          <img src="assets/images/img4.png" alt="">
        </div>
        <div class="bottom-background-pattern">
          <img src="assets/images/img5.png" alt="">
        </div>
      </div>
      <!-- faq html end -->
    </main>
    <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
