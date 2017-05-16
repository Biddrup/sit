<?php
	function sit_setup(){
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme','sit_setup');

	function sit_scripts(){
		wp_enqueue_style('main-css', get_stylesheet_uri(), array('extra-css'), 'v1.0', 'all');
		wp_enqueue_style('extra-css', get_template_directory_uri().'/css/extra.css', null, 'v1.01', 'all');
		wp_enqueue_script('jquery');
		wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'), 'v2.01', true);
	}
	add_action('wp_enqueue_scripts','sit_scripts');