<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\UserModel;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class RegisterController extends \Core\Controller
{
   public function valid_register() {
       if ( isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["pass"]) && !empty($_POST["pass"])) {
           $user = new UserModel;
           $user->addUser($_POST["username"], $_POST["email"], $_POST["pass"]);
        }
        else {
            return; // erreur 2 à faire
        }
    }
}
