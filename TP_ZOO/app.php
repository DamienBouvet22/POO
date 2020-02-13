<?php

require __DIR__ . '/vendor/autoload.php';

function createanimal($nb, $nameToCreate, $typeToCreate) {

    for ($i=1; $i <= $nb; $i++) {
        (new $typeToCreate($nameToCreate . ' ' . $i))
            ->sayHello()
            ->presentation();


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
createanimal( 2, 'catfish', \App\Animals\CatFish::class);
createanimal( 1, 'clownfish', \App\Animals\ClownFish::class);
createanimal( 2, 'elephant', \App\Animals\Elephant::class);
createanimal( 1, 'zebre', \App\Animals\Zebra::class);
createanimal( 10, 'parrot', \App\Animals\Parrot::class);
createanimal( 2, 'dove', \App\Animals\Dove::class);


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

