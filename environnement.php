<?php
require "mammifere.php";
require "chien.php";
require "chat.php";


class Environnement 
{
    protected array $temperatures;
    protected array $mammiferes;
    



    function __construct()
    {
        $this->temperatures = array();
        $this->mammiferes = array();

        for($i = 0; $i < 12; $i++){
            $randomTemperature = rand(-50, 50);
            $this->addTemperature($randomTemperature);

        }
    }

    function addTemperature(int $temperature)
    {
        $this->temperatures [] = $temperature;
    }

    function addMammifere(Mammifere $mammifere)
    {
        $this->mammiferes [] = $mammifere;
    }

    function getMammiferes()
    {
        return $this->mammiferes;
    }

    function getTemperatures()
    {
        return $this->temperatures;
    }

    function countMammifereTemperatures()
    {
       
        foreach ($this->temperatures as $temperature){
            echo "temperatures  $temperature <br>";
            $count = 0; 

           foreach ($this->mammiferes as $mammifere) { 
                if ($mammifere->isGoodTemperature($temperature)){
                    $count ++;
                } 

            } 
            echo "population :" . $count . "<br>";
        }
    }

    

    
}



$environnement = new Environnement();
$chien = new Chien();
$chat = new Chat();
$saleChien = new Chien();


$environnement->addMammifere($chat);
$environnement->addMammifere($chien);
$environnement->addMammifere($saleChien);

$environnement->countMammifereTemperatures();
// var_dump($environnement->getMammiferes());




?>
