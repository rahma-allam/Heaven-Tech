<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'heavenTech' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';S1wyR+VHqZ$%X7X2R8j)CyPM_S2)SkOqf{5? jkmyw+rDUNLc6p5]_3tJg(osjz' );
define( 'SECURE_AUTH_KEY',  '&ZC}Y8*!9<5d}Lq6^aNnaDs/-s^!=A|9:3T<g8Ex-qse`bXMZs!vzb;n>N<^k{BE' );
define( 'LOGGED_IN_KEY',    ';>UDf#K,r`Iv,N%=fB Is,tih.wr:}X`QY|Yw=N*uR,>,fi}5e`iz8)(AeD/:En,' );
define( 'NONCE_KEY',        '{w`c0Nb*8_WmO!aEu{/,R03{vykCI@x!d%j&^|EGoI0SeC^& &XV4Z^4Gl/t@tJO' );
define( 'AUTH_SALT',        'V|xBY sW6>Q]Z0Pe_meX?A>fG!9awP:hbNq[2f3%C4h Wa~^zLl 81+T9/saGWm?' );
define( 'SECURE_AUTH_SALT', 'N3(~ZSWDF Z.+3Mpe[;t[&k3}{ivd?N!EJ/Qu)Q+bY9=2/Dm-%)y4?ae/i4-y/N,' );
define( 'LOGGED_IN_SALT',   'qH+4=COS$1[y>jn-VvZS5_GLM!6F[Mwf.p0BUW?%`0GriDPz[J(4z:$ ]kl`N_it' );
define( 'NONCE_SALT',       '/-l2W>u=X:^dyx#rD-jC4+Js>n6ik$LMlk7PGZdEyL](cwGHmZ SiU+V(e=dR38;' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
