<?php
/**
 * @package astrojyo
 * -------------------------
 * FILTERS ASTRO THEME
 * -------------------------
 */


function change_logo_class( $html ) {

	$html = str_replace( 'custom-logo', 'astro-logo-image', $html );
	$html = str_replace( 'custom-logo-link', 'astro-logo-link', $html );

	return $html;
}

add_filter( 'get_custom_logo', 'change_logo_class' );


function astro_class_to_nav_menu( $classes, $item ) {
	/* $classes содержит
	Array(
		[1] => menu-item
		[2] => menu-item-type-post_type
		[3] => menu-item-object-page
		[4] => menu-item-284
	)
	*/
	if ( in_array( 'current-menu-item', $classes ) ) {
		$classes[] = 'uk-active ';
	}
	if ( in_array( 'menu-item-has-children', $classes ) ) {
		$classes[] = 'uk-parent ';
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'astro_class_to_nav_menu', 10, 3 );


function filter_widget_nav_menu_args( $nav_menu_args, $nav_menu, $args, $instance ) {
	$nav_menu_args['menu_class'] = 'uk-nav-primary uk-nav-parent-icon';
	$nav_menu_args['menu_id'] = 'uk-nav-default uk-nav-parent-icon';
	$nav_menu_args['items_wrap'] = '<ul class="%2$s" uk-nav="multiple: true">%3$s</ul>';
	$nav_menu_args['walker']     = new Astro_Walker_Nav_Menu();

	return $nav_menu_args;
}

add_filter( 'widget_nav_menu_args', 'filter_widget_nav_menu_args', 10, 4 );