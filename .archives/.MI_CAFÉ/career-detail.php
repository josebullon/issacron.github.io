<?php
  include_once("layout/header.php");
?>
    <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(assets/images/footer-banner.jpg);">
          <div class="container">
            <div class="inner-banner-content">
              <h1 class="page-title">Contratación Detalles</h1>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </section>
      <!-- Inner Banner html end-->
      <div class="career-detail-section">
        <div class="career-detail-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="career-detail-container">
                  <div class="job-description">
                    <ul>
                      <li>
                        <span>Cargo :</span>
                        <h5>Barista</h5>
                      </li>
                      <li>
                        <span>Tiempo :</span>
                        <h5>Tempo Completo</h5>
                      </li>
                      <li>
                        <span>Salario:</span>
                        <h5>Negociable</h5>
                      </li>
                      <li>
                        <span>N° de Vacante :</span>
                        <h5>7</h5>
                      </li>
                    </ul>
                    <figure class="job-image">
                      <img src="assets/images/img2.jpg" alt="">
                    </figure>
                  </div>
                  <div class="tab-container">
                    <div class="responsive-tabs">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                            Descripción del trabajo
                          </a>
                        </li>
                        <li class="nav-item">
                          <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                            Experiencia Necesaria
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
                              <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true"
                                aria-controls="collapse-A">
                                Descripción
                              </a>
                            </h5>
                          </div>
                          <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel"
                            aria-labelledby="heading-A">
                            <div class="card-body">
                              <p><?php echo $lorem1; ?></p>
                              <p><?php echo $lorem1; ?></p>
                              <ul>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                                <li><?php echo $lorem5; ?></li>
                              </ul>
                              <p><?php echo $lorem1; ?></p>
                            </div>
                          </div>
                        </div>

                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                          <div class="card-header" role="tab" id="heading-B">
                            <h5 class="mb-0">
                              <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                aria-controls="collapse-B">
                                Requerimiento
                              </a>
                            </h5>
                          </div>
                          <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel"
                            aria-labelledby="heading-B">
                            <div class="card-body">
                              <h5>#Requerimiento</h5>
                              <p><?php echo $lorem1; ?></p>
                              <br />
                              <h5>#Experiencia</h5>
                              <p><?php echo $lorem1; ?></p>
                            </div>
                          </div>
                        </div>

                        <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                          <div class="card-header" role="tab" id="heading-C">
                            <h5 class="mb-0">
                              <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true"
                                aria-controls="collapse-C">
                                Requirimiento
                              </a>
                            </h5>
                          </div>
                          <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel"
                            aria-labelledby="heading-C">
                            <div class="card-body">
                              <p><?php echo $lorem1; ?></p>
                              <ul>
                                <li><?php echo $lorem1; ?></li>
                                <li><?php echo $lorem1; ?></li>
                                <li><?php echo $lorem1; ?></li>
                                <li><?php echo $lorem1; ?></li>
                                <li><?php echo $lorem1; ?></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 order-lg-first">
                <div class="sidebar">
                  <div class="widget-bg sidebar-list">
                    <h5 class="bg-title">¿Como aplicar?</h5>
                    <ul>
                      <li><i class="fas fa-minus"></i><?php echo $lorem1; ?></li>
                      <li><i class="fas fa-minus"></i><?php echo $lorem1; ?></li>
                      <li><i class="fas fa-minus"></i><?php echo $lorem1; ?></li>
                      <li><i class="fas fa-minus"></i><?php echo $lorem1; ?></li>
                      <li><i class="fas fa-minus"></i><?php echo $lorem1; ?></li>
                    </ul>
                  </div>
                  <div class="widget-bg faq-widget">
                    <h5 class="bg-title">Preguntas Frecuentes</h5>
                    <div id="sidebar-tab-content" class="accordion-content" role="tablist">
                      <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel"
                        aria-labelledby="tab-A">
                        <div class="card-header" role="tab" id="qus-A">
                          <h5 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true"
                              aria-controls="collapse-one">
                              ¿Pregunta #1?
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-one" class="collapse show" data-bs-parent="#sidebar-tab-content"
                          role="tabpanel" aria-labelledby="qus-A">
                          <div class="card-body"><?php echo $lorem1; ?></div>
                        </div>
                      </div>
                      <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="tab-B">
                        <div class="card-header" role="tab" id="qus-B">
                          <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false"
                              aria-controls="collapse-two">
                              ¿Pregunta #2?
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-two" class="collapse" data-bs-parent="#sidebar-tab-content" role="tabpanel"
                          aria-labelledby="qus-B">
                          <div class="card-body"><?php echo $lorem1; ?></div>
                        </div>
                      </div>
                      <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="tab-C">
                        <div class="card-header" role="tab" id="qus-C">
                          <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true"
                              aria-controls="collapse-three">
                              ¿Pregunta #2?
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content" role="tabpanel"
                          aria-labelledby="qus-C">
                          <div class="card-body"><?php echo $lorem1; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="widget-bg upload-widget text-center">
                    <div class="widget-icon">
                      <i class="fas fa-file-invoice"></i>
                    </div>
                    <h4>Enviar Curriculo</h4>
                    <p> Enviar curriculo ahora!<a href="#"><span class=""
                          data-cfemail=""></span></a></p>
                    <span class="or-style">o</span>
                    <a href="contact.php" class="button-primary">Contactanos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- site footer html start  -->
<?php
  include_once("layout/footer.php");
?>
