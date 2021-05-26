// $(".navbar-toggler").click(function () {

//   // var element = document.querySelector("#nav_togle");
//   // console.log(document.querySelector("#nav_togle"));
//   if (document.querySelector("#nav_togle").classList.contains("collapsed")) {
//     document.getElementById("footer").style.display = "none"
//     document.getElementById("navmakenone").style.display = "none"
//     setTimeout(function () {
//       document.getElementById("overlay").style.display = "block";
//     }, 340)
//   } else {
//     // alert()
//     document.getElementById("navmakenone").style.display = "block"
//     document.getElementById("footer").style.display = "block"
//     setTimeout(function () {
//       document.getElementById("overlay").style.display = "none";
//     }, 20)
//   }
// });
// $(".collapsed").click(function () {
//     document.getElementById("overlay").style.display = "block";
// });


// function on() {

// }

// function off() {
//     document.getElementById("overlay").style.display = "none";
// }
$(document).on('ready', function () {

  $('.field').on('focus', function () {
    $('body').addClass('is-focus');
  });

  $('.field').on('blur', function () {
    $('body').removeClass('is-focus is-type');
  });

  $('.field').on('keydown', function (event) {
    $('body').addClass('is-type');
    if ((event.which === 8) && $(this).val() === '') {
      $('body').removeClass('is-type');
    }
  });

});
let navStatus = false;
$("#mobile-toggle").click(function () {
  console.log("j");

  $("#mobile-ul").attr("style", "display:block !important;");
  if (navStatus) {
    $(".mobile-navbar").animate({
      left: "-204px",
    }, 1000);
    navStatus = false;
    document.getElementById("overlay").style.display = "none";
    $("#nav-button").removeClass();
    $("#nav-button").addClass("fas fa-bars")
  } else {
    $(".mobile-navbar").animate({
      left: "0px",
    }, 1000);
    navStatus = true;
    document.getElementById("overlay").style.display = "block";
    $("#nav-button").removeClass();
    $("#nav-button").addClass("fa fa-times ml-1")

  }
});
var btn = $('.circle_a');
btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});
$('.hover-item').hover(function () {
  $(this).find('.dropdown-content').stop(true, true).delay(500).fadeIn(800);
}, function () {
  $(this).find('.dropdown-content').stop(true, true).delay(500).fadeOut(800);
});
//page preloader
jQuery(".preloaderimg").fadeOut(150);
jQuery(".preloader").fadeOut(350).delay(200, function(){
  jQuery(this).remove();
  });