<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpdb_bikcraft' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpdb_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '12345' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v9gR{dD0-v{+M7eK:}OQkOs-n1538$0IjBF7<f}$VLv}v_:db!_k-Ee}G@03?))C' );
define( 'SECURE_AUTH_KEY',  'MG%_T/9VWw{IQQY%_y9gr!w9T?LZB f[5[l|p&JMmu~BY21rOmt/ {?u%W4xF}_j' );
define( 'LOGGED_IN_KEY',    'Q`?13$Q4&IGF]ZLwMzC$DB7n{e85>r<d95bLS<A1j|/%fiDY/cY.g9un:)/?e!uw' );
define( 'NONCE_KEY',        'hJF-=tn2YMWWdN.bHu8YN*KGZF3Nb lSL!Ty~eQWr6LSdh~RTla]hj:{~$Y7_jv{' );
define( 'AUTH_SALT',        '[dbaxg Iy:>aLeFr@_t6*QQ{0vIHg_c:f*^B-17UIz*O1xAo$_J5i3Yw0hsBD[Qa' );
define( 'SECURE_AUTH_SALT', '.yHe(J3g`5Ki{2.jBl^~kxs;wKilr7NiV)kV]M;4qwuc7cq6H)PwhzN]cWm:][.0' );
define( 'LOGGED_IN_SALT',   'Rr.u;T2Y^Po9C[gKo@!@0JH2N@`*EyRrR,tS+E<>%4H}e|N,of}@s@U:%N<iYrT8' );
define( 'NONCE_SALT',       'eX:?&^Wr9e[>n{@{ tgwqf%4iXjduKI]iHz=oo/U6}=0kz6.rM tf%}=_<-Ae.-U' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
