<?php

namespace app\util;

class Router
{
    protected array $getRoutes = [];
    protected array $postRoutes = [];

    public function get($url, $function)
    {
        $this->getRoutes[$url] = $function;
    }

    public function post($url, $function)
    {
        $this->postRoutes[$url] = $function;
    }

    public function resolve()
    {
        $currentUrl = $_SERVER["PATH_INFO"] ?? "/";
        $method = $_SERVER["REQUEST_METHOD"];

        if ($method === "GET") {
            $function = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $function = $this->postRoutes[$currentUrl] ?? null;
        }

        if ($function) {
            if ($function[1] === "logout") {
                call_user_func($function);
            } else {
                call_user_func($function, $this);
            }
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }

            include_once __DIR__ . "/../view/404.php";
        }
    }

    public function renderView($view)
    {
        include_once __DIR__ . "/../view/$view.php";
    }
}
