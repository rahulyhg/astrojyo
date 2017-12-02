</div>
</main>
</div>
<footer class="uk-margin-medium-bottom uk-card astro-tile astro-tile-shadow"
        style="background-image: url('<?php echo get_template_directory_uri() . '/img/back/px1.jpg'; ?>');">
    <div class="uk-grid uk-grid-small" uk-grid>
        <div class="uk-width-1-4@m uk-position-relative uk-visible@s">
            <div class="astro-footer-corner-l"
                 style="background-image: url('<?php echo get_template_directory_uri() . '/img/element/footer-corner.png' ?>')"
            >
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-card uk-card-body">
                <div class="astro-om uk-margin-small-bottom">
                    <img class="uk-align-center uk-margin-remove-bottom" height="90"
                         src="<?php echo get_template_directory_uri() . '/img/icon/sign-om.png' ?>" alt="">
                </div>
                <div class="astro-copyright uk-text-center uk-margin-remove">
					<?php echo bloginfo( 'name' ) ?>&copy;<br>
					<?php echo date( 'Y' ); ?>
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m uk-position-relative uk-visible@s">
            <div class="astro-footer-corner-r"
                 style="background-image: url('<?php echo get_template_directory_uri() . '/img/element/footer-corner.png' ?>')"
            >
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
