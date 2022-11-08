<?php
//Генерируем массив
for ($i=0; $i < 20; $i++) 
{ 
    $array[$i] = random_int( -100 , 100);
}


function mathArray( array $array ): array
{   $maxItem = 0;
    $minItem = 0;
    $elementsSumm = 0;
    foreach ($array as $item) {
    if ($item > $maxItem) $maxItem = $item;
    if ($item < $minItem) $minItem = $item;
    $elementsSumm += $item;
    }
    return [ 
        "max" => $maxItem,
        "min" => $minItem,
        "avg" => $elementsSumm/count($array)
    ];
}
echo "Исходный массив: \n";
print_r ($array);

echo "\n Вычесленные значения: \n" ;
print_r(mathArray($array));
?>