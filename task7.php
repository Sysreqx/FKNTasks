<!--7. Задать массив из 7-ми элементов, заполнить его случайными значениями в одном цикле, а в другом цикле вывести эти значения на экран.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 7</title>
</head>
<body>
    <?php
    // Создаем массив
    $arr = array();
    // Забиваем случайными значениями
    for ($i=0; $i < 7; $i++) { 
        array_push($arr, rand());
    }

    // Выводим значения
    foreach ($arr as $key => $value) {
        print_r($value . " <br>");
    }


    ?> <!-- end php -->

</body>
</html>