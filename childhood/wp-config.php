<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&KF&koz >a+|z#;%=G+9dDCE=aDQ1A%Mk{E&g6GLIgaJGd$@0$&G2IZuiTvK{a[S' );
define( 'SECURE_AUTH_KEY',  'mtfadv(}wN94PRS /zT;41LD6O}k,9@}ORsq j.}+V@Z9Lxc,7[<&raNp1E lV4M' );
define( 'LOGGED_IN_KEY',    '!vk?r/E#dYsK6`%^g37E3OO)|Mh3qLXxB,NSr1#^_w%jx/O!4lD|GxsEGOp$ys5C' );
define( 'NONCE_KEY',        'V2c~t8CYm|V|Y[q*`2YrwZ8ShI3pp#RC0H+PW d`X|o=pNPY4:l{E@#/^@B-|iLn' );
define( 'AUTH_SALT',        'a#XA)2gk)_s$heqGMvIk-o[zq_U>rycxpDiXc?LYJOR&=VLyy<H`)7O:_%AJLUtF' );
define( 'SECURE_AUTH_SALT', 'lI(FY$omSe6ccav,Y3f$+]|8WOST,-)Evo:n%3XSj^=2cBsU3( dRv>y;/W)78%*' );
define( 'LOGGED_IN_SALT',   'Y=A[195~bJ2aMH0^PqmrsN$.v[1&Jw)]MpF#vBZrOmOdz8aHCLlE>!4$mHk:3TJ3' );
define( 'NONCE_SALT',       '9QJ`OHfo50LEx{LB)F7uw#t*]j^CGAH0}#o,@;}S~{XS.`%l&Q:24LBDfIIf(E%9' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
