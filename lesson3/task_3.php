<?php
 // Исходный массив
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Сергеев Сергей' => 3,
        'Петров Петр' => 2,
        'Кириллов Кирилл' => 5,
        'Валисьев Василий' => 3,
        'Витальев Виталий' => 4,
        'Лосев Лось' => 2,
        'Аннютина Анна' => 3,
        'Зоева Зоя' => 5,
        'Конев Конь' => 5
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Александров Александр' => 2,
        'Надеждина Надежда' => 5,
        'Евгеньева Женя' => 3,
        'Дмиртриев Дмитрий' => 5,
        'Егоров Егор' => 2,
        'Максимов Максим' => 4,
        'Дарьина Дарья' => 2,
        'Машутина Мария' => 5,
        'Пахомов Пахом' => 3
    ],

    'ВЕБ20' => [
        'Егорова Надежда' => 4,
        'Микрюкова Наталья' => 2,
        'Зубков Сергей' => 2,
        'Анисимова Елена' => 3,
        'Сайфутдинова Ксания' => 5,
        'Шавва Ольга' => 2,
        'Кисленко Максим' => 4,
        'Первушина Дарья' => 5,
        'Прудивус Мария' => 5,
        'Пахомов Сергей' => 3
    ]
 ];
 
$maxAverage = 0;
$bestGroup = '';
foreach ($students as $groupName => $group ) {
    $avarage = 0;
    foreach($group as $name => $grade) {
        $avarage += $grade;
    }
    $avarage /= count($group);
   if ($avarage > $maxAverage) {
    $maxAverage = $avarage;
    $bestGroup = $groupName;
   }
}
echo "Лучшая группа по среднему баллу: ".$bestGroup." - ".($maxAverage)." баллов. \n";

$deductionList = [];
foreach ($students as $groupName => $group) {
    
    foreach ($group as $name => $grade) {
       if ($grade < 3) {
            $deductionList[$groupName][] = $name;
       }
    }
}
print_r($deductionList);
?>