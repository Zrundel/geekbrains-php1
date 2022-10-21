<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
<h1><?=$pageHeader?></h1>
    <?session_start(); ?>

   <?php if (isset($_SESSION['user'])) : ?>
   <p>Рады вас приветствовать, <?=$_SESSION['user']->getUsername()?></p>
   <a href="?controller=tasks">Посмотреть задачи</a>
   <a href="?action=logout">Выйти</a>
   <?php else :?>
    <a href="?controller=security">Войти</a>
   <?php endif ?>
   

</body>
