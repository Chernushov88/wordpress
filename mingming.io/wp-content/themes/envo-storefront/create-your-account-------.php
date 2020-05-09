<?php
  /*
   * Template name: Создать Аккаунт
   */

  get_header(); ?>
<style>

.form-group{
  margin: 0;
  text-align: left;
}
.btn.btn-block{
    margin: 0;
    height: 34px;
    line-height: 1;
}
.ero{
  border: solid 1px red!important;
}
.foo_sharing{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: space-evenly;
  margin: 30px 0 0 ;
}
</style>




<div class="create-your-account">
  <h2>Create Your Account</h2>
  <form method="post" class="form blue_backg">
<!--   <div class="form-group">
    <label for="name">Full name</label>
    <div class="input-group">
      <input name="name" type="text" placeholder="Michael Jordan" id="name" class="form-control" value="" required>
    </div>
  </div> -->
  <div class="form-group">
    <label for="email">Email</label>
    <div class="input-group">
      <input name="email" type="email" placeholder="test@gmail.com" id="email" class="form-control" value="" required>
    </div>
  </div>
<!--   <div class="form-group">
    <label for="username">Username</label>
    <div class="input-group">
      <input name="username" type="text" placeholder="myusername" id="username" class="form-control" value="" required>
    </div>
  </div> -->
  <div class="form-group">
    <label for="password">Password</label>
    <div class="input-group">
      <input name="password" type="password" placeholder="**********" id="password" class="form-control" value="" required>
    </div>
  </div>
<!--   <div class="form-group">
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
  </div> -->
  <div class="login-social foo_sharing blue_backg">
    <button class="btn btn-block btn-login" name="submit" onclick="sub()" type="button">Sign Up</button>
    <ul class="social">
      <li><a href="#"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>
      <li><a href=""><img src="/wp-content/themes/envo-storefront/img/bd_logo3.png" alt=""></a></li>
    </ul>
  </div>
  </form>






  <div id="su2" class="popup blue_backg">
    <div class="close" onclick="HidePopup('#su2');"><img width="30px" height="30px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
    <div class="modal-content " role="document">
    <div class="modal-header">
      <h2 class="modal-title"></h2>
    </div>
    <div class="modal-body">
      
      <div class="error">error</div>
    </div>
  </div>
</div>
 <div id="su1" class="popup blue_backg">
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
			name:jQuery('#name').val(),
      email:jQuery('#email').val(),
			//username:jQuery('#username').val(),
			password:jQuery('#password').val(),
      //dob:jQuery('#dob').val(),
			inviteCode:jQuery('#inviteCode').val(),
			},
      success: function(data){
        ShowPopup('#su1');
        console.log(data);
      },
      error: function(data){
        //jQuery('#su').show()
        console.log(data);
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



