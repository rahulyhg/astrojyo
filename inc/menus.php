<?php
/**
 * @package astrojyo
 * -------------------------
 * MENUS ASTRO THEME
 * -------------------------
 */

add_action( 'after_setup_theme', 'astro_register_nav_menu' );
function astro_register_nav_menu() {
	register_nav_menus( array(
		'header_menu' => 'Меню в шапке'
	) );
}