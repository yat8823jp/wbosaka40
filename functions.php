<?php
function wbosaka40_load_cssjs() {
	// CSS
	wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wbosaka40_load_cssjs' );

?>