<!--10. Задайте случайным образом массив из N элементов (целых чисел). Найдите максимальное число и напечатайте его.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 10</title>
</head>
<body>
    <?php
    $n = rand(1, 100);
    $max = PHP_INT_MIN;

    // Создаем массив
    $arr = array();
    // Забиваем случайными значениями
    for ($i=0; $i < $n; $i++) {
        $arr[$i] = rand();
    }

    // Находим максимальное значение
    for ($i=0; $i < $n; $i++) { 
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    print_r($max);   

    ?> <!-- end php -->

</body>
</html>