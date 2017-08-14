<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array ( 'jquery' ), 1.1, true);
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');