<?php       
            #Задание 3 
            $name = readline("Как Вас зовут?\n");
            $task1 = readline("Какая задача стоит перед вами сегодня?\n");
            $task1Duration = readline("Сколько примерно часов эта задача займет?\n");
            $task2 = readline("Какая задача стоит перед вами сегодня?\n");
            $task2Duration = readline("Сколько примерно часов эта задача займет?\n");
            $task3 = readline("Какая задача стоит перед вами сегодня?\n");
            $task3Duration = readline("Сколько примерно часов эта задача займет?\n");
            echo "Привет, ".$name."! сегодня у вас запланировано 3 приоритетных задачи на день:\n";
            echo "- ".$task1."(".$task1Duration."ч)\n";
            echo "- ".$task2."(".$task2Duration."ч)\n";
            echo "- ".$task3."(".$task3Duration."ч)\n";
           
            
?>
