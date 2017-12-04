<?php
/* Template Name: Консультация */
?>

<?php get_header(); ?>
<h1 class="uk-heading-line uk-text-center"><span><?php single_post_title(); ?></span></h1>
<div>
	<?php the_content(); ?>
    <h3 class="uk-heading-line uk-text-center"><span>Отсавить заявку на консультацию</span></h3>
    <form class="uk-grid-small" uk-grid>
        <div class="uk-width-1-2@m">
            <input class="uk-input" type="text" name="client-name" placeholder="Ваше Имя">
        </div>
        <div class="uk-width-1-4@m">
            <input class="uk-input" type="text" name="client-phone" placeholder="Ваш телефон">
        </div>
        <div class="uk-width-1-4@m">
            <input class="uk-input" type="email" name="client-email" placeholder="Ваш email">
        </div>
        <div class="uk-width-1-1@m">
            <textarea class="uk-textarea" rows="5" name="client-message" placeholder="Сообщение"></textarea>
        </div>
        <div class="uk-width-1-1@m">
            <button class="uk-button astro-post-btnmore astro-color uk-align-center">Отправить</button>
        </div>
    </form>
</div>
<?php get_footer(); ?>
