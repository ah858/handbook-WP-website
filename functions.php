<?php

// Add theme support for Featured Images

add_theme_support('post-thumbnails', array(
	'post', 'page', 'custom-post-type-name',));

/*
function theme_setup() {
	add_theme_support( ‘post-thumbnails’ ); 
}
*/

function load_openTab()
{
    // Register the script like this for a theme:
    wp_register_script( 'openTab', get_template_directory_uri() . '/js/openTab.js', array( 'jquery' ) );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'openTab' );
}

?>