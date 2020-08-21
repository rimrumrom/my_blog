$(function () {

    var swiper = new Swiper('.my-slider-1 > .swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      speed : 1000,
      pagination: {
        el: '.pagination',
        type: 'fraction',
      },
      navigation: {
        nextEl: '.btn-next',
        prevEl: '.btn-prev',
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  
    $('.my-slider-1 > .swiper-container .btn-start').click(function() {
      swiper.autoplay.start();
      $('.my-slider-1').addClass('autoplay-now-work');
    });
  
    $('.my-slider-1 > .swiper-container .btn-stop').click(function() {
      swiper.autoplay.stop();
      $('.my-slider-1').removeClass('autoplay-now-work');
    });
    
  });
