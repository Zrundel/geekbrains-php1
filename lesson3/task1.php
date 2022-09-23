<?php

    $array_length = readline("Введите размер массивов ");
    //Генерируем массивы 
    for ($i=0; $i < $array_length; $i++) { 
       $array1[i] = random_int(0 , 100);
       $array2[i] = random_int(0 , 100);
    }

    //Выведем массивы для наглядности
    echo "Первый массив: ".implode('| ', $array1)."\n";
    echo "Второй массив: ".implode('| ', $array2)."\n";

    // Поэлементно перемножаем массивы и записываем массив с результатами 
    for ($i=0; $i < $array_length; $i++) { 
        $resultArray[i] = $array1[i] * $array2[i];
     }
?>
