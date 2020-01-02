<?php
mb_internal_encoding('UTF-8');

if (($_SERVER['SERVER_ADDR'] == 'localhost') || ($_SERVER['SERVER_ADDR'] == '127.0.0.1') || ($_SERVER['SERVER_ADDR'] == '::1')) {
    require_once 'params_dev.php';
    define('APP_NAME', '/iso4-crm');
    define('ROOT', '/home/ibrahima/Documents/www/iso4-crm/');
    //define('ROOT', 'C:\laragon\www\iso4-crm/');
} else {
    require_once 'params.php';
    define('APP_NAME', '/iso4-crm');
    define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/iso4-crm/');
}

define('LIB_DIR', ROOT . 'libs/');
define('SRC_DIR', ROOT . 'modules/');
define('MOD_DIR', ROOT . 'modeles/');
define('CFG_DIR', dirname(__FILE__) . '/');
define('WEB_DIR', APP_NAME . '/web/');
define('CSS_DIR', APP_NAME . '/web/css/');
define('JS_DIR', APP_NAME . '/web/js/');
define('IMG_DIR', APP_NAME . '/web/images/');
define('HTML_DIR', ROOT . 'templates/');
define('BASE_DIR', 'web/');
define('FILE_DIR', APP_NAME . '/web/upload/');
define('BASE_PATH', ROOT . '/web/index.php');


// - Transformer toutes les erreurs en ErrorException
/* set_error_handler(function($errno, $errstr, $errfile, $errline) {
  error_log($errno . "-" . $errstr . "-" . $errfile . "-" . $errline);
  throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  });

  // - Traiter toutes les ErrorException non Catches
  set_exception_handler(function(ErrorException $ex) {
  echo "Desole ! Une erreur est survenue." . $ex->getMessage();
  error_log($ex->getMessage());
  }); */

require_once 'autoload.php';

$autoloader = DirectoriesAutoloader::instance('cache');
$autoloader->addDirectory('libs')
        ->addDirectory('modules')
        ->addDirectory('core')
        ->addDirectory('modeles');
spl_autoload_register(array($autoloader, 'autoload'));

require_once 'libs/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger("logs");

// Declare a new handler and store it in the $logstream variable
// This handler will be triggered by events of log level INFO and above
$logstream = new StreamHandler('/var/log/monolog/php.log', Logger::DEBUG);

// Push the $logstream handler onto the Logger object
$logger->pushHandler($logstream);

$logger->debug('premier message dans les logs.');