<?php

require_once __DIR__ . '/classes/Animal.php';
require_once __DIR__ . '/classes/Mammal.php';
require_once __DIR__ . '/classes/Bird.php';
require_once __DIR__ . '/classes/Falcon.php';
require_once __DIR__ . '/classes/Bat.php';
// require_once __DIR__ . '/classes/Volatile.php';

$animal = new Animal('Crocodile');
var_dump($animal);
var_dump($animal->eat());


$ornitorinco = new Mammal('Ornitorinco', 2);
var_dump($ornitorinco);
var_dump($ornitorinco->eat());
$ornitorinco->setSpecies("Ornitornicuzzz");
var_dump($ornitorinco);

$uccellino = new Bird("Pettirosso", "500");
$pipistrello = new Bat("Pipistrello Blu", 2, 12, "1 metro", 40);
$falco = new Falcon("Falco uccellatore", 2000, 385, "2.5 metri", 10);
$koala = new Mammal("Koala", 4);

var_dump($koala, $uccellino, $pipistrello, $falco);

echo $falco->getWingSpan();
echo "<br>";
echo $pipistrello->getWingSpan();