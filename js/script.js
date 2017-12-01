
//	var window_width;
//	var window_height;
//
//		window_width = $( window ).width();
//		window_height = $( window ).height();

var $grid = $('.grid').imagesLoaded( function() {
  // init Masonry after all images have loaded
  $grid.masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      horizontalOrder: true,
      transitionDuration: '0.8s'
});
});


 $(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
	    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
    })
  });


$(document).ready(function(){

  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#menu']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})


//	$( document ).ready( function() {
//
//
//		$( '#project-infos' ).click( function(e){
//			e.preventDefault();
//			if( $(this).hasClass( 'open' ) ){
//				$(this).removeClass( 'open' );
//				$( '#project-infos-text' ).removeClass( 'open' );
//				$( '#project-infos-text' ).css( 'top', window_height + 'px' );
//			}else{
//				$( '#project-infos-text' ).addClass( 'open' );
//				$( '#project-infos-text' ).css( 'top', (window_height-$( '#project-infos-text>span' ).outerHeight() - 372 ) + 'px' );
//				$(this).addClass( 'open' );
//			}
//
//		} );
//
//		if( window_width <= 767 ){
//			$( '#project-infos-text' ).css( 'top', window_height + 'px' );
//			$( '#project-infos-text' ).css( 'opacity', '1' );
//		}
//        
//
//		$( '#project-close' ).click( function(e){
//
//			e.preventDefault();
//			window.location = $( 'body' ).attr('data-url');
//
//		});
//        
//        	} );



//( function( $ )
//{
//	var bLazy;
	var window_width;
	var window_height;
//	var mySwiper;

	function resizeIt(){

//		$( 'article>div' ).each(
//			function(){
//				$( this ).css( 'height', $(this).width() * $(this).attr('data-ratio') );
//				$( this ).find( 'div.pj-background').css( 'height', $(this).width() * $(this).attr('data-ratio') );
//			}
//		);
		
		window_width = $( window ).width();
		window_height = $( window ).height();
		
		$( '.swiper-slide.pj-image-display-poster' ).css( 'height', ( $(window).height() - 94 ) + 'px' );
		if( $('body.admin-bar').length > 0 ){
			if( window_width > 782 ){
				$( '.swiper-slide.pj-image-display-poster' ).css( 'height', ( $(window).height() - 126 ) + 'px' );
			}else{
				$( '.swiper-slide.pj-image-display-poster' ).css( 'height', ( $(window).height() - 140 ) + 'px' );	
			}
		}
		
//		$( '.swiper-slide' ).css( 'width', window_width );
//		$( '.swiper-container' ).css( 'width', window_width );
//		$( '.swiper-wrapper' ).css( 'width', window_width );
//		$( '.swiper-button-next' ).css( 'top', Math.round(window_height/2) + 'px' );
//		$( '.swiper-button-prev' ).css( 'top', Math.round(window_height/2) + 'px' );

//		if( $( '#site-header-menu' ).length > 0 ){
//			console.log( window_width );
//			if( window_width <= 736 ){
//				$( '#site-header-menu' ).css( 'top', ( 35 + 12 + $('h1.site-title').height() ) + 'px' );
//			}else{
//				$( '#site-header-menu' ).css( 'top', '' );
//			}
//			
//		}

		resizeInfos();

	}



	function resizeInfos(){
		
		if( window_width <= 767 ){
			if( $( '#project-infos-text' ).hasClass( 'open' ) ){
				$( '#project-infos-text' ).css( 'top', (window_height-$( '#project-infos-text>span' ).outerHeight() - 72 ) + 'px' );
			}else{
				$( '#project-infos-text' ).css( 'top', window_height + 'px' );
			}
		}else{
			$( '#project-infos-text' ).css( 'top', '' );
			$( '#project-infos-text' ).css( 'opacity', '1' );
			$( '#project-infos' ).removeClass( 'open' );
			$( '#project-infos-text' ).removeClass( 'open' );
		}

	}

	$( document ).ready( function() {

		resizeIt();

		mySwiper = new Swiper('.swiper-container', {
			
			loop: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			keyboardControl: true,
			onSlideChangeStart: function(sw){ updateNav(sw) },

			preloadImages: false,
			lazyLoading: true,
			lazyLoadingInPrevNext: true,
			lazyLoadingInPrevNextAmount: 2,
			lazyLoadingOnTransitionStart: true,
			hashnav: true,
			hashnavWatchState: true,
			replaceState: true,
			resizeEvent: 'resize',

		});


		$( '#project-infos' ).click( function(e){
			e.preventDefault();
			if( $(this).hasClass( 'open' ) ){
				$(this).removeClass( 'open' );
				$( '#project-infos-text' ).removeClass( 'open' );
				$( '#project-infos-text' ).css( 'top', window_height + 'px' );
			}else{
				$( '#project-infos-text' ).addClass( 'open' );
				$( '#project-infos-text' ).css( 'top', (window_height-$( '#project-infos-text>span' ).outerHeight() - 372 ) + 'px' );
				$(this).addClass( 'open' );
			}

		} );

		if( window_width <= 767 ){
			$( '#project-infos-text' ).css( 'top', window_height + 'px' );
			$( '#project-infos-text' ).css( 'opacity', '1' );
		}

		$( '#pj-project-close' ).click( function(e){

			e.preventDefault();
			window.location = $( 'body' ).attr('data-url');

		});



		
		resizeIt();

	} );

	$( window ).resize(
		function(){

			resizeIt();
			resizeIt();

		}
	);
	
	$( window ).on( "orientationchange", function( event ) {
		resizeIt();
	});
//
//} )( jQuery );

