<?php

  /*
   * Template name: Page popup
   */

get_header();

?>
<div class="row col-double-gutter exa-top-padding no-bottom-padding single-h-padding limit-width row-parent">
  <br><br><br><br><br>
  <button class="btn" onclick="showPopup('#registration')">Регистрация</button>
  <button class="btn" onclick="showPopup('#login')">авторизация</button>
  <button class="btn" onclick="showPopup('#addCart')">Товар добавлен в корзину:</button>
  <button class="btn" onclick="showPopup('#thankSubscription')">Спасибо за подписку</button>
  <button class="btn" onclick="showPopup('#unsubscribedMailing')">Вы отписались от рассылки</button>
  <button class="btn" onclick="showPopup('#rateQuality')">Оцените качество</button>
  <button class="btn" onclick="showPopup('#thanksOrder')">Спасибо за заказ:</button>
  <br><br><br><br><br>
</div>


<div class="darken">
  <div class="popup scroll" id="registration">
    <!-- <a href="#" class="close" onclick="hidePopup('#registration')"></a> -->
    <div class="popup-title">
      <div class="popup-title-top">
        <div class="h3">Регистрация</div>
        <a href="#" class="login">Войти</a>
      </div>
      <div class="social">
        <div class="h4">Регистрация через аккаунты</div>
        <ul>
          <li class="vk"><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
          <li class="faceboock"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="odnoklassniki"><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
          <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="popup-in">
      <form action="">
        <input type="text" placeholder="Имя" required>
        <input type="text" placeholder="E-mail">
        <input type="password" placeholder="Введите пароль">
        <input type="password" placeholder="Подтвердите пароль">
        <ul class="checkbox-list">
          <li>
            <input type="checkbox" id="check-1" class="woof_checkbox_term ">
            <label class="woof_checkbox_label" for="check-1">Да, я согласен(а) получить информацию о новых постпулениях,
              акциях и распродажах</label>
          </li>
          <li>
            <input type="checkbox" id="check-2" class="woof_checkbox_term ">
            <label class="woof_checkbox_label" for="check-2">Запомнить меня</label>
          </li>
        </ul>
        <button type="submit" class="button">Зарегистрироваться</button>
        <div class="you-agree">Нажимая на кнопку “Зарегистрироваться”,
          Вы соглашаетесь на обработку ваших персональных данных в соответствии
          с политикой конфиденциальности.
        </div>
      </form>
    </div>
  </div>

  <div class="popup scroll" id="login">
    <div class="popup-title">
      <div class="popup-title-top">
        <div class="h3">Вход</div>
        <a href="#" class="login">Зарегистрироваться</a>
      </div>
      <div class="social">
        <div class="h4">Регистрация через аккаунты</div>
        <ul>
          <li class="vk"><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
          <li class="faceboock"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="odnoklassniki"><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
          <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="popup-in">
      <form action="">
        <input type="text" placeholder="E-mail">
        <input type="password" placeholder="Пароль">
        <ul class="code-img">
          <li class="img-block">
            <div class="img-block-in"></div>
            <a href="#">Забыли пароль?</a>
          </li>
          <li>
            <input type="text" placeholder="Код с картинки" class="input">
          </li>
        </ul>
        <ul class="checkbox-list">
          <li>
            <input type="checkbox" id="check-3" class="woof_checkbox_term ">
            <label class="woof_checkbox_label" for="check-3">Запомнить меня</label>
          </li>
        </ul>
        <button type="submit" class="button">Зарегистрироваться</button>
        <a href="#" class="forgot-password button-border">Забыли пароль?</a>
      </form>
    </div>
  </div>

  <div class="popup scroll radius15" id="addCart">
    <div class="popup-title">
      <a href="#" class="close" onclick="hidePopup('#addCart')"><img
          src="/wp-content/themes/uncode/library/img/close.png" alt=""></a>
      <div class="h3">Товар добавлен в корзину</div>
      <p>В вашей корзине 4 товара на сумму 6280 р. </p>
      <a href="#" class="more">Посмотреть</a>
    </div>
    <div class="popup-in">
      <div class="flex">
        <div class="img">
          <img title="" src="/wp-content/uploads/2020/06/1547395430_30112_memo_o_1-removebg-preview-2.jpg"
               class="variable-img" alt="">
        </div>

        <div class="text">
          <b>Memo Winter Palace</b>
          <p>Количество: 1 шт.</p>
          <div class="price">1570 руб.</div>
        </div>
      </div>
      <div class="button-wrapp">
        <button class="button">Оформить заказ</button>
        <a href="#" class="continue-shoping">Продолжить покупки</a>
      </div>
    </div>
  </div>

  <div class="popup scroll smilePopup radius15" id="thankSubscription">
    <div class="popup-title">
      <a href="#" class="close" onclick="hidePopup('#thankSubscription')"><img
          src="/wp-content/themes/uncode/library/img/close.png" alt=""></a>
    </div>
    <div class="h3">Спасибо за подписку</div>
    <div class="smile-thanck">
      <img src="/wp-content/themes/uncode/library/img/smile-thanck.png" alt="">
    </div>
  </div>

  <div class="popup scroll smilePopup radius15" id="unsubscribedMailing">
    <div class="popup-title">
      <a href="#" class="close" onclick="hidePopup('#unsubscribedMailing')"><img
          src="/wp-content/themes/uncode/library/img/close.png" alt=""></a>
    </div>
    <div class="h3">Вы отписались от рассылки</div>
    <div class="smile-thanck">
      <img src="/wp-content/themes/uncode/library/img/smile-unsubscribed.png" alt="">
    </div>
  </div>

  <div class="popup scroll radius15" id="rateQuality">
    <div class="popup-title">
      <a href="#" class="close" onclick="hidePopup('#rateQuality')"><img
          src="/wp-content/themes/uncode/library/img/close.png" alt=""></a>
      <div class="h3">Оцените качество</div>
      <p>Для лучешния качества сервиса и работы интернет-магазина, оцените обслуживание</p>
      <b>Оцените качество обслужвания и доставки</b>
    </div>
    <div class="star-rating">
    </div>

    <div class="popup-in">
      <div class="flex">
        <button class="button">Отправить</button>
        <button class="button-border">Отмена</button>
      </div>
    </div>
  </div>

  <div class="popup scroll smilePopup radius15" id="thanksOrder">
    <div class="popup-title">
      <a href="#" class="close" onclick="hidePopup('#thanksOrder')"><img
          src="/wp-content/themes/uncode/library/img/close.png" alt=""></a>
      <div class="h3"><span>Спасибо за заказ</span></div>
    </div>

    <div class="smile-thanck">
      <img src="/wp-content/themes/uncode/library/img/thanksOrder.png" alt="">
    </div>
    <p>Спасибо за заказ. Мы свяжемся <br>с вами в ближайшее время.</p>
  </div>

</div>
<?php get_footer(); ?>
