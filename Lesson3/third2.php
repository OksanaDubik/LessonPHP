<?php
$name = readline("Как зовут именинника? ");
$wishes = ['чудес', 'случаев', 'приключений', 'путешествий', 'развлечений', 'радостей', 'улыбок', 'почестей', 'озарений'];
$wishesNew = [];
while (count($wishesNew) < 3) {
    $wishesKeys = array_rand($wishes);
    if(!in_array($wishes[$wishesKeys], $wishesNew)){
        $wishesNew[] = $wishes[$wishesKeys];
    }
  }

$epithets = ['сказочных', 'счастливых', 'увлекательных', 'восхитительных', 'ярких', 'отличных', 'искрящихся', 'королевских', 'ярких'];
$epithetsNew = [];
while (count($epithetsNew) < 3) {
    $epithetsKeys = array_rand($epithets);
    if(!in_array($epithets[$epithetsKeys], $epithetsNew)){
        $epithetsNew[] = $epithets[$epithetsKeys];
    }
}

$newArray = [];
for($i=0; $i<3; $i++){
    $newArray[] = $epithetsNew[$i] ." ". $wishesNew[$i];
}

$myLastElement = "и " . end($newArray);
array_pop($newArray);

$implodeArr = implode( ", ", $newArray);
echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $implodeArr $myLastElement!";


//ВТОРОЙ ВАРИАНТ//
//$name = readline("Как зовут именинника?");
//$wishes = ['чудес', 'случаев', 'приключений', 'путешествий', 'развлечений', 'радостей', 'улыбок', 'почестей', 'озарений'];
//shuffle($wishes);
//
//$epithets = ['сказочных', 'счастливых', 'увлекательных', 'восхитительных', 'ярких', 'отличных', 'искрящихся', 'королевских', 'ярких'];
//shuffle($epithets);
//
//$array = "";
//$connectArrays = array_combine($epithets, $wishes);
//$limitArrays = array_slice($connectArrays, 0, 3);
//
//foreach ($limitArrays as $epithetsIndex => $wishesValue){
//    $array  .=  $epithetsIndex . " " . $wishesValue . ",";
//}
//
//echo "Дорогой $name! от всего сердца поздравляю тебя с днем рождения, желаю $array!";


