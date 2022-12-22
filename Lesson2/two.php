<?php
do {$answer = (int)readline("В каком году произошло крещение Руси: в 740, 810 или в 988? \n");
    switch ($answer) {
        case "740" :
        case "810":
            echo "Ответ не верный!!!";
            break(2);
        case "988" :
            echo "Поздравляю! Ответ верный!";
            break(2);
    }
}while(true);

