<?php
  // var:
  $nav03 = 'active';
  // header.php
  include_once("layout/header.php");
?>
      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="all-messages-body">
          <div
            class="all-messages-header d-flex justify-content-between align-items-center"
          >
            <h3>Mensajes</h3>

            <div class="dropdown">
              <button
                class="dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="flaticon-menu"></i>
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><i class="flaticon-edit"></i> Editar Mensaje</a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><i class="flaticon-private"></i> Ocultar Mensaje</a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><i class="flaticon-trash"></i> Borrar Mensaje</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <div class="messages-profile-box">
            <a href="#"
              ><img
                src="assets/images/user/user-11.jpg"
                class="rounded-circle"
                alt="image"
            /></a>
            <h3><a href="#">Antonio Contreras</a></h3>
          </div>

          <div class="messages-chat-container">
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
                    <p><?php echo $lorem4; ?></p>
                    <span class="time d-block">6:40 AM</span>
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
                    <p><?php echo $lorem1; ?></p>
                    <span class="time d-block">6:41 AM</span>
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
                  <p><?php echo $lorem2; ?></p>
                    <span class="time d-block">6:42 AM</span>
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
                  <p><?php echo $lorem3; ?></p>
                    <span class="time d-block">6:44 AM</span>
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
                    <p>
                    <p><?php echo $lorem2; ?></p>
                    </p>
                    <span class="time d-block">6:46 AM</span>
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
                    <p><p><?php echo $lorem1; ?></p></p>
                    <span class="time d-block">6:47 AM</span>
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
                  <p><?php echo $lorem4; ?></p>
                    <span class="time d-block">6:48 AM</span>
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
                    <p><?php echo $lorem3; ?></p>
                    </p>
                    <span class="time d-block">6:50 AM</span>
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
                    title="File Attachment"
                    type="button"
                  >
                    <i class="ri-attachment-2"></i>
                  </button>

                  <button
                    class="emoji-btn d-inline-block"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Emoji"
                    type="button"
                  >
                    <i class="ri-user-smile-line"></i>
                  </button>
                </div>

                <input
                  type="text"
                  class="form-control"
                  placeholder="Escribe tu mensaje..."
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
