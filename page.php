<?php
/*
 * @package: astrojyo
 *
 */
?>

<?php get_header(); ?>
<h1 class="uk-heading-line uk-text-center"><span><?php single_post_title(); ?></span></h1>
<div>
	<?php the_content(); ?>
</div>
<?php get_footer(); ?>
