<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\AdminModel;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class AdminController extends \Core\Controller
{
  public function add_account_valid() {
      if ( isset($_POST["email"], $_POST["pseudo"], $_POST["pass1"], $_POST["pass2"]) && !empty($_POST["email"]) && !empty($_POST["pseudo"]) && !empty($_POST["pass1"]) && !empty($_POST["pass2"]) && !empty($_POST["admin"]) ) {
            if ( isset($_POST["admin"])) {
                $is_selected = 1;
            }
            else {
                $is_selected = 0;
            }
            $adminmanager = new AdminModel;
            $adminmanager->adminAddUser($_POST["pseudo"], $_POST["email"], $_POST["pass1"], $is_selected);
      }
  }

  public function admin_add_actuality_valid() {
    if ( isset($_POST["title"], $_POST["content"]) && !empty($_POST["title"]) && !empty($_POST["content"])  ) {
          $adminmanager = new AdminModel;
          $adminmanager->addActu($_POST["title"], $_POST["content"], $_SESSION ? $_SESSION["name"] : "Un administrateur");
        }
    }

    public function admin_modify_user() {
        $manager = new AdminModel;
        $add = $manager->modifyUser($_POST["id"], $_POST["email"], $_POST["img_link"], $_POST["is_admin"]);
    }

    public function admin_modify_actuality() {
        $manager = new AdminModel;
        $add = $manager->modifyActuality($_POST["id"], $_POST["title"], $_POST["content"]);
    }
}
