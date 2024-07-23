<!DOCTYPE html>
<?php
  include_once("layout/header.php");
?>
    <!--/.main-header-->
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
    <!--/.popup-search-box-->
    <div id="searchbox-overlay"></div>
    <!--/.searchbox-overlay-->
    <div class="featured-post-grid">
      <div class="container">
        <div class="post-layout-2">
          <article class="post-layout-item img-hover-move">
            <a href="single.php" class="post-thumb media">
              <img src="assets/img/post-1.jpg" alt="thumb" />
            </a>
            <div class="post-content">
              <ul class="post-meta">
                <li class="reading-time">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                  >
                    <path
                      d="m618.924-298.924 42.152-42.152-151.077-151.087V-680h-59.998v212.154l168.923 168.922ZM480.067-100.001q-78.836 0-148.204-29.92-69.369-29.92-120.682-81.21-51.314-51.291-81.247-120.629-29.933-69.337-29.933-148.173t29.92-148.204q29.92-69.369 81.21-120.682 51.291-51.314 120.629-81.247 69.337-29.933 148.173-29.933t148.204 29.92q69.369 29.92 120.682 81.21 51.314 51.291 81.247 120.629 29.933 69.337 29.933 148.173t-29.92 148.204q-29.92 69.369-81.21 120.682-51.291 51.314-120.629 81.247-69.337 29.933-148.173 29.933ZM480-480Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"
                    ></path>
                  </svg>
                  <span class="post-meta-text">20 Minutos</span>
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                  >
                    <path
                      d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                    ></path>
                  </svg>
                  <a href="category.php" class="post-meta-text">Deporte</a>
                </li>
              </ul>
              <h3>
                <a href="single.php" class="text-hover"
                  ><?php echo $lorem4; ?></a
                >
              </h3>
              <ul class="author-info">
                <li>
                  <a href="#">
                    <img src="assets/img/author-1.jpg" alt="thumb" />
                  </a>
                </li>
                <li>
                  <a href="#">Nombre del Autor</a>
                  <a href="#"><?php echo $fblog5; ?></a>
                </li>
              </ul>
            </div>
          </article>
          <article class="post-layout-item img-hover-move">
            <a href="single.php" class="post-thumb media">
              <img src="assets/img/post-2.jpg" alt="thumb" />
            </a>
            <div class="post-content">
              <ul class="post-meta">
                <li class="reading-time">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                  >
                    <path
                      d="m618.924-298.924 42.152-42.152-151.077-151.087V-680h-59.998v212.154l168.923 168.922ZM480.067-100.001q-78.836 0-148.204-29.92-69.369-29.92-120.682-81.21-51.314-51.291-81.247-120.629-29.933-69.337-29.933-148.173t29.92-148.204q29.92-69.369 81.21-120.682 51.291-51.314 120.629-81.247 69.337-29.933 148.173-29.933t148.204 29.92q69.369 29.92 120.682 81.21 51.314 51.291 81.247 120.629 29.933 69.337 29.933 148.173t-29.92 148.204q-29.92 69.369-81.21 120.682-51.291 51.314-120.629 81.247-69.337 29.933-148.173 29.933ZM480-480Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"
                    ></path>
                  </svg>
                  <span class="post-meta-text">20 Minutos</span>
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                  >
                    <path
                      d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                    ></path>
                  </svg>
                  <a href="category.php" class="post-meta-text">Moda</a>
                </li>
              </ul>
              <h3>
                <a href="single.php" class="text-hover"
                  ><?php echo $lorem4; ?></a
                >
              </h3>
              <ul class="author-info">
                <li>
                  <a href="#">
                    <img src="assets/img/author-2.jpg" alt="thumb" />
                  </a>
                </li>
                <li>
                  <a href="#">Nombre del Autor</a>
                  <a href="#"><?php echo $fblog5; ?></a>
                </li>
              </ul>
            </div>
          </article>
          <article class="post-layout-item img-hover-move">
            <a href="single.php" class="post-thumb media">
              <img src="assets/img/post-7.jpg" alt="thumb" />
            </a>
            <div class="post-content">
              <ul class="post-meta">
                <li class="reading-time">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                  >
                    <path
                      d="m618.924-298.924 42.152-42.152-151.077-151.087V-680h-59.998v212.154l168.923 168.922ZM480.067-100.001q-78.836 0-148.204-29.92-69.369-29.92-120.682-81.21-51.314-51.291-81.247-120.629-29.933-69.337-29.933-148.173t29.92-148.204q29.92-69.369 81.21-120.682 51.291-51.314 120.629-81.247 69.337-29.933 148.173-29.933t148.204 29.92q69.369 29.92 120.682 81.21 51.314 51.291 81.247 120.629 29.933 69.337 29.933 148.173t-29.92 148.204q-29.92 69.369-81.21 120.682-51.291 51.314-120.629 81.247-69.337 29.933-148.173 29.933ZM480-480Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"
                    ></path>
                  </svg>
                  <span class="post-meta-text">30 Minutos</span>
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                  >
                    <path
                      d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                    ></path>
                  </svg>
                  <a href="category.php" class="post-meta-text">Viajes</a>
                </li>
              </ul>
              <h3>
                <a href="single.php" class="text-hover"
                  ><?php echo $lorem4; ?></a
                >
              </h3>
              <p>
              <?php echo $lorem1; ?>
              </p>
              <ul class="author-info">
                <li>
                  <a href="#">
                    <img src="assets/img/author-3.jpg" alt="thumb" />
                  </a>
                </li>
                <li>
                  <a href="#">Nombre del Autor</a>
                  <a href="#"><?php echo $fblog5; ?></a>
                </li>
                <li class="share-icon">
                  <div class="share">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor"
                      height="24"
                      viewBox="0 -960 960 960"
                      width="24"
                    >
                      <path
                        d="M720.045-90q-45.814 0-77.929-32.084-32.115-32.083-32.115-77.916 0-7.49 1.192-15.514 1.192-8.025 3.577-14.794L318.923-403.539q-15.846 15.769-36.077 24.654-20.231 8.884-42.846 8.884-45.833 0-77.916-32.07t-32.083-77.884q0-45.814 32.083-77.929T240-589.999q22.615 0 42.846 8.884 20.231 8.885 36.077 24.654L614.77-729.692q-2.385-6.769-3.577-14.794-1.192-8.024-1.192-15.514 0-45.833 32.07-77.916t77.884-32.083q45.814 0 77.929 32.07t32.115 77.884q0 45.814-32.083 77.929T720-650.001q-22.615 0-42.846-8.884-20.231-8.885-36.077-24.654L345.23-510.308q2.385 6.769 3.577 14.767 1.192 7.997 1.192 15.461 0 7.465-1.192 15.542t-3.577 14.846l295.847 173.231q15.846-15.769 36.077-24.654 20.231-8.884 42.846-8.884 45.833 0 77.916 32.07t32.083 77.884q0 45.814-32.07 77.929t-77.884 32.115ZM720-710q20.846 0 35.424-14.577 14.577-14.578 14.577-35.424t-14.577-35.424Q740.846-810.001 720-810.001t-35.424 14.577Q669.999-780.846 669.999-760t14.577 35.424q14.578 14.577 35.424 14.577Zm-480 280q20.846 0 35.424-14.577 14.577-14.578 14.577-35.424t-14.577-35.424Q260.846-530.001 240-530.001t-35.424 14.577Q189.999-500.846 189.999-480t14.577 35.424q14.578 14.577 35.424 14.577Zm480 280q20.846 0 35.424-14.577 14.577-14.578 14.577-35.424t-14.577-35.424Q740.846-250.001 720-250.001t-35.424 14.577Q669.999-220.846 669.999-200t14.577 35.424q14.578 14.577 35.424 14.577ZM720-760ZM240-480Zm480 280Z"
                      ></path>
                    </svg>
                    <ul class="social-share">
                      <li>
                        <a href="#">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"
                            fill="currentColor"
                          >
                            <path
                              d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
                            ></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                            fill="currentColor"
                          >
                            <path
                              d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                            ></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 496 512"
                            fill="currentColor"
                          >
                            <path
                              d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3 .8-3.4 5-20.3 6.9-28.1 .6-2.5 .3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"
                            ></path>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                            fill="currentColor"
                          >
                            <path
                              d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
                            ></path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                    <!--/.social-share-->
                  </div>
                </li>
              </ul>
            </div>
          </article>
          <div class="post-layout-item">
            <div class="swiper vartical-post-carousel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article class="horizontal-post-card img-hover-move">
                    <a href="single.php" class="post-thumb media">
                      <img src="assets/img/post-4.jpg" alt="thumb" />
                    </a>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            height="24"
                            viewBox="0 -960 960 960"
                            width="24"
                          >
                            <path
                              d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                            ></path>
                          </svg>
                          <a href="category.php" class="post-meta-text"
                            >Fotos</a
                          >
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="author-info">
                        <li>
                          <a href="#">Nombre del Autor</a>
                          <a href="#"><?php echo $fblog; ?></a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="horizontal-post-card img-hover-move">
                    <a href="single.php" class="post-thumb media">
                      <img src="assets/img/post-5.jpg" alt="thumb" />
                    </a>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            height="24"
                            viewBox="0 -960 960 960"
                            width="24"
                          >
                            <path
                              d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                            ></path>
                          </svg>
                          <a href="category.php" class="post-meta-text"
                            >Salud</a
                          >
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="author-info">
                        <li>
                          <a href="#">Nombre del Autor</a>
                          <a href="#"><?php echo $fblog1; ?></a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="horizontal-post-card img-hover-move">
                    <a href="single.php" class="post-thumb media">
                      <img src="assets/img/post-6.jpg" alt="thumb" />
                    </a>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            height="24"
                            viewBox="0 -960 960 960"
                            width="24"
                          >
                            <path
                              d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                            ></path>
                          </svg>
                          <a href="category.php" class="post-meta-text"
                            >Videos</a
                          >
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="author-info">
                        <li>
                          <a href="#">Nombre del Autor</a>
                          <a href="#"><?php echo $fblog2; ?></a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="horizontal-post-card img-hover-move">
                    <a href="single.php" class="post-thumb media">
                      <img src="assets/img/post-8.jpg" alt="thumb" />
                    </a>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            height="24"
                            viewBox="0 -960 960 960"
                            width="24"
                          >
                            <path
                              d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                            ></path>
                          </svg>
                          <a href="category.php" class="post-meta-text"
                            >Travel</a
                          >
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="author-info">
                        <li>
                          <a href="#">Nombre del Autor</a>
                          <a href="#"><?php echo $fblog3; ?></a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="horizontal-post-card img-hover-move">
                    <a href="single.php" class="post-thumb media">
                      <img src="assets/img/post-9.jpg" alt="thumb" />
                    </a>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            height="24"
                            viewBox="0 -960 960 960"
                            width="24"
                          >
                            <path
                              d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                            ></path>
                          </svg>
                          <a href="category.php" class="post-meta-text"
                            >Deporte</a
                          >
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="author-info">
                        <li>
                          <a href="#">Nombre del Autor</a>
                          <a href="#"><?php echo $fblog4; ?></a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <article class="horizontal-post-card img-hover-move">
                    <a href="single.html" class="post-thumb media">
                      <img src="assets/img/post-10.jpg" alt="thumb" />
                    </a>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            height="24"
                            viewBox="0 -960 960 960"
                            width="24"
                          >
                            <path
                              d="M488.768-117.847Q470.922-100.001 446-100.001t-42.768-17.846l-286-286q-17.231-17.231-17.038-42.653.192-25.422 17.807-43.037l352-352.616q8.317-8.179 19.658-13.012 11.341-4.834 23.726-4.834h286q24.537 0 42.268 17.731 17.73 17.73 17.73 42.268v286q0 12.826-4.961 24.143-4.962 11.318-13.654 20.01l-352 352Zm210.571-532.154q20.815 0 35.43-14.57 14.615-14.57 14.615-35.384t-14.57-35.429q-14.57-14.615-35.384-14.615t-35.429 14.57q-14.616 14.57-14.616 35.384t14.57 35.429q14.57 14.615 35.384 14.615ZM446.172-160l353.213-354v-286H513.212L160-446l286.172 286Zm353.213-640Z"
                            ></path>
                          </svg>
                          <a href="category.php" class="post-meta-text"
                            >Moda</a
                          >
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="author-info">
                        <li>
                          <a href="#">Nombre del Autor</a>
                          <a href="#"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!--/.vartical-post-carousel-->
        </div>
      </div>
    </div>
    <!--/.featured-post-grid-->
    <section class="main-post-area padding">
      <div class="container">
        <div class="row gy-5 gy-lg-0 main-area">
          <div class="col-lg-8">
            <div class="main-post-wrap">
              <div class="row gy-4">
                <article class="col-lg-12 col-md-6">
                  <div
                    class="post-card horizontal-card format-video img-hover-move"
                  >
                    <div class="post-thumb media">
                      <a href="single.php">
                        <video
                          autoplay="autoplay"
                          loop="loop"
                          muted="muted"
                          playsinline=""
                        >
                          <source src="assets/video/travel.mp4" />
                        </video>
                      </a>
                      <a
                        class="video-popup venobox"
                        data-vbtype="video"
                        href="https://www.youtube.com/watch?v=ZLaG1migE00"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="24"
                          viewBox="0 -960 960 960"
                          width="24"
                          fill="currentColor"
                        >
                          <path
                            d="M181.925-180.001q-30.308 0-51.308-21-20.999-21-20.999-51.308v-455.382q0-30.308 20.999-51.308 21-21 51.308-21h455.382q30.308 0 51.308 21t21 51.308v183.077l140.767-140.768v370.764L709.615-435.386v183.077q0 30.308-21 51.308t-51.308 21H181.925Zm0-59.999h455.382q5.386 0 8.847-3.462 3.462-3.462 3.462-8.847v-455.382q0-5.385-3.462-8.847-3.461-3.462-8.847-3.462H181.925q-5.385 0-8.847 3.462-3.462 3.462-3.462 8.847v455.382q0 5.385 3.462 8.847Q176.54-240 181.925-240Zm-12.309 0v-480 480Z"
                          />
                        </svg>
                      </a>
                    </div>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <a href="category.php">Viajes</a>
                        </li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog; ?></a>
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <ul class="post-card-footer">
                        <li>
                          <a href="single.php" class="read-more"
                            >Seguir Leyendo</a
                          >
                        </li>
                        <li>
                          <a href="#" class="comment">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              height="24"
                              viewBox="0 -960 960 960"
                              width="24"
                              fill="currentColor"
                            >
                              <path
                                d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                              />
                            </svg>
                            <span>20</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
                <article class="col-lg-12 col-md-6">
                  <div class="post-card horizontal-card img-hover-move">
                    <div class="post-thumb media">
                      <a href="single.php">
                        <img src="assets/img/post-9.jpg" alt="thumb" />
                      </a>
                    </div>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <a href="category.php">Salud</a>
                        </li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog1; ?></a>
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <ul class="post-card-footer">
                        <li>
                          <a href="single.php" class="read-more"
                            >Seguir Leyendo</a
                          >
                        </li>
                        <li>
                          <a href="#" class="comment">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              height="24"
                              viewBox="0 -960 960 960"
                              width="24"
                              fill="currentColor"
                            >
                              <path
                                d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                              />
                            </svg>
                            <span>35</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
                <article class="col-lg-12 col-md-6">
                  <div class="post-card horizontal-card img-hover-move">
                    <div class="post-slider-wrap">
                      <div
                        class="swiper gallary-post-slider carousel-pagination"
                      >
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="assets/img/post-3.jpg" alt="img" />
                          </div>
                          <div class="swiper-slide">
                            <img src="assets/img/post-4.jpg" alt="img" />
                          </div>
                          <div class="swiper-slide">
                            <img src="assets/img/post-8.jpg" alt="img" />
                          </div>
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                    </div>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <a href="category.php">Deporte</a>
                        </li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog3; ?></a>
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <ul class="post-card-footer">
                        <li>
                          <a href="single.php" class="read-more"
                            >Seguir Leyendo</a
                          >
                        </li>
                        <li>
                          <a href="#" class="comment">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              height="24"
                              viewBox="0 -960 960 960"
                              width="24"
                              fill="currentColor"
                            >
                              <path
                                d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                              />
                            </svg>
                            <span>50</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
                <article class="col-lg-12 col-md-6">
                  <div class="post-card horizontal-card img-hover-move">
                    <div class="post-thumb media">
                      <a href="single.php">
                        <img src="assets/img/post-12.jpg" alt="thumb" />
                      </a>
                    </div>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <a href="category.php">Salud</a>
                        </li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog4; ?></a>
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <ul class="post-card-footer">
                        <li>
                          <a href="single.php" class="read-more"
                            >Seguir Leyendo</a
                          >
                        </li>
                        <li>
                          <a href="#" class="comment">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              height="24"
                              viewBox="0 -960 960 960"
                              width="24"
                              fill="currentColor"
                            >
                              <path
                                d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                              />
                            </svg>
                            <span>40</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
                <article class="col-lg-12 col-md-6">
                  <div class="post-card horizontal-card img-hover-move">
                    <div class="post-thumb media">
                      <a href="single.php">
                        <img src="assets/img/post-13.jpg" alt="thumb" />
                      </a>
                    </div>
                    <div class="post-content">
                      <ul class="post-meta">
                        <li>
                          <a href="category.php">Moda</a>
                        </li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?>t</a
                        >
                      </h3>
                      <p>
                      <?php echo $lorem1; ?>
                      </p>
                      <ul class="post-card-footer">
                        <li>
                          <a href="single.php" class="read-more"
                            >Seguir Leyendo</a
                          >
                        </li>
                        <li>
                          <a href="#" class="comment">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              height="24"
                              viewBox="0 -960 960 960"
                              width="24"
                              fill="currentColor"
                            >
                              <path
                                d="M250.001-410.001h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm0-120h459.998v-59.998H250.001v59.998Zm609.998 531.537L718.461-260.001H172.309q-30.308 0-51.308-21t-21-51.308v-455.382q0-30.308 21-51.308t51.308-21h615.382q30.308 0 51.308 21t21 51.308v669.227ZM172.309-320h571.69L800-264.615v-523.076q0-4.616-3.846-8.463-3.847-3.846-8.463-3.846H172.309q-4.616 0-8.463 3.846-3.846 3.847-3.846 8.463v455.382q0 4.616 3.846 8.463 3.847 3.846 8.463 3.846ZM160-320V-800v480Z"
                              />
                            </svg>
                            <span>20</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="subscribe-card">
                <div class="subscribe-heading">
                  <img
                    class="bell-animation"
                    src="assets/img/bell.png"
                    alt="bell"
                  />
                  <h3>Subscribete en nuestro Blog</h3>
                </div>
                <form
                  action="https://html.dynamiclayers.net/dl/vixto/php/mailchimp-subscribe.php"
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
              </div>
              <!--/.subscribe-card-->
              <div class="row gy-4">
                <article class="col-md-4 position-relative medium-card">
                  <div class="post-card image-post img-hover-move">
                    <div class="post-thumb media">
                      <a href="single.php">
                        <img src="assets/img/post-14.jpg" alt="thumb" />
                      </a>
                      <div class="image-post-content">
                        <ul class="post-meta">
                          <li>
                            <a href="category.php">Moda</a>
                          </li>
                          <li class="sep"></li>
                          <li>
                            <a href="category.php" class="date"><?php echo $fblog; ?></a>
                          </li>
                        </ul>
                        <h3>
                          <a href="single.php" class="text-hover"
                            ><?php echo $lorem4; ?></a
                          >
                        </h3>
                        <a href="single.html" class="read-more"
                          >Seguir Leyendo</a
                        >
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-md-4 position-relative medium-card">
                  <div class="post-card image-post img-hover-move">
                    <div class="post-thumb media">
                      <a href="single.php">
                        <img src="assets/img/post-15.jpg" alt="thumb" />
                      </a>
                      <div class="image-post-content">
                        <ul class="post-meta">
                          <li>
                            <a href="category.php">Fotos</a>
                          </li>
                          <li class="sep"></li>
                          <li>
                            <a href="category.php" class="date"><?php echo $fblog1; ?></a>
                          </li>
                        </ul>
                        <h3>
                          <a href="single.php" class="text-hover"
                            ><?php echo $lorem4; ?></a
                          >
                        </h3>
                        <a href="single.php" class="read-more"
                          >Seguir Leyendo</a
                        >
                      </div>
                    </div>
                  </div>
                </article>
                <article class="col-md-4 position-relative medium-card">
                  <div class="post-card image-post img-hover-move">
                    <div class="post-thumb media">
                      <a href="single.php">
                        <img src="assets/img/post-16.jpg" alt="thumb" />
                      </a>
                      <div class="image-post-content">
                        <ul class="post-meta">
                          <li>
                            <a href="category.php">Viajes</a>
                          </li>
                          <li class="sep"></li>
                          <li>
                            <a href="category.php" class="date"><?php echo $fblog2; ?></a>
                          </li>
                        </ul>
                        <h3>
                          <a href="single.php" class="text-hover"
                            ><?php echo $lorem4; ?></a
                          >
                        </h3>
                        <a href="single.php" class="read-more"
                          >Seguir Leyendo</a
                        >
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <ul class="pagination-wrap">
                <li>
                  <a href="#" class="active">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      height="24"
                      viewBox="0 -960 960 960"
                      width="24"
                      fill="currentColor"
                    >
                      <path
                        d="m553.846-253.847-42.153-43.384 152.77-152.77H180.001v-59.998h484.462l-152.77-152.77 42.153-43.384L779.999-480 553.846-253.847Z"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar-area">
              <div class="sidebar-widget widget">
                <div class="author-widget">
                  <img
                    class="author-thumb"
                    src="assets/img/author-widget.jpg"
                    alt="author"
                  />
                  <div class="author-content">
                    <h3>
                      <a href="#">Nombre del Autor</a>
                      <span>Escritor</span>
                    </h3>
                    <p>
                    <?php echo $lorem1; ?>
                    </p>
                    <img src="assets/img/signature.png" alt="sign" />
                  </div>
                </div>
              </div>
              <!--Author Widget-->
              <div class="sidebar-widget widget">
                <div class="widget-heading">
                  <h3>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      height="24"
                      viewBox="0 -960 960 960"
                      width="24"
                      fill="currentColor"
                    >
                      <path
                        d="M632.307-140.001q-24.538 0-42.268-17.731-17.73-17.73-17.73-42.268v-167.693q0-24.538 17.73-42.268t42.268-17.73H800q24.538 0 42.268 17.73 17.731 17.73 17.731 42.268V-200q0 24.538-17.731 42.268-17.73 17.731-42.268 17.731H632.307Zm0-59.999H800v-167.693H632.307V-200Zm-532.306-53.847v-59.999h344.615v59.999H100.001Zm532.306-278.462q-24.538 0-42.268-17.73t-17.73-42.268V-760q0-24.538 17.73-42.268 17.73-17.731 42.268-17.731H800q24.538 0 42.268 17.731 17.731 17.73 17.731 42.268v167.693q0 24.538-17.731 42.268-17.73 17.73-42.268 17.73H632.307Zm0-59.998H800V-760H632.307v167.693Zm-532.306-53.847v-59.999h344.615v59.999H100.001Zm616.153 362.308Zm0-392.308Z"
                      />
                    </svg>
                    <span>Categorias</span>
                  </h3>
                  <ul class="widget-category-list">
                    <li class="img-hover-move">
                      <a href="category.php" class="media">
                        <img src="assets/img/post-1.jpg" alt="thumb" />Viajes
                        <span>10</span>
                      </a>
                    </li>
                    <li class="img-hover-move">
                      <a href="category.php" class="media">
                        <img src="assets/img/post-7.jpg" alt="thumb" />Moda
                        <span>15</span>
                      </a>
                    </li>
                    <li class="img-hover-move">
                      <a href="category.php" class="media">
                        <img src="assets/img/post-9.jpg" alt="thumb" />Fotos
                        <span>40</span>
                      </a>
                    </li>
                    <li class="img-hover-move">
                      <a href="category.php" class="media">
                        <img src="assets/img/post-4.jpg" alt="thumb" />Salud
                        <span>30</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--Sidebar Category-->
              <div class="sidebar-widget widget">
                <div class="widget-heading">
                  <h3>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      height="24"
                      viewBox="0 -960 960 960"
                      width="24"
                      fill="currentColor"
                    >
                      <path
                        d="M212.309-140.001q-30.308 0-51.308-21t-21-51.308v-535.382q0-30.308 21-51.308t51.308-21h419.229l188.461 188.461v419.229q0 30.308-21 51.308t-51.308 21H212.309Zm0-59.999h535.382q5.385 0 8.847-3.462 3.462-3.462 3.462-8.847V-600H600v-160H212.309q-5.385 0-8.847 3.462-3.462 3.462-3.462 8.847v535.382q0 5.385 3.462 8.847 3.462 3.462 8.847 3.462Zm77.692-100.001h379.998V-360H290.001v59.999Zm0-299.999H480v-59.999H290.001V-600Zm0 149.999h379.998v-59.998H290.001v59.998ZM200-760v160-160 560V-760Z"
                      /></svg
                    ><span>Publicaciones Populares</span>
                  </h3>
                </div>
                <div class="widget-post-items">
                  <div class="widget-post-item img-hover-move">
                    <div class="widget-post-thumb media">
                      <a href="single.php"
                        ><img src="assets/img/post-1.jpg" alt="thumb"
                      /></a>
                    </div>
                    <div class="widget-post-content">
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="post-meta">
                        <li><a href="category.php">Viajes</a></li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-post-item img-hover-move">
                    <div class="widget-post-thumb media">
                      <a href="single.php"
                        ><img src="assets/img/post-2.jpg" alt="thumb"
                      /></a>
                    </div>
                    <div class="widget-post-content">
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="post-meta">
                        <li><a href="category.php">Modo</a></li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-post-item img-hover-move">
                    <div class="widget-post-thumb media">
                      <a href="single.php"
                        ><img src="assets/img/post-3.jpg" alt="thumb"
                      /></a>
                    </div>
                    <div class="widget-post-content">
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="post-meta">
                        <li><a href="category.php">Deporte</a></li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-post-item img-hover-move">
                    <div class="widget-post-thumb media">
                      <a href="single.php"
                        ><img src="assets/img/post-4.jpg" alt="thumb"
                      /></a>
                    </div>
                    <div class="widget-post-content">
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="post-meta">
                        <li><a href="category.php">Salud</a></li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-post-item img-hover-move">
                    <div class="widget-post-thumb media">
                      <a href="single.php"
                        ><img src="assets/img/post-5.jpg" alt="thumb"
                      /></a>
                    </div>
                    <div class="widget-post-content">
                      <h3>
                        <a href="single.php" class="text-hover"
                          ><?php echo $lorem4; ?></a
                        >
                      </h3>
                      <ul class="post-meta">
                        <li><a href="category.php">Fotos</a></li>
                        <li class="sep"></li>
                        <li>
                          <a href="category.php" class="date"><?php echo $fblog5; ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!--List Posts-->
              <div class="sidebar-widget widget">
                <div class="widget-banner">
                  <a href="#">
                    <img src="assets/img/sidebar-banner.jpg" alt="banner" />
                  </a>
                </div>
              </div>
              <!--Banner Widget-->
            </div>
            <!--/.sidebar-area-->
          </div>
        </div>
      </div>
    </section>
    <!--/.main-post-wrap-->
<?php
  include_once("layout/footer.php");
?>
