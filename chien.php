<?php

class Chien extends Mammifere
{
    function __construct() 
    {
        parent::__construct(-10, 30);   
    }

    function getType()
    {
        $suffixe = "";
        if($this->sick){
            $suffixe = "(malade)";
        }
        return "Test pour Chien$suffixe"; 
    }
}

// $saleChien = new Chien();

// echo $saleChien->isGoodTemperature(45);

?>