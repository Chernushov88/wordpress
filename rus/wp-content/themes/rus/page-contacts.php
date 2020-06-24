<?php
/*
 * Template name: Шаблон contacts
 */

get_header(); ?>
<!-- <link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/contacts.css" > -->
<style>
	.contacts {width: calc(34% - 50px);}
	.contacts-map {width: 63%;}

</style>
<section class="container">
		<div class="contacts-block">
			<div class="title-block"><h2>Контактная информация</h2></div>
			<div class=" flex">

				<div class="contacts center-flex">

					<?php dynamic_sidebar( 'sidebar-contactInformation' ); ?>

				</div>
				<div class="contacts-map">
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A874996e9c904138e34453a80699fbf9dead4ef12d3f4849d9d12eb6c8f4fdbfb&amp;width=708&amp;height=316&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>

			</div>
		</div>
	</section>
<br>
<br>
<br>
<?php
get_footer();


