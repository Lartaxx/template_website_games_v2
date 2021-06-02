<?php

namespace App\Controllers;

use \Core\View;
use \Core\GameQ;
use \Core\PHPSource;
use \App\Models\AdminModel;



/**
 * Home controller
 *
 * PHP version 7.0
 */
class HomeController extends \Core\Controller
{
    public function home() {
        $rc = new PHPSource();
        $annonces = new AdminModel;
        $all_annonces = $annonces->getAllAnnounces();
        View::renderTemplate('home/index.php', compact("all_annonces"));
    }

    public function login_page() {
        View::renderTemplate("connexion/index.php");
    }

    public function register_page() {
        View::renderTemplate("inscription/index.php");
    }

    public function admin_page() {
        $manager = new AdminModel;
        $all_users = $manager->getDatas("users");
        $cr_actu = $manager->hasPerm("cr_actu");
        $md_actu = $manager->hasPerm("md_actu");
        $cr_user = $manager->hasPerm("cr_user");
        $md_user = $manager->hasPerm("md_user");
        $rcon = $manager->hasPerm("rcon");
        $gameq = new GameQ();
        $server = $gameq->getDatas();
        View::renderTemplate("admin/index.php", compact("all_users", "server", "cr_actu", "md_actu", "cr_user", "md_user", "rcon"));
    }

    public function admin_add_account_page() {
        $manager = new AdminModel;
        $has_perm = $manager->hasPerm("cr_user");
        View::renderTemplate("admin/ajouter_compte/index.php", compact("has_perm"));
    }

    public function admin_add_actuality_page() {
        $manager = new AdminModel;
        $has_perm = $manager->hasPerm("cr_actu");
        View::renderTemplate("admin/ajouter_actu/index.php", compact("has_perm"));
    }

    public function admin_see_users() {
        $manager = new AdminModel;
        $cr_actu = $manager->hasPerm("cr_actu");
        $md_actu = $manager->hasPerm("md_actu");
        $cr_user = $manager->hasPerm("cr_user");
        $rcon = $manager->hasPerm("rcon");
        $has_perm = $manager->hasPerm("md_user");
        $users = $manager->getAllUsers();
        View::renderTemplate("admin/voir_utilisateurs/index.php", compact("users", "has_perm", "cr_actu", "md_actu", "cr_user", "rcon"));
    }

    public function admin_see_actuality() {
        $annonces = new AdminModel;
        $cr_actu = $annonces->hasPerm("cr_actu");
        $cr_user = $annonces->hasPerm("cr_user");
        $md_user = $annonces->hasPerm("md_user");
        $rcon = $annonces->hasPerm("rcon");
        $all_annonces = $annonces->getAllAnnounces();
        $has_perm = $annonces->hasPerm("md_actu");
        View::renderTemplate("admin/voir_actualites/index.php", compact("all_annonces", "has_perm", "cr_actu", "cr_user", "md_user", "rcon"));
    }

    public function admin_rcon() {
        $manager = new AdminModel;
        $has_perm = $manager->hasPerm("rcon");
        View::renderTemplate("admin/commandes_rcon/index.php", compact("has_perm"));
    }

    public function admin_create_grade() {
        View::renderTemplate("admin/creer_grade/index.php");
    }
    
    public function admin_see_grades() {
        $admin = new AdminModel;
        $cr_actu = $admin->hasPerm("cr_actu");
        $md_actu = $admin->hasPerm("md_actu");
        $cr_user = $admin->hasPerm("cr_user");
        $rcon = $admin->hasPerm("rcon");
        $md_user = $admin->hasPerm("md_user");
        $grades = $admin->getAllGrades();
        View::renderTemplate("admin/modifier_grade/index.php", compact("grades", "md_actu", "cr_actu", "cr_user", "md_user", "rcon"));
    }
   
}
