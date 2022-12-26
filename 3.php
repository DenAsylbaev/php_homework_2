<?php

do {
    $inputNumber = (int)readline("Введите число");
    if ($inputNumber && $inputNumber > 0) {
        $fingerNumber = $inputNumber % 8;
        
        if ($fingerNumber > 5 && $fingerNumber < 8) {
            $fingerNumber = ($fingerNumber + 4) % 8;
        } elseif ($fingerNumber === 0) {
            $fingerNumber = 2;
        }

        echo "$fingerNumber\n";
    }
} while (!$inputNumber || $inputNumber < 0);