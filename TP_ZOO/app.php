<?php

require __DIR__ . '/vendor/autoload.php';

function createanimal($nb, $nameToCreate, $typeToCreate) {
    $index = 1;
    for ($i=0; $i < $nb; $i++) {
        (new $typeToCreate($nameToCreate . ' ' . $index))
            ->sayHello()
            ->presentation();
        $index++;

//        $poisson = new \App\Animals\Fish('poisson');
//        $poisson->sayHello()->presentation();
//
//        (new \App\Animals\Fish('hugedhie'))
//            ->presentation()
//            ->sayHello();
    }

}

createanimal( 5, 'poisson', \App\Animals\Fish::class);
createanimal( 3, 'bubblefish', \App\Animals\BubbleFish::class);

//$maurice = new \App\Animals\Fish('maurice');

//$oscar = new \App\Animals\CatFish('oscar');

//$nemo = new \App\Animals\ClownFish('nemo');
//
//$bubulle = new \App\Animals\BubbleFish('bubulle');

//$strip = new \App\Animals\Zebra('strip');
//
//$tropico = new \App\Animals\Parrot('tropico');

//$christophe = new \App\Animals\Dove('christophe');
//
//$moby = new \App\Animals\Whale('moby dick');
//
//$babar = new \App\Animals\Elephant('babar');
//
//$animals = array($maurice, $oscar, $bubulle, $nemo, $babar, $strip, $tropico, $christophe);
//echo '<pre>';
//print_r($animals);
//echo '</pre>';
//for ($i=0; $i < count($animal); $i++) {
//    echo $animal[$i]->presentation() . '<br>';
//}

