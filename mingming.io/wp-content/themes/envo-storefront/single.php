<?php get_header(); ?>
<style>
html {
    overflow: hidden;
    margin: 0px !important;
}
.container {
    width: 100%;
}
.main-container .page-area{
    padding: 0;
}
#site-content {
    min-height: 100vh;
}
.row{
    margin: 0;padding: 0;
}
.col-md-9 {
    width: calc(100% - 0px);
    margin: 0;
    padding: 0;
}
.comment-form{
    width: 100%;
}
.page-wrap,
 .main-container{
    padding: 0;
    margin: 0;
 }
 #submit,
#timer_inp,
#SSR{
    position: absolute;
    left: 50%;
    -webkit-transform: translate(-50%, -0%);
    -moz-transform: translate(-50%, -0%);
    -ms-transform: translate(-50%, -0%);
    transform: translate(-50%, -0%);
    background-color: #3bc8e7;
    border-radius: 20px;
    border-color:  #3bc8e7;
    z-index: 9;
}
#timer_inp{
    top: 10px;
    background: transparent;
}
 #submit,
#SSR{
    bottom: 40px;
}
 #submit{
    left: 25%;
    padding: 0 5px;
    color: #fff;
 }
.comment-form{
    position: relative;
}
.modal-darken-menu,
#scroll,
nav.navigation.post-navigation,
.single-head,
.single-content,
#sidebar,
.ms_header ,
.ms_sidemenu_wrapper,
#content-footer-section,
#reply-title,
.logged-in-as,
.logged-in-as + a,
.comment-form-comment,
.commentlist.list-unstyled,
h4#comments {
        display: none !important;
    }
/*    ,
*/
#comments {
    overflow: visible;
    width: 100%;
    max-height: 100%;
    padding: 0;
    background: transparent;
    flex: 2;
}
#your-video-id{
    width: 100%;
    height: 100vh;
    height: auto;
    min-height: 70vh;
}
@media (max-width: 540px){
    .iframe-text{top: 70px;}
    p{margin: 0;}
    #timer_inp{top: 19px;}
    #submit,#SSR{-webkit-transform: translate(-0%, -0%);-moz-transform: translate(-0%, -0%);-ms-transform: translate(-0%, -0%);transform: translate(-0%, -0%);}
    #your-video-id{
        height: 100vh;
        min-height: 70vh;
    }
    #submit,#SSR{}
    #submit{left: 10px;}
     #SSR{left: auto;right: 10px;}
}

</style>
<!-- start content container -->
<?php get_template_part( 'content', 'single' ); ?>
<!-- end content container -->

<?php get_footer(); ?>
