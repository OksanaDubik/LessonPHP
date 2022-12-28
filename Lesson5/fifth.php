<?php
include 'Task.php';
include 'User.php';
include  'Comment.php';
include 'TaskService.php';

$user = new User('Ivan', 'Iv@n', 25);
$task = new Task($user, "задача1", 1);

TaskService::addComment($user, $task,  'Выполнить задачу');
TaskService::addComment($user, $task, 'Переделать задачу');

echo "Комментарии: " . PHP_EOL;
foreach ($task->getComments() as $comment){
    echo $comment ->getText() . ", ";
    echo "имя задачи " . $comment->getTask()->getDescription() . PHP_EOL;

}


