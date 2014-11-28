<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 22.11.14
 * Time: 15:53
 */

namespace base;
use models\Task;
use models\User;

class Controller {

    public function indexAction()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['taskname']) & (isset($_POST['description']))){
                $taskn = $_POST['taskname'];
                $descrn = $_POST['description'];
                $task = new Task();
                $task->addNewTask($taskn,$descrn);
                header('Location:index.html');
            }
            if(isset($_POST['ShowTask']) & $_POST['ShowTask']==true){
                $task = new Task();
                $task->GetAllTasks(App::$pdo);
            }
        } else {
            header('Location: registration.html');
        }
    }

    public function registrationAction(){
        header('Location: registration.html');
        if
        ($_SERVER['REQUEST_METHOD']=='POST')
        {

            $username = $_POST['username-registr'];
            $password = $_POST['password-registr'];
            $email = $_POST['email-registr'];
            $user = new User();
            $user->RegistrationUser($username,$email,$password);
            header('Location:index.html');

        }

    }
} 