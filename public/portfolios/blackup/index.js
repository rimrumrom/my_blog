console.clear();

function scroll__init(){
    $(window).scroll(function() {  
        var scrollTop = $(window).scrollTop();
        /* 스크롤할때 마다 실행 / scrollTop : 스크롤 맨위로 부터 얼마큼 내려왔냐? */
        if ( scrollTop > 50 ) {
          $('.header').addClass('follow');
        }
        /* 만약에 scrollTop 이 50px을 넘었다 > .top-bar를 찾아서 따라오게하기 */
        else {
          $('.header').removeClass('follow');
        }
        /* 안넘었을때에는 사라져라 */
      });
}

function slider1__init(){
    $('.main_slider > .owl-carousel').owlCarousel({
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        loop:true,
        margin:0,
        nav:true,
        navText:['<img src="http://black-up.kr/web/upload/yangji_pc_crumb/control_left.png">', '<img src="http://black-up.kr/web/upload/yangji_pc_crumb/control_right.png">'],
        responsive:{
            0:{
                items:1
            }
        }
    })
}

function slider2__init(){
    $('.banner-1 > .owl-carousel').owlCarousel({
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        loop:true,
        margin:120,
        nav:true,
        navText:['<img src="http://black-up.kr/web/upload/yangji_pc_crumb/control_left.png">', '<img src="http://black-up.kr/web/upload/yangji_pc_crumb/control_right.png">'],
        responsive:{
            0:{
                items:2
            }
        }
    })
}

$(function(){
    slider1__init();
    slider2__init();
    scroll__init();
})