<?php
require "mammifere.php";
require "chien.php";
require "chat.php";
require "souris.php";
require "biche.php";
require "generators.php";
require "bear.php";

class Environnement 
{
    protected array $temperatures;
    public array $mammiferes;
    



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


    function mammifereRace()
    {
        foreach ($this->temperatures as $temperature){
            echo "temperatures  $temperature <br>";
            $count = 0; 
            $races = [];
           foreach ($this->mammiferes as $mammifere) { 

                if (!isset($races[$mammifere->getType()])) {
                    
                    $races [$mammifere->getType()] = 0;
                }

            //  $races [] = $mammifere->getType();

                if ($mammifere->isGoodTemperature($temperature)){
                    $count ++;
                    $races [$mammifere->getType()] ++;
                } 
            } 
            echo "population :" . $count . "<br>";
            if ($count === 0) {
                echo "il n'y pas d'animaux" . "<br>";
            } else {
                foreach ($races as $race => $count){
                    echo $race  . " " . ":" . $count . "<br>";
                    // echo $race . "<br>" ;
              
                }
            }
       }
    }


    
}



$environnement = new Environnement();
$chien = new Chien();
$chat = new Chat();
$tom = new Chat();
$saleChien = new Chien();
$jerry = new Souris();

// $environnement->addMammifere($tom);
// $environnement->addMammifere($chat);
// $environnement->addMammifere($chien);
// $environnement->addMammifere($saleChien);
// $environnement->addMammifere($jerry);

// $environnement->isSick();


// $environnement->countMammifereTemperatures();
// var_dump($environnement->getMammiferes());

Generators::generateMammifere($environnement, 100);
$environnement->mammifereRace();


echo ("localhost")
echo ("localhost/?controller=Default")
echo ("localhost/?controller=Default&action=index")
echo ("localhost/?action=index")

?>
