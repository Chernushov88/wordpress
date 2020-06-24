<?php
  /**
   * The template for displaying all pages
   *
   * This is the template that displays all pages by default.
   * Please note that this is the WordPress construct of pages
   * and that other 'pages' on your WordPress site may use a
   * different template.
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package WordPress
   * @subpackage Twenty_Seventeen
   * @since 1.0
   * @version 1.0
   */

  get_header();
  $strServ = $_SERVER['REQUEST_URI'];
  $novosti = '/novosti/';
  if( $strServ == $novosti ){
  ?>
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/news.css">
<div class="dir container">
  <p>
    <a href="index.html">Главная</a> &gt; <a href="news.html">Новости</a>
  </p>
</div>
<section class="container flex">

  <div class="calendar">
    <?php get_calendar( $initial ); ?>
  </div>
  <div class="main-slider">
    <? echo do_shortcode('[jt-slider]'); ?>
  </div>
</section>
<?php } ?>
<div class="wrap-section container">
  <div class="mob-visible">
    <?php
      if( $strServ != $novosti )
        get_template_part( 'template-parts/page/content', 'services' );
      ?>
  </div>
  <section class="flex-column left-info" >
    <?php
      if( $strServ != $novosti )
        get_template_part( 'template-parts/page/content', 'services' );
      ?>
      <?php dynamic_sidebar( 'sidebar-info' ); ?>

  </section>
  <section class="flex-column right-info">
    <div class="vacancy">

      <?php
        while ( have_posts() ) :
        	the_post();

        	get_template_part( 'template-parts/page/content', 'page' );

        	// If comments are open or we have at least one comment, load up the comment template.
        	if ( comments_open() || get_comments_number() ) :
        		comments_template();
        	endif;

        endwhile; // End of the loop.
        ?>
      <?php if( $strServ == $novosti ) : ?>


        <div class="news">
          <div class="title-block">
            <h2>Новости</h2>
            <div class="partition">
              <p>По разделам</p>
              <i class="fa fa-file-text" aria-hidden="true">
                <ul class="list-parts-services" style="display: none;">
                  <li><a class="current" href="#">Показать все</a></li>
                  <li><a href="#">Продвижение в интернете</a></li>
                  <li><a href="#">Наружная реклама</a></li>
                  <li><a href="#">Фото и видео съемка</a></li>
                  <li><a href="#">Обучение и тренинги</a></li>
                  <li><a href="#">Колл центр</a></li>
                  <li><a href="#">Бизнес аудит</a></li>
                  <li><a href="#">Юрист</a></li>
                  <li><a href="#">Бухгалтерия</a></li>
                  <li><a href="#">Подбор персонала</a></li>
                  <li><a href="#">Коммерческая недвижимость</a></li>
                  <li><a href="#">Обслуживание офиса</a></li>
                </ul>
                <div class="partition-choise">
                  <a class="partition-link" href="#">Показать все</a>
                  <span class="partition-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </div>
              </i>
            </div>
            <div class="date-range">
              <div class="date-start">
                <p>По дате с</p>
                <i class="fa fa-calendar icon-cal-start" aria-hidden="true">
                  <div class="calendar-news-start">
                    <div class="calendar">
                      <div class="select-month">
                        <button>&lt;</button>
                        <div class="month">Июль 2019</div>
                        <button>&gt;</button>
                      </div>
                      <div class="date">
                        <div class="day">Пн</div>
                        <div class="day">Вт</div>
                        <div class="day">Ср</div>
                        <div class="day">Чт</div>
                        <div class="day">Пт</div>
                        <div class="day">Сб</div>
                        <div class="day">Вс</div>
                        <a href="">
                          <div class="number">1</div>
                        </a>
                        <a href="">
                          <div class="number">2</div>
                        </a>
                        <a href="">
                          <div class="number">3</div>
                        </a>
                        <a href="">
                          <div class="number">4</div>
                        </a>
                        <a href="">
                          <div class="number">5</div>
                        </a>
                        <a href="">
                          <div class="number">6</div>
                        </a>
                        <a href="">
                          <div class="number">7</div>
                        </a>
                        <a href="">
                          <div class="number">8</div>
                        </a>
                        <a href="">
                          <div class="number">9</div>
                        </a>
                        <a href="">
                          <div class="number">10</div>
                        </a>
                        <a href="">
                          <div class="number current-day">11</div>
                        </a>
                        <a href="">
                          <div class="number">12</div>
                        </a>
                        <a href="">
                          <div class="number">13</div>
                        </a>
                        <a href="">
                          <div class="number">14</div>
                        </a>
                        <a href="">
                          <div class="number">15</div>
                        </a>
                        <a href="">
                          <div class="number">16</div>
                        </a>
                        <a href="">
                          <div class="number">17</div>
                        </a>
                        <a href="">
                          <div class="number">18</div>
                        </a>
                        <a href="">
                          <div class="number">19</div>
                        </a>
                        <a href="">
                          <div class="number">20</div>
                        </a>
                        <a href="">
                          <div class="number">21</div>
                        </a>
                        <a href="">
                          <div class="number">22</div>
                        </a>
                        <a href="">
                          <div class="number">23</div>
                        </a>
                        <a href="">
                          <div class="number">24</div>
                        </a>
                        <a href="">
                          <div class="number">25</div>
                        </a>
                        <a href="">
                          <div class="number">26</div>
                        </a>
                        <a href="">
                          <div class="number">27</div>
                        </a>
                        <a href="">
                          <div class="number">28</div>
                        </a>
                        <a href="">
                          <div class="number">29</div>
                        </a>
                        <a href="">
                          <div class="number">30</div>
                        </a>
                        <a href="">
                          <div class="number">31</div>
                        </a>
                        <div class="number"><a href=""></a></div>
                        <div class="number"><a href=""></a></div>
                        <div class="number"><a href=""></a></div>
                        <div class="number"><a href=""></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="partition-choise">
                    <a class="partition-link" href="#">10.07.2019</a>
                    <span class="partition-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                  </div>
                </i>
              </div>
              <div class="date-end">
                <p>по</p>
                <i class="fa fa-calendar icon-cal-end" aria-hidden="true">
                  <div class="calendar-news-end">
                    <div class="calendar">
                      <div class="select-month">
                        <button>&lt;</button>
                        <div class="month">Июль 2019</div>
                        <button>&gt;</button>
                      </div>
                      <div class="date">
                        <div class="day">Пн</div>
                        <div class="day">Вт</div>
                        <div class="day">Ср</div>
                        <div class="day">Чт</div>
                        <div class="day">Пт</div>
                        <div class="day">Сб</div>
                        <div class="day">Вс</div>
                        <a href="">
                          <div class="number">1</div>
                        </a>
                        <a href="">
                          <div class="number">2</div>
                        </a>
                        <a href="">
                          <div class="number">3</div>
                        </a>
                        <a href="">
                          <div class="number">4</div>
                        </a>
                        <a href="">
                          <div class="number">5</div>
                        </a>
                        <a href="">
                          <div class="number">6</div>
                        </a>
                        <a href="">
                          <div class="number">7</div>
                        </a>
                        <a href="">
                          <div class="number">8</div>
                        </a>
                        <a href="">
                          <div class="number">9</div>
                        </a>
                        <a href="">
                          <div class="number">10</div>
                        </a>
                        <a href="">
                          <div class="number current-day">11</div>
                        </a>
                        <a href="">
                          <div class="number">12</div>
                        </a>
                        <a href="">
                          <div class="number">13</div>
                        </a>
                        <a href="">
                          <div class="number">14</div>
                        </a>
                        <a href="">
                          <div class="number">15</div>
                        </a>
                        <a href="">
                          <div class="number">16</div>
                        </a>
                        <a href="">
                          <div class="number">17</div>
                        </a>
                        <a href="">
                          <div class="number">18</div>
                        </a>
                        <a href="">
                          <div class="number">19</div>
                        </a>
                        <a href="">
                          <div class="number">20</div>
                        </a>
                        <a href="">
                          <div class="number">21</div>
                        </a>
                        <a href="">
                          <div class="number">22</div>
                        </a>
                        <a href="">
                          <div class="number">23</div>
                        </a>
                        <a href="">
                          <div class="number">24</div>
                        </a>
                        <a href="">
                          <div class="number">25</div>
                        </a>
                        <a href="">
                          <div class="number">26</div>
                        </a>
                        <a href="">
                          <div class="number">27</div>
                        </a>
                        <a href="">
                          <div class="number">28</div>
                        </a>
                        <a href="">
                          <div class="number">29</div>
                        </a>
                        <a href="">
                          <div class="number">30</div>
                        </a>
                        <a href="">
                          <div class="number">31</div>
                        </a>
                        <div class="number"><a href=""></a></div>
                        <div class="number"><a href=""></a></div>
                        <div class="number"><a href=""></a></div>
                        <div class="number"><a href=""></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="partition-choise">
                    <a class="partition-link" href="#">11.07.2019</a>
                    <span class="partition-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                  </div>
                </i>
              </div>
            </div>
          </div>
          <div class="articles">
            <?php
                  $args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 12,
                      'orderby' => 'rand'
                  );
                  $loop = new WP_Query($args);
                  while ($loop->have_posts()) : $loop->the_post();?>
              <div class="article-news">

                <a href="<?=get_permalink();?>">
                  <div class="article-date">
                    <?= get_the_date(); ?>
                  </div>
                <?=the_post_thumbnail();?>
                <div class="article-title">
                  <p><?=the_title(); ?></p>
                </div>
                </a>
              </div>
                <?php endwhile; ?>
          </div>
        </div>
        <div class="mailing">
          <div class="mailing-container">
            <h2>Подпишитесь на нашу новостную рассылку</h2>
            <div class="mailing-form">
              <?/*= do_shortcode('[contact-form-7 id="74" title="Форма на главной"]'); */?>
              <form action="" id="myform">
                <input type="checkbox" checked> Согласие на обработку своих персональных данных <br>
                <input name="email" type="email" placeholder="Ваш e-mail">
                <button name="submit" type="button" value="" onclick="send('/forma.php','myform','result');">Подписаться</button>
                <div class="result" id="result"></div>
              </form>
            </div>
          </div>
        </div>

      <?php else: ?>

        <div class="articles">
            <?php
                  $args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 12,
                      'orderby' => 'rand'
                  );
                  $loop = new WP_Query($args);
                  while ($loop->have_posts()) : $loop->the_post();?>
              <div class="article-news">

                <a href="<?=get_permalink();?>">
                  <div class="article-date">
                    <?= get_the_date(); ?>
                  </div>
                <?=the_post_thumbnail();?>
                <div class="article-title">
                  <p><?=the_title(); ?></p>
                </div>
                </a>
              </div>
                <?php endwhile; ?>
          </div>
      <div class="resume-block">
        <div class="resume-content">
          <div class="text-resume">
            <h2>Остались вопросы?</h2>
            <p>Заполните форму и наши менеджеры свяжуться с вами</p>
          </div>
          <div class="about-resume-form">
            <? /* do_shortcode('[contact-form-7 id="85" title="Остались вопросы?"]'); */?>

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

            <!-- <form action="" id="myform">
              <input type="checkbox" checked> Согласие на обработку своих персональных данных <br>
              <input name="email" type="email" placeholder="Ваш e-mail">
              <button name="submit" type="button" value="" onclick="send('/forma.php','myform2','result');">Подписаться</button>
              <div class="result" id="result"></div>
            </form> -->


          </div>
        </div>
      </div>
      <? endif; ?>
    </div>
  </section>
</div>
<?php
get_footer();