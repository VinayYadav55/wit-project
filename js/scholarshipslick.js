$(document).ready(function() {
  var a = new FgGallery('.fg-gallery', {
    cols: 4,
    style: {
      border: '10px solid #fff',
      height: '180px',
      borderRadius: '5px',
      boxShadow: '0 2px 10px -5px #858585'
    }
  });

  $('.galleryBtn').click(function() {
    $('.mainGallery').fadeIn(1000);
    $('.overlay-gallery').fadeIn(1000);
  });
  $('.cutBtnGallery').click(function() {
    $('.mainGallery').fadeOut(1000);
    $('.overlay-gallery').fadeOut(1000);
  });

  $('.responsive2').slick({
    dots: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});
