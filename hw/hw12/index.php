<?php

use hw\hw12\File;
use hw\hw12\ToDoList;

require_once __DIR__  . '/File.php';
require_once __DIR__  . '/FileType.php';
require_once __DIR__  . '/ToDoList.php';
require_once __DIR__  . '/Enumeration.php';

$file = new File('test.txt');

$tasks = $file->getLines();
array_walk($tasks, function (&$item) {
    $item = json_decode($item, true);
});

$tasks = new ToDoList($tasks);

echo 'Список завантажених завдань: ' .  PHP_EOL;
print_r($tasks->getTasks());


$taskName = 'new';
$priority = 10;

// $tasks->getTasks(); // Метод, який повертає всі завдання зі списку відсортовані за пріоритетом в порядку спадання.


// $tasks->addTask($taskName, $priority); // Метод, який додає завдання з назвою $taskName та пріоритетом $priority до списку завдань.


$taskId = '66b8d17ca067f';

// $tasks->deleteTask($taskId);  // Метод, який видаляє завдання зі списку за ідентифікатором $taskId.


// $tasks->getTasksPriority(); // Метод, який повертає всі завдання зі списку відсортовані за пріоритетом в порядку спадання.


$tasks->completeTask($taskId);  // Метод, який відмічає завдання з ідентифікатором $taskId як виконане.


$file->cleanFile();
$tasks->writeToFile();




