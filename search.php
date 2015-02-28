<?php get_header(); ?>

<?php fcorpo_show_page_header_section(); ?>

<div id="main-content-wrapper">
	<div id="main-content">
		<div id="infoTxt">
			<?php printf( __( 'You searched for "%s". Here are the results:', 'fcorpo' ),
						get_search_query() );
			?>
		</div>

	<?php if ( have_posts() ) : 
				// starts the loop
				while ( have_posts() ) :

					the_post();

					/*
					 * include the post format-specific template for the content.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
	?>
				<div class="navigation">
					<?php fcorpo_show_pagenavi(); ?>
				</div>  
	<?php else :

				// if no content is loaded, show the 'no found' template
				get_template_part( 'content', 'none' );
			
		  endif;
	?>
	</div>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>