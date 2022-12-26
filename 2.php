<?php

$tasksQuantity = (int)readline("Сколько задач у Вас запланированно на день?");
$totalTaskTime = 0;
$totalTasks = "Cегодня у вас запланировано $tasksQuantity приоритетных задачи на день:";

if ($tasksQuantity) {
    for ($i = 1; $i <= $tasksQuantity; $i++) {
        $inputTask = readline("Задача №$i\n");
        $inputTaskTime = (int)readline("Сколько времени займет задача №$i\n");
        $totalTasks .= "\n - $inputTask ($inputTaskTime ч)";
        $totalTaskTime += $inputTaskTime;
    }
    echo 
        "$totalTasks
        Примерное время выполнения плана = $totalTaskTime ч\n";
} else {
    echo "Введено некорректное значение\n";
}

