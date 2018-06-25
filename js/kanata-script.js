jQuery(document).ready(function($) {
  console.log("Welcome to the Kanata Cafe Site!");

  // Kanata Big Text parallax
  $(window).scroll(function() {
    var scrollval = $(this).scrollTop(); // It will return scroll value

    $(".big-text-container").css(
      "transform",
      "translate(0px,-" + scrollval / 4 + "%)"
    );
  });

  // Change Font Color on Home Page
  // And Mobile Menu
  const $body = $("body");
  const $bodyHasClass = $body.hasClass("home");

  function mediaSize() {
    /* Set the matchMedia */
    if (window.matchMedia('(min-width: 920px)').matches) {
      /* Changes when we reach the min-width  */

      if ($bodyHasClass === true) {
        $(".main-header-menu a").css("color", "#fff");
        $(".submenu-with-border ul a")
          .css("border-left", "1px solid #fff")
          .css("border-bottom", "1px solid #fff");
      }
    } else {
      /* Reset for CSS changes – Still need a better way to do this! */

      $(".main-header-menu a").removeAttr('style');
    }
  };

  mediaSize();

  window.addEventListener('resize', mediaSize, false); 



// Intro Text fade in
// Using Waypoints 

  const $triggerText = $('.intro-text-container');
  const $textToReveal = $('.intro_japanese, .intro_english');

  $triggerText.waypoint(function () {
      $textToReveal.addClass('reveal')
  }, {offset: '40%'});

// Front page Icons fade in
// Using Waypoints 

  const $triggerIcons = $(".icon-container");
  const $iconToReveal = $('.icon-links');

$triggerIcons.waypoint(function(direction) {
  if (direction === 'down'){$iconToReveal.addClass('icon-reveal')
  }else {
    $iconToReveal.removeClass("icon-reveal");
  }
}, {offset: '30%'});





}); // End of .ready 
