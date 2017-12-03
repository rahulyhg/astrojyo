<?php
/*
  *
  * Archive Page/Post template
  *
  * @package astrojyo
  *
  *
*/
?>

<?php get_header(); ?>

<?php
the_archive_title( '<h1 class="uk-heading-line uk-text-center"><span>', '34</span></h1>' );
the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
<?php if ( have_posts() ) : ?>
    <div class="uk-grid uk-grid-match uk-grid-small" uk-grid>
	<?php while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/page/content', 'front-page' );
		?>

	<?php endwhile; ?>
    <div class="uk-width-1-1">
		<?php astro_pagination(); ?>
    </div>
<?php else: ?>
    <div class="uk-width-1-1">
        <div class="uk-flex uk-flex-center">
            <div class="uk-card uk-card-body">
                <div class="uk-card-media-top">
                    <img src="<?php echo get_site_icon_url( 192 ); ?>" class="uk-align-center">
                </div>
                <p class="uk-heading-primary uk-text-center"><span>Пока еще нет опбубликованых записей</span></p>
                <div class="uk-text-center">
                    <a href="<?php echo site_url(); ?>">На главную</a>
                </div>
            </div>
        </div>
    </div>
    </div>


<?php endif; ?>

<?php get_footer(); ?>