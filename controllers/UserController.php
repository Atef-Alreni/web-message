<?php

namespace app\controllers;

use app\model\User;
use app\util\Sanitization;
use app\util\Validation;

class UserController
{

    public static function authenticateUser()
    {
        $user = new User("mysql:host=localhost;port=3306;dbname=webmessage", "root", "");

        list($username, $password) = Sanitization::sanitizeLogin($_POST["username"], $_POST["password"]);
        $res = $user->findUser($username, $password);

        session_start();
        if ($res) {
            $_SESSION["user"] = [$res["id"], $res["Name"]];

            header("Location: http://localhost:8080/");
            exit;
        } else {
            $_SESSION["error"] = "You have either entered an incorrect username or password. Please renter your details.";
            $_SESSION['redirected'] = true;

            header("Location: http://localhost:8080/login");
            exit;
        }
    }

    public static function createUser()
    {
        session_start();
        $user = new User("mysql:host=localhost;port=3306;dbname=webmessage", "root", "");

        list($name, $email, $username, $password) = Sanitization::sanitizeRegister($_POST["name"], $_POST["email"], $_POST["username"], $_POST["password"]);
        Validation::registerValidation($name, $email, $username, $password);

        if (count($_SESSION["errors"]) > 0) {
            $_SESSION['redirected'] = true;

            header("Location: http://localhost:8080/register");
            exit;
        } else {
            $res = $user->save($name, $email, $username, $password);
            $userData = $user->findUser($username, $password);
        }

        if ($res) {
            $_SESSION["user"] = [$userData["id"], $userData["Name"]];
            header("Location: http://localhost:8080/");
            exit;
        } else {
            echo '<script>';
            echo 'alert("Server Error");';
            echo 'window.location.href = "http://localhost:8080/";';
            echo '</script>';
        }
    }
}
