<?php
  /*
   * Template name: Enroll as Celebrity new
   */

  get_header(); ?>
<style>
.form-signin-wrapp {
   padding: 0;

  }
.step{
  padding: 10px 5% 30px;
  transition: 1s ease-in-out all;
}
.fiy{
  margin-bottom: 10px;
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
  .chooseCategory{
  padding: 15px 5px 0px 5px;
  }
  .chooseCategory> .input-group{
  line-height: 1;
  }
  .chooseCategory> .input-group>div{
  overflow: hidden;
  padding-top: 7px;
  }
  .chooseCategory> .input-group>div .che{
  margin: 2px 7px 0 0;
  float: left;
  }
  .form-signin label {
    margin: 0px 0 0px 0;
}
textarea.form-control {
    height: 100px;
}
.form-group {
    margin: 10px 0 0;
}
h4{
  margin-bottom: 20px;
  color: #fff;
}
ul{
  margin: 20px 0;
  padding: 0;
  list-style-type: none;
  font-weight: 600;
}
.defalt-state-video{
  max-width: 100%;
  text-align: center;
}
.defalt-state-video img{
  max-width: 150px;
}
.button-wrapp{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  text-align: center;
}
.button-wrapp button{
  margin: 10px 20px;
}
.popup.popupVideoRecrd{
  padding: 0;
}
</style>
<link rel="stylesheet" href="//cdn.addpipe.com/2.0/pipe.css">
      <script type="text/javascript" src="//cdn.addpipe.com/2.0/pipe.js"></script>
      <div style="display:none" id="eta">
        <img width="30px" height="30px" alt="Close" class="close" src="/wp-content/themes/envo-storefront/img/close-white.svg" onclick="HidePopup5('#eta');nextStep('.step-5');">
        <!--<div class="darken" style="display: block;"></div>-->
        <div class="intip buttons-block-in popup popupVideoRecrd" style="display:none" id="custom-id" ></div>
        <div class="darkenVideo"  onclick="HidePopup5('#eta');nextStep('.step-5');"></div>
      </div>
<div class="container container-enroll">
  <div class="row">
    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-12" style="margin-top: 20px;margin-bottom: 50px">
      <h2 class="form-signin-heading">Apply to join as an Celebrity</h2>
      <div class="form-signin-wrapp blue_backg">

        <form class="form-signin">

          <!-- <div class="form-group">
            <label for="name">Your name</label>
            <div class="input-group" style="width:100%">
              <input type="text" name="name" value="" placeholder="Michael Jordan" id="name" class="form-control" required>
            </div>
          </div> -->

          <div class="step step-1">
            <p>If you have fans and want to join Ming as talent, you can enroll here and well be in touch.</p>
            <div class="form-group">
              <label for="username">Celebraty username</label>
              <div class="input-group">
                <input name="username" type="text" placeholder="myUsername" id="username" class="form-control" value="" required>
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
            <button type="button" onclick="nextStep('.step-2')" class="btn btn-block btn-login">Submit</button>
          </div>
          <div class="step step-2 hidden">
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
                      <li>
                        <label for="tabs-social-1-3">
                        <input type="checkbox" id="tabs-social-1-3"><span>Facebook</span>
                        </label>
                      </li>
                      <li>
                        <label for="tabs-social-1-4">
                        <input type="checkbox" id="tabs-social-1-4"><span>Twitter</span>
                        </label>
                      </li>
                      <li>
                        <label for="tabs-social-1-5">
                        <input type="checkbox" id="tabs-social-1-5"><span>Youtube</span>
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
            </div>
            <div class="form-group">
              <label for="handle">Your account</label>
              <div class="input-group" style="width:100%"><input type="text" name="handle" value="" placeholder="@jimmybuffet" id="handle" class="form-control"></div>
            </div>
            <div class="form-group">
              <label for="followerCount">How many followers do you have?</label>
              <select id="followerCount" name="followerCount" class="form-control">
                <option selected="" value=""> 0 - 100k</option>
                <option value=""> 100k - 300k </option>
                <option value="">300k - 1000k </option>
                <option value="">1000k+ </option>
              </select>
            </div>
            <button type="button" onclick="nextStep('.step-3')" class="btn btn-block btn-login">Submit</button>
          </div>
          <div class="step step-3 hidden">
              <div class="form-group">
                <div id="fiy" class="fiy">
                  <img width="150" height="150" src="https://mingming.io/wp-content/uploads/2020/04/Feng-shao-fang-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://mingming.io/wp-content/uploads/2020/04/Feng-shao-fang-150x150.png 150w, https://mingming.io/wp-content/uploads/2020/04/Feng-shao-fang-300x300.png 300w, https://mingming.io/wp-content/uploads/2020/04/Feng-shao-fang-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px"> <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Copper.png" alt="">
                </div>
                <label for="addPhoto">Add your photo</label>
                <div class="input-group input-addFile">
                  <input type="file" name="file" id="addPhoto" class="inputfile">
                  <label for="addPhoto" class="form-control"><span></span><a class="btn btn-primary btn-addFile">Add file</a></label>
                </div>
              </div>

              <div class="form-group">
                <label for="selfPrasentation">Self-presentation</label>
                <div class="input-group">
                  <textarea name="selfPrasentation" type="text" value="Cool one!" placeholder="Actor Chicago fire" id="selfPrasentation" class="form-control "></textarea>
                </div>
              </div>

              <br>
              <div class="input-group chooseCategory">
                <label for="">Who are you? Choose category</label>
                <div class="input-group">
                  <div><input checked="checked" type="checkbox" value="29" name="che" class="che"><label>Actors</label></div>
                  <div><input checked="checked" type="checkbox" value="30" name="che" class="che"><label>Athletes</label></div>
                  <div><input checked="checked" type="checkbox" value="33" name="che" class="che"><label>Bloggers</label></div>
                  <div><input checked="checked" type="checkbox" value="31" name="che" class="che"><label>Comedians</label></div>
                  <div><input checked="checked" type="checkbox" value="32" name="che" class="che"><label>Creators</label></div>
                  <div><input checked="checked" type="checkbox" value="34" name="che" class="che"><label>Gamers</label></div>
                  <div><input type="checkbox" value="35" name="che" class="che"><label>Models</label></div>
                  <div><input type="checkbox" value="36" name="che" class="che"><label>More</label></div>
                  <div><input type="checkbox" value="37" name="che" class="che"><label>Musicians</label></div>
                  <div><input type="checkbox" value="38" name="che" class="che"><label>Reality TV</label></div>
                </div>
              </div>
              <div class="form-group">
                <label for="descripOrder">Description</label>
                <div class="input-group">
                  <textarea name="descripOrder" id="descripOrder" cols="30" rows="10" class="form-control ">Per asper ad astra!</textarea>
                </div>
              </div>

            <button type="button" onclick="nextStep('.step-4')" class="btn btn-block btn-login">Submit</button>
          </div>
          <div class="step step-4 hidden">
            <h4>And the final step - record presentation video for Mingming!</h4>
            <ul>
              <li>You will need:</li>
              <li>1) represent yourself</li>
              <li>2) say "Special for Mingming"</li>
            </ul>

            <div class="text-en">
              Please record a video to briefly introduce yourself, share the news of joining MingMing, and tell your fans that you would be happy to make a video for them, for example, congratulating them on their birthday, simply saying hi to their family and friends, or fulfilling any other request you would like to. Be creative and make a video in your own style.
            </div>

            <div class="text-chine">
            請錄製自我簡介的視頻，分享並加入明名MINGMING的新聞，以及告訴您的粉絲，您很樂意為他們製作視頻。例如：祝賀粉絲們的生日，向他們的家人和朋友打招呼或滿足他們的其他要求。發揮您的創意，以製作包含您個人風格的視頻。
            </div>
            <button type="button" class="btn btn-block btn-login" onclick="moving(this,'111')">Record</button>
          </div>

          <div class="step step-5 hidden">
            <h4>And the final step - record presentation video for Mingming!</h4>
            <ul>
              <li>You will need:</li>
              <li>1) represent yourself</li>
              <li>2) say "Special for Mingming"</li>
            </ul>
            <div class="defalt-state-video">
              <img src="/wp-content/themes/envo-storefront/img/player.png" alt="">
            </div>
            <br>
            <div class="text-en">
              Please record a video to briefly introduce yourself, share the news of joining MingMing, and tell your fans that you would be happy to make a video for them, for example, congratulating them on their birthday, simply saying hi to their family and friends, or fulfilling any other request you would like to. Be creative and make a video in your own style.
            </div>

            <div class="text-chine">
            請錄製自我簡介的視頻，分享並加入明名MINGMING的新聞，以及告訴您的粉絲，您很樂意為他們製作視頻。例如：祝賀粉絲們的生日，向他們的家人和朋友打招呼或滿足他們的其他要求。發揮您的創意，以製作包含您個人風格的視頻。
            </div>
            <div class="button-wrapp">
              <button type="button" class="btn btn-block btn-login" onclick="moving(this,'111')">Re Record</button>
              <button type="button" onclick="sub()" class="btn btn-block btn-login">Submit</button>
            </div>

          </div>
          <!--           <div class="form-group">
            <label for="phone">Phone number (never shared)</label>
            <div class="input-group" style="width:100%">
              <input type="text" name="phone" value="" placeholder="+86 999 9999 999" id="phone" class="form-control phone-js" required>
            </div>
            </div> -->


          <!--  -->
        </form>
        <div id="su" style="display:none">Success</div>
      </div>
    </div>
  </div>
</div>

<div class="intip-111 buttons-block-in popupVideoRecrd popup" style="display:none" id="custom-id"> </div>
<script type='text/javascript' src='/wp-content/themes/envo-storefront/js/bootstrap-tabs.min.js'></script>

<script>
    function HidePopup5(target){
      jQuery(".darken").fadeOut(300);
      jQuery('#eta').hide();jQuery(target).removeClass('open');
   var ids=jQuery('#eta').find('.intip').attr('rel');
   jQuery('#na-'+ids).show();


    }
  function moving(elem, id){
  var id;

  var custom = jQuery('#eta').find('.intip').html();



  console.log(custom);
  jQuery('.buttons-block').find('#custom-id').each(function(){
  jQuery(this).html('');
  });


  jQuery('.videoRecord').each(function(){
  jQuery(this).show();
  });
  jQuery('.darken').each(function(){
    jQuery(this).show();
  });
  jQuery('.intip-'+id).parent().find('.videoRecord').hide();
  jQuery('.intip-'+id).show();




  jQuery('#eta').find('#label-pipe-file-input-custom-id').click();
  jQuery('#eta').find('#pipeStartRecording-custom-id').click();
jQuery('#eta').show();
  jQuery('#eta').find('.intip').show();
  jQuery('#eta').find('.intip').attr('rel',id);

 jQuery('.popupVideoRecrd').css('background','none');

  }
</script>
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

  function nextStep(nextElem){
    jQuery('.step').map(function(indx, element) {
      jQuery(element).addClass('hidden')
    });
    setTimeout(function(){
      jQuery(nextElem).removeClass('hidden');
    }, 500)
  }
  function sub()
  {

  if ( (jQuery('#password').val().length>0) && (jQuery('#email').val().length>0) &&  (jQuery('#username').val().length>0) )
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

      },
      error: function(data){
        //jQuery('#su').show()
        console.log(data);ShowPopup('#su2');
      }


    });

  }
  else
  {


  if  (jQuery('#password').val().length>0){
    jQuery('#password').removeClass('ero');
  }
  else{
    jQuery('#password').addClass('ero');
  }
  if  (jQuery('#username').val().length>0){
    jQuery('#username').removeClass('ero');
  }
  else{
    jQuery('#username').addClass('ero');
  }
 if  (jQuery('#email').val().length>0){
    jQuery('#email').removeClass('ero');
  }
  else{
    jQuery('#email').addClass('ero');
  }


ShowPopup('#su2');

  }


  }

</script>
<script type="text/javascript">
              var pipeParams = {size:{width:640,height:510}, qualityurl:"avq/480p.xml", accountHash:"fd166e9665fbf5161b1b022a9279b02f", eid:"nd8piv", mrt:300};
              PipeSDK.insert("custom-id",pipeParams,function(recorderObject){

                recorderObject.onVideoUploadSuccess = function(recorderId, filename,filetype,videoId,audioOnly,location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onVideoUploadSuccess("+args.join(', ')+")");
                var filename;

              var yy=jQuery('#eta').find('.intip').attr('rel');


                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:filename
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });




              }

              recorderObject.onSaveOk = function(recorderId, streamName, streamDuration, cameraName, micName, audioCodec, videoCodec, fileType, videoId, audioOnly, location){
                var args = Array.prototype.slice.call(arguments);
                console.log("onSaveOk("+args.join(', ')+")");
                var streamName;



              var yy=jQuery('#eta').find('.intip').attr('rel');



                var zak=yy;
                jQuery.ajax({
                    type: "POST",
                    url: "/linkos.php",
                    data: {
                    zak:zak,
                          link:streamName
                    },
                    success: function(data)
              {
              window.location.reload();
              }
              });











              }


              });
            </script>
<?php get_footer(); ?>