<?php
/**
 * The default template for displaying page content
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-content">
		<?php fcorpo_the_content_single(); ?>
	</div>
	<div class="page-after-content">
		<span class="author-icon">
			<?php the_author_posts_link(); ?>
		</span>
		<?php if ( ! post_password_required() ) : ?>

	<?php if ('open' == $post->comment_status) : ?>
			<span class="comments-icon">
				<?php comments_popup_link(__( 'No Comments', 'fcorpo' ), __( '1 Comment', 'fcorpo' ), __( '% Comments', 'fcorpo' ), '', __( 'Comments are closed.', 'fcorpo' )); ?>
			</span>
		<?php endif; ?>
		<?php edit_post_link( __( 'Edit', 'fcorpo' ), '<span class="edit-icon">', '</span>' ); ?>


<?php endif; ?>
	</div>
</article>
