<?php

class User {
    private int $id;
    private string $username;
    private string $name;
    private string $email;
    private string $sex;
    private ?int $age;
    private int $isActive = 0;
    private string $dateCreated;

    function __construct(
                        string $username, 
                        string $name, 
                        string $email, 
                        string $sex, 
                        int $age,  
                        int $isActive
                        )
    {   
        $this->username = $username;
        $this->name = $name;
        $this->email = $email;
        $this->sex = $sex;
        $this->age = $age;
        $this->isActive = $isActive;
        $pdo = require 'controller/db.php';
        $statement = $pdo->prepare(
        'SELECT id FROM users WHERE username = :username 
        LIMIT 1'
        );
        $statement->execute(['username' => $username ]);
        $result = $statement->fetch();
        $this->id = $result['id'];

    }
        // User Getters
    public function getId(): string {
        return $this->id ?? 'unknown';
    }   
    public function getUsername(): string {
        return $this->username ?? 'unknown';
    }

    public function getName(): string {
        return $this->name ?? 'unknown';
    }

    public function getEmail(): string {
        return $this->email ?? 'unknown';
    }

    public function getSex(): string {
        return $this->sex ?? 'unknown';
    }

    public function getAge(): int {
        return $this->age ?? '0';
    }

    public function getIsActive(): int {
        return $this->isActive ?? FALSE;
    }

    public function getDateCreated(): string {
        return $this->dateCreated;
    }
        // User Setters
    public function setId(string $id): bool {
        $this->id = $id;
        return TRUE;
    }

    public function setUsername(string $username): bool {
        $this->username = $username;
        return TRUE;
    }
    public function setName(string $name): bool {
        $this->name = $name;
        return TRUE;
    }

    public function setEmail(string $email): bool {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return TRUE;
         } 
         else {
            return FALSE;
         }
       
    }

    public function setSex( string $sex): bool {
        if ($sex == 'male' || $sex == 'female') {
            $this->sex = $sex;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function setAge( int $age): bool {
        if ($age > 0) {
            $this->age = $age;
            return true;
        } else {
            return false;
        }
    }

    public function setIsActive(bool $isActive): bool {
        $this->isActive = $isActive;
        return true;
    }
}

?>