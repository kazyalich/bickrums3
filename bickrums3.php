<?php
// Создание пустого массива
$numbersArray = array();

// Добавление пяти разных чисел в массив
array_push($numbersArray, 3, 7, 11, 20, 25);

// Вывод массива с использованием цикла for
foreach ($numbersArray as $number) {
    echo $number . "\n";
}

