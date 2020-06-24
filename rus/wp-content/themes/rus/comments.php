<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<style>
.comment-content{padding-top: 20px;}
	.comment-meta{display: none;}
	.comment-list{list-style-type: none;}
	.reply {
    background-color: #ffcc00;
    border-radius: 5px;
    width: 135px;
    height: 36px;
    float: left;
    margin-top: 13px;
}
.icon.icon-mail-reply{
	display: none;
}
.reply .comment-reply-link{
    display: inline-block;
    color: #333333;
    text-align: center;
    padding: 10px 0px;
    font-family: Gilory, sans-serif;
    font-size: 14px;
    font-weight: 700;
    width: 135px;
    height: 36px;
}
.fa-thumbs-o-up:before {
    content: "\f164";
    color: #000;
}
.fa-thumbs-o-down:before {
    content: "\f165";
    color: #000;
}
.ecr-like-dislike-wrapper {
    display: inline-block;
    position: relative;
    /*margin: 8px 0px 0px 150px !important;*/
}
.ecr-like-dislike-wrapper.ecr-template-1.ecr-together .ecr-count-wrap,
.ecr-like-dislike-wrapper.ecr-template-1.ecr-together .ecr-like-dislike-trigger span {
    border: 0px solid #5fa0ce;
    border-radius: 0px;
    -webkit-box-shadow: 0px 0px 0px 0 #b5d3e8;
    box-shadow: 0px 0px 0px 0 #b5d3e8;
}
.form-submit #submit{
	border: 0;
    background-color: #ffcc00;
    border-radius: 5px;
    width: 200px;
    height: 36px;
    font-family: Gilory, sans-serif;
    font-size: 14px;
    font-weight: 700;
}
#respond{
    display: none;
	padding: 30px 0;
}
.comment-form-author label,
.comment-form-email label,
.comment-form-url label,
.comment-form-cookies-consent label,
.comment-form-comment label{
	display: block;
	margin: 10px 0 2px;
}
#commentform p{
	display: block;
	overflow: hidden;
	padding-left: 1px;
}
.comment-form-cookies-consent{
	padding: 10px 0;
}
#commentform p.comment-form-cookies-consent label{
	display: inline-block;
}
.user_comment p{
	padding-bottom: 5px;
}
#commentform p input:not(#wp-comment-cookies-consent){
    width: 335px;
    height: 40px;
    float: left;
    border-radius: 5px;
    border-width: 0;
    font-family: Gilroy, sans-serif;
    font-size: 14px;
    font-weight: 500;
    padding-left: 20px;
    /*margin-top: 20px;*/
    box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.5);
}
.comment-form-comment textarea{
	width: 335px;
    float: left;
    border-radius: 5px;
    border-width: 0;
    font-family: Gilroy, sans-serif;
    font-size: 14px;
    font-weight: 500;
    padding-left: 20px;
    box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.5);
}
.ecr-like-dislike-wrapper.ecr-template-1 .ecr-like-wrap .ecr-like-dislike-trigger.ecr-already-liked span, .ecr-like-dislike-wrapper.ecr-template-1 .ecr-dislike-wrap .ecr-like-dislike-trigger.ecr-already-disliked span{
    background: transparent !important;
}
.mailing{
    width: 100%;
    background: url(/wp-content/themes/rus/verstka/large-bg-mailing.jpg) no-repeat;
}
.cld-like-dislike-wrap {
    display: inline-block;
    margin: 16px 0 0px 25px;
    font-size: 24px;
    margin-right: 10px;
    font-family: Gilroy, sans-serif;
    font-weight: 700;
    cursor: pointer;
}
.cld-like-dislike-wrap .cld-common-wrap.cld-dislike-wrap{
    float: right;
    margin-top: 5px;
}
</style>

<?php if( comments_open($post->ID) ) : ?>

    <div id="comments">
<div class="under-post">
    <div class="post-button-bid">
        <a class="spanButton" href="javascript:void(0);" onclick="$('#respond').slideToggle();">Оставить комментарий</a>
    </div>
    <a href="#" style="display: flex; align-items: center; margin-left: 40px;">
        <div class="b-icon_user">
            <i class="fa fa-share-alt icons-contact" aria-hidden="true"></i>
        </div>
        <p>Поделиться</p>
    </a>
</div>
<div class="title-block" style="margin-top: 40px;">
                <h2>Комментарии пользователей</h2>
                <span class="date-post">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                    <span style="color:#fff;"><?= get_comments_number(); ?></span>
                </span>
            </div>

    <?php if ( post_password_required() ) { return; } ?>

    <?php $defaults = array(
        'fields'               => array(
                                    'author' => '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="ваше имя" />',
                                    'email'  => '<input id="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" placeholder="e-mail" aria-describedby="email-notes" />',
                                ),
        'comment_field'        => '<textarea id="comment" name="comment" cols="45" rows="4"  aria-required="true" required="required" placeholder="комментарий"></textarea>',
        'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
        'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
        'comment_notes_before' => '', // текст перед формой комментирования
        'comment_notes_after'  => '',
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_form'           => 'comment-form',
        'class_submit'         => 'submit',
        'name_submit'          => 'submit',
        'title_reply'          => __( 'Leave a Reply' ),
        'title_reply_to'       => __( 'Leave a Reply to %s' ),
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h3>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => __( 'Post Comment' ),
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="Комментировать" />',
        'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
        'format'               => 'xhtml',
    );

    comment_form( $defaults ); ?>

    <?php if ( have_comments() ) : ?>

    <p class="comments-title">
    <?php if( function_exists('plural_form') ) {
        plural_form(
            get_comments_number(),
            array('комментарий','комментария','комментариев')
        );
    } ?>
    </p>

    <ol class="comment-list">
    <?php if( function_exists('mytheme_comment') ) {
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'callback' => 'mytheme_comment'
        ) );
    } ?>
    </ol>

    <?php else: ?>

        <p class="comments-title">Пока нет комментариев. Будь первым!</p>

    <?php endif; ?>

    <?php paginate_comments_links(); ?>

    </div>

<?php elseif ( !comments_open() ) : ?>

        <p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>

<?php endif; ?>


<br>
<br>
<br>
<div class="mailing">
	<div class="mailing-container">
		<h3>Подпишитесь на нашу новостную рассылку</h3>

	<div class="mailing-form">
		<form action="" id="myform">
			<input type="checkbox" checked> Согласие на обработку своих персональных данных <br>
			<input name="email" type="email" placeholder="Ваш e-mail">
			<button name="submit" type="button" value="" onclick="send('/forma.php','myform','result');">Подписаться</button>
			<div class="result" id="result"></div>
		</form>
		<?/* do_shortcode('[contact-form-7 id="74" title="Форма на главной"]'); */?>
	</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>