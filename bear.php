<?php



class Bear extends Mammifere
{
    function __construct() 
    {
        parent::__construct(-50, 20);   
    }

    function getType()
    {
        $suffixe = "";
        if($this->sick){
            $suffixe = "(malade)";
        }
        return "Test pour Ours$suffixe"; 
    }
}
?>
