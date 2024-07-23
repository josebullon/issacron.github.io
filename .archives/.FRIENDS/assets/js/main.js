jQuery(function ($) {
  'use strict';

  // Metis Menu JS
  $(function () {
    $('#sidemenu-nav').metisMenu();
  });

  // Responsive Burger Menu JS
  $('.responsive-burger-menu').on('click', function () {
    $('.responsive-burger-menu').toggleClass('active');
    $('.sidemenu-area').toggleClass('active-sidemenu-area');
  });

  // Navbar Burger Menu JS
  $('.navbar-burger-menu').on('click', function () {
    $('.navbar-burger-menu').toggleClass('active');
    $('.sidemenu-area').toggleClass('active-sidemenu-area');
  });

  // tooltip
  $(function () {
    $('[data-bs-toggle="tooltip"]').tooltip()
  });

  // Language Switcher
  $(".language-option").each(function () {
    var each = $(this)
    each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
    var allOptions = $(".language-dropdown-menu").children('a');
    each.find(".language-dropdown-menu").on("click", "a", function () {
      allOptions.removeClass('selected');
      $(this).addClass('selected');
      $(this).closest(".language-option").find(".lang-name").html($(this).text());
    });
  })

  // Others Option For Responsive JS
  $(".others-option-for-responsive .dot-menu").on("click", function () {
    $(".others-option-for-responsive .container .container").toggleClass("active");
  });

  // Watch Video Slides
  $('.watch-video-slides').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    margin: 10,

    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 3
      },
      768: {
        items: 5
      },
      1200: {
        items: 3
      }
    }
  });

  // Popup Video
  $('.popup-youtube').magnificPopup({
    disableOn: 320,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // Live Chat Slides
  $('.live-chat-slides').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    margin: 10,

    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 2
      },
      768: {
        items: 6
      },
      992: {
        items: 8
      },
      1200: {
        items: 9
      }
    }
  });

  // Datepicker
  $("#datepicker").datepicker();

  // Go to Top
  $(window).on('scroll', function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 600) $('.go-top').addClass('active');
    if (scrolled < 600) $('.go-top').removeClass('active');
  });
  $('.go-top').on('click', function () {
    $("html, body").animate({ scrollTop: "0" }, 500);
  });

  // Preloader
  $(window).on('load', function () {
    $('.preloader-area').fadeOut();
  });

  // Buy Now Btn
  // $('body').append("<a href='https://1.envato.market/x9QgOO' target='_blank' class='buy-now-btn'>Buy Now</a>");

  // Switch Btn
  $('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");

}(jQuery));

// function to set a given theme/color-scheme
function setTheme(themeName) {
  localStorage.setItem('zust_theme', themeName);
  document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
  if (localStorage.getItem('zust_theme') === 'theme-dark') {
    setTheme('theme-light');
  } else {
    setTheme('theme-dark');
  }
}
// Immediately invoked function to set the theme on initial load
(function () {
  if (localStorage.getItem('zust_theme') === 'theme-dark') {
    setTheme('theme-dark');
    document.getElementById('slider').checked = false;
  } else {
    setTheme('theme-light');
    document.getElementById('slider').checked = true;
  }
})();
