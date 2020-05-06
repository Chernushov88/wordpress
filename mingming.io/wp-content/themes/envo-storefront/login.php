<?php
/*
 * Template name: Войти
 */

get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
      <div class="">
        <div>
          <div class="">
            <a class="btn" style="float:right;"><img width="20px" height="20px" src="/wp-content/themes/envo-storefront/img/close.svg" alt="Close"></a>
          </div>
          <div class="">
            <div>
              <h2 class="">Log in to pozdr</h2>
              <a target="_blank" rel="noopener noreferrer" href="https://api.instagram.com/oauth/authorize/?client_id=45f9fdf3922446adbd562d2093868427&amp;response_type=code&amp;redirect_uri=http://pozdr.beget.tech/api/auth/instagram/callbackweb" class="btn btn-block btn-ig" style="margin: 25px 0px;">Continue with Instagram</a>
              <div class=""><span class="">OR</span></div>
              <form class="form-signin">
                <div style="margin-bottom:5px;text-align:left">
                  <label for="email">
                    <!-- -->Email
                  </label>
                  <div class="form-group">
                    <div class="input-group" style="width:100%">
                      <input type="email" name="email" value="" placeholder="you@example.com" id="email" class="form-control" required>
                    </div>
                  </div>
                  <label for="password">
                    <!-- -->Password
                  </label>
                  <div class="form-group">
                    <div class="input-group" style="width:100%">
                      <input type="password" name="password" value="" placeholder="Password" id="password" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-login btn-block">Log In with email</button></div>
              </form>
              <div class="">
                <span>By signing up, you agree to Cameo's <a href="javascript:void(0);" onclick="ShowPopup('#popupTerms');">Terms of Service</a>
        and <a href="javascript:void(0);" onclick="ShowPopup('#popupPolicy');">Privacy Policy</a></span>
              </div>
              <div style="margin-top:25px"><a class="_1oK610B7KB2vfcHFrYBMt8" href="/forgot">Forgot your password?</a></div>
              <div style="margin-top:15px">Don't have an account?<a href="#" class="_1oK610B7KB2vfcHFrYBMt8">Sign up</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<?php get_footer(); ?>
