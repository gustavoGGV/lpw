<?php

function calculateRectangleArea(int $base, int $height)
{
    $rectangleArea = $base * $height;

    return $rectangleArea;
};

$rectangle1 = array('base' => 10, 'height' => 20);
$rectangle2 = array('base' => 30, 'height' => 15);
$rectangle3 = array('base' => 5, 'height' => 24);

$rectangles = array($rectangle1, $rectangle2, $rectangle3);

$areaNumber = 1;
foreach ($rectangles as $rectangle) {
    echo "Área " . $areaNumber . ": " . calculateRectangleArea($rectangle['base'], $rectangle['height']) . "<br>";
    $areaNumber++;
};
