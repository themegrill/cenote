<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cenote
 */

?>

	<?php
	/**
	 * Hook - cenote_after_content
	 *
	 * Functions hooked into cenote_after_content action
	 *
	 * @hooked cenote_content_end
	 */
	do_action( 'cenote_after_content' );
	?>

	<?php
		// Show related post if enabled.
		if ( true === get_theme_mod( 'cenote_single_enable_related_post', true ) && is_single() ) {
			get_template_part( 'template-parts/related/related', 'post' );
		}
	?>

	<?php
	/**
	 * Hook - cenote_before_footer
	 *
	 * Functions hooked into cenote_before_footer action
	 *
	 * @hooked cenote_footer_start
	 */
	do_action( 'cenote_before_footer' );
	?>

		<?php
		/**
		 * Hook - cenote_footer_top
		 *
		 * Functions hooked into cenote_footer_top action
		 *
		 * @hooked cenote_footer_top
		 */
		do_action( 'cenote_footer_top' );
		?>

		<?php
		/**
		 * Hook - cenote_footer_bottom
		 *
		 * Functions hooked into cenote_footer_bottom action
		 *
		 * @hooked cenote_footer_bottom
		 */
		do_action( 'cenote_footer_bottom' );
		?>

	<?php
	/**
	 * Hook - cenote_after_footer
	 *
	 * Functions hooked into cenote_after_footer action
	 *
	 * @hooked cenote_footer_end
	 * @hooked cenote_add_footer_extras
	 */
	do_action( 'cenote_after_footer' );
	?>

<?php
/**
 * Hook - cenote_after
 *
 * Functions hooked into cenote_after action
 *
 * @hooked cenote_page_end
 * @hooked cenote_add_footer_extras

 */
do_action( 'cenote_after' );
?>

<?php wp_footer(); ?>

</body>
</html>
