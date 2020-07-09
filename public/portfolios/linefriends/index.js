function slide(){
    var $this = $(this);
    var $slider = $this.closest(".slider");

    $this.addClass("active");
    $this.siblings(".active").removeClass("active");

    var index = $this.index();

    $slider.find(" > .slides > .active").removeClass("active");
    $slider.find(" > .slides > div").eq(index).addClass("active");
}
function dotSlide(){
    var $this = $(this);
    var index = $this.index();
    var $slider = $this.closest(".slider");

    var $current = $slider.find(".pages > div.active");
    var $post;

    if (index == 0) {
        $post = $current.prev();
    } else {
        $post = $current.next();
    }

    if ($post.length == 0) {
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