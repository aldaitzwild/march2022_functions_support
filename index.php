<?php

function addition(int $firstNumber, int $secondNumber): int
{
    return $firstNumber + $secondNumber;
}

function showAddition(int $firstNumber, int $secondNumber): void
{
    echo addition($firstNumber, $secondNumber) . PHP_EOL;
}

showAddition(5, 13);
showAddition(8, 13);
showAddition(5, 45);
showAddition(23, 2);
showAddition(9999, 1);
showAddition(2, 41);

echo (5 + 13 + 18 + 23 + 58) . PHP_EOL; 

showAddition(addition(addition(addition(5, 13), 18), 23), 58);