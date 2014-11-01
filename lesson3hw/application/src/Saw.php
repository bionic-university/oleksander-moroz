<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 20:00
 */
require "Board.php";
class Saw implements Instrument
{
    private $Doit;
    private function Nag($bo)
    {
        $this->Doit = new Board();
        if($this->Doit->number>$bo){
            return false;
        }else
        {
            return true;
        }

    }
    public function DoSomething($bo)
    {
        return $this->Nag($bo);
    }
    public function GetDifference($bo)
    {
        $this->Doit =new Window($bo);
        if($this->Doit->number>$bo){
            return ($this->Doit->number - $bo);
        }
    }
} 