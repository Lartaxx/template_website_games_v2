<?php

namespace App\Models;

use PDO;
use \Core\View;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Adminmodel extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
        public function getDatas($name = "users") {
            $db = static::getDB();
            switch($name) {
                case "users": {
                    $req = $db->prepare("SELECT COUNT(*) FROM users");
                    $req->execute();
                    $row = $req->fetch();
                    return $row["COUNT(*)"];
                    break;
                }
            }
        }

        public function adminAddUser($username, $email, $password, $is_admin) {
            $db = static::getDB();
            $check = $db->prepare("SELECT * FROM users WHERE username = '{$username}' OR email = '{$email}'");
            $check->execute();
            $all_check = $check->fetch(PDO::FETCH_OBJ);
            if ( $all_check ) {
              View::headerLocation("../add_account?error=1");
            }
            else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $req = $db->prepare("INSERT INTO users(username, email, password, is_admin) VALUES('{$username}', '{$email}', '{$password}', {$is_admin})");
            $req->execute();
            View::headerLocation("../../admin");
            }
          }

          public function getAllAnnounces() {
              $db = static::getDB();
              $req = $db->prepare("SELECT * FROM announces ORDER BY date");
              $req->execute();
              $row = $req->fetchAll();
              return $row;
          }

          public function addActu($title, $content, $admin) {
            $db = static::getDB();
            $req = $db->prepare("INSERT INTO announces(`title`, `content`, `by_admin`) VALUES('{$title}', '{$content}', '{$admin}')");
            $req->execute();
            View::headerLocation("../../admin");
          } 
   }
