// Lazy loading
;(function($) {
  $.fn.unveil = function(threshold, callback) {

    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded;

    this.one("unveil", function() {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function() {
        var $e = $(this);
        if ($e.is(":hidden")) return;

        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }
    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);
    unveil();
    return this;
  };
})(window.jQuery);

// FitVids
$(".video").fitVids();

$('img').unveil(0, function() {
    $(this).load(function() {
        this.style.opacity = 1;
    });
});

// Magnific Popup
$('article').magnificPopup({
	delegate: '> section > div > figure > a',
	type:'image',
	image: {
		markup: '<div class="mfp-figure">'+
		    '<div class="mfp-close"></div>'+
		    '<div class="mfp-img"></div>'+
		    '<div class="mfp-bottom-bar">'+
		      '<div class="mfp-title"></div>'+
		      '<div class="mfp-counter"></div>'+
		    '</div>'+
		  '</div>', 
		cursor: 'mfp-zoom-out-cur', 
		titleSrc: 'title', 
		verticalFit: true, 
		tError: '<a href="%url%">The image</a> could not be loaded.' 
	},
	mainClass: 'mfp-fade', 
	zoom: {
		enabled: true, 
		duration: 300, 
		easing: 'ease-in-out', 
		opener: function(openerElement) {
		  return openerElement.is('img') ? openerElement : openerElement.find('img');
		}
	},
	closeOnContentClick: true
});

// $('.article__content > p').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 18,
//    maxFont   : 32
// });

// $('.article__content > ul').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 18,
//    maxFont   : 32
// });

// $('.article__content > blockquote').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 18,
//    maxFont   : 32
// });

// $('.article__content > ol').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 18,
//    maxFont   : 32
// });

// $('.article__header--abstract > p').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 20,
//    maxFont   : 32
// });

// $('.article__share').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 16,
//    maxFont   : 20
// });

// $('.footnotes > ol').flowtype({
//    minimum   : 320,
//    maximum   : 2560,
//    minFont   : 14,
//    maxFont   : 20
// });