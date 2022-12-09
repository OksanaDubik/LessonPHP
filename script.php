
<?php
//Задание № 2
//$name = readline("Как вас зовут?");
//echo "$name! ";
//$age =(int)readline("Сколько вам лет?");
//echo "Вас зовут $name, вам $age  лет.";

//Задание №3 вариант1
//$name = readline("Как вас зовут?");
//echo "$name, ";
//$businessFirst =readline("Какая задача стоит перед вами сегодня?");
//$timeFirst = (int)readline("Сколько примерно времени эта задача займет?");
//
//$businessSecond =readline("Какая задача стоит перед вами сегодня?");
//$timeSecond = (int)readline("Сколько примерно времени эта задача займет?");
//
//$businessThird =readline("Какая задача стоит перед вами сегодня?");
//$timeThird = (int)readline("Сколько примерно времени эта задача займет?");
//
//$totalTime = (int)$timeFirst + (int)$timeSecond + (int)$timeThird;
//
//echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день: \n
// - $businessFirst ($timeFirst ч) \n
// - $businessSecond ($timeSecond ч) \n
// - $businessThird ($timeThird ч) \n
// Примерное время выполнения плана = $totalTime ч\n";
//Задание №3 вариант2
$name = readline("Как вас зовут?");
echo "$name, ";
$business1 =readline("Какая задача стоит перед вами сегодня?");
$time1 = (int)readline("Сколько примерно времени эта задача займет?");

$business2 =readline("Какая задача стоит перед вами сегодня?");
$time2 = (int)readline("Сколько примерно времени эта задача займет?");

$business3 =readline("Какая задача стоит перед вами сегодня?");
$time3 = (int)readline("Сколько примерно времени эта задача займет?");

$totalTime = (int)$time1 + (int)$time2 + (int)$time3;
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день: \n";
for($i=1; $i<=3; $i++){
    $business = "business$i";
    $time = "time$i";
     echo  "-" . $$business ."(" . $$time . " ч) \n";
};
echo "Примерное время выполнения плана = $totalTime ч\n";



