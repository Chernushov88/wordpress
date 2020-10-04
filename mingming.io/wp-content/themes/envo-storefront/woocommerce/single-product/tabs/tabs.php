<?php
  /**
   * Single Product tabs
   *
   * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
   *
   * HOWEVER, on occasion WooCommerce will need to update template files and you
   * (the theme developer) will need to copy the new files to your theme to
   * maintain compatibility. We try to do this as little as possible, but it does
   * happen. When this occurs the version of the template file will be bumped and
   * the readme will list any important changes.
   *
   * @see     https://docs.woocommerce.com/document/template-structure/
   * @package WooCommerce/Templates
   * @version 3.8.0
   */

  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }

  /**
   * Filter tabs and allow third parties to add their own.
   *
   * Each tab is an array containing title, callback and priority.
   *
   * @see woocommerce_default_product_tabs()
   */
  $product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

  if ( ! empty( $product_tabs ) ) : ?>
<style>
  .vid{
  margin-bottom: 40px;
  list-style-type: none;
  padding: 0;
  }
  .vid-col{
  margin: 20px 0 10px;
  padding: 0 5px;
  }
  @media screen and (max-width:767px ) {
  .vid-col{
  width: 50%;
  }
  }
  @media screen and (max-width:480px ) {
  .vid-col{
  width: 90%;
  margin: 0 auto;
  padding: 0;
  float: none;
  }
  }
  .video-wrapper{
  overflow: hidden;
  border-radius:24px;
  box-shadow: 0 2px 32px 0 rgba(0,0,0,.15)!important;
  }
  .video-title{
    position: relative;
    display: flex;
    align-items: center;
    padding: 10px 10px 10px 0px;
    color: #212121;
    flex-wrap: wrap;
  }
  .video-title .share_btn{
    position: absolute;
    right: 0;
    top: 10px;
    min-width: 40px;
    margin: 0;
    padding: 0 5px;
  }
  .video-title-img{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -ms-align-items: center;
  align-items: center;
  justify-content: center;
  border-color: rgb(213, 56, 255);
  background-color: rgb(213, 56, 255);
  background-clip: border-box;
  background-image: none;
  height: 36px;
  min-width: 36px;
  border-radius: 50%;
  }
  .custom-logo-link{
  display: block;
  background-clip: border-box;
  background-image: none;
  /*height: 36px;*/
  min-width: 36px;
  width: 36px;
  border-radius: 50%;
  overflow: hidden;
  float: left;
  }
  .video-title-img span{
  font-weight: 700;
  font-size: 24px;
  padding-bottom: 2px;
  text-transform: uppercase;
  color: #000;
  }
  .video-title-in{
  display: block;
  flex-direction: column;
  line-height: 18px;
  padding-left: 10px;
  float: left;
  }
  .body_safari .video-title-in{
    padding-top: 8px;
  }
  .video-title-in span{
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 100%;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.3;
  color: #fff;
  }
  .video-title-in a{
  font-size: 14px;
  font-weight: 500;
  }
  .video-controls:before{
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    clear: both;
  }
  .video-controls{
  position: relative;
  overflow: hidden;
  width: 100%;
  clear: both;
  border-radius: 0px 24px 24px;
  border-color: #fff;
  }
  .video-controls:before{
  content: '';
  display: block;
  width: 100%;
  padding-top: 133%;
  }
  .video-controls video{
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 348px;
  height: 100%;
  float: left;
  }
  /*.video-controls video:-webkit-full-screen  {
  width: 100%;
  height: 100%;
  }
  .video-controls video:-moz-full-screen  {
  width: 100%;
  height: 100%;
  }
  :-webkit-full-screen video {
  width: 100%;
  height: 100%;
  }
  :-moz-full-screen video {
  width: 100%;
  height: 100%;
  }*/
</style>
<div class="woocommerce-tabs wc-tabs-wrapper">
  <ul class="tabs wc-tabs" role="tablist">
    <li class="video_tab active" id="tab-title-video" role="tab" aria-controls="tab-video">
      <a href="#tab-video">视频</a>
    </li>
    <?php foreach ( $product_tabs as $key => $product_tab ) : ?>
    <li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
      <a href="#tab-<?php echo esc_attr( $key ); ?>">
      <?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php foreach ( $product_tabs as $key => $product_tab ) : ?>
  <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
    <?php
      if ( isset( $product_tab['callback'] ) ) {
        call_user_func( $product_tab['callback'], $key, $product_tab );
      }
      ?>
  </div>
  <?php endforeach; ?>
  <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--video panel entry-content wc-tab" id="tab-video" role="tabpanel" aria-labelledby="tab-title-video" style="display: none;">
    <h2>Video</h2>
    <ul class="vid row">
      <?
        global $post;
        $idu=$post->ID;
        $order_statuses = array('wc-payed');
        $customer_user_id = get_current_user_id();
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

          $hide=$order_meta['billing_video'][0];
          if ($hide=='Yes')
          {

          }
          else
          {
			  $order_id;
        $order99 = wc_get_order( $order_id );
        $order_meta = get_post_meta( $order_id);


        $type=$order_meta['_billing_occasion'][0];
        $from=$order_meta['_billing_from'][0];
        $to=$order_meta['_billing_who'][0];
        $int=$order_meta['_billing_instructions'][0];
        $link=$order_meta['billing_link'][0];
        $videofor=$order_meta['billing_videofor'][0];


        $object = (array)$order->data['date_created'];
        $dat=$object['date'];
        $pu=explode(' ',$dat);
        $pu1=explode('-',$pu[0]);
        $datu=$pu1[2].'.'.$pu1[1].'.'.$pu1[0];

               //$subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );

 if (!empty($link))
		  {
		 ?>
      <li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 vid-col">
        <div class="video-wrapper">
          <div class="video-title">
            <!-- <a href="#" class="video-title-img"><span>T</span></a> -->
            <a href="/" class="custom-logo-link"><img src="/wp-content/themes/envo-storefront/img/logo-3.png" alt=""></a>
            <div class="video-title-in">
              <span>For: <?= $videofor; ?></span>
            </div>
         <a href="javascript:void(0);" class="ms_btn share_btn" onclick="ShowPopupShare('#popupShare','<?=$link;?>')">Share</a>
          </div>
          <div class="video-controls">



            <video muted playsinline width="250" height="400" controls="controls" class="close" onclick="closeFullscreen();" >
              <?



                $httpStr = 'http';
                if ( strstr($link,$httpStr) ) {?>
                  <source src="<?=$link?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                  <source src="<?=$link?>" type="video/x-matroska" />
                  <source src="<?=$link?>" type="video/ogv" />
              <?}else{


				  ?>
              <source src="/wp-content/uploads/<?=$link?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
              <source src="/wp-content/uploads/<?=$link?>" type="video/x-matroska" />
              <source src="/wp-content/uploads/<?=$link?>" type="video/ogv" />
              <?}
                ?>
            </video>


            <!-- <div class="videoButton pauseVid" onclick="pauseVid(this);"></div> -->
            <div class="videoButton" onclick="playVid(this);"></div>
          </div>
        </div>
      </li>

      <?
		  }

        }
        }







        }

        ?>
    </ul>
<style>
  @media screen and (max-width: 992px){
    .videoButton{
      position: absolute;
      left: 0;
      top: 0;
      z-index: 9;
      display: block;
      width: 100%;
      height: 100%;
    }
  }
</style>
<script>
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





  var vid = document.getElementById("myVideo");

  function playVid(elem) {
      console.log('playVid',elem);
      let vidParent = elem.closest('.video-controls');
      let vid = vidParent.querySelector('video');
      vid.play();
      fullScreen(vid);
  }
  window.addEventListener('load', fullscreen);

  function fullscreen() {
      let video = document.querySelectorAll('.video-controls video ');
      console.log(video);
      video.forEach( (e)=> {
          e.addEventListener("touchstart", function(event){
            event.preventDefault();

            if(document.cancelFullScreen) {
              console.log('0 - ',video);
                console.log('1 - ',video[0]);
                e.pause();
                document.cancelFullScreen();
                e.classList.add('close');
                //video.length > 0 ? video[0].stop() : false;
              } else if(document.mozCancelFullScreen) {
                console.log('0 - ',video);
                console.log('1 - ',video[0]);
                e.pause();
                document.mozCancelFullScreen();
                e.classList.add('close');
                //video.length > 0 ? video[0].stop() : false;
              } else if(document.webkitCancelFullScreen) {
                console.log('0 - ',video);
                console.log('1 - ',video[0]);
                e.pause();
                document.webkitCancelFullScreen();
                e.classList.add('close');
                //video.length > 0 ? video[0].stop() : false;
              }

          }, true);
      });
  }

  function fullScreen(element) {
    if(element.requestFullscreen) {
      element.requestFullscreen();
    } else if(element.webkitrequestFullscreen) {
      element.webkitRequestFullscreen();
    } else if(element.mozRequestFullscreen) {
      element.mozRequestFullScreen();
    }
  }
  function fullScreenCancel() {
    if(document.requestFullscreen) {
      document.requestFullscreen();
    } else if(document.webkitRequestFullscreen ) {
      document.webkitRequestFullscreen();
    } else if(document.mozRequestFullscreen) {
      document.mozRequestFullScreen();
    }
  }
  function closeFullscreen() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
  }
  // function cancelFullscreen(element) {
  //   if(document.cancelFullScreen) {
  //     element.cancelFullScreen();
  //   } else if(document.mozCancelFullScreen) {
  //     element.mozCancelFullScreen();
  //   } else if(document.webkitCancelFullScreen) {
  //     element.webkitCancelFullScreen();
  //   }
  // }

  // document.cancelFullScreen = document.cancelFullScreen || document.webkitCancelFullScreen || document.mozCancelFullScreen;
</script>
  </div>
  <?php do_action( 'woocommerce_product_after_tabs' ); ?>
</div>
<?php endif; ?>

<?php get_template_part('template-parts/template-part', 'popupShare'); ?>


