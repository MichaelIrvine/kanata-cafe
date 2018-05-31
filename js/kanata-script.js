jQuery(document).ready(function($){

console.log('Welcome to the Kanata Cafe Site!');

// Kanata Big Text parallax
$(window).scroll(function() {
  var scrollval = $(this).scrollTop(); // It will return scroll value

  $(".big-text-container").css("transform", "translate(0px,-" + scrollval / 4 + "%)");
});




// Front Page menu color change

const $body = $('body');
const $bodyHasClass = $body.hasClass('home');


if ( $bodyHasClass === true ) {
  $(".main-header-menu a").css("color", "#fff");
  $(".submenu-with-border ul a")
    .css("border-left", "1px solid #fff")
    .css("border-bottom", "1px solid #fff");
}

});




// Background change-to-pink to pink
// $('#content').waypoint(function(direction){
//     if ( direction == 'down' ) {
//       $('.hero-wrap, #content').addClass('change-to-pink');
//     } else {
//       $('.hero-wrap, #content').removeClass('change-to-pink');
//     }
// }, {offset: '45%'});