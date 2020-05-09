<?php
  /*
   * Template name: Записаться
   */

  get_header(); ?>
<style>
  #su{
  text-align: center;
  font-weight: 900;
  margin: 10px 0;
  color: #f00;
  }
  .form-signin-wrapp{
    margin: 20px 0 0;
    padding: 10px 5% 30px;
    border-radius: 10px;
    /* -webkit-transform: scale(0.7); */
    -moz-transform: scale(0.7);
    -ms-transform: scale(0.7);
    /* transform: scale(0.7); */
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
  }
  .btn.btn-block {
    display: block;
    margin: 30px auto 0;
}
.form-group {
    margin: 0;
    text-align: left;
}
.form-signin label {
    margin: 10px 0 2px 0;
}
</style>
<div class="container container-enroll">
  <div class="row">
    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-12" style="margin-top: 20px;margin-bottom: 50px">
      <h2 class="form-signin-heading">Apply to join pozdr</h2>
      <div class="form-signin-wrapp blue_backg">
        <p>If you have fans and want to join Ming as talent, you can enroll here and we'll be in touch.</p>
        <form class="form-signin">
          <div class="form-group">
            <label for="name">Your name</label>
            <div class="input-group" style="width:100%">
              <input type="text" name="name" value="" placeholder="Michael Jordan" id="name" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
              <input name="username" type="text" placeholder="myusername" id="username" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <input name="password" type="password" placeholder="**********" id="password" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group" style="width:100%">
              <input type="email" name="email" value="" placeholder="you@example.com" id="email" class="form-control" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="phone">Phone number (never shared)</label>
            <div class="input-group" style="width:100%">
              <input type="text" name="phone" value="" placeholder="+86 999 9999 999" id="phone" class="form-control phone-js" required>
            </div>
          </div>
          <div class="form-group">
            <label for="networkType">Where can we find you?</label>
            <select id="networkType" name="networkType" class="form-control">
              <option value="---">Select</option>
              <option selected="" value="twitter">Twitter</option>
              <option value="instagram">Instagram</option>
              <option value="youtube">YouTube</option>
              <option value="facebook">Facebook</option>
              <option value="twitch">Twitch</option>
              <option value="musically">TikTok</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="handle">Your handle</label>
            <div class="input-group" style="width:100%"><input type="text" name="handle" value="" placeholder="@jimmybuffet" id="handle" class="form-control"></div>
          </div>
          <div class="form-group">
            <label for="followerCount">How many followers do you have?</label>
            <div class="input-group" style="width:100%"><input type="text" name="followerCount" value="" placeholder="400k" id="followerCount" class="form-control"></div>
          </div>
          <button type="button" onclick="sub()" class="btn btn-block btn-login">
            <!-- -->Submit
          </button>
        </form>
        <div id="su" style="display:none">Success</div>
      </div>
    </div>
  </div>
</div>
<script>
  function sub()
  {
  jQuery.ajax({
            type: "POST",
            url: "/reg2.php",
            data: {
            name:jQuery('#name').val(),
              email:jQuery('#email').val(),
            username:jQuery('#username').val(),
            password:jQuery('#password').val(),
            phone:jQuery('#phone').val(),
            networkType:jQuery("#networkType option:selected").text(),
              handle:jQuery('#handle').val(),
            followerCount:jQuery('#followerCount').val(),
            },
  success: function(data)
  {
  jQuery('#su').show()
  console.log(data);
  }


    });

  }

</script>
<?php get_footer(); ?>