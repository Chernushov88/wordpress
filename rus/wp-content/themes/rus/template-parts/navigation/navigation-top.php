<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
	<?php
	wp_nav_menu(
		array(
			'menu_class'      => '',
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
            'link_before' => '<span>', '
            link_after' => '</span>',
		)
	);
	?>
