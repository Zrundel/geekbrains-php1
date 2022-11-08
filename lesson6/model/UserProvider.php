<?php
// model/UserProvider.php

require_once 'User.php'; // Обязательно подключаем наш класс-сущность

class UserProvider
{
   // Тут храним учетные данные
   private array $accounts = [
       'geekbrains' => 'password123',
       'zru' => '123'
   ];

   // Метод получения пользователя. Если данные не совпали, вернет null
   public function getByUsernameAndPassword(string $username, string $password): ?User
   {
       $expectedPassword = $this->accounts[$username] ?? null;
       if ($expectedPassword === $password) {
           return new User($username, 'example@mail.ru', 'male', 25);
       }

       return null;
   }
}
