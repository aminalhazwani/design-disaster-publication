var container = document.querySelector('.index__navigation--list');
$container.masonry({
	columnWidth: function( containerWidth ) {
		return containerWidth / 2
	}
});