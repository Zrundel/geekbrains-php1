<?php
// model/UserProvider.php

require_once 'User.php'; // Обязательно подключаем наш класс-сущность

class UserProvider
{
   //Подколючение к МуSQL
   private PDO $pdo;
   public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   // Метод получения пользователя. Если данные не совпали, вернет null
   public function getUserByLoginAndPass(string $username, string $password): ?User
   {
    $statement = $this->pdo->prepare(
        'SELECT id, username, name, email, sex, age, isActive, dateCreated
        FROM users WHERE username = :username AND password = :password 
        LIMIT 1'
        );
    $statement->execute([
        'username' => $username,
        'password' => md5($password)
        ]);

    $result = $statement->fetch();
    
    if ($result) {
        return new User (
            $result['username'],
            $result['name'],
            $result['email'],
            $result['sex'],
            $result['age'],
            $result['isActive'],
        );
    } else return null;
    // fetch может вернуть false, а мы поддерживаем только null и User
   }

   //Метод регистрации пользователя 
   public function registerUser(User $user, string $plainPassword): bool{
    $statement = $this->pdo->prepare(
        'INSERT INTO users (username, password, name, email, sex, age, isActive, dateCreated) 
        VALUES (:username, :password, :name, :email, :sex, :age, :isActive, :dateCreated)'
        );
        $phptime = new DateTime;
    return $statement->execute([
        'username' => $user->getUsername(),
        'password' => md5($plainPassword),
        'name' => $user->getName(),
        'email' => $user->getEmail(),
        'sex' => $user->getSex(),
        'age' => $user->getAge(),
        'isActive' => $user->getIsActive(),
        'dateCreated' => $phptime->format('Y-m-d H:i:s') 
    ]);
    }

}
