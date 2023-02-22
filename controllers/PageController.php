<?php

namespace app\controllers;

use app\util\Router;
use app\model\Message;

class PageController
{
    public static function index(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (isset($_SESSION["user"])) {
            $messageInstance = new Message("mysql:host=localhost;port=3306;dbname=webmessage", "root", "");
            $messages = $messageInstance->getAllMessages();

            $_SESSION["messages"] = $messages;
        }

        if (isset($_SESSION['redirected'])) {
            unset($_SESSION["redirected"]);
            $router->renderView("index");
        } else {
            unset($_SESSION["error"]);
            unset($_SESSION["success-message"]);
            $router->renderView("index");
        }
    }

    public static function logIn(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (isset($_SESSION["user"])) {
            echo '<script>';
            echo 'alert("That page is inaccessible now");';
            echo 'window.location.href = "http://localhost:8080/";';
            echo '</script>';
        } else {
            if (isset($_SESSION['redirected'])) {
                unset($_SESSION["redirected"]);
                $router->renderView("login");
            } else {
                unset($_SESSION["error"]);
                $router->renderView("login");
            }
        }
    }

    public static function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: http://localhost:8080/");
        exit;
    }

    public static function register(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (isset($_SESSION["user"])) {
            echo '<script>';
            echo 'alert("That page is inaccessible now");';
            echo 'window.location.href = "http://localhost:8080/";';
            echo '</script>';
        } else {
            if (isset($_SESSION['redirected'])) {
                unset($_SESSION["redirected"]);
                $router->renderView("register");
            } else {
                unset($_SESSION["errors"]);
                $router->renderView("register");
            }
        }
    }

    public static function about(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $router->renderView("about");
    }

    public static function vision(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $router->renderView("vision");
    }

    public static function mission(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $router->renderView("mission");
    }
}
