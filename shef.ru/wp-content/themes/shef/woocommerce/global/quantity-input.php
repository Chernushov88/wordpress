<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	/* translators: %s: Quantity. */
	$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );
	?>
	<div class="blk_cnt">
		<?php do_action( 'woocommerce_before_quantity_input_field' ); ?>
	 <table>
        <tr><td><div class="cnt_plus" onclick="cnt_plus(this);"><i class="fa fa-angle-up" aria-hidden="true"></i></div></td></tr>
        <tr><td>        	
        	
        	<input
			type="text"
			id="<?php echo esc_attr( $input_id ); ?>"
			class="my_cnt"
			step="<?php echo esc_attr( $step ); ?>"
			min="<?php echo esc_attr( $min_value ); ?>"
			max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
			name="<?php echo esc_attr( $input_name ); ?>"
			value="<?php echo esc_attr( $input_value ); ?>"
			title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
			size="4"
			inputmode="<?php echo esc_attr( $inputmode ); ?>" />
			
        </td></tr>
        <tr><td><div class="cnt_minus" onclick="cnt_minus(this);"><i class="fa fa-angle-down" aria-hidden="true"></i></div></td></tr>
    </table>
    <?php do_action( 'woocommerce_after_quantity_input_field' ); ?>
    </div>

	<!-- <div class="quantity">		
		<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>		
	</div> -->
<script>
// document.addEventListener('click', function (e) {
// 	console.log(e);
// 	console.log(e.target.classList.contains("cnt_plus"));
//   if (e.target.classList.contains("cnt_plus")) {
//     ++document.querySelector("#<?php echo esc_attr( $input_id ); ?>").value;
//   } else if (e.target.classList.contains("cnt_minus")) {
//   	let input = document.querySelector("#<?php echo esc_attr( $input_id ); ?>").value;
//   	console.log(input);
//   	if(input > 1) --document.querySelector("#<?php echo esc_attr( $input_id ); ?>").value
  	
//   }
// })


var countInput = document.querySelector(".my_cnt");
var units = countInput.value.replace(/\d/g, '');
function cnt_plus(elem){
	var countInput =  elem.parentNode.parentNode.parentNode.querySelector(".my_cnt");
    countInput.value = parseInt(countInput.value)+1+units;
};
function cnt_minus(elem){
	var countInput =  elem.parentNode.parentNode.parentNode.querySelector(".my_cnt");
    if(parseInt(countInput.value) > 1) {
        countInput.value = parseInt(countInput.value)-1+units;
    }
};
</script>
	<?php
}


