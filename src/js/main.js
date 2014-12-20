$('.header__menu').click(function(){
    $('.header__navigation').toggleClass('is-open');
    $('.header__menu').toggleClass('is-active');
    console.log('header menu clicked');
});

$('.header__navigation').find('a').click(function(){
    $('.header__navigation').removeClass('is-open');
    $('.header__menu').removeClass('is-active');
    console.log('header menu link clicked');
});

$(window).scroll(function() {
	if ( $('.header__navigation').hasClass('is-open') )  {
		$('.header__navigation').removeClass('is-open');
		console.log('scroll');
	}
	if ( $('.header__menu').hasClass('is-active') ) {
		$('.header__menu').removeClass('is-active');
		console.log('scroll');
	}
});