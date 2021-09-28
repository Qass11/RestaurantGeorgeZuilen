function preloaderFadeOutInit(){
    $('.loader').fadeOut(5000);
    $('body').attr('id','');
}

jQuery(window).on('load', function () {
    (function ($) {
        preloaderFadeOutInit();
    })(jQuery);
});