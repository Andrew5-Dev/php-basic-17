<?php

namespace hw\hw12;

class ToDoList
{
    private array $tasks;

    private string $taskName;
    private int $priority;
    private Enumeration $enumeration;


    public function __construct(array $tasks)
    {

        $this->tasks = $tasks;
    }

    public function getTasks(): array

    {
        return $this->tasks;
    }

    public function addTask(string $taskName, int $priority)
    {
        $enumeration = Enumeration::UNDONE->value;
        $task = ['taskId' => uniqid(), 'taskName' => $taskName, 'priority' => $priority, 'enumeration' => $enumeration];
        $this->tasks[] = $task;
    }


    public function deleteTask(string $taskId)
    {

        foreach ($this->tasks as $key => $task) {
            if ($task['taskId'] == $taskId) {
                unset($this->tasks[$key]);
            }
        }
    }

    public function getTasksPriority()
    {
        usort($this->tasks, function ($a, $b) {
            return $b['priority'] <=> $a['priority'];
        });

    }

    public function completeTask(string $taskId)
    {
        foreach ($this->tasks as $key => $task) {
            if ($task['taskId'] == $taskId) {
                $this->tasks[$key]['enumeration'] = Enumeration::DONE->value;
            }
        }
    }




    public function writeToFile()
    {
        $file = new File('test.txt');
        foreach ($this->tasks as $task) {
            $file->write(json_encode($task) . PHP_EOL);
        }
    }
}