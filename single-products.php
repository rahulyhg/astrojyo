<?php
/*
 * @package astrojyo
 *
 * Products single page
 *
 */
?>

<?php get_header(); ?>
    <h1 class="uk-heading-line uk-text-center">
        <span><?php single_post_title(); ?></span>
    </h1>
    <div class="uk-grid uk-grid-small" uk-grid>
        <div class="uk-width-2-5@m">
            <div uk-lightbox>
                <a href="<?php echo esc_attr( types_render_field( "product_img", array( 'output' => 'raw' ) ) ); ?>">
                    <div class="uk-background-contain uk-align-center"
                         style="background-image: url('<?php echo esc_attr( types_render_field( "product_img", array( 'output' => 'raw' ) ) ); ?>'); height: 350px;">
                    </div>
                </a>
            </div>
        </div>
        <div class="uk-width-3-5@m">
            <div class="uk-card uk-card-small">
                <div class="uk-card-body">
					<?php the_content(); ?>
                    <div class="uk-h2 uk-margin-remove-top">
                <span>Цена: <?php echo esc_attr( types_render_field( "product_price", array( 'output' => 'raw' ) ) ); ?>
                    руб.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
		<?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
    </div>
<?php get_footer(); ?>