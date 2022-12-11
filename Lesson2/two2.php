<?php
$name = readline("Как вас зовут?");
$amount= (int)readline("Количество задач, запланированных на день?");
$questions = '';
$totalTime = 0;
while($amount<=0 || $amount>10){
    echo $amount ;
    echo ", запланируйте количество задач в диапазоне от 0 до 10\n";
    $amount= (int)readline("Количество задач, запланированных на день?");
}
while($amount>0 && $amount<=10){
    for($i=1; $i<=$amount; $i++){
        $questions .= "-" . readline("Какая задача стоит перед вами сегодня?") . "(" . $time= (int)readline("Сколько примерно времени эта задача займет?") . "ч )\n";
        $totalTime += $time;
    };
    echo "$name, сегодня у вас запланировано $amount приоритетных задачи на день: \n $questions";
    echo "Примерное время выполнения плана = $totalTime ч\n";
    break;
};

