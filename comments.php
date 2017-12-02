<?php
/*
 * @package astrojyo
 *
 *
 *
 */
if ( post_password_required() ) {
	return;
}
?>
<h3 class="uk-card-title uk-heading-line"><span>Комментарии: </span></h3>
<?php comment_form(); ?>
<?php
$args = array(
	'hierarchical' => 'threaded',
	'status'       => 'approve',
	'type'         => 'comment'
);

$comments = get_comments( $args );

// Comment Loop
if ( $comments ): ?>
	<?php
	set_query_var( 'comments', $comments );
	get_template_part( 'template-parts/comments/comments', 'list' );
	?>
<?php else: ?>

<?php endif; ?>

