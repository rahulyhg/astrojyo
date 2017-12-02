<?php
/**
 * @package: astrojyo
 *
 */
?>
<html <?php get_language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
        <meta name="theme-color" content="#550c05">
    </head>
<body <?php body_class(); ?>>
    <div class="uk-hidden@s" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar uk-navbar-container uk-padding-small" uk-navbar="dropbar: true;"
             style="background-image: url('<?php echo get_template_directory_uri() . '/img/back/px1.jpg'; ?>');"
        >
            <div class="uk-navbar-left">
                <a href="<?php echo get_site_url(); ?>" class="uk-navbar-item uk-logo">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					if ( has_custom_logo() ) {
						echo '<img src="' . esc_url( $logo[0] ) . '" style="height: 50px;">';
					}
					?>
                </a>
            </div>
            <div class="uk-navbar-right">
                <button class="uk-button astro-gold-text" uk-icon="icon: menu; ratio: 2" type="button"
                        uk-toggle="target: #offcanvas-overlay">
                </button>
            </div>
        </nav>
    </div>
    <div class="uk-offcanvas-content">
        <div id="offcanvas-overlay" uk-offcanvas>
            <div class="uk-offcanvas-bar">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

				<?php if ( is_active_sidebar( 'astro-mobility' ) ) : ?>
					<?php dynamic_sidebar( 'astro-mobility' ); ?>
				<?php endif; ?>

            </div>
        </div>
    </div>
<div class="uk-container">
    <header class="astro-header uk-position-relative uk-margin-medium-top astro-tile-shadow uk-background-cover uk-background-bottom-center uk-visible@s"
            style="background-image: url('<?php echo get_template_directory_uri() . '/img/back/space.jpg'; ?>')">
		<?php
		if ( function_exists( 'the_custom_logo' ) ): ?>
            <a href="<?php echo get_site_url(); ?>" title="<?php get_bloginfo( 'name' ); ?>">
                <div class="astro-logo">
                    <h1 class="astro-logo-header"><?php echo bloginfo( 'name' ); ?></h1>
					<?php the_custom_logo(); ?>
                </div>
            </a>
		<?php else: ?>
            <a href="<?php echo get_site_url(); ?>" title="<?php get_bloginfo( 'name' ); ?>">
                <div class="astro-logo">
                    <h1 class="astro-logo-header"><?php echo bloginfo( 'name' ); ?></h1>
                </div>
            </a>
		<?php endif; ?>
        <div class="astor-coleso"
             style="background-image: url('<?php echo get_template_directory_uri() . '/img/back/horoscope.png'; ?>')"
        ></div>
        <div id="astro-particles"></div>
    </header>
<?php if ( has_nav_menu( 'header_menu' ) ): ?>
    <nav class="uk-navbar-container uk-margin-small-bottom astro-top-nav uk-visible@s" uk-navbar
         style="background-image: url('<?php echo get_template_directory_uri() . '/img/back/px1.jpg'; ?>');">
		<?php
		$args = array(
			'theme_location'  => 'header_menu',
			'container'       => 'div',
			'container_class' => 'uk-navbar-center',
			'container_id'    => '',
			'menu_class'      => 'uk-navbar-nav',
			'menu_id'         => '',
			'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => new Top_Menu_Walker()
		);
		wp_nav_menu( $args ); ?>
    </nav>
<?php endif; ?>
    <div class="uk-grid uk-grid-small uk-margin-small" uk-grid>
<?php if ( ! is_404() ): ?>
    <aside class="uk-width-1-4@m uk-visible@s">
		<?php get_sidebar(); ?>
    </aside>
    <main class="uk-width-3-4@m">
    <div class="uk-card uk-card-small astro-tile-shadow astro-tile uk-card-body">
<?php else: ?>
    <main class="uk-width-1-1">
        <div class="uk-card uk-card-small astro-tile-shadow astro-tile uk-card-body">

<?php endif; ?>