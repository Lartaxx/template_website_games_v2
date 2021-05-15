<?php

namespace App\Controllers;

use \Core\View;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class LogoutController extends \Core\Controller
{
  public function logout() {
      session_destroy();
      View::headerLocation("../public");
  }
}
