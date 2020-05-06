<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>
<style>
  .inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}
.inputfile+label {

    width: 100%;
    height: 34px;
    margin-top: 10px;
    font-size: 16px;
    color: #575757;
    display: inline-block;
    border: 0;
    outline: 0;
    border-bottom: 1px solid #d5d5d5;
    cursor: pointer;
    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
    border: 1px solid #bbb;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    display: block;
    width: 100%;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
}
.input-addFile{
  position: relative;
}
.input-addFile:before{
  display: block;
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
}
.btn-addFile{
  position: absolute;
  top: 0px;
  right: 0px;
  z-index: 2;
}
.popup{position:fixed;left:50%;top:-200%;transform:translate(-50%,-0%);z-index:999;background:#fff;box-shadow:0 2px 4px 3px rgba(0,0,0,.1);transition:1s ease-in-out all; width: 100%;max-width: 600px;}
 .popup.open{    top: 15px;
    margin: 10px;padding: 15px 15px 10px;}
 .popup .hidden_modal{display:block}
 .popup .close{position:absolute;right:24px;top:24px;z-index:9;width:12px;height:12px}
 .popup .close img{display:block}
 .popup .close:hover{opacity:.5}


  .darken{display:none;width:100%;height:100%;position:fixed;left: 0;top:0;background:rgba(0,0,0,.6);overflow:hidden;z-index:100;cursor:pointer}
 .darken.open{display:block}
.woocommerce-notices-flex{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    margin-bottom: 30px;
}
.woocommerce-notices-table{
    width: 80%;
    width: 100%;
}
.woocommerce-notices-buttons{
    width: 20%;
    min-width: 100px;
    padding-left: 10px;
}
.woocommerce-notices-buttons .btn{
    width: 100%;
    margin-top: 10px;
}
.table {

}
.table thead th{
    background: rgba(0, 0, 0, 0.1);;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border: 1px solid #dee2e6;
}
.table td.buttons-block{
    padding: 0 0.35em;
    vertical-align: middle;
}
.table td.buttons-block .btn{
    margin: 5px 2px 5px;
    padding: 4px 20px;
}
.woo-info{
  padding-top: 20px;
  border-top: 3px solid #1e85be;
}
.woo-info .table thead th{
  background: transparent;
}
@media only screen and (max-width: 550px){
    .woocommerce-notices-table{width: 100%;font-size: 14px;}
    .woocommerce-notices-buttons{width: 100%;}
    .table td.buttons-block .btn{width: 100%;margin: 0 0px 10px;}
}


</style>

<!-- <h3 style="margin: 0 0 20px;">Hello Michaell</h3>
<h4>Orders</h4> -->
<div class="woocommerce-notices-flex">
    <div class="woocommerce-notices-table">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Type</th>
              <th scope="col">From</th>
              <th scope="col">To</th>
              <th scope="col">Instruction</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">20.03.2020</th>
              <td>For business</td>
              <td>Joe</td>
              <td>Joe's shop</td>
              <td>We are selling flowers</td>
              <td class="buttons-block"><a href="#" onclick="ShowPopup('#popupLoadFile');" class="btn btn-default">Respond</a></td>
            </tr>
            <tr>
              <th scope="row">20.03.2020</th>
              <td>For business</td>
              <td>Joe</td>
              <td>Joe's shop</td>
              <td>We are selling flowers</td>
              <td class="buttons-block"><a href="#" onclick="ShowPopup('#popupLoadFile');" class="btn btn-default">Respond</a></td>
            </tr>
            <tr>
              <th scope="row">20.03.2020</th>
              <td>For business</td>
              <td>Joe</td>
              <td>Joe's shop</td>
              <td>We are selling flowers</td>
              <td class="buttons-block"><a href="#" onclick="ShowPopup('#popupLoadFile');" class="btn btn-default">Respond</a></td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
<div class="woocommerce-notices-flex woo-info">
    <div class="woocommerce-notices-table">
        <table class="table">
          <thead>
            <tr>
              <th>Order</th>
              <th>Date</th>
              <th>Status</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="color: #ff0707;">#139</td>
              <td>27.03.2020</td>
              <td>Failed</td>
              <td>540.00 for 1 item</td>
              <td class="buttons-block">
                <a href="#" class="btn btn-default">Pay</a>
                <a href="#" class="btn btn-default">View</a>
                <a href="#" class="btn btn-default">Cancel</a>
                </td>
            </tr>
            <tr>
              <td style="color: #ff0707;">#139</td>
              <td>27.03.2020</td>
              <td>Failed</td>
              <td>540.00 for 1 item</td>
              <td class="buttons-block">
                <a href="#" class="btn btn-default">Pay</a>
                <a href="#" class="btn btn-default">View</a>
                <a href="#" class="btn btn-default">Cancel</a>
                </td>
            </tr>
          </tbody>
        </table>
    </div>


</div>
<?php if ( $has_orders ) : ?>

	<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
					<th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
				$item_count = $order->get_item_count() - $order->get_item_count_refunded();
				?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
						<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php
								/* translators: 1: formatted order total 2: total order items */
								echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
								?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
										echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							<?php endif; ?>
						</td>
					<?php endforeach; ?>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'woocommerce' ); ?></a>
			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php esc_html_e( 'Browse products', 'woocommerce' ); ?>
		</a>
		<?php esc_html_e( 'No order has been made yet.', 'woocommerce' ); ?>
	</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>


<div id="popupLoadFile" class="popup">
  <div class="close" onclick="HidePopup('#popupLoadFile');"><img width="20px" height="20px" src="/wp-content/themes/envo-storefront/img/close.svg" alt="Close"></div>
  <div class="modal-content" role="document">
    <div class="modal-header">
      <h4 class="modal-title">Add your video</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal col-md-12">
        <div class="form-group">
          <div class="input-group input-addFile">
              <input type="file" name="file" id="addVideo" class="inputfile">
              <label for="addVideo" class="form-control"><span></span><a class="btn btn-primary btn-addFile">Add file</a></label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">Submit</button>
          <div class="text-danger" style="padding-top: 8px;"></div>
        </div>
      </form>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>
  <div class="darken"></div>
<script>
window.addEventListener('load', function(){
  var inputs = document.querySelectorAll('.inputfile');
  Array.prototype.forEach.call(inputs, function(input){
    var label  = input.nextElementSibling,
        labelVal = label.innerHTML;
    input.addEventListener('change', function(e){
      console.log(this)
      var fileName = '';
      if( this.files && this.files.length > 1 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else
        fileName = e.target.value.split( '\\' ).pop();
      if( fileName )
        label.querySelector( 'span' ).innerHTML = fileName;
      else
        label.innerHTML = labelVal;
    });
  });
})
  jQuery(function($){
    $(".darken").click(function(){
      $(".darken").fadeOut(300);
      $('.popup').removeClass('open');
    });
  })
  function ShowPopup(target){
    // event.preventDefault();
    console.log(target);
    jQuery(".darken").fadeIn();
    jQuery(target).addClass('open');
  }
  function HidePopup(target){
    jQuery(".darken").fadeOut(300);
    jQuery(target).removeClass('open');
  }
</script>