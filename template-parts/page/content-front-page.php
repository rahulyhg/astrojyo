<?php
/**
 * @package: astrojyo
 *
 */
?>
<div class="uk-width-1-2@m">
    <article id="post-<?php the_ID(); ?>" class="uk-card uk-card-small">
		<?php if ( has_post_thumbnail() ) : ?>

            <div class="uk-background-cover astro-post-image"
                 style="background-image: url('<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>');"
                 title="<?php the_title(); ?>"
            >
            </div><!-- .panel-image -->

		<?php endif; ?>
        <div class="uk-card-header">
            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>">
				<?php the_title( '<h3 class="uk-card-title">', '</h2>' ); ?>
            </a>
        </div>
        <div class="uk-card-footer uk-padding-remove-top">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="uk-button astro-post-btnmore astro-color uk-align-right">Подробнее...</a>
        </div>
    </article>
</div>