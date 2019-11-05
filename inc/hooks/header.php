<?php
/**
 * Cenote header functions to be hooked
 *
 * @package cenote
 */

if( !function_exists( 'cenote_head' )):
	/**
	* HTML head.
	*/
	function cenote_head(){
	?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
	}
endif;

if( !function_exists( 'cenote_page_start' )):
	/**
	* Page starts.
	*/
	function cenote_page_start(){
	?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cenote' ); ?></a>
	<?php
	}
endif;

if( !function_exists( 'cenote_header_start' )):
	/**
	* Header starts.
	*/
	function cenote_header_start(){
	?>
		<header id="masthead" class="site-header tg-site-header <?php cenote_header_class(); ?>">
	<?php
	}
endif;

if( !function_exists( 'cenote_header_top' )):
	/**
	* Header Top.
	*/
	function cenote_header_top(){

		 if ( true === get_theme_mod( 'cenote_enable_header_top', true ) ) : ?>
			<div class="tg-header-top">
				<div class="tg-container tg-flex-container tg-flex-space-between tg-flex-item-centered">
					<?php get_template_part( 'template-parts/header/header', 'top' ); ?>
				</div>
			</div><!-- .tg-header-top -->
		<?php endif; ?>
	<?php
	}
endif;

if( !function_exists( 'cenote_header_bottom' )):
	/**
	* Header bottom.
	*/
	function cenote_header_bottom(){
	?>
		<div class="tg-header-bottom">
			<?php get_template_part( 'template-parts/header/header', 'bottom' ); ?>
		</div>
	<?php
	}
endif;

if( !function_exists( 'cenote_header_end' )):
	/**
	* Header ends.
	*/
	function cenote_header_end(){
	?>
		</header><!-- #masthead -->
	<?php
	}
endif;

if( !function_exists( 'cenote_content_start' )):
	/**
	* Content starts.
	*/
	function cenote_content_start(){
	?>
		<div id="content" class="site-content">

			<div class="tg-container tg-flex-container tg-flex-space-between">
	<?php
	}
endif;





