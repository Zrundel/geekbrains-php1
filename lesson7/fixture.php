<?php
// fixture.php
$pdo = require 'controller/db.php';

// Создаем таблицу для юзеров
$queryUsers = $pdo->prepare('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    sex VARCHAR(10),
    age SMALLINT(3),
    isActive INT (1) NOT NULL,
    dateCreated DATETIME
    )');
    $result = $queryUsers->execute(); 
    if ($result) {
        echo 'Инициализация USERS прошла успешно'.PHP_EOL;
    } else {
        var_dump($pdo->errorInfo());
    }
// Создаем таблицу для задач 
$queryTasks = $pdo->prepare('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(100) NOT NULL,
    dateCreated DATETIME NOT NULL, 
    dateUpdated DATETIME NOT NULL, 
    dateDone DATETIME, 
    priority SMALLINT(1),
    isDone SMALLINT(1),
    user_id INT
    )');
$result = $queryTasks->execute();
if ($result) {
    echo 'Инициализация TASKS прошла успешно'.PHP_EOL;
} else {
    var_dump($pdo->errorInfo());
}
?>
