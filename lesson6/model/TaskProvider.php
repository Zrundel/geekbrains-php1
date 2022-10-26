<?php
// model/UserProvider.php

require_once 'Task.php'; // Обязательно подключаем наш класс-сущность


class TaskProvider
{
   // Метод создания задачи
   public function addTask(string $taskDesc, User $user): ?Task
   {    
        return new Task ($_COOKIE['task_count'], $taskDesc, 0, $user);
   }
}
