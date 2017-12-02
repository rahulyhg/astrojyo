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

<?php if ( have_posts() ) : ?>
	<?php
	the_archive_title( '<h1 class="uk-heading-line uk-text-center"><span>', '</span></h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>
<?php endif; ?>

<?php get_footer(); ?>