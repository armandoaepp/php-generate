/* navbar-fixed */
/**
 * [data-navbar="navbar-fixed"]: required
 * [data-media="PROPERTY"] :  [md-up, sm-up OR number ]  : optionan
 */

(function (document) {

  var navbar = document.querySelector("[data-navbar=\"sticky\"]");
  // console.log( navbar );

  if (navbar) {

    var sticky = navbar.offsetTop;

    function stickyScroll() {
      // console.log(window.pageYOffset, sticky);
      if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }

    // window.onscroll = function () { stickyScroll() };

    window.addEventListener('scroll', function() {
       stickyScroll();
    });


  }


})(document);