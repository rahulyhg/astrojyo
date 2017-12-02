<?php
/*
 * @package: astrojyo
 *
 */
?>

<ul class="uk-comment-list">
	<?php foreach ( $comments as $comment ): ?>
        <li>
            <article class="uk-comment uk-visible-toggle">
                <header class="uk-comment-header uk-position-relative">
                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
							<?php echo get_avatar( $comment, 80 ); ?>
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove">
                                <a class="uk-link-reset" href="<?php echo $comment->comment_author_url; ?>">
									<?php echo $comment->comment_author; ?>
                                </a>
                            </h4>
                            <p class="uk-comment-meta uk-margin-remove-top">
                                <a class="uk-link-reset" href="#">
									<?php echo $comment->comment_date; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="uk-position-top-right uk-position-small uk-hidden-hover">
						<?php echo get_comment_reply_link( array(
							'reply_text' => "Ответить",
							'respond_id' => 'comment',
							'depth'      => 3,
							'max_depth'  => 10
						), $comment ); ?>
                    </div>
                </header>
                <div class="uk-comment-body">
                    <p><?php echo $comment->comment_content; ?></p>
                </div>
            </article>
			<?php
			set_query_var( 'comments', $comment->get_children() );
			get_template_part( 'template-parts/comments/comments', 'child' );
			?>
        </li>
	<?php endforeach; ?>
</ul>