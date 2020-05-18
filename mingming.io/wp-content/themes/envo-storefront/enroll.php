<?php
  /*
   * Template name: Записаться
   */

  get_header(); ?>
<style>

</style>
<div class="container container-enroll">
  <div class="row">
    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-12" style="margin-top: 20px;margin-bottom: 50px">
      <h2 class="form-signin-heading">Apply to join as an actor</h2>
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
          <!--           <div class="form-group">
            <label for="phone">Phone number (never shared)</label>
            <div class="input-group" style="width:100%">
              <input type="text" name="phone" value="" placeholder="+86 999 9999 999" id="phone" class="form-control phone-js" required>
            </div>
            </div> -->
          <div class="form-group">
            <label for="networkType">Where can we find you?</label>
            <div id="myTabs ">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs style-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tabs-social-1" aria-controls="tabs-social-1" role="tab" data-toggle="tab">Microblogs</a></li>
                <li role="presentation"><a href="#tabs-social-2" aria-controls="tabs-social-2" role="tab" data-toggle="tab">Messaging</a></li>
                <li role="presentation"><a href="#tabs-social-3" aria-controls="tabs-social-3" role="tab" data-toggle="tab">Video</a></li>
                <li role="presentation"><a href="#tabs-social-4" aria-controls="tabs-social-4" role="tab" data-toggle="tab">Short video</a></li>
                <li role="presentation"><a href="#tabs-social-5" aria-controls="tabs-social-5" role="tab" data-toggle="tab">Live streaming</a></li>
                <li role="presentation"><a href="#tabs-social-6" aria-controls="tabs-social-6" role="tab" data-toggle="tab">Audio and Broadcasting</a></li>
                <li role="presentation"><a href="#tabs-social-7" aria-controls="tabs-social-7" role="tab" data-toggle="tab">Music</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tabs-social-1">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-social-1-1">
                      <input type="checkbox" id="tabs-social-1-1"><span>Weibo</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-1-2">
                      <input type="checkbox" id="tabs-social-1-2"><span>Qzone</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="tabs-social-2">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-social-2-1">
                      <input type="checkbox" id="tabs-social-2-1"><span>Wechat</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-2-2">
                      <input type="checkbox" id="tabs-social-2-2"><span>QQ</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-2-3">
                      <input type="checkbox" id="tabs-social-2-3"><span>Aliwangwang</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="tabs-social-3">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-social-3-1">
                      <input type="checkbox" id="tabs-social-3-1"><span>iQiyi</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-2">
                      <input type="checkbox" id="tabs-social-3-2"><span>Sohu TV</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-3">
                      <input type="checkbox" id="tabs-social-3-3"><span>LeTV</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-4">
                      <input type="checkbox" id="tabs-social-3-4"><span>Bilibili</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-5">
                      <input type="checkbox" id="tabs-social-3-5"><span>Youku</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-6">
                      <input type="checkbox" id="tabs-social-3-6"><span>Tudou</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-7">
                      <input type="checkbox" id="tabs-social-3-7"><span>Tencent Video</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-3-8">
                      <input type="checkbox" id="tabs-social-3-8"><span>Acfun</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="tabs-social-4">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-social4-1">
                      <input type="checkbox" id="tabs-social4-1"><span>Miaopai</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social4-2">
                      <input type="checkbox" id="tabs-social4-2"><span>Kuaishou</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social4-3">
                      <input type="checkbox" id="tabs-social4-3"><span>Meipai</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social4-4">
                      <input type="checkbox" id="tabs-social4-4"><span>Douyin</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social4-5">
                      <input type="checkbox" id="tabs-social4-5"><span>Pear Video</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social4-6">
                      <input type="checkbox" id="tabs-social4-6"><span>Warermelon TV</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social4-7">
                      <input type="checkbox" id="tabs-social4-7"><span>Hypstar</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="tabs-social-5">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-social-5-1">
                      <input type="checkbox" id="tabs-social-5-1"><span>Inke</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-5-2">
                      <input type="checkbox" id="tabs-social-5-2"><span>Douyu</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-5-3">
                      <input type="checkbox" id="tabs-social-5-3"><span>Huajiao</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-5-4">
                      <input type="checkbox" id="tabs-social-5-4"><span>Yizhibo</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-5-5">
                      <input type="checkbox" id="tabs-social-5-5"><span>YY TV</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social-5-6">
                      <input type="checkbox" id="tabs-social-5-6"><span>Panda TV</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="tabs-social-6">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-social6-1">
                      <input type="checkbox" id="tabs-social6-1"><span>Ximalaya FM</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social6-2">
                      <input type="checkbox" id="tabs-social6-2"><span>Qingting FM</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-social6-3">
                      <input type="checkbox" id="tabs-social6-3"><span>Lizhi FM</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="tabs-social-7">
                  <ul class="tabpanel-cheket">
                    <li>
                      <label for="tabs-socia7-1">
                      <input type="checkbox" id="tabs-socia7-1"><span>Netease Music</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-socia7-2">
                      <input type="checkbox" id="tabs-socia7-2"><span>QQ Music</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-socia7-3">
                      <input type="checkbox" id="tabs-socia7-3"><span>Xiami Music</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-socia7-4">
                      <input type="checkbox" id="tabs-socia7-4"><span>Kuguo music</span>
                      </label>
                    </li>
                    <li>
                      <label for="tabs-socia7-5">
                      <input type="checkbox" id="tabs-socia7-5"><span>Kuwo Music</span>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- <select id="networkType" name="networkType" class="form-control">
              <option value="---">Select</option>
              <option selected="" value="twitter">Twitter</option>
              <option value="instagram">Instagram</option>
              <option value="youtube">YouTube</option>
              <option value="facebook">Facebook</option>
              <option value="twitch">Twitch</option>
              <option value="musically">TikTok</option>
              <option value="other">Other</option>
              </select> -->
          </div>
          <div class="form-group">
            <label for="handle">Your account</label>
            <div class="input-group" style="width:100%"><input type="text" name="handle" value="" placeholder="@jimmybuffet" id="handle" class="form-control"></div>
          </div>
          <div class="form-group">
            <label for="followerCount">How many followers do you have?</label>
            <select id="followerCount" name="followerCount" class="form-control">
              <option selected="" value=""> < 100k</option>
              <option value=""> 100k <  </option>
              <option value="">300k < </option>
              <option value="">1000k < </option>
            </select>
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

<div id="su2" class="popup blue_backg popup-su">
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

<script type='text/javascript' src='https://mingming.io/wp-content/themes/envo-storefront/js/bootstrap-tabs.min.js'></script>
<script>
  function sub()
  {

  if ( (jQuery('#password').val().length>0) && (jQuery('#username').val().length>0) )
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
  else
  {


  if  (jQuery('#password').val().length>0){
    jQuery('#password').removeClass('ero');
  }
  else{
    jQuery('#password').addClass('ero');ShowPopup('#su2');
  }
  if  (jQuery('#username').val().length>0){
    jQuery('#username').removeClass('ero');
  }
  else{
    jQuery('#username').addClass('ero');ShowPopup('#su2');
  }





  }


  }

</script>
<?php get_footer(); ?>