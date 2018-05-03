jQuery(document).ready(function($){

console.log('yoooo this is the Kanata Cafe Site!');

// Background change-to-pink to pink
$('#content').waypoint(function(direction){
    if ( direction == 'down' ) {
      $('.hero-wrap, #content').addClass('change-to-pink');
    } else {
      $('.hero-wrap, #content').removeClass('change-to-pink');
    }
}, {offset: '45%'});

});




