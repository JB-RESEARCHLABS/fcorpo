<?php get_header(); ?>

<?php fcorpo_show_page_header_section(); ?>

<?php
	$options = get_option( 'fcorpo_notfound_settings' );
	if ( $options === false ) {
		// add default Not Found settings
		$options = array (  
					'notfound_image'	=> get_template_directory_uri().'/images/404.png',
					'notfound_title'	=> 'Error 404: Not Found',
					'notfound_content'	=> '<p>Sorry. The page you are looking for does not exist.</p>',
					);
	}
?>
<div id="main-content-wrapper">
	<div id="main-content-full">
		<article>
		<h1 id="not-found-title"><?php echo $options[ 'notfound_title' ]; ?></h1>
		<div class="clear">
		</div>
		<div class="text-center">
		<?php
			if ( array_key_exists( 'notfound_image', $options )
				&& $options[ 'notfound_image' ] != '' ) {

				$imgPath = $options[ 'notfound_image' ];
				$title = __('Error 404: Not Found', 'fcorpo' );
				
				echo "<img id='not-found-image' src='$imgPath' alt='$title' title='$title' />";
			}
		?>
		</div>
		<div class="clear">
		</div>
		<div class="text-center">
			<?php echo $options[ 'notfound_content' ]; ?>
		</div>
		</article>
	</div>
</div>

<?php get_footer(); ?>