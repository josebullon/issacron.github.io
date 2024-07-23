<?php
  // var:
  $nav08 = 'active';
  // header.php
  include_once("layout/header.php");
?>
      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="page-banner-box bg-7">
          <h3>Chat</h3>
        </div>

        <div class="live-chat-slides owl-carousel owl-theme">
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-11.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Antonio</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-59.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Carolina</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-60.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Ana</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-23.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">José</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-35.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Daniel</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-22.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Veronica</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-25.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Adrian</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-39.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Antonieta</a>
            </h3>
          </div>
          <div class="chat-box">
            <div class="image">
              <a href="#"
                ><img
                  src="assets/images/user/user-33.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <span class="status-online"></span>
            </div>
            <h3>
              <a href="#">Guillermo</a>
            </h3>
          </div>
        </div>

        <div class="live-chat-body">
          <div
            class="live-chat-header d-flex justify-content-between align-items-center"
          >
            <div class="live-chat-info">
              <a href="#"
                ><img
                  src="assets/images/user/user-11.jpg"
                  class="rounded-circle"
                  alt="image"
              /></a>
              <h3>
                <a href="#">Antonio Andrade</a>
              </h3>
            </div>

            <ul class="live-chat-right">
              <li>
                <button
                  class="btn d-inline-block"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Llamar"
                  type="button"
                >
                  <i class="ri-phone-fill"></i>
                </button>
              </li>
              <li>
                <button
                  class="btn d-inline-block"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Video"
                  type="button"
                >
                  <i class="ri-live-fill"></i>
                </button>
              </li>
              <li>
                <button
                  class="btn d-inline-block"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Borrar"
                  type="button"
                >
                  <i class="ri-delete-bin-line"></i>
                </button>
              </li>
            </ul>
          </div>

          <div class="live-chat-container">
            <div class="chat-content">
              <div class="chat">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-11.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                    <p><?php echo $lorem1; ?></p>
                    <span class="time d-block">8:30 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-2.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                  <p><?php echo $lorem2; ?></p>
                    <span class="time d-block">8:29 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-3.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                  <p><?php echo $lorem3; ?></p>
                    <span class="time d-block">8:28 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-4.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                  <p><?php echo $lorem4; ?></p>
                    <span class="time d-block">8:27 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-5.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                  <p><?php echo $lorem1; ?></p>
                    <span class="time d-block">8:25 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-6.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                  <p><?php echo $lorem4; ?></p>
                    <span class="time d-block">8:20 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-7.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                  <p><?php echo $lorem3; ?></p>
                    <span class="time d-block">8:17 AM</span>
                  </div>
                </div>
              </div>

              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a routerLink="/profile" class="d-inline-block">
                    <img
                      src="assets/images/user/user-8.jpg"
                      width="50"
                      height="50"
                      class="rounded-circle"
                      alt="image"
                    />
                  </a>
                </div>

                <div class="chat-body">
                  <div class="chat-message">
                    <p>
                    <p><?php echo $lorem1; ?></p>
                    </p>
                    <span class="time d-block">8:15 AM</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="chat-list-footer">
              <form class="d-flex align-items-center">
                <div class="btn-box d-flex align-items-center me-3">
                  <button
                    class="file-attachment-btn d-inline-block me-2"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Cargar Archivo"
                    type="button"
                  >
                    <i class="ri-attachment-2"></i>
                  </button>

                  <button
                    class="emoji-btn d-inline-block"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Icono"
                    type="button"
                  >
                    <i class="ri-user-smile-line"></i>
                  </button>
                </div>

                <input
                  type="text"
                  class="form-control"
                  placeholder="Esvcribe tu mensaje..."
                />

                <button type="submit" class="send-btn d-inline-block">
                  Enviar
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content Page Box Area -->
<?php
  include_once("layout/footer.php");
?>
