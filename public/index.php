<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\util\Router;
use app\controllers\PageController;
use app\controllers\UserController;
use app\controllers\MessageController;

$router = new Router();

$router->get("/", [PageController::class, "index"]);
$router->get("/login", [PageController::class, "logIn"]);
$router->get("/logout", [PageController::class, "logout"]);
$router->get("/register", [PageController::class, "register"]);
$router->get("/about", [PageController::class, "about"]);
$router->get("/vision", [PageController::class, "vision"]);
$router->get("/mission", [PageController::class, "mission"]);

$router->post("/login", [UserController::class, "authenticateUser"]);
$router->post("/register", [UserController::class, "createUser"]);

$router->post("/addmessage", [MessageController::class, "addMessage"]);

$router->resolve();
