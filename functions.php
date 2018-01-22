<?php

function all_fuction(){






// add css js 
	add_action('wp_enqueue_scripts','my_script');

	if(!function_exists('my_script')){


	function my_script (){


		wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/assets/css/bootstrap.css');
		wp_enqueue_style('bootstrapmin',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style('customestyle',get_stylesheet_directory_uri().'/assets/css/custom.css');
		wp_enqueue_style('style',get_stylesheet_uri());



		wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.js');
		wp_enqueue_script('bootstrapMinj',get_template_directory_uri().'/assets/js/bootstrap.min.js');
		wp_enqueue_script('holder',get_template_directory_uri().'/assets/js/holder.min.js');
		wp_enqueue_script('viewport',get_template_directory_uri().'/assets/js/ie10-viewport-bug-workaround.js');
		wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery-1.11.3.min.js');
	}
}


// add meenu

		add_action('init','my_menu');

		if(!function_exists('my_menu')){
			function my_menu(){
				register_nav_menu('main','main manu');
				register_nav_menu('foot', 'footer menu');
			}
		}






}



add_action('after_setup_theme','all_fuction');
