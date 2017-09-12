<?php

// ativando menus
function register_my_menus(){
	register_nav_menus(
		array(
			'header-menu-home' => __('Menu Home'),
			'header-menu-portfolio' => __('Menu Portfolio'),
			'footer-menu' => __('Menu Footer')
			)
		);
}
add_action('init', 'register_my_menus');

// dimensões de tamanhos dinâmicos para thumbnails
function scale_thumbs(){
	add_theme_support('post-thumbnails');
	add_image_size('portfolio-thumb', 260, 230, true);
}
add_action('after_setup_theme', 'scale_thumbs');