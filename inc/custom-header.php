<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package cenote
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses cenote_header_style()
 */
function cenote_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'cenote_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1920,
				'height'             => 1080,
				'flex-height'        => true,
				'wp-head-callback'   => 'cenote_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'cenote_custom_header_setup' );

/**
 * Adds header media on header.
 *
 * @return void
 */
function cenote_header_markup() {
	$title           = get_theme_mod( 'cenote_header_media_title', __( 'Hi, I am Header Media Title' ) );
	$text            = get_theme_mod( 'cenote_header_media_text', __( 'I am description of header media. You can write short text to give me more info.' ) );
	$button_text     = get_theme_mod( 'cenote_header_media_button_text', __( 'Take action' ) );
	$button_url      = get_theme_mod( 'cenote_header_media_url', '#' );
	$is_info_enabled = get_theme_mod( 'cenote_header_media_enable_desc', true );
	$style           = get_theme_mod( 'cenote_header_media_style', 'cenote-header-media--center' );

	// Make dynamic text translatable with Polylang
	if ( function_exists( 'pll_register_string' ) ) {
		pll_register_string( 'cenote_header_media_title', $title, 'cenote' );
		pll_register_string( 'cenote_header_media_text', $text, 'cenote' );
		pll_register_string( 'cenote_header_media_button_text', $button_text, 'cenote' );
	}

	// Get translated strings
	$title       = function_exists( 'pll__' ) ? pll__( $title ) : $title;
	$text        = function_exists( 'pll__' ) ? pll__( $text ) : $text;
	$button_text = function_exists( 'pll__' ) ? pll__( $button_text ) : $button_text;

	if ( has_header_image() && is_front_page() ) {
		?>
		<section class="cenote-header-media <?php echo esc_attr( $style ); ?>">
			<div class="tg-container tg-flex-container">
					<?php if ( true === $is_info_enabled ) : ?>
						<div class="cenote-header-media-info">
							<h2 class="cenote-header-media__title"><?php echo esc_html( $title ); ?></h2>
							<!-- /.cenote-header-media__title -->
							<p class="cenote-header-media__text"><?php echo esc_html( $text ); ?></p>
							<!-- /.cenote-header-media__text-->
							<a href="<?php echo esc_url( $button_url ); ?>" class="cenote-header-media__button"><?php echo esc_html( $button_text ); ?></a>
							<!-- /.cenote-header-media__button -->
						</div>
						<!-- /.cenote-header-media-info -->
					<?php endif; ?>
			</div>
			<!-- /.tg-container -->
		</section>
		<!-- /.cenote-header-media -->
		<?php
	}
}
add_action( 'cenote_after_header', 'cenote_header_markup', 5 );


if ( ! function_exists( 'cenote_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see cenote_custom_header_setup().
	 */
	function cenote_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-branding {
				margin-bottom: 0;
			}
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

/**
 * Register Polylang strings for translation
 */
function cenote_register_polylang_strings() {
	if ( function_exists( 'pll_register_string' ) ) {
		$title       = get_theme_mod( 'cenote_header_media_title', '' );
		$text        = get_theme_mod( 'cenote_header_media_text', '' );
		$button_text = get_theme_mod( 'cenote_header_media_button_text', '' );

		if ( ! empty( $title ) ) {
			pll_register_string( 'cenote_header_media_title', $title, 'Cenote Theme' );
		}
		if ( ! empty( $text ) ) {
			pll_register_string( 'cenote_header_media_text', $text, 'Cenote Theme' );
		}
		if ( ! empty( $button_text ) ) {
			pll_register_string( 'cenote_header_media_button_text', $button_text, 'Cenote Theme' );
		}
	}
}
add_action( 'init', 'cenote_register_polylang_strings' );

/**
 * Update Polylang strings when customizer values change
 */
function cenote_update_polylang_strings( $value, $old_value, $option ) {
	if ( function_exists( 'pll_register_string' ) ) {
		$header_options = array(
			'cenote_header_media_title',
			'cenote_header_media_text',
			'cenote_header_media_button_text',
		);

		foreach ( $header_options as $option_name ) {
			if ( isset( $value[ $option_name ] ) && ! empty( $value[ $option_name ] ) ) {
				pll_register_string( $option_name, $value[ $option_name ], 'Cenote Theme' );
			}
		}
	}
	return $value;
}
add_filter( 'pre_update_option_theme_mods_cenote', 'cenote_update_polylang_strings', 10, 3 );
