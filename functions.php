<?php
	function sit_setup(){
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme','sit_setup');

	function sit_scripts(){
		wp_enqueue_style('main-css', get_stylesheet_uri(), null, 'v1.0', 'all');
	}
	add_action('wp_enqueue_scripts','sit_scripts');