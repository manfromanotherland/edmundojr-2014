$(function () {

	/*
	 * AJAX SEND FORM
	 */
	var $contactForm = $('#contact-form');
	$contactForm.submit(function(e) {
		e.preventDefault();
		$.ajax({
			url: '//formspree.io/hello@edmundojr.com',
			method: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function() {
				$contactForm.find('.col:last-child').append('<div class="alert alert--loading">Sending message…</div>');
			},
			success: function(data) {
				$contactForm.find('.alert--loading').hide();
				$contactForm.find('.col:last-child').append('<div class="alert alert--success">Message sent. Thanks a million!</div>');
			},
			error: function(err) {
				$contactForm.find('.alert--loading').hide();
				$contactForm.find('.col:last-child').append('<div class="alert alert--error">Ops, there was an error. Maybe try again?</div>');
			}
		});
	});

});

function headerParallax() {

	// Variables
	var scrollVal = Math.max(window.pageYOffset,0),
		bgImage = document.querySelector('.bg-image');

	bgImage.style.webkitTransform = 'translate3d(0, ' + -(scrollVal/3) + 'px, 0)';
	bgImage.style.MozTransform = 'translate3d(0, ' + -(scrollVal/3) + 'px, 0)';
	bgImage.style.msTransform = 'translateY(' + -(scrollVal/3) + 'px)';
	bgImage.style.OTransform = 'translate3d(0, ' + -(scrollVal/3) + 'px, 0)';
	bgImage.style.transform = 'translate3d(0, ' + -(scrollVal/3) + 'px, 0)';
	bgImage.style.opacity = 1-(scrollVal/500);

}

document.addEventListener('scroll', headerParallax, false);