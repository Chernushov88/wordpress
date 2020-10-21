<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>
<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">

<?php endif; ?>







<style>
  .page-wrap{
    padding-bottom: 0;
  }
  ul{
    padding: 0;
    margin: 0;
    list-style-type: none;
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
  .page_modal-left form button.btn{
    margin: 45px auto;
  }
  .list-autorization{
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: -15px;
  }
  .list-autorization li{

  }
  .list-autorization li img{
    margin-right: 10px;
  }
  .list-autorization li a{
    font-size: 14px;
    color: #e40073;
  }
  .registration-now{
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
    font-size: 14px;
  }
  .registration-now span{
    color: #e40073;
  }
  .registration-now a{
    color: #bf56fb;
    margin-left: 20px;
  }
  .social{
    justify-content: center;
  }
  .social li{
    margin: 5px;
  }
  .login-partner{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
  }
  .login-partner span{
    width: 46px;
    height: 2px;
    background: #231815;
  }
  .login-partner a{
    margin: 0 10px;
    color: #231815;
  }
</style>








<script>
    jQuery(function(){

    })
</script>
<?/*
		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
				</label>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

*/?>













<div class="page_modal">
  <a href="/" class="close"><img src="/wp-content/themes/envo-storefront/img/close.png"></a>
  <div class="page page_modal-in">
    <div class="page_modal-left">
      <form class=" " method="post">
        <div class="sm-visible">
          <a href="/" class="logo"><img src="/wp-content/themes/envo-storefront/img/logo-3.png" alt=""></a>
        </div>
        <div class="h2">你好</div>
        <div class="h3">登入到你的帳戶</div>
        <div class="input-group">
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username"
                 autocomplete="username"
                 value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
                 placeholder="電子郵件"/><?php // @codingStandardsIgnoreLine ?>
        </div>
        <div class="input-group">
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password"
                 id="password" autocomplete="current-password"
                 placeholder="密碼"/>
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
          <li><a href="/my-account-2/lost-password/"><span>忘記密碼？</span></a></li>
          <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/icon-phone.png" alt=""><span>手机登录</span></a>
          </li>
        </ul>

        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
        <button type="submit" class="btn gradient-horizontal" name="login"
                value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">登入
        </button>
         <ul class="flex list-autorization sm-visible">
          <li><a href="/my-account-2/lost-password/"><span>忘記密碼？</span></a></li>
                  <li>
                    <a href="#">
                      <img src="/wp-content/themes/envo-storefront/img/sm/icon-remember-me.png" alt="">
                      <span>记住我</span>
                    </a>
                  </li>

                  <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/sm/icon-phone.png" alt=""><span>手机登录</span></a>
                  </li>
                </ul>
        <ul class="social" style="display:none;">
          <!-- <li><a href="javascript:void(0);"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0);"><img src="/wp-content/themes/envo-storefront/img/bd_logo3.png" alt=""></a></li> -->
          <!-- <li><a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-qrcode" aria-hidden="true"></i></a></li>
          <li><a href="javascript:void(0)"><i<i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
          <li><a href="javascript:void(0)"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
          <!-- <li><a onclick="jQuery('#fab').find('.fbl-button').click()" href="javascript:void(0)"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li> -->
          <li>
            <div id="fab">
              <i class="fa fa-facebook-official" aria-hidden="true">
                <?

                                do_action('facebook_login_button');
                                ?>
              </i>
            </div>
          </li>

        </ul>
        <div class="registration-now">
          <span>还未有帐户？</span>
          <a href="/create-your-account/">立刻注册</a>
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

        <?php do_action( 'woocommerce_login_form_end' ); ?>
      </form>

      <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

    </div>

    <div class="u-column2 col-2">

      <h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

      <form method="post" class="woocommerce-form woocommerce-form-register register"
      <?php do_action( 'woocommerce_register_form_tag' ); ?> >

      <?php do_action( 'woocommerce_register_form_start' ); ?>

      <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
               id="reg_username" autocomplete="username"
               value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
      </p>

      <?php endif; ?>

      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span
            class="required">*</span></label>
        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email"
               autocomplete="email"
               value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
      </p>

      <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
               id="reg_password" autocomplete="new-password"/>
      </p>

      <?php else : ?>

      <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

      <?php endif; ?>

      <?php do_action( 'woocommerce_register_form' ); ?>

      <p class="woocommerce-FormRow form-row">
        <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
        <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                name="register"
                value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
      </p>

      <?php do_action( 'woocommerce_register_form_end' ); ?>

      </form>

    </div>

  </div>
  <?php endif; ?>

  <?php do_action( 'woocommerce_after_customer_login_form' ); ?>
</div>
<div class="page_modal-right gradient-vertical">
  <div class="h1">应用程式 <br>现己登陆</div>
  <ul class="flex">
    <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/google-play.png" alt=""></a></li>
    <li><a href="#"><img src="/wp-content/themes/envo-storefront/img/app-store.png" alt=""></a></li>
  </ul>
  <div class="grcode">
      <a href="http://qrcoder.ru" target="_blank">
      <img src="http://qrcoder.ru/code/?https%3A%2F%2Fmingming.io%2Fwp-content%2Fuploads%2F2020%2F05%2FMingMing-v1.apk&amp;4&amp;0" border="0" title="QR code" class="hidden"></a>
        <?/*<a href="http://qrcoder.ru" target="_blank"><img src="http://qrcoder.ru/code/?https%3A%2F%2Fmingming.io%2Fwp-content%2Fuploads%2F2020%2F05%2FMingMing-v1.apk&4&0" width="164" height="164" border="0" title="QR код"></a>*/?>
  </div>
</div>
</div>
</div>