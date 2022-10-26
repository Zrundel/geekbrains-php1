<?php
// controller/SecurityController.php

require_once 'model/UserProvider.php';
require_once 'model/User.php';
$pdo = require 'controller/db.php'; // Подключим PDO
$error = null;
session_start();
if (isset($_POST['username'], $_POST['password'])) {
   ['username' => $username, 'password' => $password] = $_POST;

   $userProvider = new UserProvider($pdo);
   $user = $userProvider->getUserByLoginAndPass($username, $password);

   if ($user === null) {
    $error = 'Пользователь с указанными учетными данными не найден <br>  
            <a href="?action=register">Регистрация</a>';
   
        } else {
    $_SESSION['user'] = $user;
        }
 
}

if (isset($_POST['username'], $_POST['password'], $_POST['name'], 
            $_POST['email'], $_POST['sex'], $_POST['age'])) {
    $userProvider = new UserProvider($pdo);
    $user = new User ( $_POST['username'], $_POST['name'], $_POST['email'],
                       $_POST['sex'], $_POST['age'], 1);

    $userProvider->registerUser($user, $_POST['password']);
    $authUser = $userProvider->getUserByLoginAndPass($_POST['username'], $_POST['password']);
    if ($authUser === null) {
        $error = 'Что-то пошло не так обратитесь к админситратору';
       
            } else {
        $_SESSION['user'] = $authUser;
      
            }
}


if (isset($_SESSION['user'])) {
    header('Location: /');
 }
 if (isset($_GET['action']) && $_GET['action'] === 'logout') {
session_destroy();
header('Location: /'); 
}
if (isset($_GET['action']) && $_GET['action'] === 'register') {
    require_once 'view/registration.php';
    die;
} else {
    require_once 'view/signin.php'; 
}

