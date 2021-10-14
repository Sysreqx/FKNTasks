<!--12. Даны два массива по 20 элементов каждый (заполните случайными числами, так чтобы среди элементов массива при очередном запуске программы могли встретиться и отрицательные и положительные числа).
Сравните каждый 3-ий элемент 1-ого массива с каждый 2-ым элементов 2-ого массива - сравнение проводите пока не закончится та выборка, которая короче.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 12</title>
</head>
<body>
    <?php
    $n = 20;
    $min = -1000;
    $max = 1000;

    // Создаем массив
    $arr1 = array();
    $arr2 = array();
    // Массив для 3 и 2 элементов
    $arr1Temp = array();
    $arr2Temp = array();

    // Забиваем случайными значениями
    for ($i=0; $i < $n; $i++) {
        $arr1[$i] = rand($min, $max);
        $arr2[$i] = rand($min, $max);
        // Забиваем каждый третий элемент
        if ((($i + 1) % 3) == 0) {
            array_push($arr1Temp, $arr1[$i]);
        }
        // Забиваем каждый второй элемент
        if ((($i + 1) % 2) == 0) {
            array_push($arr2Temp, $arr2[$i]);
        }
    }
    
    // var_dump($arr1); print_r("<br>");
    // var_dump($arr2); print_r("<br>");
    // var_dump($arr1Temp); print_r("<br>");
    // var_dump($arr2Temp); print_r("<br>");
    //  print_r("<br>");
    //   print_r("<br>");

    // Сравниваем каждый 3 элемент первого массива с каждым 2 элементом второго массива
    for ($i=0; $i < count($arr1Temp); $i++) { 
        if ($arr1Temp[$i] > $arr2Temp[$i]) {
            print_r($arr1Temp[$i] . " больше " . $arr2Temp[$i]);
        } elseif ($arr1Temp[$i] < $arr2Temp[$i]) {
            print_r($arr1Temp[$i] . " меньше " . $arr2Temp[$i]);
        } else {
            print_r($arr1Temp[$i] . " равен " . $arr2Temp[$i]);
        }
        print_r("<br>");
    }

    ?> <!-- end php -->

</body>
</html>