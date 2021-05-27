<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_soccer' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']9$ca-fi07mw(M}&Q`8aNN|Zo fPT$YnIzAS}8{2)z<T8UCqQpG0FRUNO:5}Oc!I' );
define( 'SECURE_AUTH_KEY',  '737P*1v<-VG4Fux1r,i{]l.}V]}Uv+<l/Hqsg7~G$6O#jHrP>RTNp@/0-)}IpV5l' );
define( 'LOGGED_IN_KEY',    'm=f25<v {5,{A ^e7w.e*l{NKf@vKv:REhFth[hqS`*{xx.48?73/pNO6+<S/:;p' );
define( 'NONCE_KEY',        ',E@{}c6n4;:l,/,jJk)Co-w~L4<E>9ePmw>KO4n)*zm49t[Z3l.#V|unI|B39{]3' );
define( 'AUTH_SALT',        '!7$_/EjW9KP3oOOdY?4W@]l#C5#al7tOs%7|uAh9otm.DH%4(+@n-JY{>1p?})W3' );
define( 'SECURE_AUTH_SALT', 'aLrsFxM_oKl1BXn-j3!XBjY!Eo!c<%Y)S7##W@-/N5NT5mSl:&XHa`&E{tBAJY{w' );
define( 'LOGGED_IN_SALT',   ']!s)6y?yV;]$Rsn/V0NUA4ysz08deMui[|i^l_^9PQpTr+?JVX/XHQTgGTO`=9{-' );
define( 'NONCE_SALT',       'r69Mwhzxp`SCkAt7g?HZ,q:bQ$jKkYN<q8)/1an,%%:(6rD-A.`~U*qO,26A;Zc:' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
