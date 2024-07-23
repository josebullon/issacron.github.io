<?php
  include_once("layout/header.php");
?>

      <!-- page header -->
      <section class="page-header">
        <div class="container-xl">
          <div class="text-center">
            <h1 class="mt-0 mb-2">Contactame</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Principal</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contactame
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </section>

      <!-- section main content -->
      <section class="main-content">
        <div class="container-xl">
          <div class="row">
            <div class="col-md-4">
              <!-- contact info item -->
              <div
                class="contact-item bordered rounded d-flex align-items-center"
              >
                <span class="icon icon-phone"></span>
                <div class="details">
                  <h3 class="mb-0 mt-0">Telefono</h3>
                  <p class="mb-0"><?php echo $telefono; ?></p>
                </div>
              </div>
              <div class="spacer d-md-none d-lg-none" data-height="30"></div>
            </div>

            <div class="col-md-4">
              <!-- contact info item -->
              <div
                class="contact-item bordered rounded d-flex align-items-center"
              >
                <span class="icon icon-envelope-open"></span>
                <div class="details">
                  <h3 class="mb-0 mt-0">Correo</h3>
                  <p class="mb-0"><?php echo $correo; ?></p>
                </div>
              </div>
              <div class="spacer d-md-none d-lg-none" data-height="30"></div>
            </div>

            <div class="col-md-4">
              <!-- contact info item -->
              <div
                class="contact-item bordered rounded d-flex align-items-center"
              >
                <span class="icon icon-map"></span>
                <div class="details">
                  <h3 class="mb-0 mt-0">Localización</h3>
                  <p class="mb-0"><?php echo $lorem4; ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="spacer" data-height="50"></div>

          <!-- section header -->
          <div class="section-header">
            <h3 class="section-title">Enviar mensaje</h3>
            <img src="images/wave.svg" class="wave" alt="wave" />
          </div>

          <!-- Contact Form -->
          <form id="contact-form" class="contact-form" method="post">
            <div class="messages"></div>

            <div class="row">
              <div class="column col-md-6">
                <!-- Name input -->
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="InputName"
                    id="InputName"
                    placeholder="Nombre"
                    required="required"
                    data-error="Necesitas ingresar nombre."
                  />
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="column col-md-6">
                <!-- Email input -->
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="InputEmail"
                    name="InputEmail"
                    placeholder="Correo"
                    required="required"
                    data-error="Email is required."
                  />
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="column col-md-12">
                <!-- Email input -->
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="InputSubject"
                    name="InputSubject"
                    placeholder="Asunto"
                    required="required"
                    data-error="Subject is required."
                  />
                  <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="column col-md-12">
                <!-- Message textarea -->
                <div class="form-group">
                  <textarea
                    name="InputMessage"
                    id="InputMessage"
                    class="form-control"
                    rows="4"
                    placeholder="Escribe tu mensaje..."
                    required="required"
                    data-error="Necesitas escribir tu mensaje..."
                  ></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>

            <button
              type="submit"
              name="submit"
              id="submit"
              value="Submit"
              class="btn btn-default"
            >
              Enviar mensaje</button
            ><!-- Send Button -->
          </form>
          <!-- Contact Form end -->
        </div>
      </section>
<?php
  include_once("layout/footer.php");
?>
