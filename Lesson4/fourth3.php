<?php
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];


function elementSearch($box, $itemName)
{
    $boolArr = [];
    foreach ($box as $boxValue) {

        if (!is_array($boxValue) && $boxValue == $itemName) {
            $boolArr = ["true"];
        } else {
           $boolArr = ["false"];
        };

       if (is_array($boxValue)){
        elementSearch($boxValue, $itemName);
        }


//               if($boxValue == $itemName)
//               {
//                   echo "true";
//               }
//               else {
//                   echo "False";
//               }

//        if (is_array($boxValue){
//            elementSearch($boxValue, $itemName);
//        }
    }
    echo (in_array("true", $boolArr) ? "true" : "false");

}

//
//    foreach ($box as $boxValue){
//        if(!is_array($boxValue)) {
//            foreach ($boxValue as $boxTwoValue) {
//                if (in_array($itemName, $boxTwoValue, true)) {
//                    echo "true";
//                } else {
//                    echo "False";
//                }
//            }
//        }
//        else{
//            elementSearch ($boxValue, $itemName);
//        }
//
//    }


elementSearch($box, 'Настольная игра');

