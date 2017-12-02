<?php
/*
 * @package astrojyo
 * ----------------------
 * Theme Custom Types
 * ----------------------
 *
 */

add_action( 'init', 'astro_goods_type' );

function astro_goods_type() {
	$labels = array(
		'name'                  => 'Товары',
		'singular_name'         => 'Товар',
		'add_new'               => 'Добавить новый',
		'add_new_item'          => 'Добавить новый товар',
		'edit_item'             => 'Редактировать товар',
		'new_item'              => 'Новый товар',
		'view_item'             => 'Посмотреть товар',
		'search_items'          => 'Найти товар',
		'not_found'             => 'Товаров не было найдено',
		'not_found_in_trash'    => 'Товаров не было найдено в корзине',
		'all_items'             => 'Все товары',
		'featured_image'        => 'Фото товара',
		'set_featured_image'    => 'Выбрать фото товара',
		'remove_featured_image' => 'Удалить фото товара',
		'use_featured_image'    => 'Использовать как фото товара'
	);

	$args = array(
		'labels'          => $labels,
		'show_ui'         => true,
		'show_in_menu'    => true,
		'capability_type' => 'post',
		'menu_icon'       => 'dashicons-cart',
		'hierarchical'    => false,
		'menu_position'   => 26,
		'supports'        => array( 'title', 'editor', 'thumbnail', '' ),
		'has_archive'     => true
	);

	register_post_type( 'goods', $args );
}