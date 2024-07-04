<?php 
require_once __DIR__ . '/../traits/Volatile.php';

class Falcon extends Bird{
    use Volatile;

    private $speed;

    public function __construct($species, $numberOfFeathers, $speed, $wingSpan, $flapsPerMinute){
        parent::__construct($species, $numberOfFeathers);
        $this->speed = $speed;
        $this->wingSpan = $wingSpan;
        $this->flapsPerMinute = $flapsPerMinute;
    }

    public function getSpeed(){
        return $this->speed;
    }
}
?>