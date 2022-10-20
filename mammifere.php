<?php


abstract class  Mammifere 
{
    protected int $temperatureMin;
    protected int $temperatureMax;

    function __construct($temperatureMin, $temperatureMax)
    {
        $this->temperatureMin = $temperatureMin;
        $this->temperatureMax = $temperatureMax;
    }


    function isGoodTemperature($temperature)
    {
        if ($this->temperatureMin < $temperature && $this->temperatureMax > $temperature) {
            return true;
        } else {
            return false;
        }
    }
}







?>