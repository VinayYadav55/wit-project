<?php
session_start();

//ini_set('display_errors', 1);
//error_reporting(-1);
require_once 'include/config.php';
function base_url() {
	return 'http://localhost/womenintech';
}
function jsversion(){
    return rand();
}
// Load the application page template

require_once PRESENTATION_DIR . 'application.php';
// Load the database handler
require_once BUSINESS_DIR . 'database_handler.php';
// Load Business Tier
require_once BUSINESS_DIR . 'catalog_operations.php';

require_once BUSINESS_DIR . 'sendMail.php';

require_once BUSINESS_DIR . 'logInStatus.php';


// Load Smarty template file
    $application = new Application();
// Display the page
    $application->display('entry_file.tpl');

?>
