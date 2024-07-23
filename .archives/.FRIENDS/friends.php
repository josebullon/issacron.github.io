<?php
  // var:
  $nav04 = 'active';
  // header.php
  include_once("layout/header.php");
?>
      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="page-banner-box bg-7">
          <h3>Amigos</h3>
        </div>

        <div
          class="friends-inner-box-style d-flex justify-content-between align-items-center margin-top-25"
        >
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="friend-requests-tab"
                data-bs-toggle="tab"
                href="#friend-requests"
                role="tab"
                aria-controls="friend-requests"
                >Solicitudes de amistad</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="people-you-know-tab"
                data-bs-toggle="tab"
                href="#people-you-know"
                role="tab"
                aria-controls="people-you-know"
                >Personas que conoces</a
              >
            </li>
          </ul>

          <div class="friends-search-box">
            <form>
              <input
                type="text"
                class="input-search"
                placeholder="Buscar Amigos..."
              />
              <button type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>

        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="friend-requests"
            role="tabpanel"
          >
          <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="all-friends"
                role="tabpanel"
              >
                <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-1.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-1.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Juaquin Rodriguez</a></h3>
                            <span>30 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">862</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">100</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">600</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-2.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-2.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Nineva León</a></h3>
                            <span>60 Amigos en Común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">170</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">90</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">420</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-3.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-3.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Eduardo Blanco</a></h3>
                            <span>74 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">452</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">120</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">1000</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-4.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-4.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Mariana Ruiz</a></h3>
                            <span>40 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">65</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">70</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">705</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-5.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-5.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Ana Andrade</a></h3>
                            <span>30 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">800</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">900</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-6.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-6.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alberto Romero</a></h3>
                            <span>70 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">156</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">130</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">850</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-7.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-7.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Rita Moreno</a></h3>
                            <span>90 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">46</span>
                              <span class="item-text">Me Gusta </span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">200</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">450</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-8.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-8.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Gustavo Acosta</a></h3>
                            <span>200 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">700</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">740</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-9.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-9.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Antonieta Parra</a></h3>
                            <span>02 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">180</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-10.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-10.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Luisa Martinez</a></h3>
                            <span>45 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">20</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">150</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">850</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-11.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-11.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Maira Sanz</a></h3>
                            <span>70 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">100</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">350</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">900</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigos</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-12.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-12.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Octavia Contreras</a></h3>
                            <span>63 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">783</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">800</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">700</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-13.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-13.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Sofia Quintana</a></h3>
                            <span>90 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">500</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">600</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-14.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-14.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alvaro Suarez</a></h3>
                            <span>85 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">500</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">356</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">900</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-15.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-15.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Guillermo Sosa</a></h3>
                            <span>03 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">500</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-16.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/friends/friends-16.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Fernanda Rivera</a></h3>
                            <span>96 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">754</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">589</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">822</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigos</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="load-more-posts-btn">
                  <a href="#"><i class="flaticon-loading"></i> Ver más</a>
                </div>
              </div>

              <div class="tab-pane fade" id="recently-added" role="tabpanel">
                <div class="row justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-1.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-10.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Dayana Mendoza</a></h3>
                            <span>80 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">120</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">100</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">200</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-2.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-11.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Andrea Duarte</a></h3>
                            <span>45 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">745</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">78</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">562</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-3.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-12.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Andres Tovar</a></h3>
                            <span>52 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">200</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">600</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-4.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-13.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Maria Paredes</a></h3>
                            <span>20 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">300</span>
                              <span class="item-text">Me gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">110</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">895</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-5.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-14.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Salome</a></h3>
                            <span>80 A migos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">400</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">745</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">952</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-6.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-15.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Gustavo Hidalgo</a></h3>
                            <span>20 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">75</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">456</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">720</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-7.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-16.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Vernica Ferreira</a></h3>
                            <span>12 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">125</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">356</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">785</span>
                              <span class="item-text">Seguidores</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-8.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-17.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Brenda Andrade</a></h3>
                            <span>78 Amigos en común</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">45</span>
                              <span class="item-text">Me Gusta</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">111</span>
                              <span class="item-text">Seguidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">156</span>
                              <span class="item-text">Seguidore</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar Amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-9.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-18.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Mark S. Perry</a></h3>
                            <span>33 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">583</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">441</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">165</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-10.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-19.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Josefina Wells</a></h3>
                            <span>45 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">683</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">841</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">965</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-11.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-20.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Richard Smith</a></h3>
                            <span>65 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">483</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">241</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">865</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-12.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-21.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Alma Smith</a></h3>
                            <span>61 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">783</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">541</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">565</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-13.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-22.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Bessie Smith</a></h3>
                            <span>24 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">183</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">441</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">765</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-14.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-23.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Anthony Hogg</a></h3>
                            <span>75 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">683</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">841</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">365</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-15.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-24.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Shel Williams</a></h3>
                            <span>25 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">583</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">941</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">265</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Agregar amigo</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Enviar Mensaje</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="single-friends-card">
                      <div class="friends-image">
                        <a href="#">
                          <img
                            src="assets/images/friends/friends-bg-16.jpg"
                            alt="image"
                          />
                        </a>
                        <div class="icon">
                          <a href="#"><i class="flaticon-user"></i></a>
                        </div>
                      </div>
                      <div class="friends-content">
                        <div
                          class="friends-info d-flex justify-content-between align-items-center"
                        >
                          <a href="#">
                            <img
                              src="assets/images/user/user-25.jpg"
                              alt="image"
                            />
                          </a>
                          <div class="text ms-3">
                            <h3><a href="#">Carol Miller</a></h3>
                            <span>20 Mutual Friends</span>
                          </div>
                        </div>
                        <ul class="statistics">
                          <li>
                            <a href="#">
                              <span class="item-number">683</span>
                              <span class="item-text">Likes</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">341</span>
                              <span class="item-text">Following</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="item-number">565</span>
                              <span class="item-text">Followers</span>
                            </a>
                          </li>
                        </ul>
                        <div
                          class="button-group d-flex justify-content-between align-items-center"
                        >
                          <div class="add-friend-btn">
                            <button type="submit">Add Friend</button>
                          </div>
                          <div class="send-message-btn">
                            <button type="submit">Send Message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="load-more-posts-btn">
                  <a href="#"><i class="flaticon-loading"></i> Load More</a>
                </div>
              </div>
            </div>

            <div class="load-more-posts-btn">
              <a href="#"><i class="flaticon-loading"></i> Load More</a>
            </div>
          </div>

          <div class="tab-pane fade" id="people-you-know" role="tabpanel">
            <div class="row justify-content-center">
              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-1.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-10.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Dayana Mendoza</a></h3>
                        <span>25 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">600</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">95</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">200</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mnesaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-2.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-11.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Octavio Barrios</a></h3>
                        <span>95 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">50</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">90</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">356</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-3.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-12.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Marlene Sanchez</a></h3>
                        <span>30 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">300</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">156</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">604</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-4.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-13.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Nelson Zambrano</a></h3>
                        <span>11 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">335</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">178</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">400</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-5.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-14.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Fernanda Ortega</a></h3>
                        <span>152 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">569</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">358</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">956</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-6.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-15.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Alberto Pinto</a></h3>
                        <span>25 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">325</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">845</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">700</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-7.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-16.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Carolina Rojas</a></h3>
                        <span>80 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">745</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">456</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">965</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-8.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-17.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Hector Andrade</a></h3>
                        <span>15 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">258</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">634</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">265</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-9.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-18.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Geronimo Parra</a></h3>
                        <span>07 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">953</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">845</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">165</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-10.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-19.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Marlene Rivas</a></h3>
                        <span>10 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">899</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">632</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">965</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-11.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-20.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Ernesto Rondon</a></h3>
                        <span>45 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">777</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">965</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">865</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-12.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-21.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Evelio Alvarez</a></h3>
                        <span>12 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">980</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">852</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">956</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-13.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-22.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Valentina Palma</a></h3>
                        <span>30 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">359</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">741</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">745</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-14.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-23.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Manuel Quintana</a></h3>
                        <span>09 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">887</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">423</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">456</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-15.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-24.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Daniela Ortiz</a></h3>
                        <span>20 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">998</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">900</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">300</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="single-friends-card">
                  <div class="friends-image">
                    <a href="#">
                      <img
                        src="assets/images/friends/friends-bg-16.jpg"
                        alt="image"
                      />
                    </a>
                    <div class="icon">
                      <a href="#"><i class="flaticon-user"></i></a>
                    </div>
                  </div>
                  <div class="friends-content">
                    <div
                      class="friends-info d-flex justify-content-between align-items-center"
                    >
                      <a href="#">
                        <img src="assets/images/user/user-25.jpg" alt="image" />
                      </a>
                      <div class="text ms-3">
                        <h3><a href="#">Octavio Mayora</a></h3>
                        <span>35 Amigos en común</span>
                      </div>
                    </div>
                    <ul class="statistics">
                      <li>
                        <a href="#">
                          <span class="item-number">769</span>
                          <span class="item-text">Me Gusta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">500</span>
                          <span class="item-text">Seguidos</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="item-number">786</span>
                          <span class="item-text">Seguidores</span>
                        </a>
                      </li>
                    </ul>
                    <div
                      class="button-group d-flex justify-content-between align-items-center"
                    >
                      <div class="add-friend-btn">
                        <button type="submit">Agregar Amigo</button>
                      </div>
                      <div class="send-message-btn">
                        <button type="submit">Enviar Mensaje</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="load-more-posts-btn">
              <a href="#"><i class="flaticon-loading"></i> Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content Page Box Area -->
<?php
  include_once("layout/footer.php");
?>
