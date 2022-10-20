<?php

class Generators 
{
    static function generateMammifere($environnement, int $nb)
    {
        for ($i=0; $i < $nb; $i++) {

            $race = ["Chien", "Chat", "Souris", "BICHE", "BEAR"];
            $key = rand(0,count($race) -1);
            
            $mammifereClass = $race[$key];     
            $mammifereClass = strtolower($mammifereClass);
            $mammifereClass = ucfirst($mammifereClass);
            
            $mammifere = new $mammifereClass();
            $environnement->addMammifere($mammifere);
        }
    }

}



?>