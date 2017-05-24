<?php
	function sit_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_image_size('excerpt-image-size', 700, 400, true);
		add_image_size('content-image-size', 600, 400, true);
		add_image_size('search-image-size', 100, 100, true);
		register_nav_menus(array(
			'header_menu' => 'Header Menu',
			'footer_menu' => 'Footer Menu',
			'front_page_menu' => 'Front page menu',
		));
		add_theme_support('html5');
	}
	add_action('after_setup_theme','sit_setup');

	function sit_scripts(){
		wp_enqueue_style('main-css', get_stylesheet_uri(), array('extra-css'), 'v1.0', 'all');
		wp_enqueue_style('extra-css', get_template_directory_uri().'/css/extra.css', null, 'v1.01', 'all');
		wp_enqueue_script('jquery');
		wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'), 'v2.01', true);
	}
	add_action('wp_enqueue_scripts','sit_scripts');

	function sit_widgets(){
		register_sidebar(array(
			'name' => 'Widget One',
			'id' => 'widget_one',
		));
		register_sidebar(array(
			'name' => 'Widget Two',
			'id' => 'widget_two',
		));
	}
	add_action('widgets_init', 'sit_widgets');

	function sit_custom_posts(){
		register_post_type('sit_product', array(
			'labels' => array(
				'name' => 'Sit Product',
				'menu_name' => 'Sit Menu',
				'all_items' => 'Sit All Products',
				'add_new' => 'Add new product',
				'add_new_item' => 'Add new sit product',
			),
			'public' => true,
			'supports' => array(
				'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes',
			),
		));
	}
	add_action('init','sit_custom_posts');

	function sit_custom_service(){
		register_post_type('sit_service', array(
			'labels' => array(
				'name' => 'Sit service',
				'menu_name' => 'Sit service',
				'all_items' => 'Sit All service',
				'add_new' => 'Add new service',
				'add_new_item' => 'Add new sit service',
			),
			'public' => true,
			'supports' => array(
				'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes',
			),
		));
	}
	add_action('init','sit_custom_service');

