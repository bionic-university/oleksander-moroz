<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 20:01
 */
require "Window.php";
class Bolster implements Instrument
{
    private $Doing;
    private function Paint($wi)
    {
        $this->Doing = new Window();
        if($this->Doing->number>$wi){
            return false;
        }else
        {
            return true;
        }
    }
    public function DoSomething($wi)
    {
        return $this->Paint($wi);
    }
    public function GetDifference($wi)
    {
        $this->Doing =new Window($wi);
        if($this->Doing->number>$wi){
            return ($this->Doing->number - $wi);
        }
    }
} 