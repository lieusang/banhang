<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'banhang_development' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '32(aE013CgeuQI+Ws)IcMl~f-zFoKYI;CwIE|xtcU=JL^9lp+t=Yl3xKSy_.cL-v' );
define( 'SECURE_AUTH_KEY',  '(sYqjcJZWmKidF}suDJoO!1W%=>p+82Fp[4jdZ5f?2M/q2)r-M@mcOxI|*%l~Oj)' );
define( 'LOGGED_IN_KEY',    '7f_a.|+%!n}_f3)~:Ik)E;_!$)JFBK`Owq.4-%*q4([kUxO3I{i30d$.)EUh=MuW' );
define( 'NONCE_KEY',        '8&sR$y4gJ80-A,/&>s.!3b[?)Xm@K|UL8/)8/-{LrNdl{Ry^I`Fs,=O={V0Y/<%M' );
define( 'AUTH_SALT',        '_G{g6Wa(ufiFsZi(jBZ{AQV0g^Ju_jeO2=aF,TR4kh,N OWq%?gh+?OPT}Teyzk&' );
define( 'SECURE_AUTH_SALT', '|Sn[PEZ:Zj,02;uZ~?nM_BJ2I#}%B bO+y8LI}BGgtz%oD D]Q`TYO+.u btj!ye' );
define( 'LOGGED_IN_SALT',   '^>&*<w0X41U6F^/<E.j0{{W;MBV[W^@Q(Cv[^+GF1L}2&NpvpmL9r0 =2H?Ts,6^' );
define( 'NONCE_SALT',       'U<%n/vh:3pBX;;~4t xP)r(r`:(O%njkA-O#x9j)H,G~_dtw@$l&j(16KyBp%Iv}' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
