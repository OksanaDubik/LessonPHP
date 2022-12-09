<?php
$name = readline("Как вас зовут?");

$plan = (int)readline("$name, какое количество задач запланировано на день?");

for($i = 0; $i < $plan; $i++){

    $business[$i] = readline("Какая задача стоит перед вами сегодня?");
    $time1[$i] = (int)readline("Сколько примерно времени эта задача займет?");

//    $business += $business[$i];
//    $time1 += $time1[$i];
    echo "-$business ($time1 ч)\n";
}


