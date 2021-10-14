<!--13. Создайте функцию, которая принимает на вход массив случайных чисел из диапазона [5..12]. Обходит этот массив и делает для каждого элемента следующее (пусть она оказывает побочный эффект прямо в своём теле):
Если это число равно 5 -- то выведете на экран строку "пять", если 6 -- то строку "шесть", если 7 то число "7", иначе -- строку "какое-то другое число".
Используйте для решения задачи оператор switch-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 13</title>
</head>
<body>
    <?php
    function callMeKakOnaEstt($arr) {
        foreach ($arr as $value) {
            switch ($value) {
                case 5:
                    print_r("пять<br>");
                    break;

                case 6:
                    print_r("шесть<br>");
                    break;

                case 7:
                    print_r("7<br>");
                    break;
                
                default:
                    print_r("какое-то другое число<br>");
                    break;
            }
        }
    }

    $n = 20; // Размер массива
    // Создание массива
    $arr1 = array(); 
    for ($i=0; $i < $n; $i++) { 
        $arr1[$i] = rand(5, 12);
    }

    // var_dump($arr1);
    callMeKakOnaEstt($arr1);

    ?> <!-- end php -->

</body>
</html>