<?php
/*
 * @package: astrojyo
 *
 */
?>

<?php get_header(); ?>


    <div class="uk-flex uk-flex-center">
        <div class="uk-card uk-card-body">
            <div class="uk-card-media-top">
                <img src="<?php echo get_site_icon_url( 192 ); ?>" class="uk-align-center">
            </div>
            <h1 class="uk-heading-primary uk-text-center"><span>404</span></h1>
            <h2 class="uk-h2 uk-text-center"><span>Страница не найдена</span></h2>
            <div class="uk-text-center">
                <a href="<?php echo site_url(); ?>">На главную</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>