
$(document).ready(function() {
	// Initialize lightboxes.
	// from http://bootsnipp.com/snippets/featured/bootstrap-lightbox
	
	var $lightbox = $('#lightbox');
	
	$('[data-target="#lightbox"]').on('click', function(event) {
		var $img = $(this).find('img'), 
			src = $img.attr('src'),
			alt = $img.attr('alt'),
			css = {
				'maxWidth': $(window).width() - 100,
				'maxHeight': $(window).height() - 100
			};
	
		$lightbox.find('.close').addClass('hidden');
		$lightbox.find('img').attr('src', src);
		$lightbox.find('img').attr('alt', alt);
		$lightbox.find('img').css(css);
	});
	
	$lightbox.on('shown.bs.modal', function (e) {
		var $img = $lightbox.find('img');
			
		$lightbox.find('.modal-dialog').css({'width': $img.width()});
		$lightbox.find('.close').removeClass('hidden');
	});
	
	// Enable mobile swipe controls for carousels.
	
	var $carousel = $('.carousel');
	
	$carousel.swiperight(function() {  
		$(this).carousel('prev');
	});
	
	$carousel.swipeleft(function() {  
		$(this).carousel('next');
	});
	
	// Client-side numeric validation:
	$('.input-numeric').keypress(function(e) {
		var a = [];
		var k = e.which;

		for (i = 48; i < 58; i++)
			a.push(i);

		if (!(a.indexOf(k)>=0))
			e.preventDefault();
	});
});