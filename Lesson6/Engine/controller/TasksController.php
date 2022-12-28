<?php
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';
include_once 'model/User.php';

session_start();

$pageHeader = "Задачи";

//.получаем текущего пользователя, если он залогинен
$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    header("Location: /");
    die();
}

$taskProvider = new TaskProvider();
//добавление новой задачи и сохранение её в сессии
if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);//извлечь данные от пользователя, получиьт текст задачи
    $taskProvider->addTask(new Task($taskText));//обратиться к модели, мы просим модель добавить задачу в хранилище
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key);
    header("Location: /?controller=tasks");
    die();
}


$tasks = $taskProvider->getUndoneList();
include "view/tasks.php";

