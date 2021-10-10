<!--4. Вывести на экран n-ное число Фибоначчи. Пример последовательности:-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>task 4</title>
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

    // Переменная для хранения чисел
    $temp_prev = 0; // Предыдущее число
    $temp_cur = 1;  // Текущее число

    // Вывести 
    for ($i = 1; $i <= $n; $i++) {
        print_r($temp_prev . ", ");
        $temp = $temp_cur;
        $temp_cur += $temp_prev;
        $temp_prev = $temp;
    }
    ?> <!-- end php -->

</body>
</html>