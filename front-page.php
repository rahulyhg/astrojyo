<?php
/**
 * @package: astrojyo
 *
 */
?>

<?php get_header(); ?>
    <div class="uk-grid uk-grid-match uk-grid-small" uk-grid>
		<?php
		$query = new WP_Query( array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 4
		) );
		if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
				?>
			<?php endwhile;
			wp_reset_postdata(); ?>
            <!-- show pagination here -->
		<?php else : ?>
            <!-- show 404 error here -->
		<?php endif; ?>
    </div>
    <h3 class="uk-card-title uk-heading-line"><span>Интересные товары</span></h3>
    <div class="uk-grid uk-grid-match uk-grid-small" uk-grid>
		<?php
		$products = new WP_Query( array(
			'post_type'      => 'products',
			'post_status'    => 'publish',
			'posts_per_page' => 4
		) );
		if ( $products->have_posts() ) : ?>
			<?php while ( $products->have_posts() ) : $products->the_post();
				get_template_part( 'template-parts/products/product', 'list' );
				?>
			<?php endwhile;
			wp_reset_postdata(); ?>
            <!-- show pagination here -->
		<?php else : ?>
            <!-- show 404 error here -->
		<?php endif; ?>
    </div>

<?php get_footer(); ?>