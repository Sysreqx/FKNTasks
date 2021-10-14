<!--11. Задайте случайным образом массив из 20-ти элементов (целых чисел). Найдите минимальное число и напечатайте его.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 11</title>
</head>
<body>
    <?php
    $n = 20;
    $min = PHP_INT_MAX;

    // Создаем массив
    $arr = array();
    // Забиваем случайными значениями
    for ($i=0; $i < $n; $i++) {
        $arr[$i] = rand();
    }

    // Находим минимальное значение
    for ($i=0; $i < $n; $i++) { 
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }

    // foreach ($arr as $key => $value) {
    //     print_r($value . "<br>");
    // }

    // print_r("<br>");
    // print_r("<br>");
    // print_r("<br>");
    // print_r("<br>");

    print_r($min);   

    ?> <!-- end php -->

</body>
</html>