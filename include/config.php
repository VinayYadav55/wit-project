<?php
// SITE_ROOT contains the full path to the  folder
define('SITE_ROOT', dirname(dirname(__FILE__)));
//define('HTTP_SERVER_PORT', '3306');

// Application directories
define('PRESENTATION_DIR', SITE_ROOT. '/presentation/');

define('BUSINESS_DIR', SITE_ROOT.'/business/');
define('SMARTY_DIR', SITE_ROOT.'/libs/smarty/');



// Settings needed to configure the Smarty template engine
define('TEMPLATE_DIR', PRESENTATION_DIR.'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT.'/include/');

// Database connectivity setup
// define('DB_PERSISTENCY', 'true');
// define('DB_SERVER', '162.241.253.126');
// define('DB_USERNAME', 'labiknmy_admin');
// define('DB_PASSWORD', '123456');
// define('DB_DATABASE', 'labiknmy_rbs_wit');
// define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'rbs_wit');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);
    

?>