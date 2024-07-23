<?php
  // var:
  $nav07 = 'active';
  // header.php
  include_once("layout/header.php");
?>
    <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="page-banner-box bg-7">
          <h3>Eventos</h3>
        </div>

        <div
          class="events-inner-box-style d-flex justify-content-between align-items-center"
        >
          <div class="title">
            <h3>Todos los Eventos</h3>
          </div>
          <div class="events-btn">
            <a href="#" class="default-btn">Agregar nuevo Evento</a>
          </div>
          <div class="events-search-box">
            <form>
              <input
                type="text"
                class="input-search"
                placeholder="Buscar Evento..."
              />
              <button type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-1.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>08:30AM A 12:30PM</span>
                <h3>
                  <a href="#">Inteligencia Artificial</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-2.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>12:30PM <A:blank></A:blank> 05:30PM</span>
                <h3>
                  <a href="#">Realidad Virtual</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog1; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-3.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>08:30AM A 02:30PM</span>
                <h3>
                  <a href="#">Ciberseguridad</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog2; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-4.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>07:30AM A 12:30PM</span>
                <h3>
                  <a href="#">Automatización</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog2; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-5.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>08:30AM A 05:30PM</span>
                <h3>
                  <a href="#">Robótica</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog3; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-6.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>08:30AM A 02:30PM</span>
                <h3>
                  <a href="#">Computación Cuántica</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog3; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-7.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>08:00AM A 12:30PM</span>
                <h3>
                  <a href="#">Ética</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog4; ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-events-card">
              <a href="#">
                <img src="assets/images/events/events-8.jpg" alt="image" />
              </a>
              <div class="events-content">
                <span>08:30am A 02:30PM</span>
                <h3>
                  <a href="#">Innovación</a>
                </h3>
                <p>En linea</p>

                <div
                  class="events-footer d-flex justify-content-between align-items-center"
                >
                  <a href="#" class="default-btn">Asistir</a>
                  <span><?php echo $fblog5; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <form class="events-form">
          <h3>Agregar Evento</h3>

          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label>Categoria</label>
                <select class="form-select">
                  <option selected="1">Inteligencia Artificial</option>
                  <option value="2">Realidad Vrtual</option>
                  <option value="3">Ciberseguridad</option>
                  <option value="4">Automatización</option>
                  <option value="5">Robótica</option>
                  <option value="6">Computación Cuantica</option>
                  <option value="7">Ética</option>
                  <option value="8">Innovación</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label>Nombre del Evento</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label>Localizacion del Evento</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label>Fecha del Evento</label>
                <input type="text" class="form-control" id="datepicker" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label>Fecha Inicio</label>
                <input type="time" class="form-control" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label>Fecha Fin</label>
                <input type="time" class="form-control" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="form-group">
                <label>Descripcion del Evento</label>
                <textarea class="form-control"></textarea>
              </div>
            </div>

            <div class="col-lg-12 col-md-12">
              <button type="submit" class="default-btn">Crear Evento</button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Content Page Box Area -->
<?php
  include_once("layout/footer.php");
?>
