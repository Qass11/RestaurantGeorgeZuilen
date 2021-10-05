function preloaderFadeOutInit(){
    $('.loader').fadeOut(1500);
    $('body').attr('id','');
}

jQuery(window).on('load', function () {
    (function ($) {
        preloaderFadeOutInit();
    })(jQuery);
});