<?php
/**
 * @package: astrojyo
 *
 */
?>

<?php get_header(); ?>
    <h1 class="uk-heading-line uk-text-center"><span><?php single_post_title(); ?></span></h1>
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
            <div class="uk-width-1-1">
                <div class="uk-flex uk-flex-center">
                    <div class="uk-card uk-card-body">
                        <div class="uk-card-media-top">
                            <img src="<?php echo get_site_icon_url( 192 ); ?>" class="uk-align-center">
                        </div>
                        <p class="uk-heading-primary uk-text-center"><span>Пока еще нет опбубликованых записей</span>
                        </p>
                    </div>
                </div>
            </div>
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