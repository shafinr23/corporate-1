<?php



function all_fuction(){

// add css js 
	add_action('wp_enqueue_scripts','my_own_script');

	if(!function_exists('my_own_script')){


	function my_own_script (){

		wp_enqueue_style('style',get_stylesheet_directory_uri().'/assets/css/basic.css');
		wp_enqueue_style('style',get_stylesheet_directory_uri().'/assets/css/basic.css');
		wp_enqueue_style('style',get_stylesheet_directory_uri().'/assets/css/basic.css');


		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
	}

}


}



add_action('after_setup_theme','all_fuction');
