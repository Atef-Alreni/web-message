<?php

namespace app\controllers;

use app\Router;

class PageController
{
    public static function index(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $router->renderView("index");
    }

    public static function logIn(Router $router)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (isset($_SESSION["user"])) {
            header("Location: http://localhost:8080/");
            exit;
        } else {
            $router->renderView("login");
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
            header("Location: http://localhost:8080/");
            exit;
        } else {
            $router->renderView("register");
        }
    }
}
