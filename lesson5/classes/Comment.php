<?php
class Comment {
    private User $author; 
    private Task $task;
    private string $text;

    function __construct(User $author, Task $task, string $text ='' ) 
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }
    /**
     * Get the value of author
     */ 
    public function getAuthor(): User
    {
        return $this->author;
    }
    /**
     * Get the value of task
     */ 
    public function getTask(): Task
    {
        return $this->task;
    }
    /**
     * Get the value of text
     */ 
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }
     /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(User $author)
    {
        $this->author = $author;
        return $this;
    }
    /**
     * Set the value of task
     *
     * @return  self
     */ 
    public function setTask(Task $task)
    {
        $this->task = $task;
        return $this;
    }

}
?>