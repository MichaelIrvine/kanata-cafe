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
  /* Call the function */
  mediaSize();
  /* Attach the function to the resize event listener */
  window.addEventListener('resize', mediaSize, false); 



  // Testing new code

  // const changer = {
  //   menuColorChange: function() {
  //     // Change Font Color on Home Page
  //     const body = document.getElementsByClassName("body");
  //     const bodyHasClass = body.hasClass("home");

  //     if ($bodyHasClass === true) {
  //       $(".main-header-menu a").css("color", "#fff");
  //       $(".submenu-with-border ul a")
  //         .css("border-left", "1px solid #fff")
  //         .css("border-bottom", "1px solid #fff");
  //     }
  //   }
  // };

}); // End of .ready 
