<?php
  include_once("layout/header.php");
?>
    <div id="popup-search-box">
      <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
          <input
            id="popup-search"
            type="text"
            name="s"
            placeholder="Escribe lo que quieres buscar..."
          />
          <button id="popup-search-button" type="submit" name="submit">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 14.811 14.811"
            >
              <g
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                transform="translate(-2.25 -2.25)"
              >
                <circle
                  cx="5.5"
                  cy="5.5"
                  r="5.5"
                  data-name="Ellipse 7"
                  transform="translate(3 3)"
                ></circle>
                <path d="m16 16-3.142-3.142"></path>
              </g>
            </svg>
          </button>
        </form>
        <div class="search-close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            height="24"
            viewBox="0 -960 960 960"
            width="24"
          >
            <path
              d="M256-213.847 213.847-256l224-224-224-224L256-746.153l224 224 224-224L746.153-704l-224 224 224 224L704-213.847l-224-224-224 224Z"
            />
          </svg>
        </div>
      </div>
    </div>

    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <section class="contact-section padding">
      <div class="map-pattern"></div>
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <div class="section-heading mb-30">
              <h2>Contactame</h2>
              <p>
              <?php echo $lorem4; ?>
              </p>
            </div>
            <ul class="contact-info">
              <li>
                <span>Dirección:</span>
                <?php echo $lorem1; ?>
              </li>
              <li>
                <span>Telefono:</span><a href=""><?php echo $telefono; ?></a>
              </li>
              <li><span>Correo:</span><a href="#"><?php echo $correo; ?></a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="contact-form">
              <form
                action="https://html.dynamiclayers.net/dl/vixto/php/contact.php"
                method="post"
                id="ajax_contact"
                class="form-horizontal"
              >
                <div class="contact-form-group">
                  <div class="form-field">
                    <input
                      type="text"
                      id="firstname"
                      name="firstname"
                      class="form-control"
                      placeholder="Primer Nombre"
                      required=""
                    />
                  </div>
                  <div class="form-field">
                    <input
                      type="text"
                      id="lastname"
                      name="lastname"
                      class="form-control"
                      placeholder="Apellido"
                      required=""
                    />
                  </div>
                  <div class="form-field">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="form-control"
                      placeholder="Correo"
                      required=""
                    />
                  </div>
                  <div class="form-field">
                    <input
                      type="text"
                      id="phone"
                      name="phone"
                      class="form-control"
                      placeholder="Numero de telefono"
                      required=""
                    />
                  </div>
                  <div class="form-field message">
                    <textarea
                      id="message"
                      name="message"
                      cols="30"
                      rows="4"
                      class="form-control"
                      placeholder="Mensaje"
                      required=""
                    ></textarea>
                  </div>
                  <div class="form-field submit-btn">
                    <button
                      id="submit"
                      class="default-btn text-anim"
                      type="submit"
                      data-text="Enviar Mensaje"
                    >
                      Enviar Mensaje
                    </button>
                  </div>
                </div>
                <div id="form-messages" class="alert" role="alert"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/.contact-section-->

<?php
  include_once("layout/footer.php");
?>
