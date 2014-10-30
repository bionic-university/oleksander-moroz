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
    private $Doing;
    private function Nag($bo)
    {
        $this->Doing = new Board();
        if($this->Doing->number>$bo){
            return false;
        }else
        {
            return true;
        }

    }
    public function DoSomething($bo)
    {
        $this->Nag($bo);
    }
} 