<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="blog-post-page__comments comments">
	<div class="comments__container">

		<?php if ( have_comments() ) : ?>
			<h2 class="comments__title title title_m">
				<?php
				$ministore_comment_count = get_comments_number();
				if ( '1' === $ministore_comment_count ) {
					echo $ministore_comment_count . ' comment';
				} else {
					echo $ministore_comment_count . ' comments';
				}
				?>
			</h2><!-- .comments-title -->

			<?php the_comments_navigation(); ?>

			<div class="comments__body">
				
				<?php
				wp_list_comments(
					array(
						'style'      => 'div',
						'type'       => 'comment',
						'reply_text' => 'Reply now',
						'avatar_size'=> 105,
						'callback'   => 'ministore_comment',
					)
				);
				?>				

			</div>
			<?php
			the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ministore' ); ?></p>
				<?php
			endif;
			
		endif; // Check for have_comments().
		
		$comment_args = [
			'fields'        => [],
			'comment_field' => '<textarea id="comment" name="comment" cols="30" rows="8" class="input" aria-required="true" required="required">Write your comment here *</textarea>',
			'title_reply'        => __( 'Leave a comments' ), 
			'title_reply_before' => '<div class="form-comments__title title title_m">',
			'title_reply_after'  => '</div>',
			'title_reply_to'     => __( 'Leave a reply' ),
			'comment_notes_before' => '<div class="form-comments__descr">Your email address will not be published. Required fields are marked *</div>',
			'label_submit'       => __( 'Send comment' ),
			'class_submit'       => 'form-comments__button button',
			'class_container'    => 'comments__form form-comments'
		];

		comment_form( $comment_args );
		?>

	</div>
</section><!-- #comments -->