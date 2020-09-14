<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-top-image">
	<?php include (PSFW_PATH . '/inc/frontend/data/ribbon.php'); ?>
	<?php include(PSFW_PATH . 'inc/frontend/content/image.php'); ?>
	<div class="psfw-top-hover">
		<?php 
		if( isset($psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1' ) { ?>
			<div class="psfw-lightbox-wrap psfw-icon-hover-wrap psfw-button">
				<?php include (PSFW_PATH . '/inc/frontend/data/lightbox.php'); ?>
			</div><?php 
		} 
		if( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) {
			if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1' ) { ?>
				<div class="psfw-wishlist-wrap psfw-icon-hover-wrap psfw-button"> <?php
					if ( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) {
						$this -> psfw_wishlist_button($product_item_id);
					} ?>
				</div> <?php
			}
		} ?>
	</div>
</div>

<div class="psfw-top-wrap">
	<?php
	if ( isset( $psfw_option[ 'psfw_show_category' ] ) && $psfw_option[ 'psfw_show_category' ] == '1' ) { ?>
		<div class="psfw-category-wrap">
			<?php echo $psfw_fetch_category; ?>
		</div><?php
	}
	include (PSFW_PATH . '/inc/frontend/data/title.php'); ?>
</div>
<div class="psfw-image-hover-wrap">
	<div class="psfw-image-second-container">
		<div class="psfw-top-hover-wrap"> 
		</div>
	</div>
	<?php if(isset($psfw_option['psfw_show_content']) && $psfw_option['psfw_show_content'] == '1'){ ?>
		<div class="psfw-content"> <?php
			echo $psfw_fetch_content; ?>
		</div>
		<?php
	} ?>
</div>
<div class="psfw-details-wrap">
	<div class="psfw-extra-wrap-trns">
	 	<?php 
	    include (PSFW_PATH . '/inc/frontend/data/review.php');
		include (PSFW_PATH . '/inc/frontend/data/price.php');
		 ?>
	</div>
</div>
<div class="psfw-bottom-hover">
	<div class="psfw-buttons-collection psfw-clearfix"> <?php
		include (PSFW_PATH . '/inc/frontend/data/button-one.php');
		include (PSFW_PATH . '/inc/frontend/data/button-two.php'); ?>
	</div><?php
	if ( isset( $psfw_option[ 'psfw_show_social_share' ] ) && $psfw_option[ 'psfw_show_social_share' ] == '1' ) {
			include (PSFW_PATH . '/inc/frontend/content/psfw-social.php');
	} ?>
</div>
