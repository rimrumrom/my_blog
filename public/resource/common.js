function LeftSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $('.mobile-side-bar').removeClass('active');
    }
    else {
        $btn.addClass('active');
        $('.mobile-side-bar').addClass('active');
    }
}

function LeftSideBar__init() {
    $('.btn-toggle-mobile-side-bar').click(LeftSideBar__toggle);
}

$(function() {
    LeftSideBar__init();
});