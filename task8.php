<!--8. Задать двумерный массив размерностью m на n (MxN) элементов (m и n вынести в область определения констант), заполнить его случайными значениями и вывести их на экран уже после того, как весь массив будет заполнен (т.е. заполнять и выводить в разных группах циклов).-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 8</title>
</head>
<body>
    <?php
    // Определяем костанты от 1 до 10
    define("N", rand(1, 10));
    define("M", rand(1, 10));
    // const N = rand(1, 10);
    // const M = rand(1, 10);

    // Выводим значения констант
    print_r("N = " . N . " <br>");
    print_r("M = " . M . " <br>");

    // Создаем массив
    $arr = array();
    // Забиваем случайными значениями
    for ($i=0; $i < N; $i++) {
        for ($j=0; $j < M; $j++) { 
            $arr[$i][$j] = rand();
        }
    }

    // Выводим значения
    foreach ($arr as $key => $value) {
        foreach ($value as $key => $value2) {
            print_r($value2 . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        }
        print_r("<br>");
    }


    ?> <!-- end php -->

</body>
</html>