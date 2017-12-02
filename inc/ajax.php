<?php
/*
 * @package astrojyo
 * ----------------------
 * Ajax Action
 * ----------------------
 *
 */

require get_template_directory() . '/inc/WP_Mail.php';

add_action( 'wp_ajax_send_order', 'astro_send_order' );
add_action( 'wp_ajax_nopriv_send_order', 'astro_send_order' );

function astro_send_order() {
	check_ajax_referer( 'send_order', 'nonce_code' );
	global $post;
	parse_str( $_POST['order'], $order );
	$post = get_post( $_POST['product'] );
	setup_postdata( $post );

	$email = ( new WP_Mail() )
		->to( esc_attr( get_option( 'admin_email' ) ) )
		->subject( 'Новый заказ на сайте Astrojyotish.ru' )
		->template( get_template_directory() . '/templates/email/message.html', [
			'name'    => $order['buyer-name'],
			'phone'   => $order['buyer-phone'],
			'email'   => $order['buyer-email'],
			'product' => $post->post_title,
			'price'   => esc_attr( types_render_field( "product_price", array( 'output' => 'raw' ) ) ),
			'image'   => esc_attr( types_render_field( "product_img", array( 'output' => 'raw' ) ) ),
			'subject' => 'Новый заказ на сайте Astrojyotish.ru'
		] )
		->headers( [
			"From: AstroJyotish.ru <no-reply@astrojyotish.ru>",
			"Content-type: text/html; charset=utf-8"
		] )
		->send();
	if ( $email ) {
		$email2 = ( new WP_Mail() )
			->to( $order['buyer-email'] )
			->subject( 'Вы оформили заказ на сайте Astrojyotish.ru' )
			->template( get_template_directory() . '/templates/email/message.html', [
				'name'    => $order['buyer-name'],
				'phone'   => $order['buyer-phone'],
				'email'   => $order['buyer-email'],
				'product' => $post->post_title,
				'price'   => esc_attr( types_render_field( "product_price", array( 'output' => 'raw' ) ) ),
				'image'   => esc_attr( types_render_field( "product_img", array( 'output' => 'raw' ) ) ),
				'subject' => 'Вы оформили заказ на сайте Astrojyotish.ru'
			] )
			->headers( [
				"From: AstroJyotish.ru <no-reply@astrojyotish.ru>",
				"Content-type: text/html; charset=utf-8"
			] )
			->send();
	}
	echo $email;

	wp_die();
	wp_reset_postdata();
}