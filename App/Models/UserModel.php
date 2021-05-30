<?php

namespace App\Models;

use PDO;
use \Core\View;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class UserModel extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
   public static function userExists($username, $password) {
          $db = static::getDB();
          $req = $db->prepare("SELECT * FROM users WHERE username = :username OR email = :username");
          $req->execute([
            ":username" => $username,
          ]);
          $row = $req->fetch(PDO::FETCH_OBJ);
          if ( $row && password_verify($password, $row->password) ) {
              $_SESSION["name"] = $row->username;
              $_SESSION["admin"] = static::isAdmin($row->id);
              $_SESSION["img_link"] = $row->img_link;
              View::headerLocation("../");
          }
          else {
              View::headerLocation("../connexion?error=1");
          }
      }

      public static function addUser($username, $email, $password) {
        $db = static::getDB();
        $check = $db->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
        $check->execute([
          ":username" => $username,
          ":email" => $email
        ]);
        $all_check = $check->fetch(PDO::FETCH_OBJ);
        if ( $all_check ) {
          View::headerLocation("../inscription?error=1");
        }
        else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $req = $db->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
        $req->execute([
          ":username" => $username, 
          ":email" => $email,
          ":password" => $password
        ]);
        $_SESSION["name"] = $username;
        View::headerLocation("../");
        }
      }

      protected static function isAdmin(int $user_id) {
        $db = static::getDB();
        $req = $db->prepare("SELECT is_admin FROM users WHERE id = :user_id");
        $req->execute([
          ":user_id" => $user_id
        ]);
        $res = $req->fetch(PDO::FETCH_OBJ);
        if ($res) return $res->is_admin;
        else return 0;
      }
   }
