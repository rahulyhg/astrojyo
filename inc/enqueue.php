<?php
/**
 * @package astrojyo
 * -------------------------
 * ENQUEUE SCRIPTS & STYLES
 * -------------------------
 */

function astro_load_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true );
	wp_register_script( 'astro-js', get_template_directory_uri() . '/js/astro.theme.js', array( 'jquery' ), null, true );

	wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uikit.min.css', array(), null, 'all' );
	wp_enqueue_style( 'astro-css', get_template_directory_uri() . '/css/astro.theme.css', array(), null, 'all' );
	wp_enqueue_style( 'kurale', 'https://fonts.googleapis.com/css?family=Kurale' );

	wp_enqueue_script( 'jquery' );
//	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', array( 'jquery' ), '1.4.1', true );
	wp_enqueue_script( 'uikit', get_template_directory_uri() . '/js/uikit.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . '/js/uikit-icons.min.js', array( 'uikit' ), null, true );
	wp_enqueue_script( 'particles-js', get_template_directory_uri() . '/js/particles.min.js', array( 'jquery' ), null, true );

	wp_localize_script( 'astro-js', 'Astrojyo', array(
			'ajax_url'      => admin_url( 'admin-ajax.php' ),
			'particle_conf' => get_template_directory_uri() . '/js/particle-conf.json',
			'nonce'         => wp_create_nonce( 'send_order' )
		)
	);
	wp_enqueue_script( 'astro-js' );
	wp_enqueue_script( 'comment-reply' );

}

add_action( 'wp_enqueue_scripts', 'astro_load_scripts' );