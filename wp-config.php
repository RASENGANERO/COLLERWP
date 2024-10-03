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
 * * Настройки базы данных
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
define( 'DB_NAME', 'collerwp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M[yRS5u)m1@t;Yf~f43pADHIsOMqM.|X[HjE63Y?BD4v(9h6bE +AxOrDP?nwO=:' );
define( 'SECURE_AUTH_KEY',  'OQZuK7 IU9.llZ?oIlQk M::O#F^TGG:7c@!nsGW&ipG*To$s`rkQP4!*A=*KLDW' );
define( 'LOGGED_IN_KEY',    'wC?A0Wj%@L8&RiI Ubz/zmmNX_n&`F~qZ[DBRjp`P|# 628q!wK=8n0%Yt5h-;aX' );
define( 'NONCE_KEY',        '~8=}oV,:.4z~!Qp-zFw/KDCJ3rc}l:8*wn.neoE{T)+fLZ3:$v2<2t0Q/LK5&NNj' );
define( 'AUTH_SALT',        '@+UkWo_z|X^v[9T_/Z1?!Ix(]ftVH8p#[4R$m$1110a_oRS-5%!utz)4S4H;:$(m' );
define( 'SECURE_AUTH_SALT', 't41jra|J53b)HE#}~tkdjOC&5,&tSxrcR3zax|zGa$NvJ/(nR8VW%U]@c>P-TSR>' );
define( 'LOGGED_IN_SALT',   'S@/LJJ7&=cc50wGMe%|dK-WK5KQs#.kgQx}[MIVZ~/SM>fIW27G OQMTm<q8{^rV' );
define( 'NONCE_SALT',       ')X@O}Cp9RsZ)GPi8k$] V<76gRyxER~GTpco#o&fpaePFw;>ebuQZV I5rY^BiR{' );

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
