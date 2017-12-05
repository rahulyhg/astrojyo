<?php
/**
 * @package: astrojyo
 *
 */
?>
<div class="uk-width-1-2@m">
    <article id="post-<?php the_ID(); ?>" class="uk-card uk-card-small">
		<?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>">
                <div class="uk-background-cover astro-post-image"
                     style="background-image: url('<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>');"
                     title="<?php the_title(); ?>"
                >
                </div><!-- .panel-image -->
            </a>

		<?php endif; ?>
        <div class="uk-card-header">
            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>">
				<?php the_title( '<h3 class="uk-card-title astro-posttitle">', '</h2>' ); ?>
            </a>
        </div>
        <div class="uk-card-footer uk-padding-remove-top">
			<?php echo the_category( ', ', 'single' ); ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>"
               class="uk-button astro-post-btnmore astro-color uk-align-right">Подробнее...</a>
        </div>
    </article>
</div>