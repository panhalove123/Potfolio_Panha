<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/AboutController.php";
require_once "Controllers/ContactController.php";
require_once "Controllers/ProjectController.php";
require_once "Controllers/ResumeController.php";



$route = new Router();
$route->get("/", [AboutController::class, 'about']);
$route->get("/contact", [ContactController::class, 'contact']);
$route->get("/project", [ProjectController::class, 'projects']);
$route->get("/resume", [ResumeController::class, 'resume']);

$route->route();