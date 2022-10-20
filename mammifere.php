<?php

abstract class  Mammifere 
{
    protected int $temperatureMin;
    protected int $temperatureMax;
    protected bool $sick;
    
    function __construct($temperatureMin, $temperatureMax)
    {
        $this->temperatureMin = $temperatureMin;
        $this->temperatureMax = $temperatureMax;
       
        $this->sick = rand(0,1);
        if ($this->sick == 1) {
            $this->temperatureMin += 10;
        }

    }


    function isGoodTemperature($temperature): bool
    {
        if ($this->temperatureMin < $temperature && $this->temperatureMax > $temperature) {
            return true;
        } else {
            return false;
        }
    }

     
    function isSick(): bool
    {
       return $this->sick;
    }

    abstract function getType(); 

}







?>