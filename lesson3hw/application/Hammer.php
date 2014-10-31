<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 19:58
 */
require "Instrument.php";
require "Brick.php";
class Hammer implements Instrument
{
    public $br;
    private $Doing;
    private function Knock($br)
    {
        $this->Doing = new Brick();
        if($this->Doing->number > $br){
            return false;
        }else{
            return true;
        }

    }
    public function DoSomething($br)
    {
        return $this->Knock($br);
    }
    public function GetDifference($br)
    {
        $this->Doing =new Window($br);
        if($this->Doing->number>$br){
            return ($this->Doing->number - $br);
        }
    }
} 