<?php 
# Ввод количества задачь пользователя
do {
    $tasksCount = readline("Сколько вы запланировали задач на сегодня? ");
    # Проверка на корректность ввода
    echo (($tasksCount != intval($tasksCount)) || (intval($tasksCount) <= 0)) ? "Неверный формат числа \n" : "Добавлено ".$tasksCount." задачь \n" ;
} while (($tasksCount != intval($tasksCount)) || (intval($tasksCount) <= 0));

for ($i=0; $i <  $tasksCount; $i++) { 
    #Записываем задачи и длительность в двумерный массив
    $tasks[$i][0] = readline("Введите название задачи № ".($i+1)." ");
    echo PHP_EOL;
    $tasks[$i][1] = readline("Введите длительность задачи в часах: ");
    echo PHP_EOL;
}

echo "Вы запланировали: \n";
$timeCount = 0; # Счетчик для общего кол-ва часов
foreach($tasks as $task) {
    #Выводим задачи
    echo $task[0]. ", длительность: ".$task[1].PHP_EOL;
    # Увеличиваем счетчик часов на значения длительности задачи
    $timeCount += $task[1];
}
#Выводим итого часов
echo "Это займет всего: ".$timeCount." часов \n";
?>