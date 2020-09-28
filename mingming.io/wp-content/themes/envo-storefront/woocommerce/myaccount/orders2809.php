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
  .body_safari table tr{
  position: relative;
  }
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
  /*  .popup{position:fixed;left:50%;top:-200%;transform:translate(-50%,-50%);z-index:999;;box-shadow:0 2px 4px 3px rgba(0,0,0,.1);transition:1s ease-in-out all; width: 100%;max-width: 600px;}
  .popup.open{    top: 50%;
  margin: 10px;padding: 15px 15px 10px;}
  .popup .hidden_modal{display:block}
  .popup .close{position:absolute;right:24px;top:24px;z-index:9;width:12px;height:12px}
  .popup .close img{display:block}
  .popup .close:hover{opacity:.5}
  .darken{display:none;width:100%;height:100%;position:fixed;left: 0;top:0;background:rgba(0,0,0,.6);overflow:hidden;z-index:100;cursor:pointer}
  .darken.open{display:block}*/
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
  font-size: 12px;
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
  padding: 0.15em 0.35em 0.5em;
  vertical-align: middle;
  }
  .table td.buttons-block .btn{
  margin: 5px 2px 5px;
  padding: 4px 20px;
  }
  .table td.buttons-block a{
  display: block;
  width: auto;
  max-width: 100px;
  padding: 0 !important;
  font-size: 14px;
  }
  .table td .buttons-block-in{
  //order: -1;
  /*width: 100%;
  margin-top: 10px;
  clear: both;*/
  /*display: flex;
  justify-content: space-between;
  justify-content: space-evenly;*/
  }
  .table td .buttons-block-in>div{
  display: none;
  }
  .table td .buttons-block-in>div:first-child{
  display: block;
  }
  .table td.buttons-block .pipeFileInput{
  display: inline-block;
  width: auto;
  height: 30px;
  margin: 5px auto 0;
  padding: 0 10px;
  text-align: center;
  line-height: 30px;
  font-size: 15px;
  color: #fff;
  border: 1px solid #fff;
  background: transparent;
  border-radius: 20px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  text-overflow: ellipsis;
  overflow: hidden;
  font-weight: 400;
  }
  .table td.buttons-block input[type="file"]{
  display: none;
  }
  .woo-info{
  padding-top: 20px;
  border-top: 3px solid #1e85be;
  }
  .woo-info .table thead th{
  background: transparent;
  }
  .woocommerce-notices-table > .table >tbody .btn.btn-login{
  margin-top: 5px !important;
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
  .woocommerce-notices-table .table tr td.buttons-block{
  flex-wrap: wrap;
  }
  .data-td{
  }
  .woocommerce-message--info
  {
  display:none;
  }
  #comments
  {
  display:none;
  }
  .table td.buttons-block .pipeMobileRecorder {
  text-align: center;
  width: auto;
  margin: 0;
  }
  @media only screen and (max-width: 540px){
  .row-account >.col-md-9{padding: 0;}
  .woocommerce-notices-table{width: 100%;font-size: 14px;}
  .woocommerce-notices-buttons{width: 100%;}
  .table td.buttons-block .btn{width: 100%;margin: 0 0px 10px;}
  }
  #pipeStartRecording-custom-id
  {
  color:#fff!important;
  }
  #pipeRecordRTC-custom-id
  {
  width:100px!important;
  height:30px!important;border-radius: 20px!important;
  background: none!important;border: 1px solid #fff!important;color:#fff!important;
  }
  .pipeRecordRTC span
  {
  font-size:8px!important;color:#fff!important;
  }
  .pipeRecordRTC span:hover
  {
  font-size:8px!important;color:#fff!important;
  }
  .woocommerce-notices-table .table tr td.buttons-block a{margin-top: 5px !important;}
</style>
<!-- <h3 style="margin: 0 0 20px;">Hello Michaell</h3>
  <h4>Orders</h4> -->
<?
  function get_os($user_agent)
  {
  $os = array (
  'Windows' => 'Win',
  'Open BSD'=>'OpenBSD',
  'Sun OS'=>'SunOS',
  'Linux'=>'(Linux)|(X11)',
  'Mac OS'=>'(Mac_PowerPC)|(Macintosh)',
  'QNX'=>'QNX',
  'BeOS'=>'BeOS',
  'OS/2'=>'OS/2',
  'Safari' => '(Safari)',
  'iPad'    => '(iPad)',
  );

  foreach($os as $key=>$value)
  {
  if (preg_match('#'.$value.'#i', $user_agent))
  return $key;
  }

  return 'Unknown';
  }



    if( current_user_can('actor') )
    {

    $current_user = wp_get_current_user();
  $idu=get_user_meta( $current_user->ID, 'idtov', true);



  $osa=get_os($_SERVER['HTTP_USER_AGENT']);
    if ($osa=='Safari')
    {
      ?>
<link rel="stylesheet" href="//cdn.addpipe.com/2.0/pipe.css">
<script type="text/javascript" src="//cdn.addpipe.com/2.0/pipe.js"></script>
<div style="display:none" id="eta">
  <div class="intip buttons-block-in" style="display:none" id="custom-id"></div>
</div>
<?
  }
  else
  {

    ?>
<link rel="stylesheet" href="//cdn.addpipe.com/2.0/pipe.css">
<script type="text/javascript" src="//cdn.addpipe.com/2.0/pipe.js"></script>
<div style="display:none" id="eta">
  <img width="30px" height="30px" alt="Close" class="close" src="/wp-content/themes/envo-storefront/img/close-white.svg" onclick="HidePopup5('#eta');">
  <!--<div class="darken" style="display: block;"></div>-->
  <div class="intip buttons-block-in popup popupVideoRecrd" style="display:none" id="custom-id" ></div>
  <div class="darkenVideo"  onclick="HidePopup5('#eta');"></div>
</div>
<?
  }
   ?>
<div class="woocommerce-notices-flex">
  <div class="woocommerce-notices-table">
   
   
<?
if( wp_is_mobile() ) 
{
	?>
	 <div id="perv" class="table">

   
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
		
          $type=$order_meta['billing_occasion'][0];
          $from=$order_meta['billing_from'][0];
          $to=$order_meta['billing_who'][0];
          $int=$order_meta['billing_instructions'][0];
          $link=$order_meta['billing_link'][0];

          $int1=str_replace("'","\'",$int);

          $object = (array)$order->data['date_created'];
          $dat=$object['date'];
          $pu=explode(' ',$dat);
          $pu1=explode('-',$pu[0]);
          $datu=$pu1[2].'.'.$pu1[1].'.'.$pu1[0];

                  //$subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );
              ?>
<div  class="ter">
	<a onclick="jQuery(this).parent().find('table').slideToggle()" href="javascript:void(0)"><?=$datu?> | <?=$type?> | <?=$to?></a>	   
	<table style="display:none">
        <tr>
          <td scope="row" class="data-td"><?=$datu?></td>
          <td><?=$type?></td>
          <td><?=$from?></td>
          <td><?=$to?></td>
          <td id="inti-<?=$order_id?>"><?=$int?></td>
          <td>
            <?
              if ($link)
              {
              ?>
            <!-- <a target="_blank" href="<?=$link?>">This video</a> -->
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupVideo(`#popupShareVideo`, `<video controls='' autoplay=''  name='media' class='videoLink'><source src='<?=$link?>' type='video/mp4' ></video>`);jQuery('#popupShareVideo').find('.ms_btn').attr('onclick','sha(\'<?=$link;?>\')')">This video</a>
            <?
              }
              ?>
          </td>
          <td class="buttons-block">
            <?php
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
              if ($osa=='Safari') {

              }else{?>
            <!---->
            <? } ?>
            <a href="javascript:void(0);" class="btn btn-login" onclick="ShowPopup5('#popupLoadFile','<?=$order_id?>');">Respond</a>
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupShare('#popupShare','<?=$link;?>')">Share</a>
            <?
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
                if ($osa=='Safari')
                {
                  ?>
            <!--<p id="intip-<?=$order_id?>" style="display:none;z-index:9999999999;position:relative;top: 110px;color: #fff;">777To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?></p>
              -->
            <!-- <a href="javascript:void(0);" class="btn btn-login" onclick="jQuery(this).hide();jQuery('.intip-<?=$order_id?>').show();moving(this,'moving-<?=$order_id?>')">videoRecord</a> -->
            <a href="javascript:void(0);" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in  popupVideoRecrd popup" style="display:none" id="custom-id"></div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;
              jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });

              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;


                jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });








              }


              });
            </script>
            <?
              }
              else
              {
                ?>
            <a href="javascript:void(0);" id="na-<?=$order_id?>" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in popupVideoRecrd popup" style="display:none" id="custom-id"> </div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;

              var yy=jQuery('#eta').find('.intip').attr('rel');


                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });




              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;



              var yy=jQuery('#eta').find('.intip').attr('rel');



                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });











              }


              });
            </script>
            <!--<a href="javascript:void(0);" class="btn btn-login" onclick="jQuery('#fram').attr('src','http://pozdr.beget.tech-local/2020/05/11/video/?id=<?=$order_id?>');ShowPopup('#popupVideoRecord');jQuery('#texa').html('');jQuery('#texa').append('To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?>');">videoRecord</a>-->
            <?
              }



                  ?>
          </td>
        </tr>
		</table>
		</div>
        <?
          }



          }

          ?>
     
    </div>
	
	
	
	
	
	
	  <div id="vtor" style="display:none" class="table">
     
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
		
          $type=$order_meta['billing_occasion'][0];
          $from=$order_meta['billing_from'][0];
          $to=$order_meta['billing_who'][0];
          $int=$order_meta['billing_instructions'][0];
          $link=$order_meta['billing_link'][0];

		  
		  if ($link)
              {
		  
			  }
		  else
		  {
		  
		  
		  
          $int1=str_replace("'","\'",$int);

          $object = (array)$order->data['date_created'];
          $dat=$object['date'];
          $pu=explode(' ',$dat);
          $pu1=explode('-',$pu[0]);
          $datu=$pu1[2].'.'.$pu1[1].'.'.$pu1[0];

                  //$subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );
              ?>

		<div class="ter">
	<a onclick="jQuery(this).parent().find('table').slideToggle()" href="javascript:void(0)"><?=$datu?> | <?=$type?> | <?=$to?></a>	  
       <table style="display:none">
	   <tr>
		
          <td scope="row" class="data-td"><?=$datu?></td>
          <td><?=$type?></td>
          <td><?=$from?></td>
          <td><?=$to?></td>
          <td id="inti-<?=$order_id?>"><?=$int?></td>
          <td>
            <?
              if ($link)
              {
              ?>
            <!-- <a target="_blank" href="<?=$link?>">This video</a> -->
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupVideo(`#popupShareVideo`, `<video controls='' autoplay=''  name='media' class='videoLink'><source src='<?=$link?>' type='video/mp4' ></video>`);jQuery('#popupShareVideo').find('.ms_btn').attr('onclick','sha(\'<?=$link;?>\')')">This video</a>
            <?
              }
              ?>
          </td>
          <td class="buttons-block">
            <?php
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
              if ($osa=='Safari') {

              }else{?>
            <!---->
            <? } ?>
            <a href="javascript:void(0);" class="btn btn-login" onclick="ShowPopup5('#popupLoadFile','<?=$order_id?>');">Respond</a>
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupShare('#popupShare','<?=$link;?>')">Share</a>
            <?
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
                if ($osa=='Safari')
                {
                  ?>
            <!--<p id="intip-<?=$order_id?>" style="display:none;z-index:9999999999;position:relative;top: 110px;color: #fff;">777To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?></p>
              -->
            <!-- <a href="javascript:void(0);" class="btn btn-login" onclick="jQuery(this).hide();jQuery('.intip-<?=$order_id?>').show();moving(this,'moving-<?=$order_id?>')">videoRecord</a> -->
            <a href="javascript:void(0);" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in  popupVideoRecrd popup" style="display:none" id="custom-id"></div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;
              jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });

              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;


                jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });








              }


              });
            </script>
            <?
              }
              else
              {
                ?>
            <a href="javascript:void(0);" id="na-<?=$order_id?>" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in popupVideoRecrd popup" style="display:none" id="custom-id"> </div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;

              var yy=jQuery('#eta').find('.intip').attr('rel');


                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });




              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;



              var yy=jQuery('#eta').find('.intip').attr('rel');



                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });











              }


              });
            </script>
            <!--<a href="javascript:void(0);" class="btn btn-login" onclick="jQuery('#fram').attr('src','http://pozdr.beget.tech-local/2020/05/11/video/?id=<?=$order_id?>');ShowPopup('#popupVideoRecord');jQuery('#texa').html('');jQuery('#texa').append('To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?>');">videoRecord</a>-->
            <?
              }



                  ?>
          </td>
        </tr>
		</table>
		</div>
		
        <?
		
		
			}
          }



          }

          ?>
     
    </div>
	<?
}
else
{
?>   

   
   
   
   
   
   
   
   
   <table id="perv" class="table">
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
		
          $type=$order_meta['billing_occasion'][0];
          $from=$order_meta['billing_from'][0];
          $to=$order_meta['billing_who'][0];
          $int=$order_meta['billing_instructions'][0];
          $link=$order_meta['billing_link'][0];

          $int1=str_replace("'","\'",$int);

          $object = (array)$order->data['date_created'];
          $dat=$object['date'];
          $pu=explode(' ',$dat);
          $pu1=explode('-',$pu[0]);
          $datu=$pu1[2].'.'.$pu1[1].'.'.$pu1[0];

                  //$subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );
              ?>
        <tr>
          <td scope="row" class="data-td"><?=$datu?></td>
          <td><?=$type?></td>
          <td><?=$from?></td>
          <td><?=$to?></td>
          <td id="inti-<?=$order_id?>"><?=$int?></td>
          <td>
            <?
              if ($link)
              {
              ?>
            <!-- <a target="_blank" href="<?=$link?>">This video</a> -->
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupVideo(`#popupShareVideo`, `<video controls='' autoplay=''  name='media' class='videoLink'><source src='<?=$link?>' type='video/mp4' ></video>`);jQuery('#popupShareVideo').find('.ms_btn').attr('onclick','sha(\'<?=$link;?>\')')">This video</a>
            <?
              }
              ?>
          </td>
          <td class="buttons-block">
            <?php
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
              if ($osa=='Safari') {

              }else{?>
            <!---->
            <? } ?>
            <a href="javascript:void(0);" class="btn btn-login" onclick="ShowPopup5('#popupLoadFile','<?=$order_id?>');">Respond</a>
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupShare('#popupShare','<?=$link;?>')">Share</a>
            <?
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
                if ($osa=='Safari')
                {
                  ?>
            <!--<p id="intip-<?=$order_id?>" style="display:none;z-index:9999999999;position:relative;top: 110px;color: #fff;">777To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?></p>
              -->
            <!-- <a href="javascript:void(0);" class="btn btn-login" onclick="jQuery(this).hide();jQuery('.intip-<?=$order_id?>').show();moving(this,'moving-<?=$order_id?>')">videoRecord</a> -->
            <a href="javascript:void(0);" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in  popupVideoRecrd popup" style="display:none" id="custom-id"></div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;
              jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });

              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;


                jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });








              }


              });
            </script>
            <?
              }
              else
              {
                ?>
            <a href="javascript:void(0);" id="na-<?=$order_id?>" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in popupVideoRecrd popup" style="display:none" id="custom-id"> </div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;

              var yy=jQuery('#eta').find('.intip').attr('rel');


                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });




              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;



              var yy=jQuery('#eta').find('.intip').attr('rel');



                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });











              }


              });
            </script>
            <!--<a href="javascript:void(0);" class="btn btn-login" onclick="jQuery('#fram').attr('src','http://pozdr.beget.tech-local/2020/05/11/video/?id=<?=$order_id?>');ShowPopup('#popupVideoRecord');jQuery('#texa').html('');jQuery('#texa').append('To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?>');">videoRecord</a>-->
            <?
              }



                  ?>
          </td>
        </tr>
        <?
          }



          }

          ?>
      </tbody>
    </table>
	
	
	
	
	
	
	  <table id="vtor" style="display:none" class="table">
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
		
          $type=$order_meta['billing_occasion'][0];
          $from=$order_meta['billing_from'][0];
          $to=$order_meta['billing_who'][0];
          $int=$order_meta['billing_instructions'][0];
          $link=$order_meta['billing_link'][0];

		  
		  if ($link)
              {
		  
			  }
		  else
		  {
		  
		  
		  
          $int1=str_replace("'","\'",$int);

          $object = (array)$order->data['date_created'];
          $dat=$object['date'];
          $pu=explode(' ',$dat);
          $pu1=explode('-',$pu[0]);
          $datu=$pu1[2].'.'.$pu1[1].'.'.$pu1[0];

                  //$subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );
              ?>
        <tr>
		
          <td scope="row" class="data-td"><?=$datu?></td>
          <td><?=$type?></td>
          <td><?=$from?></td>
          <td><?=$to?></td>
          <td id="inti-<?=$order_id?>"><?=$int?></td>
          <td>
            <?
              if ($link)
              {
              ?>
            <!-- <a target="_blank" href="<?=$link?>">This video</a> -->
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupVideo(`#popupShareVideo`, `<video controls='' autoplay=''  name='media' class='videoLink'><source src='<?=$link?>' type='video/mp4' ></video>`);jQuery('#popupShareVideo').find('.ms_btn').attr('onclick','sha(\'<?=$link;?>\')')">This video</a>
            <?
              }
              ?>
          </td>
          <td class="buttons-block">
            <?php
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
              if ($osa=='Safari') {

              }else{?>
            <!---->
            <? } ?>
            <a href="javascript:void(0);" class="btn btn-login" onclick="ShowPopup5('#popupLoadFile','<?=$order_id?>');">Respond</a>
            <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupShare('#popupShare','<?=$link;?>')">Share</a>
            <?
              $osa=get_os($_SERVER['HTTP_USER_AGENT']);
                if ($osa=='Safari')
                {
                  ?>
            <!--<p id="intip-<?=$order_id?>" style="display:none;z-index:9999999999;position:relative;top: 110px;color: #fff;">777To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?></p>
              -->
            <!-- <a href="javascript:void(0);" class="btn btn-login" onclick="jQuery(this).hide();jQuery('.intip-<?=$order_id?>').show();moving(this,'moving-<?=$order_id?>')">videoRecord</a> -->
            <a href="javascript:void(0);" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in  popupVideoRecrd popup" style="display:none" id="custom-id"></div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;
              jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });

              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;


                jQuery('.pipeFileInput').each(function(){
              var yy=jQuery(this).parent().parent().attr('Class');
              if (yy!='intip buttons-block-in pipeMobileRecorder')
              {
                var idi=yy.split(' ');
                var idi1=idi[0].split('-');
                var zak=idi1[1];
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });

              }
              });








              }


              });
            </script>
            <?
              }
              else
              {
                ?>
            <a href="javascript:void(0);" id="na-<?=$order_id?>" class="btn btn-login videoRecord" onclick="moving(this,'<?=$order_id?>')">videoRecord</a>
            <div class="intip-<?=$order_id?> buttons-block-in popupVideoRecrd popup" style="display:none" id="custom-id"> </div>
            <script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;

              var yy=jQuery('#eta').find('.intip').attr('rel');


                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });




              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;



              var yy=jQuery('#eta').find('.intip').attr('rel');



                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });











              }


              });
            </script>
            <!--<a href="javascript:void(0);" class="btn btn-login" onclick="jQuery('#fram').attr('src','http://pozdr.beget.tech-local/2020/05/11/video/?id=<?=$order_id?>');ShowPopup('#popupVideoRecord');jQuery('#texa').html('');jQuery('#texa').append('To:<?=$to.'<br/>From:'.$from?><br/>Instruction:<br/><?=$int1?>');">videoRecord</a>-->
            <?
              }



                  ?>
          </td>
        </tr>
		
		
		
        <?
		
		
			}
          }



          }

          ?>
      </tbody>
    </table>
	
	
	<?
}
	?>
	
	
	
	
	
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



          $order_id = method_exists( $item_count, 'get_id' ) ? $item_count->get_id() : $item_count->id;
          $order_meta = get_post_meta( $order_id);

      $order_id1 = $order->get_id(); //> 35
      $order_meta1 = get_post_meta( $order_id1);
          $order_meta = get_post_meta( $order_id);
      $link=$order_meta1['billing_link'][0];
          //echo $customer_order;
          //echo $order;
          // echo $order_id;
          // echo $order_meta;
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
              /*'<a href="' . esc_url( $action['url'] ) . '" class="btn ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';*/
              echo '<a href="' . esc_url( $action['url'] ) . '" class="btn ' . sanitize_html_class( $key ) . '"><img class="img" src="/wp-content/themes/envo-storefront/img/orders/view.png" alt=""></a>';
            }
          }
          if ($link)
          {
          ?>

        <a href="javascript:void(0);" class="btn" onclick="ShowPopupShare('#popupShare','<?=$link;?>')"><img class="img" src="/wp-content/themes/envo-storefront/img/orders/share.png" alt=""></a>
        <a href="javascript:void(0);" class="btn" onclick="ShowPopupVideo(`#popupShareVideo`, `<video controls='' autoplay=''  name='media' class='videoLink'><source src='<?=$link;?>' type='video/mp4' ></video>`);jQuery('#popupShareVideo').find('.ms_btn').attr('onclick','sha(\'<?=$link;?>\')')"><img class="img" src="/wp-content/themes/envo-storefront/img/orders/thisVideo.png" alt=""></a>
        <?php
          }

          endif; ?>
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
  <div class="close" onclick="HidePopup('#popupLoadFile');"><img width="20px" height="20px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="modal-content" role="document">
    <div class="modal-header">
      <h4 class="modal-title"><label >Add your video</label></h4>
    </div>
    <div class="modal-body">
      <form id="spi" enctype="multipart/form-data"  class="form-horizontal col-md-12-"  method="post" >
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
<?php get_template_part('template-parts/template-part', 'popupShareVideo'); ?>
<?php get_template_part('template-parts/template-part', 'popupShare'); ?>
<div id="popupVideoRecord" class="popup">
  <div class="close" onclick="HidePopup('#popupVideoRecord');"><img width="30px" height="30px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="iframe-doc">
    <iframe src="https://mingming.io/2020/05/11/video/" id="fram" frameborder="0"></iframe>
    <div id="texa" class="iframe-text"></div>
  </div>
</div>
<?
  if ($osa=='Safari')
  {
  ?>
<script>
  function moving(elem, id){
  var id;
  jQuery('#eta').find('#custom-id').attr('id','custom-id1');
  var custom = jQuery('#eta').find('.intip').html();



  console.log(custom);
  jQuery('.buttons-block').find('#custom-id').each(function(){
  jQuery(this).html('');
  });



  jQuery('.videoRecord').each(function(){
    jQuery(this).show();
  });
  jQuery('.intip-'+id).parent().find('.videoRecord').hide();
  jQuery('.intip-'+id).show();



  jQuery('.intip-'+id).html('');
  jQuery('.intip-'+id).append(custom);


  jQuery('.intip-'+id).find('#pipe-recording-form-custom-id').each(function(indx){
  if (indx==1)
  {

  }
  else
  {
  jQuery(this).remove();
  }

  });

  jQuery('.intip-'+id).find('#output-custom-id').each(function(indx){
  if (indx==1)
  {

  }
  else
  {
  jQuery(this).remove();
  }

  });
  jQuery('.intip-'+id).find('#label-pipe-file-input-custom-id').eq(0).click();


  }
</script>
<?
  }

  else
  {
  ?>
<script>
  function moving(elem, id){
  var id;

  var custom = jQuery('#eta').find('.intip').html();



  console.log(custom);
  jQuery('.buttons-block').find('#custom-id').each(function(){
  jQuery(this).html('');
  });


  jQuery('.videoRecord').each(function(){
  jQuery(this).show();
  });
  jQuery('.darken').each(function(){
    jQuery(this).show();
  });
  jQuery('.intip-'+id).parent().find('.videoRecord').hide();
  jQuery('.intip-'+id).show();




  jQuery('#eta').find('#label-pipe-file-input-custom-id').click();
  jQuery('#eta').find('#pipeStartRecording-custom-id').click();
  jQuery('#eta').show();
  jQuery('#eta').find('.intip').show();
  jQuery('#eta').find('.intip').attr('rel',id);

  jQuery('.popupVideoRecrd').css('background','none');

  }
</script>
<?
  }

  ?>
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

    document.querySelector('.darken').addEventListener('click', ()=>{
        console.log('darken', this);
        document.querySelector('#eta').style.display = 'none';
    });
  })







  var FLAG = true;
  function validate() {
    return FLAG;
  }


  function copyToClipboard(textToCopy) {
  var textArea;

  function isOS() {
    //can use a better detection logic here
    return navigator.userAgent.match(/ipad|iphone/i);
  }

  function createTextArea(text) {
    textArea = document.createElement('textArea');
    textArea.readOnly = true;
    textArea.contentEditable = true;
    textArea.value = text;
    document.body.appendChild(textArea);
  }

  function selectText() {
    var range, selection;

    if (isOS()) {
      range = document.createRange();
      range.selectNodeContents(textArea);
      selection = window.getSelection();
      selection.removeAllRanges();
      selection.addRange(range);
      textArea.setSelectionRange(0, 999999);
    } else {
      textArea.select();
    }
  }

  function copyTo() {
    document.execCommand('copy');
    document.body.removeChild(textArea);
  }

  createTextArea(textToCopy);
  selectText();
  copyTo();
  }
  function quar(link)
  {
  var link;

  var kod='https://chart.apis.google.com/chart?choe=UTF-8&chld=H&cht=qr&chs=200x200&chl='+link;
  jQuery('#quar').attr('href',kod);

  }

  function sha(link)
  {
  HidePopup('#popupShareVideo');
  var link;
  ShowPopupShare('#popupShare',link);
  }
  function tweet(link)
  {
  var link;

  var kod='http://twitter.com/share?text='+link;
  jQuery('#twe').attr('href',kod);

  }
  function face(link)
  {
  var link;

  var kod='https://www.facebook.com/sharer/sharer.php?u='+link+'&title=Video&quote=Video+from+mingming.io&description=Video+from+mingming.io';
  jQuery('#fac').attr('href',kod);

  }
    function ShowPopupShare(target, link){
       var link;
    jQuery('.social a').eq(0).attr('id','cop');
    jQuery('#cop').attr('onclick','copyToClipboard("'+link+'")');
      jQuery('#cop').attr('href','javascript:void(0)');

     jQuery('.social a').eq(1).attr('id','quar');
  jQuery('#quar').attr('onclick','quar("'+link+'")');
  jQuery('#quar').attr('target','_blank');
    jQuery('#quar').attr('href','javascript:void(0)');


    jQuery('.social a').eq(2).attr('id','twe');
  jQuery('#twe').attr('onclick','tweet("'+link+'")');
  jQuery('#twe').attr('target','_blank');
    jQuery('#twe').attr('href','javascript:void(0)');


   jQuery('.social a').eq(3).attr('id','fac');
  jQuery('#fac').attr('onclick','face("'+link+'")');
  jQuery('#fac').attr('target','_blank');
    jQuery('#fac').attr('href','javascript:void(0)');


      // event.preventDefault();
      console.log(target);
      jQuery(".darken").fadeIn();
      jQuery(target).addClass('open');
    }




    function ShowPopup5(target, id){
        jQuery("#zak").val(id);


      // event.preventDefault();
      console.log(target);
      jQuery(".darken").fadeIn();
      jQuery(target).addClass('open');
    }
    function HidePopup5(target){
      jQuery(".darken").fadeOut(300);
      jQuery('#eta').hide();jQuery(target).removeClass('open');
   var ids=jQuery('#eta').find('.intip').attr('rel');
   jQuery('#na-'+ids).show();


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
<!-- single-product  -->