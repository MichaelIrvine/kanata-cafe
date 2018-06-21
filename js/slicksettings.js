jQuery(document).ready(function($) {
  $(".slides").slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000, // speed is in milliseconds
    speed: 300,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 999,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings:
        'unslick'
        // {
        //   slidesToShow: 1,
        //   slidesToScroll: 1,
        //   arrows: false,
        //   //mobileFirst: true
        // }
      }
    ]
  });
});
