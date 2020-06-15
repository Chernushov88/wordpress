<?php
  /**
   * Edit account form
   *
   * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
   *
   * HOWEVER, on occasion WooCommerce will need to update template files and you
   * (the theme developer) will need to copy the new files to your theme to
   * maintain compatibility. We try to do this as little as possible, but it does
   * happen. When this occurs the version of the template file will be bumped and
   * the readme will list any important changes.
   *
   * @see https://docs.woocommerce.com/document/template-structure/
   * @package WooCommerce/Templates
   * @version 3.5.0
   */

  defined( 'ABSPATH' ) || exit;

  do_action( 'woocommerce_before_edit_account_form' ); ?>
<style>
  .account-details{
  }
  .input-group{
  width: 100%;
  }
  .input-group textarea,
  .input-group input{
  margin-bottom: 10px;
  }
  .input-group textarea{
  height: 150px;
  }
  .form-group> label{
  margin-bottom: 3px;
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
  height: 100%;
  }
  button.btn.btn-danger.btn-block {
  font-size: 14px;
  width: auto;
  }
  .account-details h2{
  margin-top: 0;
  }
  .woocommerce .chooseTabs .button{
  display: inline-block;
  margin-right: 10px;
  }
  .chooseTabs .active{
  background-color:red!important;
  color:#fff!important;
  }
  .chooseCategory{
  padding: 15px 5px 5px 5px;
  }
  .chooseCategory> .input-group{
  line-height: 1;
  }
  .chooseCategory> .input-group>div{
  overflow: hidden;
  padding-bottom: 5px;
  }
  .chooseCategory> .input-group>div .che{
  margin: 2px 7px 0 0;
  float: left;
  }
  .chooseCategory> .input-group>div .che1{
  margin: 2px 7px 0 0;
  float: left;
  }
  .charity {
  padding: 20px 5px 0px 5px;
  }
  .charity h3{
  margin-bottom: 15px;
  }
</style>
<?
  $current_user = wp_get_current_user();
$cher=0;
  $ema=$current_user->data->user_email;
  $phon=get_user_meta( $current_user->ID, 'phone', true);
  $fio=get_user_meta( $current_user->ID, 'nickname', true);
  $han=get_user_meta( $current_user->ID, 'handle', true);
  $fow=get_user_meta( $current_user->ID, 'followers', true);

  $bir=get_user_meta( $current_user->ID, 'birthday', true);
  $inv=get_user_meta( $current_user->ID, 'invite', true);
$cher=get_user_meta( $current_user->ID, 'charity', true);
  ?>
<div class="account-details">
  <h2>Details:</h2>
  <?
    if( current_user_can('actor') )
    {

    ?>
  <form id="acta" method="post">
    <!-- <div id="su1" style="display:none">Success</div> -->
    <div style="display:none" class="form-group">
      <label for="name">Your name</label>
      <div class="input-group">
        <input name="name" type="text" placeholder="Michael Jordan" id="name" class="form-control" value="<?=$fio?>" >
      </div>
      </div>
    <div class="form-group">
      <label for="email">Email</label>
      <div class="input-group">
        <input name="email" type="email" placeholder="your@example.com" id="email" class="form-control" value="<?=$ema?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="phone">Phone number (never shared)</label>
      <div class="input-group">
        <input type="text" name="phone" value="<?=$phon?>" placeholder="+86 999 9999 999" id="phone" class="form-control -phone-js" >
      </div>
    </div>
    <div class="form-group">
      <label for="handle">Your handle</label>
      <div class="input-group">
        <input type="text" name="handle" value="<?=$han?>" placeholder="@jimmybuffet" id="handle" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="followerCount">How many followers do you have?</label>
      <div class="input-group" style="width:100%"><input type="text" name="followerCount" value="<?=$fow?>" placeholder="400k" id="followerCount" class="form-control"></div>
    </div>
    <div>
      <button class="btn btn-login" onclick="send1()" type="button">SUBMIT</button>
    </div>
  </form>
  <!--   ------------------------------------------------------------------------ про товар -->
  <br/>
  <?
    $idu=get_user_meta( $current_user->ID, 'idtov', true);
    if ($idu)
    {

    $post_id_7 = get_post($idu);
    $excerpt = strip_tags($post_id_7->post_excerpt);
    $price = get_post_meta($idu, '_regular_price', true );
     $des = strip_tags($post_id_7->post_content);
     $nam=$post_id_7->post_title;

    $term_list = wp_get_post_terms($idu, 'product_tag', array("fields" => "all"));
    $tag=array();
    foreach ($term_list as $ter)
    {
    $tag[]=$ter->name;
    }



    ?>
  <form enctype="multipart/form-data"  id="tova" method="post">
    <div class="form-group">
      <div id="fiy" class="fiy">
        <?
          echo $thumb = get_the_post_thumbnail( $idu, 'thumbnail' );

		  if ($cher>0)
		  {

	if ($cher==10)
	{
	?>
	<img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Copper.png" alt="">
	<?
	}
    elseif ($cher==50)
	{
	?>
	<img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Sliver.png" alt="">
	<?
	}
	elseif ($cher==100)
	{
	?>
	<img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Gold.png" alt="">
	<?
	}


        ?>




		<?
		  }
		?>
      </div>
      <br/>
      <label for="addPhoto">Add your photo</label>
      <div class="input-group input-addFile">
        <input type="file" name="file" onchange="seno()" id="addPhoto" class="inputfile">
        <label for="addPhoto" class="form-control"><span></span><a class="btn btn-primary btn-addFile">Add file</a></label>
      </div>
    </div>
    <div class="form-group">
      <label for="name">Your name</label>
      <div class="input-group">
        <input name="name" type="text" placeholder="Michael Jordan" id="name000" class="form-control" value="<?=$nam?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="selfPrasentation">Self-presentation</label>
      <div class="input-group">
        <textarea name="selfPrasentation" type="text" value='<?=$excerpt?>' placeholder="Actor Chicago fire" id="selfPrasentation" class="form-control " ></textarea>
      </div>
    </div>

    <div class="form-group chooseTabs" style="display:none;">
      <label for="">Choose tags</label>
      <div class="input-group">
        <a href="javascript:void(0)"  onclick="jQuery(this).toggleClass('active');" class="button <?
          if (in_array("Actors", $tag))
          {
          echo " active ";
          }
          ?>">Actors</a>
        <a href="javascript:void(0)"  onclick="jQuery(this).toggleClass('active');" href="#" class="button<?
          if (in_array("Comic-Con", $tag))
          {
          echo " active ";
          }
          ?>">Comic-Con</a>
        <a href="javascript:void(0)"  onclick="jQuery(this).toggleClass('active');" href="#" class="button<?
          if (in_array("TV", $tag))
          {
          echo " active ";
          }
          ?>">TV</a>
        <a href="javascript:void(0)"  onclick="jQuery(this).toggleClass('active');" href="#" class="button<?
          if (in_array("Drama", $tag))
          {
          echo " active ";
          }
          ?>">Drama</a>
      </div>
    </div>

    <br/>
    <div class="input-group chooseCategory">
      <label for="">Choose category</label>
      <div class="input-group">
        <?
          $cat1=array();
          $cur_terms = get_the_terms( $idu ,'product_cat' );
          foreach ($cur_terms as $te)
          {
          $cat1[]=  $te->term_id;

          }


           $args = array(
                  'taxonomy' => 'product_cat',
                  'hide_empty' => false,
                );

                $product_categories = get_terms( $args );

              foreach ($product_categories as $cat)
              {
                if ($cat->term_id!=15)
                {
                ?>
        <div><input
          <?
            if (in_array($cat->term_id,$cat1))
            {
             echo ' checked=checked ';

            }
            ?>
          type="checkbox" value="<?=$cat->term_id?>" name="che" class="che"><label><?=$cat->name?></label></div>
        <?
          }

          }
          ?>
      </div>
    </div>
    <div class="form-group">
      <label for="descripOrder">Description</label>
      <div class="input-group">
        <textarea name="descripOrder" id="descripOrder" cols="30" rows="10" class="form-control "><?=$des?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="pricePerOrder">Price per order(S)</label>
      <div class="input-group">
        <input name="pricePerOrder" type="text" placeholder="40" value="<?=$price?>" id="pricePerOrder" class="form-control " required>
      </div>
    </div>
    <!--<div class="form-group">
      <label for="pricePerOrder">Welcoming words</label>
      <div class="input-group">
        <input name="pricePerOrder" type="text" placeholder="Hi! My friend Carissa just went through a breakup and needs some cheering up! (my name is Megan)" id="pricePerOrder" class="form-control " required>
      </div>
      </div>-->
      <div class="-charity chooseCategory">
        <!-- <h3>Charity</h3> -->
        <label for="">Charity</label>
        <div class="input-group">
          <div><input

		  <?
		  if ($cher==0)
		  {
?>
checked="checked"
<?
		  }
		  ?>
		   type="radio" name="radioCharity" value="0" class="che"><label>0% on charity</label></div>
          <div><input


<?
  if ($cher==10)
		  {
?>
checked="checked"
<?
		  }
		  ?>






		  type="radio" name="radioCharity" value="10" class="che1"><label>10% on charity</label></div>
          <div><input



<?
  if ($cher==50)
		  {
?>
checked="checked"
<?
		  }
		  ?>


		  type="radio" name="radioCharity" value="50" class="che1"><label>50% on charity</label></div>
          <div><input




<?
  if ($cher==100)
		  {
?>
checked="checked"
<?
		  }
		  ?>






		  type="radio" name="radioCharity" value="100" class="che1"><label>100% on charity</label></div>
        </div>
      </div>
    <div>
      <button class="btn btn-login" onclick="send2()" type="button">SUBMIT</button>
    </div>
    <!-- <div id="su2" style="display:none">Success</div> -->
  </form>
  <?
    }

    }
    else
    {
    ?>
  <form id="buyer"  method="post">
    <!--   <div id="su3" style="display:none">Success</div> -->
    <div class="form-group">
      <label for="name">Your name</label>
      <div class="input-group">
        <input name="name" type="text" placeholder="Michael Jordan" id="name" class="form-control" value="<?=$fio?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <div class="input-group">
        <input name="email" type="email" placeholder="your@example.com" id="email" class="form-control" value="<?=$ema?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="birthday">Birthday</label>
      <div class="input-group">
        <input type="text" name="birthday" value="<?=$bir?>" placeholder="99/99/9999" id="birthday" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inviteCode">Invite code (optional)</label>
      <div class="input-group" style="width:100%">
        <input type="text" name="inviteCode" value="<?=$inv?>" placeholder="Invite code" id="inviteCode" class="form-control">
      </div>
    </div>
    <div>
      <button class="btn btn-login btn-block" onclick="send3()" type="button">SUBMIT</button>
    </div>
  </form>
  <?
    }
    ?>

</div>
<br>
<br>
<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >
  <?php do_action( 'woocommerce_edit_account_form_start' ); ?>
  <p style="display:none" class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">

    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name"  value="<?=$fio?>" />
  </p>
  <p style="display:none" class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
    <label for="account_last_name"><?php esc_html_e( 'Last name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
  </p>
  <div class="clear"></div>
  <p style="display:none" class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    <label for="account_display_name"><?php esc_html_e( 'Display name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> <span><em><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); ?></em></span>
  </p>
  <div class="clear"></div>
  <p style="display:none" class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    <label for="account_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    <input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
  </p>
  <fieldset>
    <legend><?php esc_html_e( 'Password change', 'woocommerce' ); ?></legend>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
      <label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
      <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
    </p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
      <label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
      <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
    </p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
      <label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
      <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
    </p>
  </fieldset>
  <div class="clear"></div>
  <?php do_action( 'woocommerce_edit_account_form' ); ?>
  <p>
    <?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
    <button type="submit" class="btn btn-login" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
    <input type="hidden" name="action" value="save_account_details" />
  </p>
  <?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>
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
  function send3()
  {

  jQuery('#account_first_name').val(jQuery('#name').val());
  jQuery('#account_email').val(jQuery('#email').val());
  jQuery.ajax({
        type: "POST",
        url: "/upd1.php",
        data: {
        id:'<?=$current_user->ID?>',
        name:jQuery('#name').val(),
              email:jQuery('#email').val(),
        dob:jQuery('#birthday').val(),
        inviteCode:jQuery('#inviteCode').val(),
        },
  success: function(data)
  {
  ShowPopup('#su3');
  console.log(data);
  }


    });
  }
  function send1()
  {

  jQuery('#account_first_name').val(jQuery('#name').val());
  jQuery('#account_email').val(jQuery('#email').val());


    jQuery.ajax({
        type: "POST",
        url: "/upd2.php",
        data: {
        id:'<?=$current_user->ID?>',
        name:jQuery('#name').val(),
              email:jQuery('#email').val(),
              handle:jQuery('#handle').val(),
        phone:jQuery('#phone').val(),
        followerCount:jQuery('#followerCount').val(),
        },
  success: function(data)
  {
  ShowPopup('#su1');
  console.log(data);
  }


    });


  }


  function seno()
  {



       var formData = new FormData(jQuery('#tova')[0]);
    var fd = new FormData();
  fd.append('id', '<?=$idu?>');
  fd.append('img', jQuery('#addPhoto')[0].files[0]);


    jQuery.ajax({
    type: 'POST',
    url: '/updtovfot.php',
    data: fd,
    processData: false,
    contentType: false,
    dataType: "json",
    success: function(data)
    {

    console.log('success - ', data);



  jQuery.ajax({
    type: 'POST',
    url: '/my-account-2/edit-account/',
    data: {
    id:1
    },
    processData: false,
    contentType: false,

    success: function(data)
    {

   var up=jQuery(data).find('#fiy').html();

   jQuery('#fiy').html('');
   setTimeout(function () {

      jQuery('#fiy').append(up);
    var src=jQuery(data).find('#fiy').find('.attachment-thumbnail').attr('data-src');

console.log(src);


    jQuery('#fiy').append('<img style="width:150px" src="'+src+'?'+Math.random()+'">');
  jQuery('#fiy').find('.attachment-thumbnail').hide();

   }, 1500);

    }
  });






    },
    error: function(data) {
      console.log('error - ', data);
    }
  });

  }











  function send2()
  {
  var tagy1 = [];
  jQuery(".chooseTabs").find('a').each(function(indx){
  if ( jQuery(this).hasClass("active") )
  {
  var pushed = tagy1.push(jQuery(this).text());
  }
  });
    var tagy = tagy1.join();


  var cat1 = [];
  jQuery("input.che:checked").each(function(indx){

  var pushed = cat1.push(jQuery(this).val());

  });
  var cat = cat1.join();

var cher=jQuery('input[name=radioCharity]:checked').val()

       var formData = new FormData(jQuery('#tova')[0]);
    var fd = new FormData();
  fd.append('id', '<?=$idu?>');
  fd.append('prez',jQuery('#selfPrasentation').val());
  fd.append('tag',tagy);
  fd.append('cher',cher);
  fd.append('cat',cat);
  fd.append('des',jQuery('#descripOrder').val());
  fd.append('nam',jQuery('#name000').val());
  fd.append('price',jQuery('#pricePerOrder').val());
  fd.append('img', jQuery('#addPhoto')[0].files[0]);

   // jQuery('#su2').show();
   //ShowPopup('#su2');
setTimeout( function(){
    location.reload();
}, 1000)

    jQuery.ajax({
    type: 'POST',
    url: '/updtov.php',
    data: fd,
    processData: false,
    contentType: false,
    dataType: "json",
    success: function(data)
    {

    console.log('success - ', data);


    },
    error: function(data) {
      console.log('error - ', data);
    }
  });

  }



    jQuery(document).ready(function(){

		setTimeout(function () {


  jQuery('#account_first_name').val(jQuery('#name').val());
  jQuery('#account_email').val(jQuery('#email').val());

		}, 2500);


    })





</script>
<div id="su3" class="popup blue_backg popup-su">
  <div class="close" onclick="HidePopup('#su3');"><img width="30px" height="30px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="modal-content " role="document">
    <div class="modal-header">
      <h2 class="modal-title"></h2>
    </div>
    <div class="modal-body">
      <div class="success">Success</div>
    </div>
  </div>
</div>
<div id="su2" class="popup blue_backg popup-su">
  <div class="close" onclick="HidePopup('#su2');"><img width="30px" height="30px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="modal-content " role="document">
    <div class="modal-header">
      <h2 class="modal-title"></h2>
    </div>
    <div class="modal-body">
      <div class="success">Success</div>
    </div>
  </div>
</div>
<div id="su1" class="popup blue_backg popup-su">
  <div class="close" onclick="HidePopup('#su1');"><img width="30px" height="30px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="modal-content " role="document">
    <div class="modal-header">
      <h2 class="modal-title"></h2>
    </div>
    <div class="modal-body">
      <div class="success">Success</div>
    </div>
  </div>
</div>
<?php do_action( 'woocommerce_after_edit_account_form' ); ?>