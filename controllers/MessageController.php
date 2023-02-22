<?php

namespace app\controllers;

use app\model\Message;
use app\util\Sanitization;
use app\util\Validation;

class MessageController
{
    public static function addMessage()
    {
        $messageInstance = new Message("mysql:host=localhost;port=3306;dbname=webmessage", "root", "");

        session_start();
        $id = $_SESSION["user"][0];
        $message = Sanitization::sanitizeMessage($_POST["message"]);
        Validation::messageValidation($message);

        if (isset($_SESSION["error"])) {
            unset($_SESSION["success-message"]);
            $_SESSION['redirected'] = true;

            header("Location: http://localhost:8080/");
            exit;
        } else {
            $res = $messageInstance->saveMessage($id, $message);
        }

        if ($res) {
            $_SESSION['redirected'] = true;
            $_SESSION["success-message"] = "You have successfully added a message";

            header("Location: http://localhost:8080/");
            exit();
        } else {
            echo '<script>';
            echo 'alert("Server Error");';
            echo 'window.location.href = "http://localhost:8080/";';
            echo '</script>';
        }
    }
}
