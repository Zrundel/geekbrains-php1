<?php
//index.php

if (isset($_GET['action']) && ($_GET['action'] === 'logout' || $_GET['action'] === 'register' )) 
{
    require_once 'controller/SecurityController.php';
}

$controller = $_GET['controller'] ?? 'home';
$routes = require 'controller/routes.php';

require_once $routes[$controller];
?>