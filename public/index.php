<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

session_start();
/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'HomeController', 'action' => 'home']);

$router->add('connexion', ['controller' => 'HomeController', 'action' => 'login_page']);
$router->add('connexion/valid', ['controller' => 'LoginController', 'action' => 'valid_login']);

$router->add('inscription', ['controller' => 'HomeController', 'action' => 'register_page']);
$router->add('inscription/valid', ['controller' => 'RegisterController', 'action' => 'valid_register']);

$router->add("deconnexion", ['controller' => 'LogoutController', 'action' => 'logout']);

$router->add("admin", ['controller' => 'HomeController', 'action' => 'admin_page']);

$router->add("admin/add_account", ['controller' => 'HomeController', 'action' => 'admin_add_account_page']);
$router->add("admin/add_account/valid", ['controller' => 'AdminController', 'action' => 'add_account_valid']);

$router->add("admin/add_actuality", ['controller' => 'HomeController', 'action' => 'admin_add_actuality_page']);
$router->add("admin/add_actuality/valid", ['controller' => 'AdminController', 'action' => 'admin_add_actuality_valid']);

$router->dispatch($_SERVER['QUERY_STRING']);


