<?php
/**
 * Cenote content functions to be hooked
 *
 * @package cenote
 */

if( !function_exists( 'cenote_read_more' )):
	/**
	* Post Read More.
	*/
	function cenote_read_more(){
	?>
		<footer class="entry-footer">
			<a href="<?php the_permalink(); ?>" class="tg-readmore-link"><?php esc_html_e( 'Read More', 'cenote' ); ?></a>
		</footer><!-- .entry-footer -->
	<?php
	}
endif;

if( !function_exists( 'cenote_pagination' )):
	/**
	* Pagination.
	*/
	function cenote_pagination(){

		get_template_part( 'template-parts/pagination/pagination' );

	}
endif;
