<!--5. Дано некоторое число длиной от 1 до 5 цифр - вывести его цифры в обратном порядке.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 5</title>
</head>
<body>
    <?php

    // Диапазон
    $min = 0;
    $max = 99999;

    // Случайное число
    $rand_n = (rand( $min , $max ) . "<br>");
    // $rand_n = 5000;
    print_r("Число: " . $rand_n . "<br>Цифры в обратном порядке:<br>");
    // Вывести число в обратном порядке
    $ouputNumber = "";

    // Если число 0 выводим сразу, т.к. не войдет в цикл.
    if ($rand_n == 0) {
        print_r($rand_n);
    }

    // Записываем в строку по одному числу в обратном порядке.
    while( $rand_n > 0 ) {
        // Добавляем очередное число
        $ouputNumber .= strval(($rand_n % 10));
        //Каждый раз делим исходное число на 10, что-бы обойти каждый его разряд.
        $rand_n = intval($rand_n / 10);
    }

    print_r($ouputNumber);
    ?> <!-- end php -->

</body>
</html>