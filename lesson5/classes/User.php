<?php

class User {
    private string $username;
    private string $email;
    private string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email, string $sex = "none", int $age = 0 ) 
    {
        $this->username = $username;
        $this->email = $email;
        $this->dateCreated = new DateTime(); 
        $this->$sex = $sex;
        $this->$age = $age;
    }
        // User Getters
    public function getUsername(): string {
        return $this->username ?? 'unknown';
    }

    public function getEmail(): string {
        return $this->email ?? 'unknown';
    }

    public function getSex(): string {
        return $this->sex ?? 'unknown';
    }

    public function getAge(): int {
        return $this->age ?? 'unknown';
    }

    public function getIsActive(): bool {
        return $this->isActive ?? FALSE;
    }

    public function getDateCreated(): DateTime {
        return $this->dateCreated;
    }
        // User Setters
    public function setUsername(string $username): bool {
        $this->username = $username;
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