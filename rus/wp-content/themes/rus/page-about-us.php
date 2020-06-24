<?php
/*
 * Template name: Шаблон О нас
 */

get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/about-us.css">
<div class="dir container">
	<p>
		<a href="/">Главная</a> &gt; <a >О нас</a>
	</p>
</div>
<section class="container container-about">
		<div class="about-main-slider">
			<? echo do_shortcode('[jt-slider]'); ?>
		</div>

		<div class="about-us-block">
			<div class="title-block">
				<h2>О нас</h2>
			</div>
		</div>
<?php
while ( have_posts() ) :the_post();

	the_content();

endwhile;
?>
<!-- 		<div class="about-text">
			<div class="text">
				<h2>otdel pro группа независимых digital-агентств, веб-студий и веб-интеграторов.</h2>
				<p>В рамках международной выставка Mobile World Congress (MWC) 2019 выбрало лучший смартфон 2018 года. Также Mate 20 Pro получил сканер отпечатка пальца, встроенный в экран. Об этом сказано на сайте мероприятия. Эксперты назвали лучшим продуктом в категории «смартфоны» Huawei Mate 20 Pro, который обошел iPhone Xs Max, Google Pixel 3, OnePlus 6T и Samsung Galaxy Note 9. В 2018-м году жюри назвало лучшим смартфоном 2017 года iPhone X от Apple. 19-я международная выставка проходит с 25 по 28 февраля в Барселоне. 25 февраля Huawei представила смартфон Mate X с гибким экраном. В сложенном виде смартфон обладает передним и задним экранами с диагональю 6,6 и 6,4 дюйма соответственно. Будучи развернутым, пользователю становится доступен практически квадратный восьмидюймовый экран.
				Ранее в феврале Business Insider определило Huawei Mate 20 Pro на 11-ю строчку рейтинга лучших в мире смартфонов. Эксперты посчитали его «красивым девайсом, имеющим преимущества в нескольких областях».
				Смартфон Mate 20 Pro был представлен в октябре 2018 года. Главной особенностью телефона стала тройная камера, основной модуль которой получил разрешение 40 мегапикселей. Также Mate 20 Pro получил сканер отпечатка пальца, встроенный в экран. Смартфон Mate 20 Pro.</p>
			</div>
			<div class="photo">
				<img src="/wp-content/themes/rus/verstka/img/about-us1.jpg">
			</div>
		</div>
		<div class="about-text">
			<div class="text">
				<h2>otdel pro группа независимых digital-агентств, веб-студий и веб-интеграторов.</h2>
				<p>В рамках международной выставка Mobile World Congress (MWC) 2019 выбрало лучший смартфон 2018 года. Также Mate 20 Pro получил сканер отпечатка пальца, встроенный в экран. Об этом сказано на сайте мероприятия. Эксперты назвали лучшим продуктом в категории «смартфоны» Huawei Mate 20 Pro, который обошел iPhone Xs Max, Google Pixel 3, OnePlus 6T и Samsung Galaxy Note 9. В 2018-м году жюри назвало лучшим смартфоном 2017 года iPhone X от Apple. 19-я международная выставка проходит с 25 по 28 февраля в Барселоне. 25 февраля Huawei представила смартфон Mate X с гибким экраном. В сложенном виде смартфон обладает передним и задним экранами с диагональю 6,6 и 6,4 дюйма соответственно. Будучи развернутым, пользователю становится доступен практически квадратный восьмидюймовый экран.
				Ранее в феврале Business Insider определило Huawei Mate 20 Pro на 11-ю строчку рейтинга лучших в мире смартфонов. Эксперты посчитали его «красивым девайсом, имеющим преимущества в нескольких областях».
				Смартфон Mate 20 Pro был представлен в октябре 2018 года. Главной особенностью телефона стала тройная камера, основной модуль которой получил разрешение 40 мегапикселей. Также Mate 20 Pro получил сканер отпечатка пальца, встроенный в экран. Смартфон Mate 20 Pro.</p>
			</div>
			<div class="photo">
				<img id="bg" src="/wp-content/themes/rus/verstka/img/about-us2.jpg">
			</div>
			<div class="about-header-socialmedia">
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
				</div>
			</div>
		</div> -->

		<div class="resume-block">
			<div class="resume-content">

				<div class="text-resume">
					<h2>Остались вопросы?</h2>
					<p>Заполните форму и наши менеджеры свяжуться с вами</p>
				</div>
				<div class="about-resume-form">
					<form method="POST" action="" id="myform2">
		              <div>
		                <p>
		                  <input type="text" placeholder="Имя" name="name">
		                  <input type="email" placeholder="E-mail" name="email">
		                  <input type="phone" placeholder="Телефон" name="phone">
		                </p>
		              </div>
		              <div>
		                <p>
		                  <textarea id="w3mission" rows="4" cols="50" placeholder="Текст сообщения" name="descr"></textarea>
		                </p>
		              </div>
		              <div class="resume-submit-form">
		                <p>
		                  <input type="checkbox" checked="">
		                </p>
		                <p id="accept-form">Согласие на обработку данных</p>
		                <button name="submit" type="button" value="" onclick="send('/forma2.php','myform2','result2');">Отправить</button>

		              </div>
		              <div class="result" id="result2"></div>
		            </form>
				</div>

			</div>
		</div>
	</section>
<?php
get_footer();
