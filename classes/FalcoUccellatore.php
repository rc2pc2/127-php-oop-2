<?php 

class FalcoUccellatore extends Falcon{

    public function __construct($numberOfFeathers, $speed, $wingSpan, $flapsPerMinute){
        parent::__construct("Falco Uccellatore", $numberOfFeathers, $speed, $wingSpan, $flapsPerMinute);
    }
}
?>