<head>
   <meta charset="UTF-8">
   <title>Ваши задачи</title>
</head>
<body>
<h1>Ваши задачи</h1>
<form method="post" >
         
                <label>Введите задачу</label> 
                <input name = "addTask" type="text" placeholder="Погладь кота" required="" autofocus="">
                <button type="submit">Добавить</button>
                <div >
                 <? //var_dump($_SESSION)  ;?>
                </div>
            </form>
           
            <ol>
                <?php foreach ($_SESSION['tasks'] as $task ):?>
                <li><?=$task['description']?></li>
                <?endforeach; ?>
            </ol>

            
    
</body>
