// Smoothstate
;(function ($) {
    'use strict';
    var $body    = $('html, body'),
        content  = $('#main').smoothState({
            prefetch: true,
            pageCacheSize: 4,
            blacklist: '.article__content > figure > a, .header__menu',
            onStart: {
                duration: 600,
                render: function () {
                    content.toggleAnimationClass('is-exiting');
                    $body.scrollTop({
                        scrollTop: 0
                    });
                }
            }
        }).data('smoothState');
})(jQuery);

$('.header__menu').click(function(){
    $('.header__navigation').toggleClass('is-open');
    $('.header__menu').toggleClass('is-active');
});

$('.header__navigation').find('a').click(function(){
    $('.header__navigation').removeClass('is-open');
    $('.header__menu').removeClass('is-active');
});

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        if ( $('.header__navigation').hasClass('is-open') )  {
			$('.header__navigation').removeClass('is-open');
		}
		if ( $('.header__menu').hasClass('is-active') ) {
			$('.header__menu').removeClass('is-active');
		}
    }
});

$(window).scroll(function() {
	if ( $('.header__navigation').hasClass('is-open') )  {
		$('.header__navigation').removeClass('is-open');
	}
	if ( $('.header__menu').hasClass('is-active') ) {
		$('.header__menu').removeClass('is-active');
	}
});