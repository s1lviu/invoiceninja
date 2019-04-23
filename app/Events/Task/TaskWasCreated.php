<?php

namespace App\Events\Task;

use App\Models\Task;
use Illuminate\Queue\SerializesModels;

/**
 * Class TaskWasCreated.
 */
class TaskWasCreated 
{
    use SerializesModels;

    /**
     * @var Task
     */
    public $task;

    /**
     * Create a new event instance.
     *
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }
}