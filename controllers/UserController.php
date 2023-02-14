<?php

namespace app\controllers;

use app\model\User;

class UserController
{
    protected static User $user;

    public static function authenticateUser()
    {
        $user = new User();

        $username = $_POST["username"];
        $password = $_POST["password"];

        $res = $user->findUser($username, $password);

        session_start();
        if ($res) {
            $_SESSION["user"] = $res["Name"];
            header("Location: http://localhost:8080/");
            exit;
        } else {
            $_SESSION["error"] = "You have either entered an incorrect username or password. Please renter your details.";
            header("Location: http://localhost:8080/login");
            exit;
        }
    }

    public static function createUser()
    {
        $user = new User();

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $res = $user->save($name, $email, $username, $password);

        if ($res) {
            session_start();
            $_SESSION["user"] = $name;
            header("Location: http://localhost:8080/");
            exit;
        } else {
            echo "Error with Server";
        }
    }
}
