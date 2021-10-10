<!--2. Вывести на экран сумму N случайных чисел.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 2</title>
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
    $temp = 0;

    // Диапазон
    $min = -21;
    $max = 35;

    // Вывести 
    print_r("Сумма чисел: ");
    for ($i = 1; $i <= $n; $i++) {
        $temp = rand( $min , $max );
        print_r("(" . $temp . ")" . " + ");
        $sum += $temp;
    }
    print_r("<br>Равна: " . $sum);
    ?>

</body>
</html>