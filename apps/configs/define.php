<?php
if (!defined('SCHEMADB')) define('SCHEMADB', 'phys_db');
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'phys.hcmus.edu.vn') {
    define("WEB_URL", $_SERVER['REQUEST_SCHEME']."://phys.hcmus.edu.vn");
    define("DB", [
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'phys_root',
        'password' => 'OA7X8WyO4',
        'dbname' => SCHEMADB,
        'charset' => 'utf8'
    ]);
}else if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'www.phys.hcmus.edu.vn'){
    define("WEB_URL", $_SERVER['REQUEST_SCHEME']."://www.phys.hcmus.edu.vn");
    define("DB", [
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'phys_root',
        'password' => 'OA7X8WyO4',
        'dbname' => SCHEMADB,
        'charset' => 'utf8'
    ]);
} else {
    define("WEB_URL", $_SERVER['REQUEST_SCHEME']."://local.phys.hcmus.edu.vn");
    define("DB", array(
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => SCHEMADB,
        'charset' => 'utf8'
    ));
}

define('TIMEZONE', 'Asia/Ho_Chi_Minh');
define('VS_SCRIPT', strtotime('now'));
define("WEB_URI", "");
define('LIB_DIR', APP_DIR . '/libraries');
define('ERROR_FILE', APP_DIR . '/libraries/Error/404.php');
define('PUBLIC_DIR', BASE_DIR . '/public_html');
define('WEB_ADMIN_URL',  WEB_URL.'/admin');
define('WEB_ADMIN_URI',  WEB_URI.'/admin');
define('WEB_UPLOAD_URL',  WEB_URL.'/uploads');

define('EXCEL_PASSWORD',  'honeynet.vn');
define('WEB_TITLE', 'Khoa Vật lý - Vật lý Kỹ thuật');
define('WEB_NAME', 'Khoa Vật lý - Vật lý Kỹ thuật');
define('DEPT', 'Khoa Vật lý - Vật lý Kỹ thuật');
define('DEPTDEV', 'Khoa Vật lý - Vật lý Kỹ thuật');
define('LOGO', '/logo.png');
