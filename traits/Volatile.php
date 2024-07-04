<?php 

trait Volatile{
    private $wingSpan;
    private $flapsPerMinute;

    public function getWingSpan(){
        return $this->wingSpan;
    }
    
    public function getFlapsPerMinute(){
        return $this->flapsPerMinute;
    }
}