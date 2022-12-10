  <!-- 
//   Theme funtions
//   @package Aquila
// -->
<?php 



// (filemtime(get_template_directory() . '/assets/main.js'));
// print_r(get_template_directory_uri(). '/assets/main.js');
/**
 * Proper way to enqueue scripts and styles
 */

function aquila_enqueue_script() {
	wp_register_style( 'style-css', get_stylesheet_uri(), [] ,  filemtime(get_template_directory() . '/style.css' ), 'all');
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	// wp_enqueue_script('main-js' , get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() ,'all',true));
	wp_register_script("main-js",get_template_directory_uri(). '/assets/main.js',[], filemtime(get_template_directory(). '/assets/main.js'),array(),'all',true);


	wp_enqueue_style('style-css');
	wp_enqueue_script('main-js');

	
}
add_action( 'wp_enqueue_scripts', 'aquila_enqueue_script' );

?>