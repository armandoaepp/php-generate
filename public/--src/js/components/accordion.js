$(document).ready(function () {
  $('.accordion-toggle').on('click', function () {
    $padre = $(this).parent('.accordion-item');

    $hermanos = $padre.siblings().removeClass('active');

    $padre.toggleClass('active');
  });

});