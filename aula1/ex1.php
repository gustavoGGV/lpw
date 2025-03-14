<?php

function sumOfEvenNumbers(int $number1, int $number2)
{
    $evenNumbersSum = 0;

    for ($i = $number1; $i <= $number2; $i++) {
        if ($i % 2 === 0) {
            $evenNumbersSum += $i;
        }
    }

    return $evenNumbersSum;
};

function sumOfOddNumbers(int $number1, int $number2)
{
    $oddNumbersSum = 0;

    for ($i = $number1; $i <= $number2; $i++) {
        if ($i % 2 != 0) {
            $oddNumbersSum += $i;
        }
    }

    return $oddNumbersSum;
};

echo sumOfEvenNumbers(20, 70) . "<br>";
echo sumOfOddNumbers(20, 70);
