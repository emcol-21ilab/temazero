<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'ilas_w817_wp_temazero' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S)kJa]^]Vg9.0|#&Xg;e;%8ehy)Db%{8M(#2s4oE+e6:V){j&wa1[ k23Clkk?~x' );
define( 'SECURE_AUTH_KEY',  'O%~@8d?YkV3nI2ve`I?2)GYK&p$-H95;gJUEk83;JB)v<J]Q_L8f ZkDqq;Q/+?u' );
define( 'LOGGED_IN_KEY',    'n%k%0Zxxq)HL:nZJ;)((C8(^ry!D{]Qbbi#t81pE+mT6k)eMabi8BKz@ txiSVK*' );
define( 'NONCE_KEY',        ':DppyFu5.j[kM@WSAyyeb};Xfj;2ERi@qFS&`,TX1+y{Ec%GOg3ANL$+AV|jWv$.' );
define( 'AUTH_SALT',        'Ps_3ab{P;0Ia^(.e$3J82)|1W7>V1c)bl4nusFFDM*%(s!:%ao&{?j^{/N1A[^-e' );
define( 'SECURE_AUTH_SALT', 'JxYoW{LI06&u2$*~jzXZsMRCZG81Z3[$qd}!hj*37((R>m lnvq.k;s>3GjUv1i=' );
define( 'LOGGED_IN_SALT',   '=gFD+mU6DV!miV(S}aRz}9`@wIW| D}*fN=gKsOu%Gzyx{cZHyd.>o3J]T`p27L$' );
define( 'NONCE_SALT',       'NK=cX[u/Klqr|l59@Ii%N8{q}/.+BP|Uy<jL.N-b .H~75}bRF>?Mb~$e5~VF)@m' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
