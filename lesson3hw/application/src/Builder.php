<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 19:53
 */
require "BuildInterface.php";
require "Hammer.php";
require "Saw.php";
require "Bolster.php";
class Builder implements BuildInterface
{
    private $hammer;
    private $saw;
    private $bolster;
    public  $br,$bo,$wi;

    private function InstallWindow($wi)
    {
        $this->bolster = new Bolster();
         if($this->bolster->DoSomething($wi)==true)
         {
             echo "you have enough quantity of window".PHP_EOL;
             return true;
         }
         else
         {
             echo "You can't build the house, you have to add ".$this->bolster->GetDifference($wi)." window".PHP_EOL;

         };

    }
    private function InstallFloor($bo)
    {
        $this->saw = new Saw();
        if($this->saw->DoSomething($bo)==true)
        {
            echo "You have enough quantity of boards".PHP_EOL;
            return true;
        }
        else
        {
            echo "You can't build the house, you have to add ".$this->saw->GetDifference($bo)." boards".PHP_EOL;
        };
    }
    private function InstallWall($br)
    {
        $this->hammer = new Hammer();
        if($this->hammer->DoSomething($br)==true)
        {
            echo "You have enough quantity of bricks".PHP_EOL;
            return true;
        }
        else
        {
            echo "You can't build your house, you have to add ".$this->hammer->GetDifference($br)." bricks".PHP_EOL;
        };
    }
    public function Building($br,$bo,$wi)
    {
//        $this->InstallWindow($wi);
//        $this->InstallFloor($bo);
//        $this->InstallWall($br);
        if(($this->InstallWindow($wi)==true)&($this->InstallFloor($bo)==true)&($this->InstallWall($br)==true))
        {
            echo "Congradulation you have build the house".PHP_EOL;
        }
    }
} 