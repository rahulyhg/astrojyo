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
<div class="uk-flex uk-flex-center">
    <div class="uk-card uk-card-body">
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=46872000&amp;from=informer"
           target="_blank" rel="nofollow"><img
                    src="https://informer.yandex.ru/informer/46872000/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                    style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                    title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                    class="ym-advanced-informer" data-cid="46872000" data-lang="ru"/></a>
        <!-- /Yandex.Metrika informer -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter46872000 = new Ya.Metrika({
                            id: 46872000,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/46872000" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
