<?php
// model/UserProvider.php

require_once 'Task.php'; // Обязательно подключаем наш класс-сущность

class TaskProvider
{
   

   // Метод создания задачи
   public function addTask(string $taskDesc, User $user): ?User
   {
       return new Task($taskDesc, 0, $user);
   }
}
