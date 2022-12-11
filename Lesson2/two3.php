<?php
$numeric=(int)readline(" Загадай число ");
$text = "Номер пальца = ";
$number = $numeric % 8;

switch ($number){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: echo $text .  $number;
    break;
    case 6: $number = ($numeric - 2) % 8;
        echo $text . $number;
        break;
    case 7: $number = ($numeric - 4) % 8;
        echo $text . $number;
        break;
    case 0: $number = ($numeric - 6) % 8;
        echo $text . $number;
        break;
}