<?php
/**
 * @package: astrojyo
 *
 */ ?>
<div class="uk-width-1-4@m">
    <div class="uk-card uk-card-small">
        <div class="uk-card-media-top">
            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>">
                <div class="uk-background-contain"
                     style="background-image: url('<?php echo esc_attr( types_render_field( "product_img", array( 'output' => 'raw' ) ) ); ?>'); height: 200px;">
                </div>
            </a>
        </div>
        <div class="uk-card-body">
            <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>">
                <h3 class="uk-h5 astro-goodstitle uk-margin-remove">
					<?php the_title(); ?></h3>
            </a>
            <div class="uk-h2 uk-text-center uk-margin-remove-top">
                <span><?php echo esc_attr( types_render_field( "product_price", array( 'output' => 'raw' ) ) ); ?>
                    <br>руб.</span>
            </div>
            <a href="#astro-product-<?php the_ID(); ?>"
               class="uk-button astro-post-btnmore astro-color uk-width-1-1"
               title="Купить <?php the_title(); ?> по цене <?php echo esc_attr( types_render_field( "product_price", array( 'output' => 'raw' ) ) ); ?> руб."
               uk-toggle
            >Купить</a>
            <div id="astro-product-<?php the_ID(); ?>" uk-modal>
                <div class="uk-modal-dialog">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="uk-modal-header">
                        <h2 class="uk-modal-title">Оформить заказ</h2>
                    </div>
                    <div class="uk-modal-body">
                        <div class="uk-grid uk-grid-small" uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-card uk-card-small uk-box-shadow-small">
                                    <div class="uk-card-media-top">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"
                                           title="<?php the_title(); ?>">
                                            <div class="uk-background-contain"
                                                 style="background-image: url('<?php echo esc_attr( types_render_field( "product_img", array( 'output' => 'raw' ) ) ); ?>'); height: 200px;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-h5 uk-margin-remove"><?php the_title(); ?></h3>
                                        <div class="uk-h2 uk-text-center uk-margin-remove-top">
                <span><?php echo esc_attr( types_render_field( "product_price", array( 'output' => 'raw' ) ) ); ?>
                    руб.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@m">
                                <form class="uk-form-stacked" action="send_order"
                                      data-astro="sendOrder"
                                      data-productId="<?php the_ID(); ?>">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="buyer-name-<?php the_ID(); ?>">Ваше
                                            имя</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="buyer-name" id="buyer-name-<?php the_ID(); ?>"
                                                   type="text"
                                                   placeholder="Введите ваше имя..." required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="buyer-phone-<?php the_ID(); ?>">Ваш
                                            телефон</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="buyer-phone"
                                                   id="buyer-phone-<?php the_ID(); ?>" type="text"
                                                   placeholder="Введите номер телефона..." required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="buyer-email-<?php the_ID(); ?>">Ваш
                                            email:</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="buyer-email"
                                                   id="buyer-email-<?php the_ID(); ?>" type="email"
                                                   placeholder="Введите адрес почты..." required>
                                        </div>
                                    </div>
                                    <div class="uk-text-right">
                                        <button class="uk-button uk-button-default astro-post-btnmore astro-color"
                                                data-astro="sendOrder"
                                                type="submit">
                                            Оформить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-modal-footer">
                        <div class="uk-alert-success" uk-alert hidden>
                            <a class="uk-alert-close" uk-close></a>
                            <p>1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>