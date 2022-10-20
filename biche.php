<?php

class Biche extends Mammifere
{
    function __construct() 
    {
        parent::__construct(-15, 35);   
    }

    function getType()
    {
        $suffixe = "";
        if($this->sick){
            $suffixe = "(malade)";
        }
        return "Test pour Biche$suffixe"; 
    }
}

?>