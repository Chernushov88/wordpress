<?php
  /*
   * Template name: Создать Аккаунт
   */

  get_header(); ?>
<style>
  .create-your-account{
    max-width: 550px;
    margin: 0 auto;
  }
  .create-your-account{
    max-width: 500px;
    margin: 0 auto;
  }
  .input-group{
    width: 100%;
  }
  .input-group input{
    margin-bottom: 0px;
  }
  .create-your-account label {
    margin: 10px 0 2px 0;
  }
  #su{
    text-align: center;
    font-weight: 900;
    margin: 10px 0;
    color: #f00;
  }
  .create-your-account .form{
    margin: 20px 0;
    padding: 20px 5% 20px;
    border-radius: 10px;
    -moz-transform: scale(0.7);
    -ms-transform: scale(0.7);
    /* transform: scale(0.7); */
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
.form-group{
  margin: 0;
  text-align: left;
}
.btn.btn-block{
  display: block;
  margin: 30px auto 0;
}
</style>




<div class="create-your-account">
  <h2>Create Your Account</h2>
  <form method="post" class="form blue_backg">
  <div class="form-group">
    <label for="name">Full name</label>
    <div class="input-group">
      <input name="name" type="text" placeholder="Michael Jordan" id="name" class="form-control" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <div class="input-group">
      <input name="email" type="email" placeholder="test@gmail.com" id="email" class="form-control" value="" required>
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
    <label for="dob">Birthday</label>
    <div class="input-group">
      <input name="dob" type="text" placeholder="99/99/9999" id="dob" class="form-control dateBirth" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inviteCode">Invite code (optional)</label>
    <div class="input-group">
      <input name="inviteCode" type="text" placeholder="Invite code"  id="inviteCode" class="form-control" value="" >
    </div>
  </div>
  <div>
    <button class="btn btn-block btn-login" name="submit" onclick="sub()" type="button">Sign Up</button>
  </div>
  </form>
  <div id="su" style="display:none">Success</div>
  <div class="text-center">
    <div>
      <span>By signing up, you agree to mingming's <a href="javascript:void(0);" onclick="ShowPopup('#popupTerms');">Terms of Service</a>
        and <a href="javascript:void(0);" onclick="ShowPopup('#popupPolicy');">Privacy Policy</a></span>
    </div>
    <p><span>Have an account? </span><a href="/enroll/">Log in</a></p>
  </div>
</div>
<br>
<br>



<script>

function sub()
{
jQuery.ajax({
			type: "POST",
			url: "/reg1.php",
			data: {
			name:jQuery('#name').val(),
            email:jQuery('#email').val(),
			username:jQuery('#username').val(),
			password:jQuery('#password').val(),
            dob:jQuery('#dob').val(),
			inviteCode:jQuery('#inviteCode').val(),
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