<?php
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$checkForParity = function ($num) {
    echo($num % 2 === 0 ? "$num четное" . PHP_EOL : "$num нечетное" . PHP_EOL);
};
array_map($checkForParity, $array);


//2 Вариант
//$checkForParity = function ($num)
//{
//    if($num & 1 ){
//        echo "$num нечетное" . PHP_EOL;
//    }else{
//        echo "$num четное" . PHP_EOL ;
//    }
//};
//array_map($checkForParity, $array);