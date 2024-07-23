<?php
  include_once 'layout/header.php';
?>

      <!-- Start Content Page Box Area -->
      <div class="content-page-box-area">
        <div class="page-banner-box">
          <h3>Configuración de la Cuenta</h3>
        </div>

        <div class="account-setting-list-tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="profile-information-tab"
                data-bs-toggle="tab"
                href="#profile-information"
                role="tab"
                aria-controls="profile-information"
                >Información del Perfil</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="account-tab"
                data-bs-toggle="tab"
                href="#account"
                role="tab"
                aria-controls="account"
                >Cuenta</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="privacy-tab"
                data-bs-toggle="tab"
                href="#privacy"
                role="tab"
                aria-controls="privacy"
                >Privacidad</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="notification-tab"
                data-bs-toggle="tab"
                href="#notification"
                role="tab"
                aria-controls="notification"
                >Notificación</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="message-tab"
                data-bs-toggle="tab"
                href="#message"
                role="tab"
                aria-controls="message"
                >Mensaje</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="close-account-tab"
                data-bs-toggle="tab"
                href="#close-account"
                role="tab"
                aria-controls="close-account"
                >Cerrar Cuenta</a
              >
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="profile-information"
            role="tabpanel"
          >
            <form class="account-setting-form">
              <h3>Información del perfil</h3>

              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Primer Nombre</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Primer Nombre"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Apellido</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Apellido"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Correo</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Correo"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Respaldar Correo</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Respaldar Correo"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Fecha de Nacimiento</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Fecha de Nacimiento"
                      id="datepicker"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>N° Telefono:</label>
                    <input
                      type="number"
                      class="form-control"
                      placeholder="N° Telefono"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Profesión</label>
                    <select class="form-select">
                      <option selected="1">Profesión</option>
                      <option value="2">Analista de Sistema</option>
                      <option value="3">Ingeniero de Software</option>
                      <option value="4">Ingeniero en  Redes</option>
                      <option value="5">Desarrollador Web</option>
                      <option value="6">Analista de Negocios</option>
                      <option value="7">Seguridad Informática</option>
                      <option value="8">Cientifico de Datos</option>
                      <option value="9">Administrador de Base de Datos</option>
                      <option value="10">Diseñador Gráfico</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Genero</label>
                    <select class="form-select">
                      <option selected="1">Genero</option>
                      <option value="2">Masculino</option>
                      <option value="3">Femenino</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Estado Civil</label>
                    <select class="form-select">
                      <option selected="1">Estado Civil</option>
                      <option value="2">Soltero</option>
                      <option value="3">Casado</option>
                      <option value="4">Divorsiado</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Grupo Sanguineo</label>
                    <select class="form-select">
                      <option selected="1">Grupo Sanguineo</option>
                      <option value="2">A+</option>
                      <option value="3">A-</option>
                      <option value="4">B+</option>
                      <option value="5">B-</option>
                      <option value="6">O+</option>
                      <option value="7">O-</option>
                      <option value="8">AB+</option>
                      <option value="9">AB-</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Sitio Web</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Sitio Web"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Idiomas</label>
                    <select class="form-select">
                      <option selected="1">Idiomas</option>
                      <option value="2">Ingles</option>
                      <option value="3">Portugues</option>
                      <option value="4">Japones</option>
                      <option value="5">Ruso</option>
                      <option value="6">Italiano</option>
                      <option value="7">Español</option>
                      <option value="8">Aleman</option>
                      <option value="9">Chino</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Dirección</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Dirección"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Pais</label>
                    <select class="form-select">
                      <option selected="1">Pais</option>
                      <option value="2">Argentina</option>
                      <option value="3">Brasil</option>
                      <option value="4">Colombia</option>
                      <option value="5">Chile </option>
                      <option value="6">Ecuador</option>
                      <option value="7">Urugay</option>
                      <option value="8">Honduras</option>
                      <option value="9">Venezuela</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Estado</label>
                    <select class="form-select">
                    <option value="2">Argentina</option>
                      <option value="3">Brasil</option>
                      <option value="4">Colombia</option>
                      <option value="5">Chile </option>
                      <option value="6">Ecuador</option>
                      <option value="7">Urugay</option>
                      <option value="8">Honduras</option>
                      <option value="9">Venezuela</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Ciudad</label>
                    <select class="form-select">
                    <option value="2">Argentina</option>
                      <option value="3">Brasil</option>
                      <option value="4">Colombia</option>
                      <option value="5">Chile </option>
                      <option value="6">Ecuador</option>
                      <option value="7">Urugay</option>
                      <option value="8">Honduras</option>
                      <option value="9">Venezuela</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">Guardar</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="account" role="tabpanel">
            <form class="account-setting-form">
              <h3>Información de la Cuenta</h3>

              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Nombre Completo</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nombre Completo"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Nombre de Usuario</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nombre de Usuario"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Cuenta de email</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Cuenta de email"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Numero de Telefono</label>
                    <input
                      type="number"
                      class="form-control"
                      placeholder="Numero de Telefono"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Pais</label>
                    <select class="form-select">
                      <option value="2">Argentina</option>
                      <option value="3">Brasil</option>
                      <option value="4">Colombia</option>
                      <option value="5">Chile </option>
                      <option value="6">Ecuador</option>
                      <option value="7">Urugay</option>
                      <option value="8">Honduras</option>
                      <option value="9">Venezuela</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">Guardar</button>
                </div>
              </div>
            </form>

            <form class="account-setting-form">
              <h3>Informacion de seguridad</h3>

              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Correo electrónico de recuperación</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Correo electrónico de recuperación"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Teléfono de recuperación</label>
                    <input
                      type="number"
                      class="form-control"
                      placeholder="Teléfono de recuperación"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Pregunta de seguridad 01</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Pregunta de seguridad 01"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Pregunta de seguridad 02</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Pregunta de seguridad 02"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Pregunta de seguridad 03</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Pregunta de seguridad 03"
                    />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">Guardar</button>
                </div>
              </div>
            </form>

            <form class="account-setting-form">
              <h3>Cambio de Contraseña</h3>

              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Contraseña actual</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Contraseña actual"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Nueva Contraseña</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Nueva Contraseña"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Cambiar Contraseña</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Cambiar Contraseña"
                    />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">Guardar Cambios</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="privacy" role="tabpanel">
            <form class="account-setting-form">
              <h3>Configuración de privacidad</h3>

              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>¿Quién puede ver tu perfil?</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>¿Quién puede ver tu publicación futura?</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>¿Quién puede enviarte una solicitud de amistad?</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>¿Quién puede ver tu actividad de chat?</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>¿Quién puede ver su número de teléfono?</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>¿Cómo la gente lo encuentra y se comunica con usted?</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">Guardar Cambios</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane fade" id="notification" role="tabpanel">
            <div class="account-setting-notification">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="notification-content">
                    <h3>Notificiones</h3>

                    <ul class="alert-box">
                      <li>¿Dónde recibe la notificación de comentarios?</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="email"
                          />
                          <label class="form-check-label" for="email"
                            >Correo</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="SMS"
                          />
                          <label class="form-check-label" for="SMS">SMS</label>
                        </div>
                      </li>
                    </ul>
                    <ul class="alert-box">
                      <li>Recibir notificaciones cuando seas etiquetado por</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="anyone"
                          />
                          <label class="form-check-label" for="anyone"
                            >Alguien</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="friends"
                          />
                          <label class="form-check-label" for="friends"
                            >Amigos</label
                          >
                        </div>
                      </li>
                    </ul>
                    <ul class="alert-box">
                      <li>Recibir notificaciones cuando haya actualizaciones de amigos</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="email-2"
                          />
                          <label class="form-check-label" for="email-2"
                            >Correo</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="SMS-2"
                          />
                          <label class="form-check-label" for="SMS-2"
                            >SMS</label
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="other-notification-content">
                    <h3>Otras Notificaciones</h3>

                    <ul class="alert-box">
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="recommended-videos"
                          />
                          <label
                            class="form-check-label"
                            for="recommended-videos"
                            >Vídeos recomendados</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="games"
                          />
                          <label class="form-check-label" for="games"
                            >Juegos</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="breaking-news"
                          />
                          <label class="form-check-label" for="breaking-news"
                            >Noticias de última hora</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="pages-follow-notification"
                          />
                          <label
                            class="form-check-label"
                            for="pages-follow-notification"
                            >Notificación de seguimiento de páginas</label
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="notification-content">
                    <ul class="alert-box">
                      <li>¿Dónde recibe la notificación de solicitud de amistad?</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="email-3"
                          />
                          <label class="form-check-label" for="email-3"
                            >Correo</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="SMS-3"
                          />
                          <label class="form-check-label" for="SMS-3"
                            >SMS</label
                          >
                        </div>
                      </li>
                    </ul>

                    <ul class="alert-box">
                      <li>Where You Receive Birthday Notification?</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="email-4"
                          />
                          <label class="form-check-label" for="email-4"
                            >Email</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="SMS-4"
                          />
                          <label class="form-check-label" for="SMS-4"
                            >SMS</label
                          >
                        </div>
                      </li>
                    </ul>

                    <ul class="alert-box">
                      <li>¿Dónde recibe la notificación de cumpleaños?</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="email-5"
                          />
                          <label class="form-check-label" for="email-5"
                            >Correo</label
                          >
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="SMS-5"
                          />
                          <label class="form-check-label" for="SMS-5"
                            >SMS</label
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="message" role="tabpanel">
            <div class="account-setting-message">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="message-content">
                    <h3>Cofiguración de Mensajes</h3>

                    <ul class="alert-box">
                      <li>Envíame mensajes a mi celular</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="ON"
                          />
                          <label class="form-check-label" for="ON">Si</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="OFF"
                          />
                          <label class="form-check-label" for="OFF">No</label>
                        </div>
                      </li>
                    </ul>

                    <ul class="alert-box">
                      <li>Anuncio general, actualizaciones, publicaciones y videos</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="ON-2"
                          />
                          <label class="form-check-label" for="ON-2">Si</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="OFF-2"
                          />
                          <label class="form-check-label" for="OFF-2"
                            >No</label
                          >
                        </div>
                      </li>
                    </ul>

                    <ul class="alert-box">
                      <li>Mensajes de actividad en mi página</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="ON-3"
                          />
                          <label class="form-check-label" for="ON-3">Si</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="OFF-3"
                          />
                          <label class="form-check-label" for="OFF-3"
                            >No</label
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="message-content">
                    <ul class="alert-box">
                      <li>Notificación de seguimiento de página</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="ON-4"
                          />
                          <label class="form-check-label" for="ON-4">Si</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="OFF-4"
                          />
                          <label class="form-check-label" for="OFF-4"
                            >No</label
                          >
                        </div>
                      </li>
                    </ul>
                    <ul class="alert-box">
                      <li>Noticias de última hora</li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="ON-5"
                          />
                          <label class="form-check-label" for="ON-5">Si</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="OFF-5"
                          />
                          <label class="form-check-label" for="OFF-5"
                            >No</label
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="close-account" role="tabpanel">
            <form class="account-setting-form">
              <div class="title">
                <h3>Cerrar Cuenta</h3>
                <p>
                  <span>Advertencia:</span><?php echo $lorem2; ?>
                </p>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Su dirección de correo electrónico</label>
                    <input type="email" class="form-control" />
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label>Su contraseña</label>
                    <input type="password" class="form-control" />
                  </div>
                </div>

                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">
                    Borrar Cuenta
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Content Page Box Area -->
<?php
  include_once 'layout/footer.php';
?>
