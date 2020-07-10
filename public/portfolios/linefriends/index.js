function slide(){
    var $this = $(this);
    var $slider = $this.closest(".slider");

    $this.addClass("active");
    $this.siblings(".active").removeClass("active");
    /* siblings(".active") : 자기 형제중에 active 걸린 애를 불러오고 (현재)자기 자신은 떠난다*/
    /*점 버튼 눌렀을때 실행되는 과정 끝*/

    var index = $this.index();   /*-> 점 의 순서*/

    $slider.find(" > .slides > .active").removeClass("active"); /* 슬라이더가 작동했던 것은 떠나게 한다*/
    $slider.find(" > .slides > div").eq(index).addClass("active");
    /* -> var index = $this.index(); 점의 순서 랑 같이 연동되게 하려고 eq(index)를 써서 슬라이더의 순서와 동일하게 불러오는것 */ 
}

function  dotSlide(){
    var $this = $(this);
    var index = $this.index();  /*index : 부모안에 몇번째 형제인지 알려줌*/
    var $slider = $this.closest(".slider"); /*closest : 같은 이름을 가진 부모가 있어도! 가장 먼저 만나는 부모를 찾아줌 */

    var $current = $slider.find(".pages > div.active"); /* -> 점 슬라이드*/
    /* 무조건 자손들 안에서 active가 걸린 애만 찾아옴*/ 
    var $post;

    if (index == 0) {
        $post = $current.prev(); /*자기기준 형*/
    } else {
        $post = $current.next(); /*자기기준 동생*/
    }

    if ($post.length == 0) {  /* length  : 교장이 관리하는 학생 수를 알려준다, length == 0 인 이유는 더이상 관리하는 학생이 없으므로 (낭떠러지 만난다)*/ 
        if (index == 0) {
            $post = $slider.find(".pages > div:last-child");
        } else {
            $post = $slider.find(".pages > div:first-child");
        }
    }

    $post.click();
}



function slide__init(){
    $(".slider > .pages > div").click(slide);
    $(".slider > .side-btns > div").click(dotSlide);
}



$(function(){
    slide__init();
})

$(document).ready(function(){
    $('.select-lang').click(function() {
        if ( $(this).hasClass('active') )
        {
            $(this).removeClass('active');
        }
        else
        {
            $(this).addClass('active');
        }
    });
});




/*
function Slider1__moveNext() {
    var $slider = $('.slider-1');
    var $nextBtn = $slider.find('.side-btns > div:last-child');
    $nextBtn.click();
}

setInterval(Slider1__moveNext, 3000);
*/