<?php

$randomArray = array_rand(range(0, 100), 10);

function createNewArray(array $arr ): array
{
    $arr =
        [
            "max" => max($arr),
            "min" => min($arr),
            "average" => array_sum($arr) / count($arr)
        ];
    return $arr;
}
echo  print_r($randomArray);

print_r(createNewArray($randomArray));
