$('#demo1').mouseover(function() {
     console.log($('#demo1 #hover-icon'));
     $('#demo1 #hover-icon').attr("src","../img/xmark.svg");
});
$('#demo1').mouseout(function() {
  console.log($('#demo1 #hover-icon'));
  $('#demo1 #hover-icon').attr("src","../img/icon.svg");
});
$(document).on('ready', function () {
  $("#banner .regular").slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1
  });
});
$(document).on('ready', function () {
  $("#mobile-banner .regular").slick({
    dots: false,
    arrows: false,
    infinite: false,
    centerMode: false,
    centerPadding: '20px',
    slidesToShow: 2.2,
  });
});
$(document).on('ready', function () {
  $("#mobile-detail-slider .regular").slick({
    dots: false,
    arrows: false,
    infinite: false,
    centerMode: false,
    centerPadding: '20px',
    slidesToShow: 1.2,
  });
});
$(document).on('ready', function () {
  $("#advertisement2 .regular").slick({
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
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
      }],
    prevArrow: "<button type='button' class='prev slick-prev pull-left'><i class='fa-solid fa-chevron-left'></i></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'><i class='fa-solid fa-chevron-right'></i></button>",
  });
});
// loader
$("body").css(
  "overflow-y",
  "hidden",
  setTimeout(() => {
    $("body").css("overflow-y", "visible");
  }, 2000)
);
// Initialise Carousel
const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), {
  Dots: false,
});

// Thumbnails
const thumbCarousel = new Carousel(document.querySelector("#thumbCarousel"), {
  Sync: {
    target: mainCarousel,
    friction: 0,
  },
  Dots: false,
  Navigation: false,
  center: true,
  slidesPerPage: 1,
  infinite: false,
});

// Customize Fancybox
Fancybox.bind('[data-fancybox="gallery"]', {
  Carousel: {
    on: {
      change: (that) => {
        mainCarousel.slideTo(mainCarousel.findPageForSlide(that.page), {
          friction: 0,
        });
      },
    },
  },
});
// For the thumbnail demo! :]

var count = 1
setTimeout(demo, 500)
setTimeout(demo, 700)
setTimeout(demo, 900)
setTimeout(reset, 2000)

setTimeout(demo, 2500)
setTimeout(demo, 2750)
setTimeout(demo, 3050)


var mousein = false
function demo() {
   if(mousein) return
   document.getElementById('demo' + count++)
      .classList.toggle('hover')
   
}

function demo2() {
   if(mousein) return
   document.getElementById('demo2')
      .classList.toggle('hover')
}

function reset() {
   count = 1
   var hovers = document.querySelectorAll('.hover')
   for(var i = 0; i < hovers.length; i++ ) {
      hovers[i].classList.remove('hover')
   }
}

document.addEventListener('mouseover', function() {
   mousein = true
   reset()
})
