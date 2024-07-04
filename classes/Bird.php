<?php
require_once __DIR__ . '/Animal.php';

/**
 * Class that extends Animal and generates a new Mammal instance.
 */
class Bird extends Animal{
    private $numberOfFeathers;

    public function __construct($species, $numberOfFeathers){
        parent::__construct($species); // % popola i dati ereditati
        $this->numberOfFeathers = $numberOfFeathers;
    }

    public function sing(){
        return 'Shake it off! Shake it off!';
    }

    public function eat(){
        $animalEatingSound = parent::eat(); // ...chomp chomp
        return $animalEatingSound . ', crunch crunch che buoni questi semi!!'; 
    }
}
