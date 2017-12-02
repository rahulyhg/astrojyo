<?php /* Template Name: Каталог товаров */ ?>

<?php get_header(); ?>
    <h1 class="uk-heading-line uk-text-center"><span><?php single_post_title(); ?></span></h1>

    <div class="uk-grid uk-grid-match uk-grid-small" uk-grid>
		<?php
		$query = new WP_Query( array( 'post_type' => 'products', 'posts_per_page' => 20 ) );
		if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post();
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