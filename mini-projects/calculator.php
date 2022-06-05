<?php

echo 'Welke operatie wil je uitvoeren? (+, -, %)' . PHP_EOL;
$operationChoice = readline();

if ($operationChoice == '+' or $operationChoice == '-' or $operationChoice == '%') {
    if ($operationChoice == '+') {
        echo 'Eerste getal?' . PHP_EOL;
        $firstNumber = readline();
        if (is_numeric($firstNumber)) {
            echo 'Tweede getal?' . PHP_EOL;
            $secondNumber = readline();
            if (is_numeric($secondNumber)) {
                echo 'Uw resultaat is: ' . ($firstNumber + $secondNumber);
            } else {
                echo "'$secondNumber' is geen getal";
            }
        } else {
            echo "'$firstNumber' is geen getal";
        }
    } elseif ($operationChoice == '-') {
        echo 'Eerste getal?' . PHP_EOL;
        $firstNumber = readline();
        if (is_numeric($firstNumber)) {
            echo 'Tweede getal?' . PHP_EOL;
            $secondNumber = readline();
            if (is_numeric($secondNumber)) {
                echo 'Uw resultaat is: ' . ($firstNumber - $secondNumber);
            } else {
                echo "'$secondNumber' is geen getal";
            }
        } else {
            echo "'$firstNumber' is geen getal";
        }
    } elseif ($operationChoice == '%') {
        echo 'Eerste getal?' . PHP_EOL;
        $firstNumber = readline();
        if (is_numeric($firstNumber)) {
            echo 'Tweede getal?' . PHP_EOL;
            $secondNumber = readline();
            if (is_numeric($secondNumber)) {
                echo 'Uw resultaat is: ' . ($firstNumber % $secondNumber);
            } else {
                echo "'$secondNumber' is geen getal";
            }
        } else {
            echo "'$firstNumber' is geen getal";
        }
    }
} else {
    echo "'$operationChoice' is geen geldige operatie";
}