<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pozdr2_wp1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PE-h{r <C|FawQ0R/0rFCP+|RVvD}5?TcIEh5,{-bxU]%ySz*@rrAd^`__H;j1q$' );
define( 'SECURE_AUTH_KEY',  'OW.|u7zZBLdl-Xm==m6DQ_kX.(xS8SQu,2Kvz(EX}<BpeDAF;Jgk}0,+tx-?BZs8' );
define( 'LOGGED_IN_KEY',    'OKE,~;d;tqU8oXFd}d_v8|I:4g{qD-G5R@}:^~a7l[kv3(B!0eDB#egV*i1Nqp3)' );
define( 'NONCE_KEY',        'Q<S6}<1/{Gb(]eYU3S~{:195%gVGR*rBe5y_q7zUvkMnasKc.WePAwKSK9W;C1zV' );
define( 'AUTH_SALT',        'M0I;$jX1n|t$Pm*dr1c*Z-?6m;6RMi8> RL%h&1(6Wyb)/EfE4^[{|H/M8R.pV#d' );
define( 'SECURE_AUTH_SALT', 'a3!6x0u(;X9!=yoxMFGiz20N5RjK`IXZnnP.u;1v<ywVySqdLyQ7;T0.X|e,w=Q#' );
define( 'LOGGED_IN_SALT',   'PEx4rdkUv&JV|WsT;NLIlllPkBW#c[g}&mDZ)d$_Oi{Q_mlNab9Da@qadNTTa$uf' );
define( 'NONCE_SALT',       'g.rP|V:JG?ZELS-H<r.waoj@w|K)RV>?A/m.pWyP#De,ffbbN%/GbTGQdAAGdi7.' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
