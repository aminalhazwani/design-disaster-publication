$('.header__menu').click(function(){
    $('.header__navigation').toggleClass('is-open');
    $('.header__menu').toggleClass('is-active');
});

$('.header__navigation').find('a').click(function(){
    $('.header__navigation').removeClass('is-open');
    $('.header__menu').removeClass('is-active');
});

$(window).scroll(function() {
	if ( $('.header__navigation').hasClass('is-open') )  {
		$('.header__navigation').removeClass('is-open');
	}
	if ( $('.header__menu').hasClass('is-active') ) {
		$('.header__menu').removeClass('is-active');
	}
});