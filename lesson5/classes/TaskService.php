<?php

class TaskService {
    private static User $author;
    private static Task $task;
    private string $text;   
    public static function addComment(User $author, Task $task, string $text): void
        {
        self::$author = $author;
        self::$task = $task;
        $comment = new Comment($author, $task, $text);
        $task->comments[] = $comment;
        }
    
    }

?>