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

    foreach ($box as $boxValue) {
        echo($boxValue == $itemName ? "Нашли: " . $itemName . "\n" : "Не нашли: " . $itemName . "\n");

        if (is_array($boxValue)) {
            elementSearch($boxValue, $itemName);
        }
    }
}

elementSearch($box, 'Книг');



