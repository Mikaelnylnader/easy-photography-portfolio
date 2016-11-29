<?php
/*
 * Generic Single Portfolio View
 * @since 1.0.0
 * @modified 1.0.0
 */
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php
	// Display the portfolio description
	pp_get_template( 'single/description' );
	?>

	<?php
	/**
	 * Display the gallery
	 */
	?>
	<div <?php pp_class( 'PP_Gallery' ) ?>>

		<?php
		if ( pp_gallery_has_data() ):
			while ( pp_gallery_has_data() ): pp_gallery_setup_data();

				pp_get_template( 'single/gallery/loop-item' );

			endwhile;
		endif;
		?>

	</div> <!-- .PP_Gallery -->


<?php endwhile; ?>
