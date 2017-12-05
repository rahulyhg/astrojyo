<?php
/*
 * @package astrojyo
 * ----------------------
 * Theme Support Options
 * ----------------------
 *
 */

function astrojyo_widgets_init() {
	register_sidebar( array(
		'name'          => 'Сайдбар',
		'id'            => 'astro-sidebar',
		'description'   => 'Бокавая панель сайта',
		'before_widget' => '<div class="uk-card uk-card-small astro-tile astro-tile-shadow uk-margin-bottom uk-card-body">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="uk-card-title uk-heading-line"><span>',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => 'Мобильный сайдбар',
		'id'            => 'astro-mobility',
		'description'   => 'Мобильная версия сайдбара',
		'before_widget' => '<div class="uk-card uk-card-small astro-tile-shadow uk-margin-bottom uk-card-body">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="uk-card-title uk-heading-line"><span>',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'astrojyo_widgets_init' );