<?php

function findItem(array $array, string $key) 
{   $result = FALSE;
    foreach ($array as $item) {
        if (is_array($item)) $result = findItem($item, $key) ;
        if ($item == $key) return TRUE;            
    }
    return $result;
}

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
            ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
            ]
    ]
 ];

$findingItem = readline("Введите название вещи с большой буквы");
$isItem = findItem($box, $findingItem);

var_dump($isItem);

?>