var $html = $('html');

/* 숫자 카운트 라이브러리 시작 */
function NumAni__start(selector) {
  $(selector).each(function(index, node) {
    var $el = $(node);

    var start = parseInt($el.attr('data-num-ani-start'));
    var interval = parseInt($el.attr('data-num-ani-interval'));

    $el.attr('data-num-ani-interval-current', interval);

    $el.text(start);

    NumAni__increaseNum($el);
  });
}

function NumAni__increaseNum($el) {
  var current = parseInt($el.text());
  var end = parseInt($el.attr('data-num-ani-end'));
  var stride = parseInt($el.attr('data-num-ani-stride'));
  var interval = parseInt($el.attr('data-num-ani-interval-current'));
  var slowPoint = parseFloat($el.attr('data-num-ani-slow-point'))

  if (current < end) {
    if ( current > end * slowPoint ) {
      interval += parseInt($el.attr('data-num-ani-slow-add-interval'));
      if ( interval > 100 ) {
        interval = 100;
      }
      $el.attr('data-num-ani-interval-current', interval);
    }

    if ( current + stride > end ) {
      $el.text(end);
    }
    else {
      $el.text(current + stride);
    }

    setTimeout(function () {
      NumAni__increaseNum($el);
    }, interval);
  }
  else {
    $el.addClass('num-action-done');
  }
}
/* 숫자 카운트 라이브러리 끝 */

function Fullpage__init() {
  new fullpage('#fullpage', {
    verticalCentered: false,
    navigation: true,
    anchors: ['section1', 'section2', 'section3'],
    menu: '#menu',
    responsiveWidth: 1120,
    onLeave: function(origin, destination, direction){
      var className = 'fullpage-section-loaded-once-' + destination.anchor;
      
      if ( $html.hasClass(className) == false ) {
        $html.addClass(className);
        
        var onActiveOnceFunctionName = $(destination.item).attr('data-on-active-once-function-name');
        if ( onActiveOnceFunctionName ) {
          window[onActiveOnceFunctionName]();
        }
      }
    }
  });
}

function Section2__startNumAni() {
  setTimeout(function() {
    NumAni__start($('.section2 .num'));
  }, 1000);
}

Fullpage__init();
