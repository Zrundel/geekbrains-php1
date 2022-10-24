<?php
// controller/SecurityController.php

require_once 'model/UserProvider.php';
session_start();
$error = null;
if (isset($_POST['username'], $_POST['password'])) {
   ['username' => $username, 'password' => $password] = $_POST;

   $userProvider = new UserProvider();
   $user = $userProvider->getByUsernameAndPassword($username, $password);

   if ($user === null) {
    $error = 'Пользователь с указанными учетными данными не найден';
        } else {
    $_SESSION['user'] = $user;
        }
 
}

if (isset($_SESSION['user'])) {
    header('Location: /');
 }
 if (isset($_GET['action']) && $_GET['action'] === 'logout') {
session_destroy();
header('Location: /'); 
}
require_once 'view/signin.php';
