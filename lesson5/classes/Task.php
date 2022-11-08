<?php
class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private int $priority;
    private bool $isDone = FALSE;
    private User $user; 
    public array $comments = []; 
    function __construct(string $description, int $priority = 10, User $user ) 
    {
        $this->description = $description;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
        $this->dateDone = NULL;
        $this->priority = $priority;
        $this->user = $user;
    }
    // Task getters 
    public function getDescription(): string {
        return $this->description ?? 'Task haven`t desctiption, please setDescription() to update';
    }

    public function getDateCreated(): DateTime {
        return $this->dateCreated;
    }

    public function getDateUpdated(): DateTime {
        return $this->dateUpdated;
    }
    
    public function getDateDone(): ?DateTime {
        return $this->dateDone;
    }
    
    public function getPriority(): int {
        return $this->priority;
    }
    
    public function getIsDone(): bool {
        return $this->isDone;
    }
    
    public function getUser(): User {
        return $this->user;
    }
// Task Setters
    public function setDescription(string $description): bool {
    $this->description = $description;
    $curentDate = new DateTime();
    $this->setDateUpdated($curentDate);
    unset($curentDate);
    return TRUE;
    }

    private function setDateUpdated(DateTime $dateUpdated): bool {
        $this->dateUpdated = $dateUpdated;
        return TRUE;
    }

    private function setDateDone(DateTime $dateDone): bool {
        $this->dateDone = $dateDone;
        $this->setDateUpdated($dateDone);
        return TRUE;
    }

    public function setPriority(int $priority): bool {
        if ($priority >= 0) {
            $this->priority = $priority; 
            $curentDate = new DateTime();
            $this->setDateUpdated($curentDate);
            unset($curentDate);
            return TRUE;
        } else {
            return FALSE;
        }  
    }

    public function markAsDone(bool $isDone = true) {
        if ($isDone) {
            $this->isDone = $isDone;
            $curentDate = new DateTime();
            $this->setDateUpdated($curentDate);
            $this->setDateDone($curentDate);
            unset($curentDate);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Get the value of comments
     */ 
    public function getComments()
    {
        return $this->comments;
    }
}
?>