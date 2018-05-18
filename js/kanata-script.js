jQuery(document).ready(function($){

console.log('yoooo this is the Kanata Cafe Site!');

$(window).scroll(function() {
  var scrollval = $(this).scrollTop(); // It will return scroll value

  $(".big-text-container").css("transform", "translate(0px,-" + scrollval / 4 + "%)");
});


// Background change-to-pink to pink
// $('#content').waypoint(function(direction){
//     if ( direction == 'down' ) {
//       $('.hero-wrap, #content').addClass('change-to-pink');
//     } else {
//       $('.hero-wrap, #content').removeClass('change-to-pink');
//     }
// }, {offset: '45%'});


});




