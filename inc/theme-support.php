<?php
/*
 * @package astrojyo
 * ----------------------
 * Theme Support Options
 * ----------------------
 *
 */

function astro_setup() {
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title' ),
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'astro_setup' );

function true_custom_fields() {
	add_post_type_support( 'products', 'custom-fields' ); // в качестве первого параметра укажите название типа поста
}

add_action( 'init', 'true_custom_fields' );