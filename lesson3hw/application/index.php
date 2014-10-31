<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 20:08
 */
require "Builder.php";
$br = $argv[1];
$bo = $argv[2];
$wi = $argv[3];
//var_dump(is_numeric($wi));
function check($a)
{
    if ($a==null) {
        throw new Exception("Not enough arguments");

    };
    if(is_numeric($a)==false){
        throw new Exception("You entered not a number");
    }
}

try
{
check($br);
check($bo);
check($wi);
} catch (Exception $e){
    echo $e->getMessage().PHP_EOL."You must enter 3 arguments and it must be numeric".PHP_EOL;
    exit;
}
$app = new Builder();
$app->Building($br,$bo,$wi);