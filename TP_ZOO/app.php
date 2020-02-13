<?php

require __DIR__ . '/vendor/autoload.php';

// Here comes your code.
$maurice = new \App\Animals\Fish('maurice');
echo $maurice->presentation();

$oscar = new \App\Animals\CatFish('oscar');
echo $oscar->presentation();

$nemo = new \App\Animals\ClownFish('nemo');
echo $nemo->presentation();

$bubulle = new \App\Animals\BubbleFish('bubulle');
echo $bubulle->presentation();

$strip = new \App\Animals\Zebra('strip');
echo $strip->presentation();

$tropico = new \App\Animals\Parrot('tropico');
echo $tropico->presentation();

$christophe = new \App\Animals\Dove('christophe');
echo $christophe->presentation();

$moby = new \App\Animals\Whale('moby dick');
echo $moby->presentation();

$babar = new \App\Animals\CatFish('babar');
echo $babar->presentation();