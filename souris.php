<?php

class Souris extends Mammifere
{
    function __construct() 
    {
        parent::__construct(5, 40);   
    }

    function getType()
    {
        $suffixe = "";
        if($this->sick){
            $suffixe = "(malade)";
        }
        return "Test pour Souris$suffixe"; 
    }
}

?>