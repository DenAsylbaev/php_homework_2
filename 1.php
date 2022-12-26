<?php
do {
    $inputTask = (int)readline(
        "В каком году произошло крещение Руси?».\n
        Варианты: 810, 990 или 740 год?\n"
    );
        if ($inputTask == 810 || $inputTask == 740) {
            echo "ОТВЕТ НЕВЕРНЫЙ\n";
            break;
        } elseif ($inputTask == 990) {
            echo "ОТВЕТ ВЕРНЫЙ\n";
            break;
        }
} while ($inputTask !== 810 && $inputTask !== 740 && $inputTask !== 990);