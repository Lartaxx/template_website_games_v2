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
              View::headerLocation("../add_account");
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
              ":title" => preg_replace('#<script(.*?)>(.*?)</script>#is', '', strval($title)),
              ":content" => preg_replace('#<script(.*?)>(.*?)</script>#is', '', strval($content)),
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

          public function modifyUser($id, $email, $img_link, $is_admin, $grade_name) {
            $db = static::getDB();
            $req = $db->prepare("UPDATE users SET email = :email, img_link = :img_link, is_admin = :is_admin, grade_name = :grade_name WHERE id = :id");
            return $req->execute([
              ":id" => $id, 
              ":email" => strval($email),
              ":img_link" => strval($img_link),
              ":is_admin" => intval($is_admin),
              ":grade_name" => strval($grade_name)
            ]);
            
          }

          public function modifyActuality($id, $title, $content) {
            $db = static::getDB();
            $req = $db->prepare("UPDATE announces SET title = :title, content = :content WHERE id = :id");
            return $req->execute([
              ":id" => $id, 
              ":title" => preg_replace('#<script(.*?)>(.*?)</script>#is', '', strval($title)),
              ":content" => preg_replace('#<script(.*?)>(.*?)</script>#is', '', strval($content))
            ]);
          }

          public function createGrade($perm1, $perm2, $perm3, $perm4, $perm5, $grade_name) {
            $db = static::getDB();
            $req = $db->prepare("SELECT * FROM grades WHERE grade_name = :grade_name");
            $req->execute([
              ":grade_name" => $grade_name, 
            ]);
            $check = $req->fetch(); 
            if ($check) {
              View::headerLocation("../create_grade");
              }
            else {

              $req = $db->prepare("INSERT INTO grades(create_actu, modify_actu, create_user, modify_user, rcon, grade_name) VALUES(:create_actu, :modify_actu, :create_user, :modify_user, :rcon, :grade_name)");
              return $req->execute([
                ":create_actu" => $perm1,
                ":modify_actu" => $perm2,
                ":create_user" => $perm3,
                ":modify_user" => $perm4,
                ":rcon" => $perm5,
                ":grade_name" => $grade_name
              ]);
              }
            }

            public function getAllGrades() {
              $db = static::getDB();
              $req = $db->prepare("SELECT * FROM grades");
              $req->execute();
              $row = $req->fetchAll();
              return $row;
            }

            public function modifyGrade($grade_id, $cr_actu, $md_actu, $cr_user, $md_user, $rcon, $grade_name) {
              $db = static::getDB();
              $req = $db->prepare("UPDATE grades SET grade_name = :grade_name, create_actu = :create_actu, modify_actu = :modify_actu, create_user = :create_user, modify_user = :modify_user, rcon = :rcon WHERE id = :grade_id");
              return $req->execute([
                ":grade_id" => $grade_id, 
                ":grade_name" => $grade_name,
                ":create_actu" => $cr_actu,
                ":modify_actu" => $md_actu,
                ":create_user" => $cr_user,
                ":modify_user" => $md_user,
                ":rcon" => $rcon
              ]);
            }

            public function hasPerm($perm = "") {
              $db = static::getDB();
              switch ($perm) {
                case "cr_actu": {
                  $req = $db->prepare("SELECT grade_name FROM users WHERE id = :id");
                  $req->execute([
                    ":id" => $_SESSION["id"]
                  ]);
                  $row = $req->fetch(PDO::FETCH_OBJ);
                  $grade_name = $row->grade_name;

                  $check = $db->prepare("SELECT create_actu FROM grades LEFT JOIN users ON grades.grade_name = users.grade_name WHERE grades.grade_name = :grade");
                  $check->execute([
                    ":grade" => $grade_name
                  ]);
                  $rep = $check->fetch(PDO::FETCH_OBJ);
                  return $rep;
                }

                case "md_actu": {
                  $req = $db->prepare("SELECT grade_name FROM users WHERE id = :id");
                  $req->execute([
                    ":id" => $_SESSION["id"]
                  ]);
                  $row = $req->fetch(PDO::FETCH_OBJ);
                  $grade_name = $row->grade_name;

                  $check = $db->prepare("SELECT modify_actu FROM grades LEFT JOIN users ON grades.grade_name = users.grade_name WHERE grades.grade_name = :grade");
                  $check->execute([
                    ":grade" => $grade_name
                  ]);
                  $rep = $check->fetch(PDO::FETCH_OBJ);
                  return $rep;
                }

                case "cr_user": {
                  $req = $db->prepare("SELECT grade_name FROM users WHERE id = :id");
                  $req->execute([
                    ":id" => $_SESSION["id"]
                  ]);
                  $row = $req->fetch(PDO::FETCH_OBJ);
                  $grade_name = $row->grade_name;

                  $check = $db->prepare("SELECT create_user FROM grades LEFT JOIN users ON grades.grade_name = users.grade_name WHERE grades.grade_name = :grade");
                  $check->execute([
                    ":grade" => $grade_name
                  ]);
                  $rep = $check->fetch(PDO::FETCH_OBJ);
                  return $rep;
                }

                case "md_user": {
                  $req = $db->prepare("SELECT grade_name FROM users WHERE id = :id");
                  $req->execute([
                    ":id" => $_SESSION["id"]
                  ]);
                  $row = $req->fetch(PDO::FETCH_OBJ);
                  $grade_name = $row->grade_name;

                  $check = $db->prepare("SELECT modify_user FROM grades LEFT JOIN users ON grades.grade_name = users.grade_name WHERE grades.grade_name = :grade");
                  $check->execute([
                    ":grade" => $grade_name
                  ]);
                  $rep = $check->fetch(PDO::FETCH_OBJ);
                  return $rep;
                }

                case "rcon": {
                  $req = $db->prepare("SELECT grade_name FROM users WHERE id = :id");
                  $req->execute([
                    ":id" => $_SESSION["id"]
                  ]);
                  $row = $req->fetch(PDO::FETCH_OBJ);
                  $grade_name = $row->grade_name;

                  $check = $db->prepare("SELECT rcon FROM grades LEFT JOIN users ON grades.grade_name = users.grade_name WHERE grades.grade_name = :grade");
                  $check->execute([
                    ":grade" => $grade_name
                  ]);
                  $rep = $check->fetch(PDO::FETCH_OBJ);
                  return $rep;
                }
              }
            }

            public function getAllEmails() {
              $db = static::getDB();
              $req = $db->prepare("SELECT username, email FROM users");
              $req->execute();
              return $row = $req->fetchAll();
            }
      }
