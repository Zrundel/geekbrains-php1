<?php

require_once 'model/UserProvider.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';
$pdo = require 'controller/db.php'; // Подключим PDO
session_start();

$taskProvider = new TaskProvider($pdo);   

$user = $_SESSION['user'];
if (isset($_POST['addTask'])){
['addTask' => $desc] = $_POST;   
 $taskProvider = new TaskProvider($pdo);  
 $taskProvider->addTask($desc); 
}

$_SESSION['tasks'] = $taskProvider->getUndoneList($user, $pdo);
require_once 'view/task-list.php'; // Подключаем файл задачами

?>