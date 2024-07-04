<?php 
require_once __DIR__ . '/../traits/Volatile.php';

class Bat extends Mammal{
    use Volatile;

    private $hoursOfSleep;

    public function __construct($species, $numberOfLungs, $hoursOfSleep, $wingSpan, $flapsPerMinute){
        parent::__construct($species, $numberOfLungs);
        $this->hoursOfSleep = $hoursOfSleep;
        $this->wingSpan = $wingSpan;
        $this->flapsPerMinute = $flapsPerMinute;
    }

    public function getHoursOfSleep(){
        return $this->hoursOfSleep;
    }
}
?>