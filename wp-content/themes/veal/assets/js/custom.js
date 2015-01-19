jQuery(document).ready( function () {

	//For Menu Bar
	jQuery('#site-navigation li').find('ul').hide();
		jQuery('#site-navigation li').hover(
			function(){
				
				jQuery(this).find('> ul').slideDown('fast');
			},
			function(){
				jQuery(this).find('ul').hide();
			});	
		
		jQuery('.menu-toggle').toggle(function() {
				jQuery('#site-navigation ul.menu').slideDown();
				jQuery('#site-navigation div.menu').fadeIn();
			},
			function() {
				jQuery('#site-navigation ul.menu').hide();
				jQuery('#site-navigation div.menu').hide();
		});
				
		jQuery('#slider-wrapper ul li').hoverIntent(
			function(){
				jQuery(this).find('.slider-caption').css({
					marginLeft: '-20px',
					opacity: 0
				});
				jQuery(this).find('.slider-caption').stop( true, true ).animate({
					marginLeft: '30px',
					opacity: 1
				});
			},
			function(){
				jQuery(this).find('.slider-caption').stop( true, true ).animate({
					marginLeft: '-10px',
					opacity: 0
				});
			});		
				
		if( jQuery(window).width() < 992 ) {
		    jQuery('article.grid3').unwrap();
	}		
				
	});//end ready
	
	jQuery(document).ready(function(){
					jQuery('.bxslider').bxSlider( {
					mode: 'fade',
					speed: 1000,
					captions: true,
					minSlides: 1,
					maxSlides: 1,
					adaptiveHeight: true,
					auto: true,
					preloadImages: 'all',
					pause: 5000,
					autoHover: true } );
					});
					
	jQuery(document).ready(function(){
					jQuery('.fslider').bxSlider( {
					mode: 'fade',
					speed: 1000,
					captions: true,
					minSlides: 1,
					maxSlides: 1,
					adaptiveHeight: true,
					auto: true,
					preloadImages: 'all',
					pause: 5000,
					autoHover: true } );
					});	