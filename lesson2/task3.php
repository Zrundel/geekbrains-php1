<?php
#Создаем массив с пальцами
$fingers = array( "Большой", "Указательный", "Средний", "Безымянный", "Мизинец");

do {
    $number = readline("Введите положительное число ");
    # Проверка на корректность ввода
    echo (($number != intval($number)) || (intval($number) <= 0)) ? "Неверный формат числа \n" : "Считаем до ".$number."\n" ;
} while (($number != intval($number)) || (intval($number) <= 0));

$direction = 1;
$fingersPointer = 0;
for ($i=0; $i < $number-1; $i++) { 
    if ($fingersPointer == 4) {
        $direction = -1;
    }
    if ($fingersPointer == 0) {
        $direction = 1;
    }
    
    $fingersPointer += $direction;   
}
echo $fingers[$fingersPointer].PHP_EOL;
?>