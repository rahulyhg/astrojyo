<?php
/*
  *
  * Single Page/Post template
  *
  * @package astrojyo
  *
  *
*/
?>

<?php get_header(); ?>
    <article>
        <header>
            <h1 class="uk-heading-line uk-text-center">
                <span><?php the_title(); ?></span>
            </h1>
            <section uk-lightbox>
                <a href="<?php echo the_post_thumbnail_url( 'full' ); ?>">
                    <img class="uk-align-center" src="<?php echo the_post_thumbnail_url( 'full' ); ?>"
                         alt="<?php the_title(); ?>">
                </a>
            </section>
        </header>
        <div uk-lightbox>
			<?php echo the_content(); ?>
        </div>
    </article>
    <div>
        <h3 class="uk-card-title uk-heading-line"><span>Поделиться</span></h3>
        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>
        <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,gplus"
             data-counter=""></div>
    </div>
    <div>
		<?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
    </div>
<?php get_footer(); ?>