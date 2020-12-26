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
// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'transmed_transmed');
/** O nome do utilizador de MySQL */
//define('DB_USER', 'transmed_tm');
define( 'DB_USER', 'pedro@26374' );
/** A password do utilizador de MySQL  */
//define('DB_PASSWORD', 'transmed_tm0123');
define( 'DB_PASSWORD', 'pedro@26374' );
/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');
/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');
/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');
/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CQ3nbHxt1NJuu6lvE6SB}n`R1~BV:-(G5%.T-+EsC:tBWW%L`y#w*`:1y7|4p-#(');
define('SECURE_AUTH_KEY',  'Ci%+g,DdpxY/e#!0J-h8%!H!Qot1x{iB>]9H-wfW sX.7x.:r*a{fi)0rM(,qn3b');
define('LOGGED_IN_KEY',    'oNhAyA9|{ZvV&ck,,^-B}v^iq* n)n3;{6ldjD t;ru+$?2I:P8/-Lq6?|vXT,x$');
define('NONCE_KEY',        '}AX_5IO~U|K&rq<$14mguSCX%E<JG#6Lu?Tt?6 nj~IdS+P~t#Z+hHvcbm35dIPK');
define('AUTH_SALT',        '#TfX%+e)@s<jxR-`;qLG}Zb7GX.ODlYX=4G$;t-gg%3[0!D}5Q~ZGkH:BV$:>x+3');
define('SECURE_AUTH_SALT', 'Dk(!}fn)+PR#Z>Lxy|dlW<HNrCh?pc|-{+2eUX!uMSY:?Bk41JB o-~>+U@2wBB-');
define('LOGGED_IN_SALT',   '!FlKs1nr1jJ0m!W?i((~)*=Q8D4,!~8aK)/E!#-geHM[vTQ9{WSFmnlI{v%_(|V|');
define('NONCE_SALT',       '$M;[!lBM5V+3&ctK?[u(4IC #GJV@}(e~mM]M$32Oi]e2r(5D^mag<7*b&BI|[3~');
/**#@-*/
/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';
/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', true);
/* E é tudo. Pare de editar! */
/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
