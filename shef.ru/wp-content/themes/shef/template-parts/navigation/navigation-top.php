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
<div class="left_wrap" id="menu">
	<?php
	wp_nav_menu(
		array(
			'menu_class'      => '',
			'theme_location' => 'top',
			'menu_id'        => '',
			
		)
	);
	?>
</div>

            <!-- <ul>
              <li><a href="/wp-content/themes/shef/verstka/set.html">Сеты от Шефа</a></li>
              <li><a href="/wp-content/themes/shef/verstka/delivery.html">Доставка</a></li>
              <li><a href="/wp-content/themes/shef/verstka/call.html">Позвони Шефу</a></li>
            </ul> -->
          