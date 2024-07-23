<?php
  include_once("layout/header.php");
?>
            <!-- Artist Single page -->
            <div class="ms_artist_single common_pages_space">
                <div class="ms_artist_single_page">
                    <div class="album_single_data">
                        <div class="album_single_img">
                            <img src="assets/images/artist/01.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="album_single_text">
                            <h2 class="slider_ctitle">Nombre del Cantante</h2>
                            <p class="singer_name slider_cdescription">Album,año de lanzamiento</p>
                            <div class="about_artist slider_cdescription">
                            <?php echo $lorem1; ?><a
                                    href="#">Leer más</a>
                            </div>
                            <div class="album_btn">
                                <a href="#" class="ms_btn play_btn"><span class="play_all"><img
                                            src="assets/images/svg/play_all.svg" alt="">Escuchar</span><span
                                        class="pause_all"><img src="assets/images/svg/pause_all.svg" alt="">Pause</span></a>
                                <!-- <a href="#" class="ms_btn"><span class="play_all"><img src="assets/images/svg/add_q.svg"
                                            alt="">Add To Queue</span></a> -->
                            </div>
                        </div>
                        <div class="ms_artistsingle_more">
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="20px"><path fill-rule="evenodd" fill="rgb(124, 142, 165)" d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.105 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.105 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"/></svg>
                            </span>
                            <ul class="artist-single-option">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="common_drop_icon drop_fav"></span>Favoritos
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="common_drop_icon drop_downld"></span>Descargar
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="common_drop_icon drop_playlist"></span>Agregar a Reproductor
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="common_drop_icon drop_share"></span>Compartir
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
           
            <!-- Artist Single Table -->
            <div class="album_list_wrapper">
                <ul class="album_list_name">
                  <li>#</li>
                  <li>Titulo</li>
                  <li>Album</li>
                  <li class="text-center">Duracioón</li>
                  <li class="text-center">Agregar a favoritos</li>
                  <li class="text-center">más</li>
                  <li class="text-center">Borrar</li>
                </ul>
                <ul class="play_active_song">
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">01</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #1</a></li>
                  <li><a href="javascript:;">Titulo Album #1</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">02</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #2</a></li>
                  <li><a href="javascript:;">Titulo Album #2</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">03</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #3</a></li>
                  <li><a href="javascript:;">Titulo Album #3</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">04</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #4</a></li>
                  <li><a href="javascript:;">Titulo Album #4</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">05</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #5</a></li>
                  <li><a href="javascript:;">Titulo Album #5</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">06</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #6</a></li>
                  <li><a href="javascript:;">Titulo Album #6</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">07</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #7</a></li>
                  <li><a href="javascript:;">Titulo Album #7</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">08</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #8</a></li>
                  <li><a href="javascript:;">Titulo Album #8</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span classDescargar="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">09</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #9</a></li>
                  <li><a href="javascript:;">Titulo Album #9</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="javascript:;" class="dwld_sn">
                      <span class="play_no">10</span>
                      <span class="play_hover">
                        <img
                          src="assets/images/svg/play_songlist.svg"
                          alt="Play"
                          class="img-fluid list_play"
                        />
                        <img
                          src="assets/images/svg/sound_bars.svg"
                          alt="bar"
                          class="img-fluid list_play_bar"
                        />
                      </span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Titulo #10</a></li>
                  <li><a href="javascript:;">Titulo Album #10</a></li>
                  <li class="text-center"><a href="javascript:;">5:26</a></li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_heart">
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="17px"
                          height="16px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M11.777,-0.000 C10.940,-0.000 10.139,0.197 9.395,0.585 C9.080,0.749 8.783,0.947 8.506,1.173 C8.230,0.947 7.931,0.749 7.618,0.585 C6.874,0.197 6.073,-0.000 5.236,-0.000 C2.354,-0.000 0.009,2.394 0.009,5.337 C0.009,7.335 1.010,9.428 2.986,11.557 C4.579,13.272 6.527,14.702 7.881,15.599 L8.506,16.012 L9.132,15.599 C10.487,14.701 12.436,13.270 14.027,11.557 C16.002,9.428 17.004,7.335 17.004,5.337 C17.004,2.394 14.659,-0.000 11.777,-0.000 ZM5.236,2.296 C6.168,2.296 7.027,2.738 7.590,3.507 L8.506,4.754 L9.423,3.505 C9.986,2.737 10.844,2.296 11.777,2.296 C13.403,2.296 14.727,3.660 14.727,5.337 C14.727,6.734 13.932,8.298 12.364,9.986 C11.114,11.332 9.604,12.490 8.506,13.255 C7.409,12.490 5.899,11.332 4.649,9.986 C3.081,8.298 2.286,6.734 2.286,5.337 C2.286,3.660 3.610,2.296 5.236,2.296 Z"
                          />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li class="list_more">
                    <a href="javascript:;" class="songslist_moreicon">
                      <span>
                        <svg
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="4px"
                          height="20px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124, 142, 165)"
                            d="M2.000,12.000 C0.895,12.000 -0.000,11.105 -0.000,10.000 C-0.000,8.895 0.895,8.000 2.000,8.000 C3.104,8.000 4.000,8.895 4.000,10.000 C4.000,11.105 3.104,12.000 2.000,12.000 ZM2.000,4.000 C0.895,4.000 -0.000,3.105 -0.000,2.000 C-0.000,0.895 0.895,-0.000 2.000,-0.000 C3.104,-0.000 4.000,0.895 4.000,2.000 C4.000,3.105 3.104,4.000 2.000,4.000 ZM2.000,16.000 C3.104,16.000 4.000,16.895 4.000,18.000 C4.000,19.104 3.104,20.000 2.000,20.000 C0.895,20.000 -0.000,19.104 -0.000,18.000 C-0.000,16.895 0.895,16.000 2.000,16.000 Z"
                          />
                        </svg>
                      </span>
                    </a>
                    <ul class="ms_common_dropdown ms_downlod_list">
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_fav"></span
                          >Favorito
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_downld"></span
                          >Descargar
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_playlist"></span
                          >Agragar al reproductor
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0);">
                          <span class="common_drop_icon drop_share"></span>Compartir
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">
                      <span class="list_close">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="8px"
                          height="8px"
                        >
                          <path
                            fill-rule="evenodd"
                            fill="rgb(124 142 165)"
                            d="M4.945,3.993 L7.802,1.135 C8.065,0.872 8.065,0.446 7.802,0.183 C7.539,-0.080 7.113,-0.080 6.850,0.183 L3.993,3.040 L1.135,0.183 C0.872,-0.080 0.446,-0.080 0.183,0.183 C-0.080,0.446 -0.080,0.872 0.183,1.135 L3.040,3.993 L0.183,6.850 C-0.080,7.113 -0.080,7.539 0.183,7.802 C0.446,8.065 0.872,8.065 1.135,7.802 L3.993,4.945 L6.850,7.802 C7.113,8.065 7.539,8.065 7.802,7.802 C8.065,7.539 8.065,7.113 7.802,6.850 L4.945,3.993 Z"
                          />
                        </svg> </span
                    ></a>
                  </li>
                </ul>
              </div>
            <div class="ms_view_more padder_bottom20">
				<a href="#" class="ms_btn ms_artist_smore">Ver más</a>
			</div>
        </div>
        </div>
    </div>
    </div><!---Main Content end--->
<?php
  include_once("layout/footer.php");
?>
