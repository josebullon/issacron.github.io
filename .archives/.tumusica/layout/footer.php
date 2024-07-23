      <!----Audio Player Section---->
      <div class="ms_player_wrapper">
        <div class="ms_player_close">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </div>
        <div class="player_mid">
          <div class="audio-player">
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div
              id="jp_container_1"
              class="jp-audio"
              role="application"
              aria-label="media player"
            >
              <div class="player_left">
                <div class="ms_play_song">
                  <div class="play_song_name">
                    <a href="javascript:void(0);" id="playlist-text">
                      <div class="jp-now-playing flex-item">
                        <div class="jp-track-name"></div>
                        <div class="jp-artist-name"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="play_song_options">
                  <ul>
                    <li>
                      <a href="#"
                        ><span class="song_optn_icon"
                          ><i class="ms_icon icon_download"></i></span
                        >Descargar</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><span class="song_optn_icon"
                          ><i class="ms_icon icon_fav"></i></span
                        >Favoritos</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><span class="song_optn_icon"
                          ><i class="ms_icon icon_playlist"></i></span
                        >Agregar al reproductor</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><span class="song_optn_icon"
                          ><i class="ms_icon icon_share"></i></span
                        >Compartir</a
                      >
                    </li>
                  </ul>
                </div>
                <span class="play-left-arrow"
                  ><i class="fa fa-angle-right" aria-hidden="true"></i
                ></span>
              </div>
              <!----Right Queue---->
              <div class="jp_queue_wrapper">
                <span class="que_text ms_btn" id="myPlaylistQueue"
                  ><i class="fa fa-angle-up" aria-hidden="true"></i>En cola </span
                >
                <div id="playlist-wrap" class="jp-playlist">
                  <div class="jp_queue_cls">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </div>
                  <h2>En cola</h2>
                  <div class="jp_queue_list_inner">
                    <ul>
                      <li>&nbsp;</li>
                    </ul>
                  </div>
                  <div class="jp_queue_btn">
                    <a
                      href="clear_modal.html"
                      class="ms_save ms_btn"
                      data-toggle="modal"
                      data-target="#save_modal"
                      >Guardar Lista</a
                    >
                    <a
                      href="javascript:;"
                      class="ms_clear"
                      data-toggle="modal"
                      data-target="#clear_modal"
                      >Limpiar</a
                    >
                  </div>
                </div>
              </div>
              <div class="jp-type-playlist">
                <div class="jp-gui jp-interface flex-wrap">
                  <div class="jp-controls flex-item">
                    <button class="jp-previous" tabindex="0">
                      <i class="ms_play_control"></i>
                    </button>
                    <button class="jp-play" tabindex="0">
                      <i class="ms_play_control"></i>
                    </button>
                    <button class="jp-next" tabindex="0">
                      <i class="ms_play_control"></i>
                    </button>
                  </div>
                  <div class="jp-progress-container flex-item">
                    <div class="jp-time-holder">
                      <span
                        class="jp-current-time"
                        role="timer"
                        aria-label="time"
                        >&nbsp;</span
                      >
                      <span
                        class="jp-duration"
                        role="timer"
                        aria-label="duration"
                        >&nbsp;</span
                      >
                    </div>
                    <div class="jp-progress">
                      <div class="jp-seek-bar">
                        <div class="jp-play-bar">
                          <div class="bullet"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="jp-volume-controls flex-item">
                    <div class="widget knob-container">
                      <div class="knob-wrapper-outer">
                        <div class="knob-wrapper">
                          <div class="knob-mask">
                            <div class="knob d3"><span></span></div>
                            <div class="handle"></div>
                            <div class="round">
                              <img
                                src="assets/images/svg/volume.svg"
                                alt="volume"
                              />
                            </div>
                          </div>
                        </div>
                        <!-- <input></input> -->
                      </div>
                    </div>
                  </div>
                  <div class="jp-toggles flex-item">
                    <button class="jp-shuffle" tabindex="0" title="Shuffle">
                      <i class="ms_play_control"></i>
                    </button>
                    <button class="jp-repeat" tabindex="0" title="Repeat">
                      <i class="ms_play_control"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--main div-->
      </div>
    </div>

    <!--Main js file Style-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/swiper/js/swiper.min.js"></script>
    <script src="assets/js/plugins/player/jplayer.playlist.min.js"></script>
    <script src="assets/js/plugins/player/jquery.jplayer.min.js"></script>
    <script src="assets/js/plugins/player/audio-player.js"></script>
    <script src="assets/js/plugins/player/volume.js"></script>
    <script src="assets/js/plugins/nice_select/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>

  <!-- Mirrored from kamleshyadav.com/html/miraculous/html/Bootstrap5/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 22:12:24 GMT -->
</html>
