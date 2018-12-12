
$(document).ready( function() {
	gridBoxLoad();
})

function gridBoxLoad() {
	var gridInterval = 100,
		index = 1;

	$('.grid .box').each( function() {
		(function(that) { 
            var t = setTimeout(function() { 
                $(that).fadeIn( function() { gridBoxImageFix($('.image', this)) } );
            }, gridInterval * index);
        })(this);
        index++;
	});

}

function gridBoxImageFix(el) {
	var boxWidth = $(el).width();
	$(el).height(boxWidth * (180 / 320));
}