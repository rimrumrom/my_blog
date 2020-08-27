function swiper__init(){
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
  
}

var $html = $('html');
/*탑바안에 메뉴박스에 마우스 올릴때 활성화*/
function TopBar__init() {
  $('.top-bar .menu-box-1').mouseenter(function() {
    $html.addClass('top-bar-menu-box-1-actived');
  });

  $('.top-bar .menu-box-1').mouseleave(function() {
    $html.removeClass('top-bar-menu-box-1-actived');
  });
}



var $window = $(window);
// 스크롤바를 통해서 얼만큼 깊이 내려왔는지(px)
var windowScrollTop = $window.scrollTop();
// 윈도우 창의 높이
var windowHeight = $window.height();

function FootBar__init() {
  var isOn = false;
  // 따라다니는 풋바
  var $footBar = $('.foot-bar');
  // 따라다니는 풋바높이
  var footBarHeight = $footBar.height();
  // 풋바가 앉아야 하는 녀석이 천장으로 부터 얼만큼 밑에 있는지(px)
  var footBarOnOffsetTop = $('.foot-bar-on').offset().top;

  // 하단에 붙어있을 때 윈도우 리사이즈 하면 이상한 애니메이션이 나오는데
  // 그걸 숨긴다.
  var showFootBarSoon = _.throttle(function() {
      setTimeout(function() {
          $footBar.css('opacity', 1);
      }, 500);
  }, 50);

  // 윈도우 크기가 달리지면, footBarOnOffsetTop와 footBarHeight와 windowHeight의 값을 다시계산한다.
  var onWindowResize = _.throttle(function() {
      if ( isOn ) {
          $footBar.css('opacity', 0);
          showFootBarSoon();
      }
      footBarOnOffsetTop = $('.foot-bar-on').offset().top;
      footBarHeight = $footBar.height();
      windowHeight = $window.height();
      onScroll();
  }, 100);

  $window.resize(onWindowResize);

  var onScroll = _.throttle(function() {
      windowScrollTop = $window.scrollTop();

      // 정해진 선을 넘었다면 고정모드로 바꾸기 위해서 absolute로 바꾼다.
      if ( windowScrollTop + windowHeight > footBarOnOffsetTop ) {
          isOn = true;
          $footBar.css({
              position:'absolute',
              bottom:'',
              top:(footBarOnOffsetTop - footBarHeight)
          });
      }
      else {
          isOn = false;
          $footBar.css({
              position:'',
              bottom:'',
              top:''
          });
      }
  }, 50);

  $window.scroll(onScroll);

  onWindowResize();
}

function ActiveOnVisible__init() {
  $(window).resize(ActiveOnVisible__initOffset);
  ActiveOnVisible__initOffset();

  $(window).scroll(ActiveOnVisible__checkAndActive);
  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
  $('.active-on-visible').each(function(index, node) {
      var $node = $(node);

      var offsetTop = $node.offset().top;
      $node.attr('data-active-on-visible-offsetTop', offsetTop);

      if ( !$node.attr('data-active-on-visible-diff-y') ) {
          $node.attr('data-active-on-visible-diff-y', '0');
      }

      if ( !$node.attr('data-active-on-visible-delay') ) {
          $node.attr('data-active-on-visible-delay', '0');
      }
  });

  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() { 
  $('.active-on-visible:not(.actived)').each(function(index, node) {
      var $node = $(node);

      var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
      var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
      var delay = parseInt($node.attr('data-active-on-visible-delay'));

      var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

      if ( $(window).scrollTop() + $(window).height() + diffY > offsetTop ) {
          $node.addClass('actived');

          setTimeout(function() {
              $node.addClass('active');
              if ( window[callbackFuncName] ) {
                  window[callbackFuncName]($node);
              }
          }, delay);
      }
  });
}


$(function(){
  swiper__init();
  FootBar__init();
  TopBar__init();
  ActiveOnVisible__init();
})