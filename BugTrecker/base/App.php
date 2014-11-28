<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 22.11.14
 * Time: 15:46
 */
namespace base;

class App {

    public static $pdo;

    const DEF_ACTION = 'index';
    const ACTION_POSTFIX = 'Action';

    public function __construct()
    {
        ini_set('display_errors','On');
        error_reporting(E_ALL);
    }

    public function run(){
        static::$pdo = new \PDO('mysql:dbname=BugTrecker;host=127.0.0.1','root','67890as',
            [\PDO::ATTR_PERSISTENT =>true]);

        if (isset($_GET['r'])) {
            $request = $_GET['r'];
        } else {
            $request = self::DEF_ACTION;
        }
        $controller = new Controller();

        call_user_func([$controller,$request.self::ACTION_POSTFIX]);
    }
}