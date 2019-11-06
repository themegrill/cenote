<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cenote
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<?php
		/**
		 * Hook - cenote_head
		 *
		 * Functions hooked into cenote_head action
		 *
		 * @hooked cenote_head - 10
		 */
		do_action( 'cenote_head' );
		?>

		<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<?php
/**
 * Hook - cenote_before_header
 *
 * Functions hooked into cenote_before_header action
 *
 * @hooked cenote_page_start - 10
 * @hooked cenote_header_start - 15
 */
do_action( 'cenote_before_header' );
?>

<?php
/**
 * Hook - cenote_header_top
 *
 * Functions hooked into cenote_header_top action
 *
 * @hooked cenote_header_top - 10
 */
do_action( 'cenote_header_top' );
?>

<?php
/**
 * Hook - cenote_header_bottom
 *
 * Functions hooked into cenote_header_bottom action
 *
 * @hooked cenote_header_bottom - 10
 */
do_action( 'cenote_header_bottom' );
?>

<?php
/**
 * Hook - cenote_header_end
 *
 * Functions hooked into cenote_header_end action
 *
 * @hooked cenote_header_end - 10
 */
do_action( 'cenote_header_end' );
?>

<?php do_action( 'cenote_after_header' ); ?>

<?php
/**
 * Hook - cenote_before_content
 *
 * Functions hooked into cenote_before_content action
 *
 * @hooked cenote_content_start - 10
 */
do_action( 'cenote_before_content' );
?>




