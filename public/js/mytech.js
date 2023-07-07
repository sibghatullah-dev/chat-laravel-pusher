
$(document).ready(function () {var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});
$('.slick1').slick({
    rows: 2,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    autoplay: false,
    slidesToScroll: 1,
    prevArrow: $('.prev-1'),
    nextArrow: $('.next-1'),
    // centerMode: false,
    // centerPadding: '0px',
    // variableWidth: false,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,

            }
        },
        {
          breakpoint: 767,
          settings: {
                rows: 1,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 575,
            settings: {
              rows: 1,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]

});

$('.store-slider').slick({
slidesToShow: 4,
slidesToScroll: 1,
autoplay: false,
autoplaySpeed: 2000,
prevArrow: $('.prev'),
nextArrow: $('.next'),
// centerMode: true,
// variableWidth: true,
centerPadding: '0px',
dots: false,
responsive: [
    {
      breakpoint: 1450,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.cate-slider-slick').slick({
autoplay: false,
autoplaySpeed: 2000,
prevArrow: $('.prev-car-m'),
nextArrow: $('.next-car-m'),
// centerMode: true,
// variableWidth: true,
centerPadding: '0px',
dots: false,
responsive: [
    {
      breakpoint: 1450,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.category-item').on('click', function(e) {
  e.preventDefault();
  e.stopPropagation();
  scrollToMainElement('#stethoscopes', 172);
});

});

function scrollTo(event, elem, margin) {
  console.log({event, elem, margin});
}

function scrollToMainElement(elem = "#main-element", margin = 0) {
  setTimeout(() => {
    if ($(elem).length > 0) {
      $('html, body').animate({
        scrollTop: $(elem).offset().top - margin
      }, 500);
    }
  }, 500);
}

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  // infinite:true,
  centerPadding: '0px',
  focusOnSelect: true,
  prevArrow: $('.prev-d'),
  nextArrow: $('.next-d')
});