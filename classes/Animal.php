<?php
/**
 * Creates a new Animal class
 */
class Animal{
    private $species;

    /**
     * Creates a new animal instance
     *
     * @param String $species this animal species as a String.
     */
    public function __construct($species){
        $this->species = $species;
    }

    /**
     * Returns this animal species.
     *
     * @return void
     */
    public function getSpecies(){
        return $this->species;
    }

    /**
     * Updates this animal species.
     *
     * @param String $species the species to update as a String.
     * @return void
     */
    public function setSpecies($species){
        if ( strlen(trim($species)) > 1 ){
            $this->species = $species;
        }
    }

    /**
     * The action of eating of this animal instance.
     *
     * @return void
     */
    public function eat(){
        return $this->species . ' is eating, chomp chomp...';   
    }
}