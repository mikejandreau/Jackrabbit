// Smooth scrolling

(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

// SCROLLUP BUTTON
// show scrollup button after scrolling 300px
// scrollToTopButton = document.getElementById("scrollUpButton");
var showScrollToTop = function () {
  var y = window.scrollY;
  if (y >= 300) {
    $("#scrollUpButton").addClass("show");
  } else {
    $("#scrollUpButton").removeClass("show");
  }
};
window.addEventListener("scroll", showScrollToTop);

})(jQuery); // End of use strict
