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
            $check = $db->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
            $check->execute([
              ":username" => $username,
              ":email" => $email
            ]);
            $all_check = $check->fetch(PDO::FETCH_OBJ);
            if ( $all_check ) {
              View::headerLocation("../add_account?error=1");
            }
            else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $req = $db->prepare("INSERT INTO users(username, email, password, is_admin) VALUES(:username, :email, :password, :is_admin)");
            $req->execute([
              ":username" => $username,
              ":email" => $email,
              ":password" => $password,
              ":is_admin" => $is_admin
            ]);
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
            $req = $db->prepare("INSERT INTO announces(`title`, `content`, `by_admin`) VALUES(:title, :content, :admin)");
            $req->execute([
              ":title" => htmlentities($title),
              ":content" => htmlentities($content),
              ":admin" => $admin
            ]);
            View::headerLocation("../../admin");
          }
          
          public function getAllUsers() {
            $db = static::getDB();
            $req = $db->prepare("SELECT * FROM users");
            $req->execute();
            $row = $req->fetchAll();
            return $row;
          }

          public function modifyUser($id, $email, $img_link, $is_admin) {
            $db = static::getDB();
            $req = $db->prepare("UPDATE users SET email = :email, img_link = :img_link, is_admin = :is_admin WHERE id = :id");
            return $req->execute([
              ":id" => $id, 
              ":email" => strval($email),
              ":img_link" => strval($img_link),
              ":is_admin" => intval($is_admin)
            ]);
            
          }

          public function modifyActuality($id, $title, $content) {
            $db = static::getDB();
            $req = $db->prepare("UPDATE announces SET title = :title, content = :content WHERE id = :id");
            return $req->execute([
              ":id" => $id, 
              ":title" => strval($title),
              ":content" => strval($content)
            ]);
          }
   }
