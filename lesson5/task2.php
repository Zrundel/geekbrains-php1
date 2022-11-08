<?php
//Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author
//(User), task (Task) и text (string). TaskService должен реализовывать статичный метод
//addComment(User, Task, text), добавляющий к задаче комментарий пользователя. Отношение
//между классами задачи и комментария должны быть построены по типу ассоциация, поэтому
//необходимо добавить соответствующее свойство и методы классу Task.
require_once "classes/User.php";
require_once "classes/Task.php";
require_once "classes/Comment.php";
require_once "classes/TaskService.php";

$user = new User('Zru', 'zru.mail@gmail.com', 'male', 37);
$testTask = new Task('Посмотреть лекцию GeekBrains', 5, $user);

//var_dump($testTask);

$testTask->setDescription('Выполнить домашнее задание');

//var_dump($testTask);

$testTask->markAsDone();
//var_dump($testTask);

TaskService::addComment($user, $testTask, 'Первый нах!');
TaskService::addComment($user, $testTask, 'Афтар жжет');
TaskService::addComment($user, $testTask, 'Выпей йаду %username%');

foreach ($testTask->getComments() as $comment) {
    
    echo $testTask->getUser()->getUsername().' написал:  '.$comment->getText().PHP_EOL;
}

?>
