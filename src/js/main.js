function preloaderFadeOutInit(){
    $('.loader').fadeOut(5000);
    $('body').attr('id','');
}
// Window load function
jQuery(window).on('load', function () {
    (function ($) {
        preloaderFadeOutInit();
    })(jQuery);
});