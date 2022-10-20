<?php



    function walk(Mammifere $mammifere)  // Polymorphism
    {
        echo $mammifere->deplacement(200);
        $mammifere->say();
        $mammifere->play();
    } 




abstract class Mammifere 
{
    protected $speed; 

    function __construct($speed) 
    {
        $this->speed = $speed;  
    } 
    function deplacement($distance)
    {
        $time = $distance / $this->speed; 
       
        return $time;
    } 

    abstract function say(); // fonction abstraite, on peut avoir de fonctions abstraite uniquement dans une classe abstraite.


}

// $mammifere = new Mammifere(10); // On ne peut pas instancier des classes abstract

class Chien extends Mammifere  
{
    function __construct()
    {
        parent::__construct(12);
    }

    function say()
    {
        echo "Wouf";
    }

    function play()
    {
        echo "Wanna to play ?";
    }
}

$chien = new Chien();

// echo $chien->deplacement(200);



class Chat extends Mammifere
 {

    function __construct()
    {
        parent::__construct(11);
    }
    function say()
    {
        echo "Miaou";
    }
 }

 $chat = new Chat();


class MalinoisBelge extends Chien
{
    function say() // surchage, on écrase les précédentes valeurs.  
    {
        echo "Wouf une fois !";
    }
    function play()
    {
    }

}

$malinoisBelge = new MalinoisBelge();

$malinoisBelge->say();

//  echo $chat->deplacement(200);



// $object = new Mammifere(15);

// echo $object->deplacement(12);


walk($malinoisBelge);

// walk($chien);


?>