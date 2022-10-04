<?php
//Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс
//должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority
//(int), isDone (bool) и обязательное user (User). В качества класса пользователя воспользуйтесь
//разработанным на уроке. Класс Task должен содержать все необходимые для взаимодействия
//со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение
//свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а
//также обновляющий свойства dateUpdated и dateDone.

require_once "classes/User.php";
require_once "classes/Task.php";

$user = new User('Zru', 'zru.mail@gmail.com', 'male', 37);

$testTask = new Task('Посмотреть лекцию GeekBrains', 5, $user);

var_dump($testTask);

$testTask->setDescription('Выполнить домашнее задание');

var_dump($testTask);

$testTask->markAsDone();

var_dump($testTask);
?>