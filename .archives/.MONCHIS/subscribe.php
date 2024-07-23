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
            placeholder="Escribe lo que quieras buscar..."
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
    <!--/.popup-search-box-->

    <div id="searchbox-overlay"></div>
    <!--/.searchbox-overlay-->

    <section class="subscribe-section padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="subscribe-page-inner">
              <div class="subscribe-img">
                <img src="assets/img/post-7.jpg" alt="img" />
              </div>
              <div class="subscribe-wrap">
                <h2>Subscribirse</h2>
                <h3><?php echo $lorem1; ?></h3>
                <form
                  action=""
                  id="ajax_mc_form"
                  class="subscribe-form"
                >
                  <div class="mc-fields">
                    <input
                      id="mc_email"
                      class="form-control"
                      type="email"
                      name="mc_email"
                      placeholder="Correo"
                      required=""
                    />
                    <button class="default-btn text-anim" data-text="Subscribirse">
                      Subscribirse
                    </button>
                  </div>
                  <div class="clearfix"></div>
                  <div id="mc-form-messages" class="alert" role="alert"></div>
                </form>
                <p><?php echo $lorem4; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/.subscribe-section-->
    <?php
  include_once("layout/footer.php");
?>
