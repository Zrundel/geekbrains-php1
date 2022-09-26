<?php
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2]; 


$func = function(int $value): string {

    return ($value % 2 == 0) ? "Четное" : "Нечетное";
};

print_r(array_map($func, $array));

?>