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
define( 'DB_NAME', 'Disneyland' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*c(tA=MlX1:$qdd?yiH+G7~Sa|0~)2iQHnwJXVDGY3+[[VOh8Y[XZtB~,HT88[IV' );
define( 'SECURE_AUTH_KEY',  '9v*Y!HT?#-RMrmms`I3Xp23R)>?>}}]9^|Ss_G<sM >p^O&/rk4Q ?,sXCw?38W ' );
define( 'LOGGED_IN_KEY',    ';FAZ2Qu<l?$w;,H/ndd4&nt){1}XdjcGUa)T8bQw zfN}!{Pp4Xlt1/Fa<AYYO#S' );
define( 'NONCE_KEY',        'V>$g*>g%dBGUcCG~9vwIn4#O3[{(Sn-u#&I(TX2eNUE@9Zz>+y)HT/}ST<(9b.yQ' );
define( 'AUTH_SALT',        'j*8=S8Xpw@+M3}>ltKDP(DzvE=9Shq-;U|xe.[og6f;S6q+T2UH6Yp1;nhdYTgsm' );
define( 'SECURE_AUTH_SALT', 'TA^!05I(oVSOV}Lwd!I=:G>wPND!Z |B>9!~H!@[9V)&+uf*1qD:,-M?~ipH(pr.' );
define( 'LOGGED_IN_SALT',   'Q$I3|l^B]fqF$v| b3aZ<7,WUkBdP3#CHM(i(F}k&#^wS&^)M4iA9k)t:/_:z6CA' );
define( 'NONCE_SALT',       ';Lh;J5WS4Dbb:Nm!x:rEtsmx Ok#(]4{N*Q/2BWSIJLyl#!~T=`[hAA]fCfu9?2#' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'citta';

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
