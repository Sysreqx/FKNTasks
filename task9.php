<!--9.1. Задайте случайным образом массив из N элементов. Выведите его на экран "ёлочкой". Вот начало такого вывода:

9.2. Второй вариант - сделайте то же самое, но не используйте массив: у вас есть переменная N, выведете на экран, все числа до N, по тому же принципе что и выше, например, если N=9, то получим:-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 9</title>
</head>
<body>
    <?php
    $n = rand(1, 100);
    $cnt = 0;
    $newLine = 1;

    // Создаем массив
    $arr = array();
    // Забиваем случайными значениями
    for ($i=0; $i < $n; $i++) {
        $arr[$i] = rand();
    }

    foreach ($arr as $key => $value) {
        print_r($value . "\t");
        $cnt++;

        // Когда счетчик достигает значения, перенос на новую строку
        if ($cnt == $newLine) {
            $cnt = 0;
            $newLine++;
            print_r("<br>");
        }
    }
    print_r("<br>");
    print_r("<br>");


    // Задание 9.2
    $cnt = 0;
    $newLine = 1;
    // Выводим значения Задание 9.2
    for ($i=1; $i <= $n; $i++) { 
        print_r($i . "\t");
        $cnt++;

        // Когда счетчик достигает значения, перенос на новую строку
        if ($cnt == $newLine) {
            $cnt = 0;
            $newLine++;
            print_r("<br>");
        }
    }


    ?> <!-- end php -->

</body>
</html>