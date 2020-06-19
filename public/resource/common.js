function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $mobileSideBar = $('.mobile-side-bar');
    var $mobileSideBarBg = $('.mobile-side-bar-bg');
    var $html = $('html');

    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $mobileSideBar.removeClass('active');
        $mobileSideBarBg.removeClass('active');
        $html.removeClass('mobile-side-bar-actived');
    } else {
        $btn.addClass('active');
        $mobileSideBar.addClass('active');
        $mobileSideBarBg.addClass('active');
        $html.addClass('mobile-side-bar-actived');
    }
}
function slider(){
    var $this = $(this);
    var $slider = $this.parent().parent();
    var $current = $slider.find('> .slides > .active');
    var $post;

    var isleft = $this.index() == 0;
    if (isleft) {
        $post = $current.prev();
        if ($post.length == 0) {
            $post = $slider.find('> .slides > :last-child');
        }
    }
    else {
        $post = $current.next();
        if ($post.length == 0) {
            $post = $slider.find('> .slides > :first-child');
        }
    }
    $current.removeClass('active');
    $post.addClass('active');
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);

    $('.mobile-side-bar .menu-box-2 ul > li').click(function (e) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
        e.stopPropagation();
    });
    $('mobile-slider > side-bar > div').click(slider);
}

$(function () {
    MobileSideBar__init();
});