<?php

require_once 'model/UserProvider.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';
session_start();
if (!isset($_COOKIE['task_count'])) {
    $expires = time() + 186400;
    setcookie('task_count', 0, $expires);
    }
if (isset($_POST['task'])){
    $taskProvider = new TaskProvider();
    $taskIndex = $_COOKIE['task_count'];
    var_dump($taskIndex) ;
    var_dump($taskProvider);
    $_COOKIE['tasks'][$taskIndex] = $taskProvider->addTask($_POST['task'], $_SESSION['user']);
}
require_once 'view/task-list.php'; // Подключаем файл задачами

?>