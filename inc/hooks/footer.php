<?php
/**
 * Cenote footer functions to be hooked
 *
 * @package cenote
 */

if ( ! function_exists( 'cenote_content_end' ) ) :
	/**
	* Content end.
	*/
	function cenote_content_end() {
	?>
			</div><!-- .tg-container -->
		</div><!-- #content -->
	<?php
	}
endif;

if ( ! function_exists( 'cenote_footer_start' ) ) :
	/**
	* Footer start.
	*/
	function cenote_footer_start() {
	?>
		<footer id="colophon" class="site-footer tg-site-footer <?php cenote_footer_class(); ?>">
	<?php
	}
endif;

if ( ! function_exists( 'cenote_footer_top' ) ) :
	/**
	* Footer Top.
	*/
	function cenote_footer_top() {
	?>
		<div class="tg-footer-top">
			<div class="tg-container">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div><!-- .tg-footer-top -->
	<?php
	}
endif;

if ( ! function_exists( 'cenote_footer_bottom' ) ) :
	/**
	* Footer bottom.
	*/
	function cenote_footer_bottom() {
	?>
		<div class="tg-footer-bottom">
			<div class="tg-container">
				<div class="tg-footer-bottom-container tg-flex-container">
					<div class="tg-footer-bottom-left">

						<?php
						/**
						 * Hook - cenote_footer_bottom_one
						 *
						 * Functions hooked into cenote_footer_bottom_one action
						 *
						 * @hooked cenote_footer_bottom_one
						 */
						do_action( 'cenote_footer_bottom_one' );
						?>

					</div><!-- .tg-footer-bottom-left -->

					<div class="tg-footer-bottom-right">

						<?php
						/**
						 * Hook - cenote_footer_bottom_two
						 *
						 * Functions hooked into cenote_footer_bottom_two action
						 *
						 * @hooked cenote_footer_bottom_two
						 */
						do_action( 'cenote_footer_bottom_two' );
						?>
					</div><!-- .tg-footer-bottom-right-->
				</div><!-- .tg-footer-bootom-container-->
			</div>
		</div><!-- .tg-footer-bottom -->
	<?php
	}
endif;

if ( ! function_exists( 'cenote_footer_bottom_one' ) ) :
	/**
	* Footer end.
	*/
	function cenote_footer_bottom_one() {

		get_template_part( 'template-parts/footer/footer', 'info' );
	}
endif;

if ( ! function_exists( 'cenote_footer_end' ) ) :
	/**
	* Footer end.
	*/
	function cenote_footer_end() {
	?>
		</footer><!-- #colophon -->

	<?php
	}
endif;

if ( ! function_exists( 'cenote_page_end' ) ) :
	/**
	* Page end.
	*/
	function cenote_page_end() {
	?>
		</div><!-- #page -->

	<?php
	}
endif;
