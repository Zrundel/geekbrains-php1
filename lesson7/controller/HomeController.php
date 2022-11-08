<?php

require_once 'model/User.php';
$pageHeader = 'Добро пожаловать'; // Объявим какую-нибудь переменную, которую будем использовать в view/home.php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $username = $user->getUsername();
}
   else {
    $username = null;
   }
   
require_once 'view/home.php'; // Подключаем файл с внешним видом

?>