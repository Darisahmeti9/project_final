<?php
/**
 * Template for displaying comments – Real Madrid Style
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area realmadrid-comments">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					printf( '💬 1 Koment për "%s"', get_the_title() );
				} else {
					printf( '💬 %1$s Komente për "%2$s"', number_format_i18n( $comments_number ), get_the_title() );
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
			?>
		</ol>

		<?php the_comments_navigation(); ?>

	<?php endif; ?>

	<?php
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments">💭 Komentet janë të mbyllura.</p>
	<?php endif; ?>

	<div class="realmadrid-comment-form">
		<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'label_submit'       => 'Dërgo Komentin ⚽',
			'class_submit'       => 'realmadrid-btn',
		) );
		?>
	</div>

</div><!-- .comments-area -->

