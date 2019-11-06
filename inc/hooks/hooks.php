<?php
/**
 * Cenote hooks.
 *
 * @package cenote
 */

/* ------------------------------ HEADER ------------------------------ */
/**
 * head.
 *
 * @see cenote_head()
 */
add_action( 'cenote_head', 'cenote_head', 10 );

/**
 * Before header.
 *
 * @see cenote_page_start()
 * @see cenote_header_start()
 */
add_action( 'cenote_before_header', 'cenote_page_start', 10 );
add_action( 'cenote_before_header', 'cenote_header_start', 15 );

/**
 * Header Top Bar.
 *
 * @see cenote_header_top()
 */
add_action( 'cenote_header_top', 'cenote_header_top', 10 );
/**
 * Header Main Area.
 *
 * @see cenote_header_bottom()
 */
add_action( 'cenote_header_bottom', 'cenote_header_bottom', 10 );
/**
 * Header end.
 *
 * @see cenote_header_end()
 */
add_action( 'cenote_header_end', 'cenote_header_end', 10 );


/* ------------------------------ CONTENT ------------------------------ */

/**
 * Before content.
 *
 * @see cenote_content_start()
 */
add_action( 'cenote_before_content', 'cenote_content_start', 10 );

/**
 * Read More.
 *
 * @see cenote_read_more()
 */
add_action( 'cenote_read_more', 'cenote_read_more', 10 );

/**
 * Pagination.
 *
 * @see cenote_pagination()
 */
add_action( 'cenote_pagination', 'cenote_pagination', 10 );


/* ------------------------------ FOOTER ------------------------------ */

/**
 * After content.
 *
 * @see cenote_content_end()
 */
add_action( 'cenote_after_content', 'cenote_content_end', 10 );

/**
 * Before footer.
 *
 * @see cenote_footer_start()
 */
add_action( 'cenote_before_footer', 'cenote_footer_start', 10 );

/**
 * Footer Top.
 *
 * @see cenote_footer_top()
 */
add_action( 'cenote_footer_top', 'cenote_footer_top', 10 );

/**
 * Footer Bottom.
 *
 * @see cenote_footer_bottom()
 */
add_action( 'cenote_footer_bottom', 'cenote_footer_bottom', 10 );

/**
 * Footer End.
 *
 * @see cenote_footer_end()
 */
add_action( 'cenote_after_footer', 'cenote_footer_end', 10 );

/**
 * Page End.
 *
  * @see cenote_page_end()
 */
add_action( 'cenote_after', 'cenote_page_end', 10 );








