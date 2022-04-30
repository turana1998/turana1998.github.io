$(".show-more").click(function () {
    if ($(".more").hasClass("d-none")) {
        $(".more").removeClass("d-none");
        $(".more").addClass("d-block");
        $(this).text("Less");
    } else {
        $(".more").removeClass("d-block");
        $(".more").addClass("d-none");
        $(this).text("Show More");
    }
});
$(".call-me-click").click(function () {
  if ($(".call-me-modal").hasClass("d-none")) {
      $(".call-me-modal").removeClass("d-none");
      $(".call-me-modal").addClass("d-block");
  } else {
      $(".call-me-modal").removeClass("d-block");
      $(".call-me-modal").addClass("d-none");
  }
});

$("#lottery .regular").slick({
    dots: false,
    arrows: false,
    infinite: false,
    centerMode: false,
    centerPadding: '20px',
    // slidesToShow: 1.1,


});
$("#mobile-lottery .regular").slick({
  dots: false,
  arrows: false,
  infinite: false,
  centerMode: false,
  centerPadding: '20px',
  slidesToShow: 1.1,


});
$("#testimonials .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'><img src='../Images/m-before.png'/></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'><img src='../Images/m-next.png'/></button>",
    slidesToScroll: 3,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
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
$("#services .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'></button>",
    slidesToScroll: 4,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
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
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]


});
$("#sertificates .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'></button>",
    slidesToScroll: 4,
   


});
$("#utilities .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    prevArrow: false,
    nextArrow:false,
    slidesToScroll: 4,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
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
$("#partners .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    prevArrow: false,
    nextArrow: false,
    slidesToScroll: 6,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
          dots: false
        }
      }
    ]


});
$("#premium_services .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'></button>",
    slidesToScroll: 4


});