<?php
  /*
   * Template name: Создать Аккаунт
   */
  get_header(); ?>


<style>
  .page-wrap{
    padding-bottom: 0;
  }
  #sidebar {
    display: none;
  }
  .col-md-9 {
    width: 100%;
    padding: 0;
  }

  .single-head {
    display: none;
  }
  .page_modal-left {
       padding-top: 100px;
       padding-bottom: 100px;
      background-color: #fff;
  }
  .page_modal-left form button.btn{
    margin: 30px auto 10px;
  }
</style>


<div class="page_modal">
  <a href="/" class="close"><img src="/wp-content/themes/envo-storefront/img/close.png"></a>
  <div class="page page_modal-in">
    <div class="page_modal-left">
      <form class=" " method="post">
      <div class="sm-visible">
                <a href="/" class="logo"><img src="/wp-content/themes/envo-storefront/img/logo-3.png" alt=""></a>
              </div>
        <div class="h2">歡迎！</div>
        <div class="h3">创建你的帐户</div>
        <div class="input-group">
<!--          <input name="name" type="text" placeholder="电子邮件" id="name" class="form-control" value="" required>-->
          <input name="email" type="email" placeholder="电子邮件" id="email" class="-form-control" value="" required>
        </div>
        <div class="input-group">
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" placeholder="密码">
          <span class="eye" id="showPass">
	                      <img src="/wp-content/themes/envo-storefront/img/eye.png" alt="">
	                   </span>
        </div>
        <ul class="flex list-autorization sm-hide">
          <li>
            <a href="#">
              <img src="/wp-content/themes/envo-storefront/img/icon-remember-me.png" alt="">
              <span>记住我</span>
            </a>
          </li>

          <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/icon-phone.png" alt=""><span>手机登入</span></a>
          </li>
        </ul>
        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="22574a019d"><input type="hidden" name="_wp_http_referer" value="/create-your-account/">
        <button class="btn gradient-horizontal" name="submit" onclick="sub()" type="button">注册</button>
                 <ul class="flex list-autorization sm-visible">
                          <li>
                            <a href="#">
                              <img src="/wp-content/themes/envo-storefront/img/sm/icon-remember-me.png" alt="">
                              <span>記住我</span>
                            </a>
                          </li>

                          <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/sm/icon-phone.png" alt=""><span>手機登入</span></a>
                          </li>
                        </ul>
        <div class="registration-pholitika">
          注册即表示您同意 MingMing
          <a href="javascript:void(0);" onclick="ShowPopup('#popupTerms');">服务条款</a> 和
          <a href="javascript:void(0);" onclick="ShowPopup('#popupPolicy');">隐私政策</a>
        </div>
        <div class="registration-now sm-hide">
          <span>還未有帳戶？ </span>
          <a href="/create-your-account/">立即注冊</a>
        </div>
        <div class="login-partner">
          <span></span>
          <a href="#">用合作網站帳號登入</a>
          <span></span>
        </div>

        <ul class="flex social hidden">
          <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/social/1.png" alt=""></a></li>
          <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/social/2.png" alt=""></a></li>
        </ul>

      </form>


    </div>
    <div class="page_modal-right gradient-vertical">
      <div class="h1">应用程式 <br>现己登陆</div>
      <ul class="flex">
        <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/google-play.png" alt=""></a></li>
        <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/app-store.png" alt=""></a></li>
      </ul>
      <div class="grcode">
        <a href="http://qrcoder.ru" target="_blank"><img src="http://qrcoder.ru/code/?https%3A%2F%2Fmingming.io%2Fwp-content%2Fuploads%2F2020%2F05%2FMingMing-v1.apk&4&0" width="164" height="164" border="0" title="QR код"></a>
      </div>
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
      <div class="error">Error</div>
      <br>
      <div style="color:#fff; font-weight: 400;">Such user or e-mail is already exists. Please choose another one.</div>
    </div>
  </div>
</div>
<div id="su1" class="popup blue_backg popup-su">
  <div class="close" onclick="HidePopup('#su1');"><img width="30px" height="30px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="modal-content " role="document">
    <div class="modal-body">
      <div class="success">Success</div>
    </div>
  </div>
</div>

<script>
  function sub(){
    // if ( (jQuery('#email').val().length>0) && (jQuery('#password').val().length>0) && (jQuery('#username').val().length>0) ){
    if ( (jQuery('#email').val().length>0) && (jQuery('#password').val().length>0) ){
      jQuery('#email').removeClass('ero');
      jQuery('#password').removeClass('ero');
      jQuery('#username').removeClass('ero');
      jQuery.ajax({
        type: "POST",
        url: "/reg1.php",
        data: {
          email:jQuery('#email').val(),
          password:jQuery('#password').val(),
          //dob:jQuery('#dob').val(),
        },
        success: function(data){
          if (data==jQuery.trim('0'))
          {
            ShowPopup('#su2');
          }
          else
          {
            ShowPopup('#su1');
            setTimeout(function () {

              window.location.reload();

            }, 1000);

          }

          console.log(data);
        },
        error: function(data){
          //jQuery('#su').show()
          console.log(data);  ShowPopup('#su2');
        }
      });
    }
    else{

      if  (jQuery('#email').val().length>0){
        jQuery('#email').removeClass('ero');
      }
      else{
        jQuery('#email').addClass('ero'); ShowPopup('#su2');
      }

      if  (jQuery('#password').val().length>0){
        jQuery('#password').removeClass('ero'); ShowPopup('#su2');
      }
      else{
        jQuery('#password').addClass('ero');
        ShowPopup('#su2');
      }
      // if  (jQuery('#username').val().length>0){
      //   jQuery('#username').removeClass('ero');
      // }
      // else{
      //   jQuery('#username').addClass('ero');
      // }
    }

  }

</script>


<?php get_footer(); ?>