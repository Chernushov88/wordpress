<?php
/*
Template Name: Редактировать данные
*/ 

get_header(); ?>
<main class="lk">
<div class="wrapper relative">
        <div class="my_soz">
            <?php dynamic_sidebar( 'sidebar-social' ); ?>
        </div>
        <div class="breadcrumbs_set">
        	<!-- <a href="/">Главная</a> 
        	<span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i>
    		<a href="/lichnyj-kabinet/">Личный кабинет</a> 
        	<span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i>
        	</span> Редактировать данные</div> -->
			<? woocommerce_breadcrumb();?>
		</div>
        <h1 class="ttl50"><? the_title(); ?></h1>


<?
wc_get_template( 'myaccount/form-edit-account.php' );
?>

</div>
<br><br>
</main>	
<?php
get_footer();
