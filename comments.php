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

		comment_form();
		?>

	</div>
</section><!-- #comments -->