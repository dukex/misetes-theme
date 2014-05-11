<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser.
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

define('WPLANG', 'pt_BR');

$table_prefix  = 'wp_';

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

if ( file_exists( dirname( __FILE__ ) . '/../development' ) ) {
    define('WP_ENV', 'development');
    define('WP_DEBUG', true);

    define('DB_NAME', 'wordpress');
    define('DB_USER', 'wordpress');
    define('DB_PASSWORD', 'wordpress');
    define('DB_HOST', 'localhost');

} elseif ( file_exists( dirname( __FILE__ ) . '/../staging' ) ) {
    define('WP_ENV', 'staging');
    define('WP_DEBUG', true);

    define('DB_NAME', 'wordpress');
    define('DB_USER', 'wordpress');
    define('DB_PASSWORD', 'wordpress');
    define('DB_HOST', 'localhost');
} else {
    define('WP_ENV', 'production');
    define('WP_DEBUG', false);
    include( dirname( __FILE__ ) . '/wp-producion-config.php' );
}


/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w{+V>:S9$=WITBd3MH<<!e}>X/+uK-&]%a::)Iv-:UJ)eWdOgGIo*2k_~pwk^iWd');
define('SECURE_AUTH_KEY',  '[Y9RWM=vuk:hf~6Mqko# (GvPTsZ^&+{tFGTt9P^klWku$X|u,cc]>rC,gIj6uV+');
define('LOGGED_IN_KEY',    'vIt11+#9L%C`ip+Zw|86N_G7My-T.uZ%@G%(Cm[8^uYrz7*1vV$MN6})!U!>dE^u');
define('NONCE_KEY',        '0OR{2LW[#6p{6[-,RYbFpo;CoB[94nr=+OD)=D+/lzNh`IZ^KD`Q9m/Jb9sI:8W*');
define('AUTH_SALT',        '?(c_m|H-Y>|lSyWb+|g76x(3i%,45W/3,jpb:W8+E.Z9aF1oK)/,^.mR5X-Zf:0&');
define('SECURE_AUTH_SALT', 'YSoGqshY=p~}?x,nhwdB{~5&/%6tSY[XY/au2Nyhp%ynX/rITk]REvWk;kY:<AZu');
define('LOGGED_IN_SALT',   ':+_+.E*<,rL?2):*@M`4j}t>HKPi-++8u.|up@12^neS;)TUco|-%QPVSDC~@@n]');
define('NONCE_SALT',       '0=dRP(A3:~~Yn!]b4_K8*qB|Plo1J,yV|ii #RR}!djxhqYkC6TcjZ%t+4qVi?|q');
/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
