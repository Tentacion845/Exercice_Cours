<?php


class Chat extends Mammifere
{
    function __construct()
    {
        parent::__construct(-20, 25);
    }


    function getType()
    {
        $suffixe = "";
        if($this->sick){
            $suffixe = "(malade)";
        }
        return "Test pour Chat$suffixe"; 
    }



}






?>