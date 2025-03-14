<?php

function calculateArithmeticMean(array $numbers)
{
    $sumOfNumbers = 0;
    foreach ($numbers as $n) {
        $sumOfNumbers += $n;
    }
    $arithmeticMeanOfNumbers = $sumOfNumbers / count($numbers);
    return $arithmeticMeanOfNumbers;
};

echo "Média aritmética 1: " . calculateArithmeticMean(array(10, 20, 30)) . "<br>";
echo "Média aritmética 2: " . calculateArithmeticMean(array(5, 90, 9)) . "<br>";
echo "Média aritmética 3: " . calculateArithmeticMean(array(11, 22, 33));
