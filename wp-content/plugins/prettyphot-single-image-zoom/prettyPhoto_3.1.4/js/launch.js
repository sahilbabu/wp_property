/*
 * Launching the js wrapper
 */
		jQuery(document).ready(function(){
				jQuery("a[rel^='prettyPhoto-img']").prettyPhoto({
					animation_speed: 'normal', /* fast/slow/normal */
					social_tools: false,
					theme: 'dark_square',
				});
		});