<?php /* Template Name: Блог */ ?>

<?php get_header(); ?>
<h1 class="uk-heading-line uk-text-center"><span><?php single_post_title(); ?></span></h1>
<div class="uk-grid uk-grid-match uk-grid-small" uk-grid>
	<?php if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/page/content', 'front-page' );
		?>

	<?php endwhile; ?>
    <div class="uk-width-1-1">
		<?php astro_pagination(); ?>
    </div>
</div>
<?php else: ?>

<?php endif; ?>
<?php get_footer(); ?>
