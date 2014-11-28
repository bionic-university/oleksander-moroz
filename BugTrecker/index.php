<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 13.11.14
 * Time: 19:45
 */
spl_autoload_register(function ($class){
    include str_replace('\\','/',$class). '.php';
});
use base\App;

$app = new App();
$app->run();
//require 'Created/Task.php';


//$task = new Task();
//$task->GetAllTasks($pdo);



//$dbh = mysql_connect($host, $user, $pswd) or die("Can't connect with MYSQL");
//mysql_select_db($database) or die("Can't connect to database");
//$sql = 'select username from User';
//$res = mysql_query($sql);
//$row = mysql_fetch_assoc($res);
//$test = $row;

//echo json_encode($test);
