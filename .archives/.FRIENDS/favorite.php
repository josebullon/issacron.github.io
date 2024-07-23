<?php
  // var:
  $nav06 = 'active';
  // header.php
  include_once("layout/header.php");
?>
      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="page-banner-box bg-7">
          <h3>Favoritos</h3>
        </div>

        <div
          class="favourite-inner-box-style d-flex justify-content-between align-items-center"
        >
          <div class="title">
            <h3>Foro</h3>
          </div>

          <div class="favourite-search-box">
            <form>
              <input
                type="text"
                class="input-search"
                placeholder="Buscar..."
              />
              <button type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="favourite-information-box">
              <div
                class="profile-box d-flex justify-content-between align-items-center"
              >
                <a href="#"
                  ><img src="assets/images/user/user-1.jpg" alt="image"
                /></a>
                <div class="text ms-2">
                  <h3><a href="#">Rafael Bullón</a></h3>
                  <span>Caracas, Venezuela</span>
                </div>
              </div>
              <div class="content-info">
                <h3>Página Informativa</h3>
                <p>Creada en <?php echo $fblog; ?></p>
              </div>
              <div class="content-info">
                <h3>Sobre mi</h3>
                <p>
                <?php echo $lorem2; ?>
                </p>
              </div>
              <div class="content-info">
                <ul class="like-list">
                  <li>Personas que les gusta<span> 125478</span></li>
                  <li>Personas que te siguen<span> 365412</span></li>
                  <li><a href="#">www.Friendzone.com</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-12">
            <div class="favourite-table table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th>Tema</th> 
                  <th>Votos</th> 
                  <th>Publicaciones</th> 
                  <th>Seguidor</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>
                      <h5>Deporte</h5>
                      <p><?php echo $lorem4; ?></p>
                      <span><?php echo $lorem4; ?></span>
                    </td>
                    <td>110</td>
                    <td>40</td>
                    <td class="info">
                      <a href="#">
                        <img
                          src="assets/images/user/user-56.jpg"
                          class="rounded-circle"
                          alt="image"
                        />
                      </a>
                      <div class="text">
                        <h6><a href="#">Veronica Figueroa</a></h6>
                        <span>3 Dias</span>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h5>Juegos</h5>
                      <p><?php echo $lorem4; ?></p>
                      <span><?php echo $lorem4; ?></span>
                    </td>
                    <td>100</td>
                    <td>35</td>
                    <td class="info">
                      <a href="#">
                        <img
                          src="assets/images/user/user-57.jpg"
                          class="rounded-circle"
                          alt="image"
                        />
                      </a>
                      <div class="text">
                        <h6><a href="#">Daniel Gutierrez</a></h6>
                        <span>2 Dias</span>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h5>Idiomas</h5>
                      <p><?php echo $lorem4; ?></p>
                      <span><?php echo $lorem4; ?></span>
                    </td>
                    <td>90</td>
                    <td>25</td>
                    <td class="info">
                      <a href="#">
                        <img
                          src="assets/images/user/user-10.jpg"
                          class="rounded-circle"
                          alt="image"
                        />
                      </a>
                      <div class="text">
                        <h6><a href="#">Josefina Hidalgo</a></h6>
                        <span>3 Dias</span>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h5>Arte</h5>
                      <p><?php echo $lorem4; ?></p>
                      <span><?php echo $lorem4; ?></span>
                    </td>
                    <td>80</td>
                    <td>15</td>
                    <td class="info">
                      <a href="#">
                        <img
                          src="assets/images/user/user-58.jpg"
                          class="rounded-circle"
                          alt="image"
                        />
                      </a>
                      <div class="text">
                        <h6><a href="#">Guillermo Rojas</a></h6>
                        <span>5 Dias</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content Page Box Area -->
<?php
  include_once("layout/footer.php");
?>
