<?php
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
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '=ZU@;wl1gm]]~~OY`q96,$2m6ww&9#;xK-%0i}7wE/] .FW&`GyR&[ELR<gQy_0a' );
define( 'SECURE_AUTH_KEY',  'lhlZmT1h2_XF@YqgF0aL}6>/1bh.1!{e$H*&d!lXY}v|Y]ysVF[O]T1$HqT~o?&=' );
define( 'LOGGED_IN_KEY',    '4X4Y]-i-U:+;3Qp2c};]/j(AS6b=SW@Fz+psrJ}Xk_WD8dI~nI#xL{nd=5AYX@SG' );
define( 'NONCE_KEY',        '6`m<r^q4kr@*g|6[6DM9.r+$a_$c&LTHT290KoF.UwXb(Ab_:6nPjH{4gpO}~!H)' );
define( 'AUTH_SALT',        '$$B|={bv/=RxS:=?4*ptKXCjd}H%O>$1i!kp{;BJt]ewV&hB;q=Q%=U|N^ZNDlXi' );
define( 'SECURE_AUTH_SALT', 'Z+;ti^iR62B2AG^;]7q[mU/CA#Y}}xtAqyY~2I!Z ) `6H_/(* %hg:&)^w=1KR#' );
define( 'LOGGED_IN_SALT',   'IMDkcl}zud3#<,e7zlU/1mpLqMG=!`3g.IIUe_rVz}EsV/A>U@LhiR5I,z<4vr=.' );
define( 'NONCE_SALT',       '6/Uy?=]8tT_+6NY%zN.Fd4$ZXvjI>8)(3%H>JOH}xv@9G i;~65V:Gc3C#r:rtNC' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
