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

function YoutubePopup__show(videoId) {
    $('html').addClass('youtube-popup-actived');
    $('.youtube-popup > iframe').attr('src', 'https://www.youtube.com/embed/' + videoId)
  }
  /* html 에 걸어야 유튜브 팝업이 띄워져있을때 더이상 스크롤을 못한다. css 29줄 overflow:hidden;해놨기 때문에 */
  
  function YoutubePopup__hide() {
    $('html').removeClass('youtube-popup-actived');
  }
  /* hide -> 숨기다 */
  
  $(function() {
    $('.img-box').click(function() {
      YoutubePopup__show('YdGtxXYIFQc');
    });
  
    $('.youtube-popup-bg').click(YoutubePopup__hide);
  });
  /* 읽는 방법 .btn-1 클릭하면 YoutubePopup__show('YdGtxXYIFQc'); 실행된다. 그 아래도 동일하게*/

  console.clear();
  function SliderX__init(selector) {
    var $slider = $(selector);
    
    var $pages = $slider.find('.page-box > .pages');
    
    var slidesCount = $slider.find('.slides > div').length;
    var currentIndex = 0;
    
    $slider.data('slider-x-slidesCount', slidesCount);
    $slider.data('slider-x-currentIndex', currentIndex);
    
    $slider.find('.slides > div').each(function(index, el) {
      var $el = $(el)
      var type1 = $el.attr('data-slider-x-img-type-1');
      var imgUrl = $el.attr('data-slider-x-img-url');
      
      $el.css('background-image', 'url(' + imgUrl + ')');
      
      var $btn = $('<div></div>');
      $btn.css('background-image', 'url(' + imgUrl + ')');
      $btn.attr('data-slider-x-img-type-1', type1);
      $pages.append($btn);
    });
    
    $pages.find(' > div').click(function() { 
      SliderX__show($slider, $(this).index());
    });
    
    $slider.find('.side-btns > div:first-child').click(function() {
      SliderX__movePrev($slider);
    });
    
    $slider.find('.side-btns > div:last-child').click(function() {
      SliderX__moveNext($slider);
    });
    
    $slider.find('.page-box > :first-child').click(function() {
      SliderX__movePrevGroup($slider);
    });
    
    $slider.find('.page-box > :last-child').click(function() {
      SliderX__moveNextGroup($slider);
    });
  
    SliderX__show($slider, 0);
  }
  
  function SliderX__movePrev($slider) {
    var postIndex = $slider.data('slider-x-currentIndex') - 1;
    var slidesCount = $slider.data('slider-x-slidesCount');
    
    if ( postIndex < 0 ) {
      postIndex = slidesCount - 1;
    }
    
    SliderX__show($slider, postIndex);
  }
  
  function SliderX__moveNext($slider) {
    var postIndex = $slider.data('slider-x-currentIndex') + 1;
    var slidesCount = $slider.data('slider-x-slidesCount');
    
    if ( postIndex + 1 > slidesCount ) {
      postIndex = 0;
    }
    
    SliderX__show($slider, postIndex);
  }
  
  function SliderX__movePrevGroup($slider) {
    var currentIndex = $slider.data('slider-x-currentIndex');
    
    // 현재 활성화된 녀석
    var $current = $slider.find('.slides > div').eq(currentIndex);
    
    var type1 = $current.attr('data-slider-x-img-type-1');
    
    // 이전그룹의 마지막 녀석 찾기
    var $post = $current.parent().children('[data-slider-x-img-type-1="' + type1 + '"]').first().prev();
    
    if ( $post.length > 0 ) {
      var type1OfPost = $post.attr('data-slider-x-img-type-1');
  
      $post = $current.parent().children('[data-slider-x-img-type-1="' + type1OfPost + '"]').first();
    }
    else {
      $post = $current.parent().children().last();
      
      var type1OfPost = $post.attr('data-slider-x-img-type-1');
  
      $post = $current.parent().children('[data-slider-x-img-type-1="' + type1OfPost + '"]').first();
    }
    
    var postIndex = $post.index();
    
    SliderX__show($slider, postIndex);
  }
  
  function SliderX__moveNextGroup($slider) {
    var currentIndex = $slider.data('slider-x-currentIndex');
    
    // 현재 활성화된 녀석
    var $current = $slider.find('.slides > div').eq(currentIndex);
    
    var type1 = $current.attr('data-slider-x-img-type-1');
    
    // 다음그룹의 첫번째 찾기
    var $post = $current.parent().children('[data-slider-x-img-type-1="' + type1 + '"]').last().next();
    
    if ( $post.length == 0 ) {
      $post = $current.parent().children().first();
    }
    
    var postIndex = $post.index();
    
    SliderX__show($slider, postIndex);
  }
  
  function SliderX__show($slider, postIndex) {
    var currentIndex = $slider.data('slider-x-currentIndex');
    var $current = $slider.find('.slides > div').eq(currentIndex);
    var $post = $slider.find('.slides > div').eq(postIndex);
    
    var type1 = $post.attr('data-slider-x-img-type-1');
    
    $current.removeClass('active');
    $post.addClass('active');
    
    $slider.data('slider-x-currentIndex', postIndex);
    
    $slider.find('.page-box > .pages > div').removeClass('active');
    $slider.find('.page-box > .pages > div').eq(postIndex).addClass('active');
    
    $slider.find('.page-box > .pages > div').removeClass('visible');
    $slider.find('.page-box > .pages > div[data-slider-x-img-type-1="' + type1 + '"]').addClass('visible');
  }
  
  $(function() {
    SliderX__init('.slider-x-1');
  });