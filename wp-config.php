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
define('DB_NAME', 'wp-theme');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=/#q_RF_(>fTXHjD%}^JB!r~,`.0J/] c;@2&/dF7Z[bZIbd3<BriC61<{YmCUVT');
define('SECURE_AUTH_KEY',  'oj}&8N&R#`6=u%NMaYbTQ6e)x@rp$Eqfa (.>lFNir9<zek/!Yd$wza#Ux1~@FM?');
define('LOGGED_IN_KEY',    'o;1gIni1=R#4:-D8;RS7 Z]:&xJ#}D#:p$aX%i%F &jz[J2}i6CC2owR>u^K@HY@');
define('NONCE_KEY',        '!aIR|n=-i^zmb=ox1m&PsU1-j09Hnqa4}*[63}E!Rz3BD&)HZ=1oNQ.tg>DL(8uJ');
define('AUTH_SALT',        'K&R458F@5FSwUd.:O/heiJBSf-CPCZO:T}EVB^V4$x}1-S0mLNCP^7:hk[|h[FIT');
define('SECURE_AUTH_SALT', '1(sWj5{kCy%BYXL).ka:-V,n.Vx{N<bSFg_]=15=-}r(m<?N1%U/d@?7@38[Tl?#');
define('LOGGED_IN_SALT',   '0,>Pu@i45d{5_4 7x$p9v5S_R)p^HZVLE`sJVQDQE|o*{K$_CC]6zq[R-28WVrqQ');
define('NONCE_SALT',       'H?@~z[tOSx1]}<AgWTM`a#[~-sx1I/b{UxZ~(KJ-_vl.9TdP=[#{^.fRrf1y[}D2');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
