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
add_action( 'cenote_action_head', 'cenote_head', 10 );

/**
 * Before header.
 *
 * @see cenote_page_start()
 * @see cenote_header_start()
 */
add_action( 'cenote_action_before_header', 'cenote_page_start', 10 );
add_action( 'cenote_action_before_header', 'cenote_header_start', 15 );

/**
 * Header Top Bar.
 *
 * @see cenote_header_top()
 */
add_action( 'cenote_action_header_top', 'cenote_header_top', 10 );
/**
 * Header Main Area.
 *
 * @see cenote_header_bottom()
 */
add_action( 'cenote_action_header_bottom', 'cenote_header_bottom', 10 );
/**
 * Header end.
 *
 * @see cenote_header_end()
 */
add_action( 'cenote_action_header_end', 'cenote_header_end', 10 );


/* ------------------------------ CONTENT ------------------------------ */

/**
 * Before content.
 *
 * @see cenote_content_start()
 */
add_action( 'cenote_action_before_content', 'cenote_content_start', 10 );
