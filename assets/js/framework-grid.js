
$(window).on('load', function() {
	gridBoxImage();
})

function gridBoxImage() {
	var boxWidth = $('.grid .box .image').width();
	$('.grid .box .image').height(boxWidth * (180 / 320));
}