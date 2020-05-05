<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


global $woocommerce;
$count = sprintf($woocommerce->cart->cart_contents_count);
if($count != 0){
?>
<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini_cart desktop">
<span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
</a>
<?}
?>
