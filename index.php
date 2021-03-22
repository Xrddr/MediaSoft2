<?php

    $arr1 = [

        'Белый' => 1,
        'Черный' => 2,
        'Желтый' => 3,
        'Оранжевый' => 4,
        'Красный' => 5,
        'Синий' => 6,
        'Голубой' => 7,
        'Коричневый' => 8,
        'Зеленый' => 9,
        'Фиолетовый' => 10

    ];

    $arr2 = [

        'One' => 1,
        'Two' => 2,
        'Three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
        'ten' => 10

    ];

    $arr3 = [

        'A' => 1,
        'B' => 2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
        'G' => 7,
        'H' => 8,
        'I' => 9,
        'J' => 10,
        'K' => 11,
        'l' => 12

    ]
?>



<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> MediaSoft </title>
    <style>
        .a {
            font-size: 30px;
            color: #000000;
        }
    </style>
</head>
<div align="center">
    <div>
        <h1 class="a">Colors</h1>
        <?php foreach ($arr1 as $num => $v) {

            echo "$num = $v" .'<br>';
        }

        ?>
    </div>
<br>
    <div>
        <h2 class="a">Numbers</h2>
        <?php foreach ($arr2 as $num => $b) {

            echo "$num = $b" .'<br>';
        }

        ?>
    </div>
<br>
    <div >
        <h3 class="a">ABC</h3>
        <?php foreach ($arr3 as $abc => $s) {

            echo "$abc = $s" .'<br>';
        }

        ?>
    </div>
</div>
</body>
</html>
