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
.row-account .col-md-9{
    width: 100%;
}

form .required {
    color: red;
    font-weight: 700;
    border: 0!important;
    text-decoration: none;
}
.flex{
    display: flex;
	justify-content: center;
    align-items: center;
    margin-top: 10px;
}
.flex>*{margin-left: 15px;}
.row-account #sidebar{display: none;}
.single-content {
	max-width: 500px;
    margin: 0 auto;
    padding: 10px 5% 50px ;
    border-radius: 10px;
    border-radius: 10px;
    background: #1b2039;
    -moz-transform: scale(0.7);
    -ms-transform: scale(0.7);
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}


.single-content #comments {
    overflow-y: hidden;
    max-height: 500px;
    padding: 0;
    background: transparent;
    flex: 2;
}
.foo_sharing {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-evenly;
    margin: 30px 0 0;
}
.btn.btn-block {
    margin: 0;
    height: 34px;
    line-height: 1;
}
.woocommerce-notices-wrapper.test{
    display: none;
}
.form-login .foo_sharing {
    justify-content: center;
}
.form-login .foo_sharing .social{
    margin-left: 20px;
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



	        <div class="form-login">
	        	<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

	          <!-- <a target="_blank" rel="noopener noreferrer" href="https://api.instagram.com/oauth/authorize/?client_id=45f9fdf3922446adbd562d2093868427&amp;response_type=code&amp;redirect_uri=http://pozdr.beget.tech/api/auth/instagram/callbackweb" class="btn btn-block btn-ig" style="margin: 25px 0px;">Continue with Instagram</a> -->
	          <!-- <div class=""><span class="">OR</span></div> -->
	          <form class="form-signin woocommerce-form woocommerce-form-login " method="post">
	          	<?php do_action( 'woocommerce_login_form_start' ); ?>
	              <div class="form-group">
                     <label for="email">Login or e-mail</label>
	              <div class="form-group">
	                <div class="input-group" style="width:100%">
	                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
	                  placeholder="Enter Username" /><?php // @codingStandardsIgnoreLine ?>
	                  <!-- <span class="form_icon">
						<i class="fa_icon form-envelope" aria-hidden="true"></i>
					  </span> -->

	                </div>
	              </div>

	              <!-- <label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
	              <div class="form-group">
                    <label for="password">Password</label>
	                <div class="input-group">
	                  <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"
	                  placeholder="Enter Password" />
	                  <span class="form_icon" id="showPass" >
	                      <i class="fa_icon form-lock" aria-hidden="true"></i>
	                   </span>
	                </div>
	              </div>

	            </div>

	            <div class="form-group foo_sharing">
	            	<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
	            	<button type="submit" class="btn btn-login btn-block" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">Login Now</button>
                    <ul class="social">
                      <!-- <li><a href="javascript:void(0);"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>
                      <li><a href="javascript:void(0);"><img src="/wp-content/themes/envo-storefront/img/bd_logo3.png" alt=""></a></li> -->
                      <!-- <li><a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-qrcode" aria-hidden="true"></i></a></li>
                      <li><a href="javascript:void(0)"><i<i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                      <li><a href="javascript:void(0)"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
	            </div>

	            <?php do_action( 'woocommerce_login_form_end' ); ?>
	          </form>
	          <div class="">
	            <span>By signing up, you agree to mingming's <a href="javascript:void(0);" onclick="ShowPopup('#popupTerms');">Terms of Service</a>
        and <a href="javascript:void(0);" onclick="ShowPopup('#popupPolicy');">Privacy Policy</a></span>
	          </div>
	          <div class="flex forgotPassword"><a href="/my-account-2/lost-password/">Forgot your password?</a></div>

	          <div class="flex dont_have">
	          	<div>Don't have an account?</div>
	          	<a href="/create-your-account/" class="btn btn-default"> Sign up </a>
	          	<a href="/enroll/" class="btn btn-default"> Enroll as an Celebrity </a></div>
	        </div>



<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="u-column2 col-2">

		<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-FormRow form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
