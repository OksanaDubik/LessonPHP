<?php
$question = "В каком году произошло крещение Руси: в 740, 810 или в 988?";
$answer = (int)readline($question);


switch ($answer) {
    case $answer !== 740 && $answer !== 810 && $answer !== 988 :
        $answer = (int)readline($question);
    case $answer == 740 || $answer == 810:
        echo "Ответ не верный!!!";
        break;
    case $answer == 988 :
        echo "Поздравляю! Ответ верный!";
        break;
}
