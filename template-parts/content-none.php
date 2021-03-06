<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DPD_2015
 */

?><section class="no-results not-found"><?php

	/**
	 * The tha_entry_top action hook
	 *
	 * @hooked 		none_found_title
	 */
	do_action( 'tha_entry_top' );

	/**
	 * The tha_entry_content_before action hook
	 */
	do_action( 'tha_entry_content_before' );

	?><div class="page-content"><?php

		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			?><p><?php

				printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dpd-2015' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) );

			?></p><?php

		elseif ( is_search() ) :

			?><p><?php

				esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dpd-2015' );

			?></p><?php

			get_search_form();

		else :

			?><p><?php

				esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dpd-2015' );

			?></p><?php

			get_search_form();

		endif;

	?></div><!-- .page-content --><?php

	/**
	 * The tha_entry_content_after action hook
	 */
	do_action( 'tha_entry_content_after' );

	/**
	 * The tha_entry_bottom action hook
	 */
	do_action( 'tha_entry_bottom' );

?></section><!-- .no-results -->