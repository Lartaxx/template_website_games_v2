<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\UserModel;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class LoginController extends \Core\Controller
{
   public function valid_login() {
       if ( isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["pass"]) && !empty($_POST["pass"])) {
           $user = new UserModel;
           $user->userExists($_POST["username"], $_POST["pass"]);
        }
        else {
            return;
        }
    }
}
