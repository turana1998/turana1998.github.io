$(".show-more").click(function () {
    if ($(".more").hasClass("d-none")) {
        $(".more").removeClass("d-none");
        $(".more").addClass("d-block");
        $(this).text("Show Less");
    } else {
        $(".more").removeClass("d-block");
        $(".more").addClass("d-none");
        $(this).text("Show More");
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
$("#testimonials .regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'></button>",
    slidesToScroll: 3,
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
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]


});
$("#sertificates .regular").slick({
    dots: true,
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
$("#utilities .regular").slick({
    dots: true,
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
$("#partners .regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 6,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'></button>",
    slidesToScroll: 6


});
$("#premium_services .regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 4,
    prevArrow: "<button type='button' class='prev slick-prev pull-left'></button>",
    nextArrow: "<button type='button' class='next slick-next pull-right'></button>",
    slidesToScroll: 4


});