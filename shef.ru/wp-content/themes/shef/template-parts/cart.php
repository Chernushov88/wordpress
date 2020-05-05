<?php
/**
 * Template part for displaying cart.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
 <? global $woocommerce;
 /*$count = sprintf($woocommerce->cart->cart_contents_count)
if ($count  != 0) {
?>
1
<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini_cart desktop">
<span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
</a>
  ?>
<?
}else{
	?>
	2
<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini_cart desktop">
<span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
</a>
	<?
}
*/?>
<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini_cart desktop">
<span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
</a>