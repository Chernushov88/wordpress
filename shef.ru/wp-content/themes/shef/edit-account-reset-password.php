<?php
/*
Template Name: Редактировать пароль
*/ 

get_header(); ?>
<main class="lk">
<div class="wrapper relative">
        <div class="my_soz">
            <?php dynamic_sidebar( 'sidebar-social' ); ?>
        </div>
        <div class="breadcrumbs_set">
			<? woocommerce_breadcrumb();?>
		</div>
        <h1 class="ttl50"><? the_title(); ?></h1>


<?
wc_get_template( 'myaccount/form-reset-password.php' );
?>

</div>
<br><br>
</main>	
<?php
get_footer();
