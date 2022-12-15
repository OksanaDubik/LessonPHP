<?php
$arrOne = range(1 , 10);
$arrTwo = range(1 , 10);
$arrThird =[];
for ($i = 0; $i < 10; $i++){
    $arrThird[] += $arrOne[$i]*$arrTwo[$i];
}
print_r ($arrThird);


