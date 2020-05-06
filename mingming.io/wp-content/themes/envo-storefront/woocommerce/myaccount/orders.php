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
  .inputfile+label b{
    font-weight: 400;
    color: #ccc;
  }
  .input-addFile{
  position: relative;
  }
  .input-addFile input{
  padding: 2px 10px;
  }
  .input-addFile:before{
  /*  display: block;
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  width: 100%;
  height: 100%;*/
  }
  .btn-addFile{
  position: absolute;
  top: 0px;
  right: 0px;
  z-index: 2;
  }
  .popup{position:fixed;left:50%;top:-200%;transform:translate(-50%,-50%);z-index:999;background:#fff;box-shadow:0 2px 4px 3px rgba(0,0,0,.1);transition:1s ease-in-out all; width: 100%;max-width: 600px;}
  .popup.open{    top: 50%;
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
  .woocommerce-notices-table > .table >tbody .btn.btn-login{
  margin: 4px 2px 4px;
  padding: 0px 15px;
  height: 30px;
  line-height: 30px;
  }
  .form-group .ms_btn {
  display: block;
  max-width: 200px;
  margin: 20px auto 0;
  }
  @media only screen and (max-width: 550px){
  .woocommerce-notices-table{width: 100%;font-size: 14px;}
  .woocommerce-notices-buttons{width: 100%;}
  .table td.buttons-block .btn{width: 100%;margin: 0 0px 10px;}
  }
</style>
<!-- <h3 style="margin: 0 0 20px;">Hello Michaell</h3>
  <h4>Orders</h4> -->
<?
  if( current_user_can('actor') )
  {

  $current_user = wp_get_current_user();
  $idu=get_user_meta( $current_user->ID, 'idtov', true);

  ?>
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
          <th scope="col">Link</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?
          $order_statuses = array('wc-payed');
          $customer_user_id = get_current_user_id(); // current user ID here for example
          $customer_orders5 = wc_get_orders( array(
              'post_status' => $order_statuses,
              'numberposts' => -1
          ) );


          // Loop through each customer WC_Order objects
          foreach($customer_orders5 as $order ){

              // Order ID (added WooCommerce 3+ compatibility)
             $order_id = method_exists( $order, 'get_id' ) ? $order->get_id() : $order->id;


          $p=0;
              // Iterating through current orders items
              foreach($order->get_items() as $item_id => $item)
            {
           $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];
              if ($product_id==$idu)
              {
          $p=1;
              }
              }

            if ($p>0)
            {
            $order99 = wc_get_order( $order_id );
          $order_meta = get_post_meta( $order_id);


          $type=$order_meta['_billing_occasion'][0];
          $from=$order_meta['_billing_from'][0];
          $to=$order_meta['_billing_who'][0];
          $int=$order_meta['_billing_instructions'][0];
          $link=$order_meta['billing_link'][0];


          $object = (array)$order->data['date_created'];
          $dat=$object['date'];
          $pu=explode(' ',$dat);
          $pu1=explode('-',$pu[0]);
          $datu=$pu1[2].'.'.$pu1[1].'.'.$pu1[0];

                  //$subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );
              ?>
        <tr>
          <th scope="row"><?=$datu?></th>
          <td><?=$type?></td>
          <td><?=$from?></td>
          <td><?=$to?></td>
          <td><?=$int?></td>
          <td>
            <?
              if ($link)
              {
              ?>
            <a target="_blank" href="<?=$link?>">This video</a>
            <?
              }
              ?>
          </td>
          <td class="buttons-block"><a href="#" onclick="ShowPopup5('#popupLoadFile','<?=$order_id?>');" class="btn btn-login">Respond</a></td>
        </tr>
        <?
          }







          }

          ?>
      </tbody>
    </table>
  </div>
</div>
<?
  }

  ?>
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
              echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button btn btn-login ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
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
      <h4 class="modal-title"><label >Add your video</label></h4>
    </div>
    <div class="modal-body">
      <form id="spi" enctype="multipart/form-data"  class="form-horizontal col-md-12"  method="post" >
        <div class="form-group">
          <div class="input-group input-addFile">
            <input type="file" name="file" id="addVideo" required value=""  class="inputfile">
            <label for="addVideo" class="form-control"><span  id="addVideoSpan"><b>avi,mp3,mp4</b></span><a class="btn btn-primary btn-addFile">Add file</a></label>
            <input type="hidden" name="zak" id="zak" value=""  placeholder="avi,mp3,mp4">
          </div>
        </div>
        <div class="form-group">
          <button type="button" size="1" onclick="sen()" class="btn ms_btn btn-block" name="Submit">Submit</button>
          <div class="text-danger" style="padding-top: 8px;" id="response"></div>
        </div>
      </form>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>


<script>
  window.addEventListener('load', function(){
    var inputs = document.querySelectorAll('.inputfile');
    console.log('inputs - ', inputs);
    Array.prototype.forEach.call(inputs, function(input){
      var label  = input.nextElementSibling,
        labelVal = label.innerHTML;
        console.log('label - ', label);
        console.log('labelVal - ', labelVal);
      input.addEventListener('change', function(e){
        console.log('this input', this);
        var fileName = '';
        var v = this.value;
        console.log('v - ', v);
        var v = v.search(/^.*\.(?:avi|mp3|mp4)\s*$/ig);
        if(v!=0){
           alert("Incorrect file format. \n The form will be cleared.");
           document.querySelector('#Reset').click();
        }else{
          if( this.files && this.files.length > 1 )
          fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
          else
            fileName = e.target.value.split( '\\' ).pop();
          if( fileName )
            label.querySelector( 'span' ).innerHTML = fileName;
          else
            label.innerHTML = labelVal;
        }

      });
    });
  })


  var FLAG = true;
  function validate() {
    return FLAG;
  }






    function ShowPopup5(target, id){
        jQuery("#zak").val(id);
		
		
      // event.preventDefault();
      console.log(target);
      jQuery(".darken").fadeIn();
      jQuery(target).addClass('open');
    }
    function HidePopup(target){
      jQuery(".darken").fadeOut(300);
      jQuery(target).removeClass('open');
    }



    function sen(){
  console.log('loaderloaderloaderloader');
  document.querySelector('body').classList.remove('loader');
      jQuery('#response').text();
console.log('id', <?=$idu;?>);
console.log('img', jQuery('#addVideo')[0].files[0]);
console.log('link', jQuery('#addVideoSpan').text());

      var formData = new FormData(jQuery('#spi')[0]);
      var fd = new FormData();
      fd.append('id', '<?=$idu;?>');
      fd.append('img', jQuery('#addVideo')[0].files[0]);
      fd.append('link',jQuery('#addVideoSpan').text());
      fd.append('zak',jQuery('#zak').val());
      if (jQuery('#addVideo').val().length>0){
		  
		 console.log(fd);
		  
        jQuery.ajax({
          type: "POST",
          url: "/updtovVideo.php",
          processData: false,
		      data: fd,
          contentType: false,
		      dataType: "json",
          success: function(data){
           console.log('zak008');
            window.location.reload();
            console.log('success - ', data);
          },
          error: function(data) {
             console.log('zak');
            window.location.reload();
            console.log('error - ', data);
          }
        });
		
		console.log('zak8ззщщ');
		
		
      }else{
        jQuery('#response').text('fill in the field');
      }
    }
</script>