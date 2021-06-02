<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\AdminModel;
use \Core\PHPSource;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class AdminController extends \Core\Controller
{
  public function add_account_valid() {
      if ($_POST["pass1"] !== $_POST["pass2"]) return View::headerLocation("../add_account?error=2");
      if ( isset($_POST["email"], $_POST["pseudo"], $_POST["pass1"], $_POST["pass2"]) && !empty($_POST["email"]) && !empty($_POST["pseudo"]) && !empty($_POST["pass1"]) && !empty($_POST["pass2"])  ) {
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
        $add = $manager->modifyUser($_POST["id"], $_POST["email"], $_POST["img_link"], $_POST["is_admin"], $_POST["grade_name"]);
    }

    public function admin_modify_actuality() {
        $manager = new AdminModel;
        $add = $manager->modifyActuality($_POST["id"], $_POST["title"], $_POST["content"]);
    }

    public function admin_rcon() {
        $rc = new PHPSource();
        try {
            $rcon = $rc->rconCommand(strval($_POST["rcon"]));
            View::headerLocation("../rcon?valid=1");
        }
        catch(Exception $e) {
            echo "Erreur : {$e}";
        }
    }
    
    public function admin_create_grade_valid() {
        $adminmanager = new AdminModel;
        try {
        $perm1 = (isset($_POST['cr_actu']) ? 1 : 0);
        $perm2 = (isset($_POST['md_actu']) ? 1 : 0);
        $perm3 = (isset($_POST['cr_user']) ? 1 : 0);
        $perm4 = (isset($_POST['md_user']) ? 1 : 0);
        $perm5 = (isset($_POST['rcon']) ? 1 : 0);

        $create = $adminmanager->createGrade($perm1, $perm2, $perm3, $perm4, $perm5, $_POST["grade_name"]);
        View::headerLocation("../create_grade?valid=1");
        }
        catch(Exception $e) {
            echo "Erreur : {$e}";
        }
    }

    public function admin_modify_grades() {
        $adminmanager = new AdminModel;
        try {
            $modify = $adminmanager->modifyGrade($_POST["id"], $_POST["create_actu"], $_POST["modify_actu"], $_POST["create_user"], $_POST["modify_user"], $_POST["rcon"], $_POST["grade_name"]);
            return View::headerLocation("../modify_grade?valid=1");
        }
        catch(Exception $e) {
            echo "Erreur : {$e}";
        }
    }
}
