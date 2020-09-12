<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-primary-wrap">
	
	<div class="psfw-top-image">
		<?php include(PSFW_PATH . 'inc/frontend/content/image.php'); ?>
		<?php if ( isset( $psfw_option[ 'psfw_show_category' ] ) && $psfw_option[ 'psfw_show_category' ] == '1' ) { ?>
			<div class="psfw-category-wrap">
				<?php echo $psfw_fetch_category; ?>
			</div><?php
		}?>
		<div class="psfw-hover-buttons">
			<?php if( isset($psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1' ) { ?>
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
			} 
			include (PSFW_PATH . '/inc/frontend/data/button-two.php'); ?>
		</div>
		<?php
			if ( isset( $psfw_option[ 'psfw_show_social_share' ] ) && $psfw_option[ 'psfw_show_social_share' ] == '1' ) { ?>
				<div class="psfw-social-share">
                    <div class="psfw-social-share-secondary">
                        <span class="lnr lnr-exit-up"></span>
                    </div>
                    <div class="psfw-social-share-primary">
                        <?php include (PSFW_PATH . '/inc/frontend/content/psfw-social.php'); ?>
                    </div>
                </div>
			<?php }
		?>
	</div>
	<?php include (PSFW_PATH . '/inc/frontend/data/ribbon.php'); ?>
</div>
<div class="psfw-secondary-wrap">
	<?php include (PSFW_PATH . '/inc/frontend/data/title.php'); 
		  include (PSFW_PATH . '/inc/frontend/data/price.php');
		  include (PSFW_PATH . '/inc/frontend/data/review.php'); 
	?>
	
	<?php 
	if(isset($psfw_option['psfw_show_content']) && $psfw_option['psfw_show_content'] == '1'){ ?>
		<div class="psfw-content"> <?php
			echo $psfw_fetch_content; ?>
		</div>
		<?php
	}
	?>
	<div class="psfw-hover">
		<?php  include (PSFW_PATH . '/inc/frontend/data/button-one.php'); ?>
	</div>
</div>