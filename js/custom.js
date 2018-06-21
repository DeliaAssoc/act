$( document ).ready( function() {

	// VARIABLES
	$modal = $( '.modal-search-window' ),
	$modalClose = $( '.modal-search-window .close' ),
	$mobSearch = $( 'a.mobile-search' ),
	$dsktpSearch = $( 'a.dsktp-search' ),
	$headerHeight = $( '.site-header' ).height(),
	$siteCont = $( '.content-area' );

	$siteCont.css( 'paddingTop', $headerHeight - 5 );

	// OPEN/CLOSE MOBILE SEARCH
	$mobSearch.on( 'click', function( e ){

		e.preventDefault();
		$modal.fadeIn();

	});

	$dsktpSearch.on( 'click', function( e ){

		e.preventDefault();
		$modal.fadeIn();

	});

	( $modalClose ).on( 'click', function( e ){
		$modal.fadeOut();
	});

	// OPEN SEARCH FORM
	$( 'a.search' ).on( 'click', function( e ){

			e.preventDefault();
			
			if ( $('.search-field').hasClass( 'opened' ) ) {
				$('.search-field').removeClass( 'opened' );
			} else {
				$('.search-field').addClass( 'opened' );
			}
	});


	// TESTIMONIALS MODULE SLIDER
	$( '.t-slider' ).slick({
		arrows: false,
		dots: true
	});

	// Smooth Scroll for Back To Top Button *Thank you CSS-TRICKS*
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});

	// Show/Hide Back to Top button on scroll
	$( window ).on( 'scroll', function()
	{
		var $scrolled = $( window ).scrollTop(),
			$btt = $( '#back-to-top' );

		if ( $scrolled > 150 )
		{
			$btt.addClass( 'visible' );
		} else if ( $scrolled < 150 )
		{
			$btt.removeClass( 'visible' );
		}
	});
});

