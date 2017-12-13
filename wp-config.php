<?php
define('COOKIE_DOMAIN', 'www.focuzz.com.br'); // Added by W3 Total Cache

/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAJLDKY5KEQHHNQKNQ' );
// define( 'DBI_AWS_SECRET_ACCESS_KEY', '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');
define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAJAHPLGFD63EDAIMQ');
define( 'DBI_AWS_SECRET_ACCESS_KEY', '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');

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sergiomatiuzzo_focuzz');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'sergiomatiuzzo');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Ser98245');

/** nome do host do MySQL */
define('DB_HOST', 'vwdb001.cji3psywkbki.sa-east-1.rds.amazonaws.com');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', true);

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ap(a3]hZ0.oxci@~XAZkvpf:G]Q@U7m.AeG]_[9.:`jH<df$.(J7-&1i>UZaG9~P');
define('SECURE_AUTH_KEY',  '|uUtoYH;f6 l>v!?#p4_[qLnJrGH9}x23^TPXLjFk=EmWbjA@{d]`MhclK4[GX8h');
define('LOGGED_IN_KEY',    'qED6l!:fyHemIL}Y?K.h&.Pe9rW=Bhp`bs2A|(>_Lj(DJjQqx8,&[|__:SX{U%t ');
define('NONCE_KEY',        'r`oa8}OxxrZD@9h!_gMh?$AMq:!8_f>?}k|CX9BB>A8_gF5A; jbX^?WXG,Fy5Fn');
define('AUTH_SALT',        '?Rza=U_U.GVtK94;`Bcs)OEwn4aeb8{>JlZR&P)(VWW*>zN|yG7>%u{r,ir^D}^x');
define('SECURE_AUTH_SALT', 'e7)JE<Onn>{lIt0izCgV:CXRCh@7^}6?rM~$>g(+$pb%nx5w&H=&9mJ:vid5RG)_');
define('LOGGED_IN_SALT',   'a<@A1:Y6&zKyiVcasdPv8h.75W#5NWQ;CIOrlui1=|uw.Mk(NVY{lW08&`W9M%v6');
define('NONCE_SALT',       'eL 6rCYU*)~(tg?MwcDL|n}q`#F??,EL9g%Bbt.;x1lCCs>A&p-eB?QevA;@`<E ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

