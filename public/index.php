<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\Router;
use app\controllers\PageController;
use app\controllers\UserController;

$router = new Router();

$router->get("/", [PageController::class, "index"]);
$router->get("/login", [PageController::class, "logIn"]);
$router->get("/logout", [PageController::class, "logout"]);
$router->get("/register", [PageController::class, "register"]);

$router->post("/login", [UserController::class, "authenticateUser"]);
$router->post("/register", [UserController::class, "createUser"]);

$router->resolve();
