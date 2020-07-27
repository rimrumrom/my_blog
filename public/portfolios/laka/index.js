console.clear();

var $window = $(window);
var $html = $('html');

function Slider1__init() {
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        /*direction: 'vertical' -> 세로 (위,아래) */
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction' /* -> 글자 : 분수 */  
        },
    });

    setTimeout(function() {
        $html.addClass('box-1-actived');
    }, 1000);
}

Slider1__init();

function TopBar__init() {
    $window.scroll(function() {
        var scrollTop = $window.scrollTop();
        
        if ( scrollTop > 100 ) {
            $html.addClass('scroll-top-100-up');
        }
        else {
            $html.removeClass('scroll-top-100-up');
        }
    });
}

TopBar__init();
/* 화면 줄어들게하는 애니메이션 실행, 1000 -> 1초 */