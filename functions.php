<?php
// ativando imagem destacadas
add_theme_support('post-thumbnails');

// ativando menus
function register_my_menus(){
	register_nav_menus(
		array(
			'header-menu-home' => __('Menu Home'),
			'header-menu-portfolio' => __('Menu Portfolio')
			)
		);
}
add_action('init', 'register_my_menus');

// Meus posts types
// function planos_posts_types(){
// 	// Planos
// 	register_post_type('planos',
// 		array(
// 			'labels'		=> array(
// 				'name'			=> __('Planos'),
// 				'singular_name'	=> __('Plano')
// 				),
// 			'public'		=> true,
// 			'has_archive'	=> true,
// 			'capability_type' => 'post',
// 			'menu_icon'		=> 'dashicons-clipboard',
// 			'supports'		=> array('title', 'thumbnail', 'post-formats', 'page-attributes')
// 			)

// 		);
// }
// add_action('init', 'planos_posts_types');