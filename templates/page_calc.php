<?php
/* Template Name: Калькулятор */
?>

<?php get_header(); ?>
<h1 class="uk-heading-line uk-text-center"><span><?php single_post_title(); ?></span></h1>
<div>
	<?php the_content(); ?>
</div>
<div>
    <h3 class="uk-card-title uk-heading-line"><span>Поделиться</span></h3>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>
    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,viber,whatsapp,skype,telegram,gplus"
         data-limit="7"></div>
</div>
<div class="uk-margin-small-top">
	<?php
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>
</div>
<?php get_footer(); ?>
