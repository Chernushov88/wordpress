<?php
  /*
   * Template name: rank
   */
  get_header(); 
  
  
$current_user = wp_get_current_user();
 $idu=get_user_meta( $current_user->ID, 'idtov', true);
  $fio=get_user_meta( $current_user->ID, 'nickname', true);
  $rank=array();
  $ra0=get_user_meta( $current_user->ID, 'rank0', true);
	$ra1=get_user_meta( $current_user->ID, 'rank1', true);
	$ra2=get_user_meta( $current_user->ID, 'rank2', true);
	  $ra3=get_user_meta( $current_user->ID, 'rank3', true);
	  $ra4=get_user_meta( $current_user->ID, 'rank4', true);
	$ra5=get_user_meta( $current_user->ID, 'rank5', true);

$rank[]=$ra0;	 
$rank[]=$ra1;	
$rank[]=$ra2;	
$rank[]=$ra3;	
$rank[]=$ra4;	
$rank[]=$ra5;	
$new_array = array_diff($rank, array(''));
	$ran=count($new_array)-1;
   $cher=get_user_meta( $current_user->ID, 'charity', true);
   $vip=get_user_meta( $current_user->ID, 'vip', true);
  
   $post_id_7 = get_post($idu);
      $excerpt = strip_tags($post_id_7->post_excerpt);
  
	
  
  ?>

<div class="site-content-sm-p-0">

  <div class="sm-visible">
    <div class="user-head">
    <div class="user-head-img"><? echo $thumb = get_the_post_thumbnail( $idu, 'thumbnail' );?></div>
    <div class="user-head-name">
      <div class="h3"><?=$fio?></div>
      <p><?=$excerpt?></p>
      <ul class="icons">
        <li>
		<?
		  if ($vip>0) { ?>
                <? if ($vip==1){ ?>
                  <div class="vip-ico vip-copper"></div>

                <? }
                 elseif ($vip==2) { ?>
                 <div class="vip-ico vip-sliver"></div>
                <? }
                 elseif ($vip==3) { ?>
                 <div class="vip-ico vip-gold"></div>
                <? } ?>
            <? } ?>
		
		
          
        </li>
        <li>
		<?
		 if ($cher>0){

              if ($cher==10){?>
                <!-- <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Copper.png" alt=""> -->
                  <div class="charity-ico charity-copper"></div>
                <?}
              elseif ($cher==50){ ?>
                  <!-- <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Sliver.png" alt=""> -->
                  <div class="charity-ico charity-sliver"></div>
                  <? }
              elseif ($cher==100) { ?>
                  <!-- <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Gold.png" alt=""> -->
                  <div class="charity-ico charity-gold"></div>
              <? } ?>
            <? } 
			
			?>
		
		
		
       
        </li>
        <li>
          <div class="icon-number"><?=$ran?></div>
        </li>
      </ul>
    </div>
  </div>
 
    <div class="user-navigation">
      <ul class="nav nav-ranking">
        <li>
          <div class="icon-number">0</div>
          <p><b>註冊 +$5</b>在MingMing上註冊。 你太完美了！</p>
          <a href="#" class="btn 
		  <?
		  if ($ra0)
		  {
          ?>
		  btn_grey
          <?			
		  }
		  else
		  {
		  ?>
			btn_blue  
		  <?	  
		  }
		  ?>
">已领取</a>
        </li>
        <li>
          <div class="icon-number">1</div>
          <p><b>新手 +$20</b>錄製介紹視頻並將其上傳到您的Mingming頁面。告訴觀眾您是誰：您的名字，愛好，頻道，成名原因，來歷和目標，以及為什麼您的視頻是最好的。</p>
          <a href="#" class="btn  <?
		  if ($ra1)
		  {
          ?>
		  btn_grey
          <?			
		  }
		  else
		  {
		  ?>
			btn_blue  
		  <?	  
		  }
		  ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">2</div>
          <p><b>準備開始 +$10</b>添加您的帳戶信息。寫一些關於你和你的愛好的東西。</p>
          <a href="#" class="btn  <?
		  if ($ra2)
		  {
          ?>
		  btn_grey
          <?			
		  }
		  else
		  {
		  ?>
			btn_blue  
		  <?	  
		  }
		  ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">3</div>
          <p><b>初學者 +$10</b>與您的關注者分享您現在正在使用明明的事實。</p>
          <a href="#" class="btn  <?
		  if ($ra3)
		  {
          ?>
		  btn_grey
          <?			
		  }
		  else
		  {
		  ?>
			btn_blue  
		  <?	  
		  }
		  ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">4</div>
          <p><b>新星 +$20</b>獲得第一個訂單–訂單價格增加$ 20。</p>
          <a href="#" class="btn  <?
		  if ($ra4)
		  {
          ?>
		  btn_grey
          <?			
		  }
		  else
		  {
		  ?>
			btn_blue  
		  <?	  
		  }
		  ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">5</div>
          <p><b>準備施加影響力 +$15</b>在您的社交媒體上寫有關MingMing的帖子。問好！”並邀請他們到明明。在這裡，您可以分享有關您的第一筆訂單的信息，並解釋Mingming的工作方式。</p>
          <a href="#" class="btn  <?
		  if ($ra5)
		  {
          ?>
		  btn_grey
          <?			
		  }
		  else
		  {
		  ?>
			btn_blue  
		  <?	  
		  }
		  ?>">去完成</a>
        </li>
      </ul>
    </div>
  </div>
</div>


<link rel="stylesheet" href="/wp-content/themes/envo-storefront/css/cssprogress.css">

<?php get_footer(); ?>