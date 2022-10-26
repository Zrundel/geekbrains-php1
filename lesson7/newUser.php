<?php
require_once 'model/UserProvider.php';
require_once 'model/User.php';
$pdo = require 'controller/db.php';
$user = new User ('zru','Sergey','zru.mail@gmail.com','male', 37, 0);
var_dump($user);
$uP = new UserProvider($pdo);
$uP->registerUser($user, 'F1gushk@');