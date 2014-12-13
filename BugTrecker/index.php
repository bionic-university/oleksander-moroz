<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 13.11.14
 * Time: 19:45
 */
require 'Class/Task.php';
require 'Class/User.php';
//ini_set('display_errors','On');
//error_reporting(E_ALL);
$pdo = new \PDO('mysql:dbname=BugTrecker;host=127.0.0.1','root','67890as',
    [PDO::ATTR_PERSISTENT =>true]);
if($_SERVER['REQUEST_METHOD']=='POST') {
    switch ($_POST['Showus']) {
        case 'gettask':
            $task = new Task();
            $task->GetAllTasks($pdo);
            break;
        case 'getuser':
            $user = new User();
            $user->GetAllUsers($pdo);
            break;
    }
    if (isset($_POST['taskname']) & (isset($_POST['description']))) {
        $taskn = $_POST['taskname'];
        $descrn = $_POST['description'];
        $task = new Task();
        $task->addNewTask($taskn, $descrn, $pdo);
        header('Location:index.html');
    }
}
