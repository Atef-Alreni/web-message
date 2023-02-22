<?php

namespace app\util;

class Validation
{
    public static function registerValidation(string $name, string $email, string $username, $password)
    {
        session_start();
        $_SESSION["errors"] = array();

        if (strlen($name) > 45) {
            $_SESSION["errors"]["name"] = "Full name should be under forty-five characters";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["errors"]["email"] = "Email must be in the correct format example@hotmail.com";
        }

        if (strlen($username) < 6) {
            $_SESSION["errors"]["username"] = "Username must atleast be six characters long";
        }

        if (strlen($password) < 6) {
            $_SESSION["errors"]["password"] = "Password must be atleast six characters long";
        }

        if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
            $_SESSION["errors"]["password"] = "Password must contain at least one special character";
        }
    }

    public static function messageValidation(string $message)
    {
        session_start();

        if (strlen($message) < 100) {
            $_SESSION["error"] = "Message must be at least be 100 characters";
            return;
        }

        if (strlen($message) > 500) {
            $_SESSION["error"] = "Message must be maximum 500 characters";
            return;
        }

        unset($_SESSION["error"]);
    }
}
