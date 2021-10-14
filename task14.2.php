<!--14. Есть два массива "a" и "b". На вход вашей программе подаётся массив "a" случайных чисел (10 элементов) из диапазона от 1 до 20. Задача: вывести на экран все числа, которые не содержатся в массиве "b"

$b = [12, 5, 17, 6, 4];

Решите эту задачу двумя способами:

Без использования in_array()(link is external)
С использованием in_array()(link is external) (что проще)-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 14/2</title>
</head>
<body>
    <?php
    // Функция возвращающая разность массива A и массива B
    function Complement($arr) {
        $arrTemp = array();
        $b = [12, 5, 17, 6, 4];

        // Проверка если, элемент с массива А отсутсвует в массиве B, то добавить в третий массив С ИСПОЛЬЗОВАНИЕМ in_array
        for ($i=0; $i < count($arr); $i++) {
            if ((in_array($arr[$i], $b)) == false) {
                array_push($arrTemp, $arr[$i]);
            }
        }

        return $arrTemp;
    }

    // Массив
    $a = array();
    $b = [12, 5, 17, 6, 4];

    // Диапазон
    $min = 1;
    $max = 20;
    // Длина массива
    $a_len = 10;

    // Забить массив А
    for ($i=0; $i < $a_len; $i++) { 
        array_push($a, rand($min, $max));
    }

    // Вызвать функцию
    $arrComp = Complement($a);

    // Вывести элементы
    foreach ($arrComp as $value) {
        print_r($value . " ");
    } 
 


    ?> <!-- end php -->

</body>
</html>