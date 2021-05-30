<?php

namespace App\Controllers;

use \Core\View;
use \Core\GameQ;
use \App\Models\AdminModel;



/**
 * Home controller
 *
 * PHP version 7.0
 */
class HomeController extends \Core\Controller
{
    public function home() {
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
        $gameq = new GameQ();
        $server = $gameq->getDatas();
        View::renderTemplate("admin/index.php", compact("all_users", "server"));
    }

    public function admin_add_account_page() {
        View::renderTemplate("admin/ajouter_compte/index.php");
    }

    public function admin_add_actuality_page() {
        View::renderTemplate("admin/ajouter_actu/index.php");
    }

    public function admin_see_users() {
        $manager = new AdminModel;
        $users = $manager->getAllUsers();
        View::renderTemplate("admin/voir_utilisateurs/index.php", compact("users"));
    }

    public function admin_see_actuality() {
        $annonces = new AdminModel;
        $all_annonces = $annonces->getAllAnnounces();
        View::renderTemplate("admin/voir_actualites/index.php", compact("all_annonces"));
    }
   
}
