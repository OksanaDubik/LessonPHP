<?php
$name = readline("Как вас зовут?");
$questions = '';
$totalTime = 0;

do {
    $amount = (int)readline("Количество задач, запланированных на день, в диапазоне от 0 до 10? \n");

    if ($amount > 0 && $amount <= 10) {

        for ($i = 1; $i <= $amount; $i++) {
            $business = readline("Какая задача стоит перед вами сегодня?");
            $time = (int)readline("Сколько примерно времени эта задача займет?");
            $questions .= "- $business ({$time}ч)\n";
            $totalTime += (int)$time;
        }
        echo "$name, сегодня у вас запланировано $amount приоритетных задачи на день: \n $questions";
        echo "Примерное время выполнения плана = {$totalTime}ч\n";
        break 1;
    }

} while (true);
