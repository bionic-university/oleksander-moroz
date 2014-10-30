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
         if($this->bolster->DoSomething($wi)==false){
             echo "You can't build the house, you have to buy more window".PHP_EOL;
         };

    }
    private function InstallFloor($bo)
    {
        $this->saw = new Saw();
        if($this->saw->DoSomething($bo)==false){
            echo "You can't build the house, you have to buy more boards".PHP_EOL;
        };
    }
    private function InstallWall($br)
    {
        $this->hammer = new Hammer();
        if($this->hammer->DoSomething($br)==false){
            echo "You can't build your house, you have to buy more bricks".PHP_EOL;
        };
    }
    public function Building($br,$bo,$wi)
    {
        $this->InstallWindow($wi);
        $this->InstallFloor($bo);
        $this->InstallWall($br);
    }
} 