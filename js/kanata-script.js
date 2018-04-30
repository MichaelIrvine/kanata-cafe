jQuery(document).ready(function($){

console.log('yoooo this is the Kanata Cafe Site!');

// Background change-to-pink to pink

const waypoint = new Waypoint({
  element: document.getElementById(".site-content"),
  handler: function(direction) {
    alert('work damnit');
  }
});



$waypoint.waypoint(
  function(direction) {
    if (direction == "down") {
      $waypoint.addClass("change-to-pink");
    } else {
      $waypoint.removeClass("change-to-pink");
    }
  },
  { offset: "35%" }
);

console.log('does this work?');

});