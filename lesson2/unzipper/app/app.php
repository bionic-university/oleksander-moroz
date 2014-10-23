<?php

require '../vendor/autoload.php';
use Elibyy\Reader;

$zipFile;
if($argv[1] !== null )
{
    $zipFile = $argv[1];
    $unZipper = new Reader($zipFile);
    if(!file_exists($zipFile))
    {
        echo "This file doesn't exist!!\r\n";
    }
    else
    {
        $amount =  count($unZipper->getFiles());
        echo "This package includes ".$amount." files \r\n";
        sleep(1);
        echo "Unpacking is starting now\r\n";
        sleep(1);
        $result = $unZipper->unzip();
        if($result == true){
            echo "archive successfully unzip\r\n";
        }
        else
        {
            echo "It's pity but something wrong... \r\n";
        }
    }

}else
{
  echo "you forgot enter the archives name\r\n";
}