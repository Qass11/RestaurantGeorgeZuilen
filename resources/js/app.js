require('./bootstrap');

function preloaderFadeOutInit(){
    $('.loader').fadeOut(1500);
    $('body').attr('id','');
}

jQuery(window).on('load', function () {
    (function ($) {
        preloaderFadeOutInit();
    })(jQuery);
});

const element = document.querySelector('#customText');
console.log(element)
FileUpload.getInstance(element).update({defaultMsg: 'Hello this is custom message' });