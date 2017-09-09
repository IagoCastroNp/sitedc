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