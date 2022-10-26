<?php


require_once 'model/Task.php';


class TaskProvider
{  
   private PDO $pdo;
   public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   // Метод создания задачи
   public function addTask(string $taskDesc) : bool
   {  $user = $_SESSION['user']; 
  
         $statement = $this->pdo->prepare(
             'INSERT INTO tasks (description, dateCreated, dateUpdated, dateDone, priority, isDone, user_id) 
             VALUES (:description, :dateCreated, :dateUpdated, :dateDone, :priority, :isDone, :user_id)'
             );
             $phptime = new DateTime;
             return $statement->execute([
             'description' => $taskDesc,
             'dateCreated' => $phptime->format('Y-m-d H:i:s') ,
             'dateUpdated'=> $phptime->format('Y-m-d H:i:s') ,
             'dateDone'=> $phptime->format('Y-m-d H:i:s') ,
             'priority' => 9,
             'isDone' => 0,
             'user_id' => $user->getId()
             ]);
         
     
      
   }

   public function getUndoneList(User $user): ?array
      {  
         $statement = $this->pdo->prepare(
          'SELECT * FROM tasks
          WHERE user_id = :userId
          ');
         $statement->execute(['userId' => $user->getId()]);
         $result = $statement->fetchAll();
        
         if ($result) {
            return $result ;
         } else {
            return null;
         }

   }
}

