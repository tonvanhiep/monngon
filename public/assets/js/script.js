$(document).ready(function() {
    var swiper = new Swiper('.home-swiper', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
    });

    var reviewSlider = new Swiper('.review-slider', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
    // Xử lý thẻ script trong CSRF.

  // $('input').val().trim().replace(/(<([^>]+)>)|&|<|>|"|'/ig, '')
});
