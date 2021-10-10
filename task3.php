<!--3. Вывести на экран N случайных чисел (каждое с новой строки). Для каждого числа, начиная со второго, рядом выводить - больше ли оно предыдущего или меньше.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 3</title>
</head>
<body>
    <!-- Для считывания данных с клавиатуры -->
    <form name="test" action="" method="post">
         <p>Введите число: <input type="number" name="numberN" /></p>
         <p><input type="submit" /></p>
    </form>

    <?php
    // Для считывания данных с клавиатуры
    $n = $_POST["numberN"];

    // Переменная для суммы
    $sum = 0;
    // Переменная для хранения случайного числа
    $temp_prev = 0; // Предыдущее число
    $temp_cur = 0;  // Текущее число

    // Диапазон
    $min = -21;
    $max = 35;
    $bigger = " больше ";
    $less = " меньше ";
    $eqvl = " равно ";

    // Вывести 
    for ($i = 1; $i <= $n; $i++) {
        if ($i == 1) {
            $temp_cur = rand( $min , $max );
            print_r($temp_cur . "<br>");
        } else {
            $temp_prev = $temp_cur;
            $temp_cur = rand( $min , $max );
            if ($temp_cur > $temp_prev) {
                print_r($temp_cur . $bigger . $temp_prev . "<br>");
            } elseif ($temp_cur < $temp_prev) {
                print_r($temp_cur . $less . $temp_prev . "<br>");
            } else {
                print_r($temp_cur . $eqvl . $temp_prev . "<br>");
            }
        }
    }
    ?> <!-- end php -->

</body>
</html>