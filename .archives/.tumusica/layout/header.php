<!DOCTYPE html>
<?php
  $title = 'Tu música_La que suena';
  $lorem1 = 'Lorem ipsum dolor sit amet. Et similique maiores aut rerum autemet voluptas et reiciendis explicabo. Quo sapiente beatae est distinctio expeditaquo quam id ipsam numquam.';
  
?>




<!-- 
Template Name: Miraculous - Online Music Store Html Template
Version: 1.0.0
Author: Kamleshyadav
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
  <!--<![endif]-->
  <!-- Begin Head -->

  <!-- Mirrored from kamleshyadav.com/html/miraculous/html/Bootstrap5/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2024 22:11:58 GMT -->
  <head>
    <title>Tu musica - La que suena</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Music" />
    <meta name="keywords" content="" />
    <meta name="author" content="kamleshyadav" />
    <meta name="MobileOptimized" content="320" />
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/js/plugins/swiper/css/swiper.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/js/plugins/nice_select/nice-select.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/js/plugins/player/volume.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/js/plugins/scroll/jquery.mCustomScrollbar.css"
    />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- Favicon Link -->
    <link
      rel="shortcut icon"
      type="image/png"
      href="assets/images/favicon.png"
    />
  </head>

  <body>
    <!----loader Start---->
    <div class="ms_loader">
      <div class="wrap">
        <img src="assets/images/loader.gif" alt="loader" />
      </div>
    </div>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper ms_mainindex_wrapper">
      <!---Side Menu Start--->
      <div class="ms_sidemenu_wrapper">
        <div class="ms_nav_close ms_cmenu_toggle">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        <div class="ms_sidemenu_inner">
          <div class="ms_logo_inner">
            <div class="ms_logo">
              <a href="index.php"
                ><img src="assets/images/logo.png" alt="logo" class="img-fluid"
              /></a>
            </div>
            <div class="ms_logo_mini">
              <a href="index.php"
                ><img
                  src="assets/images/mini_logo.png"
                  alt="mini_logo"
                  class="img-fluid"
              /></a>
            </div>
          </div>
          <div class="ms_nav_wrapper">
            <h4 class="nav_heading">Buscar Música</h4>
            <ul>
              <li>
                <a href="index.php" class="active" title="Discover">
                  <span class="nav_icon">
                    <span class="icon icon_discover"></span>
                  </span>
                  <span class="nav_text"> Busqueda </span>
                </a>
              </li>
              <li>
                <a href="artist.php" title="Artists">
                  <span class="nav_icon">
                    <span class="icon icon_artists"></span>
                  </span>
                  <span class="nav_text"> Artistas </span>
                </a>
              </li>
              <li>
                <a href="album.php" title="Albums">
                  <span class="nav_icon">
                    <span class="icon icon_albums"></span>
                  </span>
                  <span class="nav_text">Albumes </span>
                </a>
              </li>
              <li>
                <a href="stations.php" title="Stations">
                  <span class="nav_icon">
                    <span class="icon icon_station"></span>
                  </span>
                  <span class="nav_text"> Estaciones </span>
                </a>
              </li>
              <li>
                <a href="music.php" title="Music">
                  <span class="nav_icon">
                    <span class="icon icon_music"></span>
                  </span>
                  <span class="nav_text"> Música </span>
                </a>
              </li>
            </ul>
            <h4 class="nav_heading">Tu Música</h4>
            <ul class="nav_downloads">
              <li>
                <a href="download.php" title="Downloads">
                  <span class="nav_icon">
                    <span class="icon icon_download"></span>
                  </span>
                  <span class="nav_text"> Descargas </span>
                </a>
              </li>
              <li>
                <a href="purchase.php" title="Purchased">
                  <span class="nav_icon">
                    <span class="icon icon_purchased"></span>
                  </span>
                  <span class="nav_text"> Comprado </span>
                </a>
              </li>
              <li>
                <a href="favourite.php" title="Favourites">
                  <span class="nav_icon">
                    <span class="icon icon_favourite"></span>
                  </span>
                  <span class="nav_text"> favoritos </span>
                </a>
              </li>
              <li>
                <a href="history.php" title="History">
                  <span class="nav_icon">
                    <span class="icon icon_history"></span>
                  </span>
                  <span class="nav_text"> Historial </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="ms_header">
          <div class="ms_header_inner">
            <div class="ms_top_left">
              <div class="ms_top_search">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Encuentra tu banda sonora perfecta: canciones, artistas..."
                />
                <span class="search_icon">
                  <img src="assets/images/svg/search.svg" alt="Buscar" />
                </span>
              </div>
              <div class="ms_noti_wrap">
                <span class="noti_icon bg_cmn_iconwrap"
                  ><i class="bg_cmn_icon"></i
                ></span>
              </div>
            </div>
            <div class="ms_top_right">
              <div class="ms_pro_inner">
                <div class="ms_pro_img">
                  <img src="assets/images/proflile.jpg" alt="Profile" />
                </div>
                <div class="ms_pro_namewrap">
                  <span class="pro_name">Hola, Ana</span>
                  <i class="fa fa-caret-down"></i>
                </div>
                <ul class="ms_common_dropdown ms_profile_dropdown">
                  <li>
                    <a href="javascript:void(0);">
                      <span class="common_drop_icon drop_pro"></span>Profile
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span class="common_drop_icon drop_logt"></span>Logout
                    </a>
                  </li>
                </ul>
              </div>
              <div class="ms_cmenu_toggle ms_menu_toggle">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>

<!---Main Content Start--->
      <div class="ms_content_wrapper padder_top8">
        <!---Header--->
        <div class="ms_header">
          <div class="ms_header_inner">
            <div class="ms_top_left">
              <div class="ms_top_search">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Encuentra tu banda sonora perfecta: canciones, artistas..."
                />
                <span class="search_icon">
                  <img src="assets/images/svg/search.svg" alt="Buscar" />
                </span>
              </div>
              <div class="ms_noti_wrap">
                <span class="noti_icon bg_cmn_iconwrap"
                  ><i class="bg_cmn_icon"></i
                ></span>
              </div>
            </div>
            <div class="ms_top_right">
              <div class="ms_pro_inner">
                <div class="ms_pro_img">
                  <img src="assets/images/proflile.jpg" alt="Profile" />
                </div>
                <div class="ms_pro_namewrap">
                  <span class="pro_name">Hola, Ana</span>
                  <i class="fa fa-caret-down"></i>
                </div>
                <ul class="ms_common_dropdown ms_profile_dropdown">
                  <li>
                    <a href="javascript:void(0);">
                      <span class="common_drop_icon drop_pro"></span>Perfil
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span class="common_drop_icon drop_logt"></span>Cerrar sesión
                    </a>
                  </li>
                </ul>
              </div>
              <div class="ms_cmenu_toggle ms_menu_toggle">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
