function popupClick__init(){
    $('.popup-box, .popup-box > .popup > .btn-close').click(function() {
        $('html').removeClass('no-scroll');
    });

    $('.hobby > .gallery > div > .img-box').click(function() {
        $('html').addClass('no-scroll');
    });
    
    $('.popup-box > .popup').click(function(e){
        e.stopPropagation();
    });
};

$(function(){
    popupClick__init();
});