<?php

defined('APP_DEBUG') OR define('APP_DEBUG', true);
defined('ENV') OR define('ENV', 'development');
defined('APP_FOLDER') OR define('APP_FOLDER', 'app');
defined('CONFIG_FOLDER') OR define('CONFIG_FOLDER', 'config');

defined('APP_PATH') OR define('APP_PATH', ROOT_PATH . APP_FOLDER . DIRECTORY_SEPARATOR);

define('IS_CGI', (0 === strpos(PHP_SAPI, 'cgi') || false !== strpos(PHP_SAPI, 'fcgi')) ? 1 : 0);
define('IS_WIN', strstr(PHP_OS, 'WIN') ? 1 : 0);
define('IS_CLI', PHP_SAPI == 'cli' ? 1 : 0);
define('REQUEST_METHOD', IS_CLI ? 'GET' : $_SERVER['REQUEST_METHOD']);
// composer自动加载
require __DIR__.'/../vendor/autoload.php';

$app = new Raam\Application(realpath(__DIR__.'/../'));

return $app;

// define('DS', DIRECTORY_SEPARATOR);

// define('APP_PATH', ROOT_PATH . APP_FOLDER . DS);
// define('SYSTEM_PATH', ROOT_PATH . SYSTEM_FOLDER . DS);

// defined('APP_DEBUG') OR define('APP_DEBUG', false);
// defined('ENV') OR define('ENV', 'development');

// define('IS_CGI', (0 === strpos(PHP_SAPI, 'cgi') || false !== strpos(PHP_SAPI, 'fcgi')) ? 1 : 0);
// define('IS_WIN', strstr(PHP_OS, 'WIN') ? 1 : 0);
// define('IS_CLI', PHP_SAPI == 'cli' ? 1 : 0);

// define('REQUEST_METHOD', IS_CLI ? 'GET' : $_SERVER['REQUEST_METHOD']);

// include SYSTEM_PATH . 'Loader.php';

// Loader::register();
// $app = new Application;
// Loader::addAutoLoadPath(SYSTEM_PATH);
// Loader::addAutoLoadPath(APP_PATH);

// Loader::import(APP_PATH . 'routes.php');

// Route::run();