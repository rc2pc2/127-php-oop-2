<?php
require_once __DIR__ . '/Animal.php';

/**
 * Class that extends Animal and generates a new Mammal instance.
 */
class Mammal extends Animal{
    private $numberOfLungs;

    public function __construct($species, $numberOfLungs){
        parent::__construct($species); // % popola i dati ereditati
        $this->numberOfLungs = $numberOfLungs;
    }

    public function giveBirth(){
        $this->setSpecies('Ornitorinco mammoso');
        return 'Ue ue! I have newborns!';
    }

    public function breastfeed(){
        return 'milk';
    }

    public function eat(){
        $animalEatingSound = parent::eat(); // ...chomp chomp
        return $animalEatingSound . ', now I can produce more milk!'; 
    }
}
