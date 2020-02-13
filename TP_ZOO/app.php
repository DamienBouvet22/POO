<?php

require __DIR__ . '/vendor/autoload.php';

// Here comes your code.
$maurice = new \App\Animals\Fish('maurice');
$jean = new \App\Animals\Fish('jean');
$pierre = new \App\Animals\Fish('pierre');
$paul = new \App\Animals\Fish('paul');
$jacques = new \App\Animals\Fish('jacques');

$oscar = new \App\Animals\CatFish('oscar');
$grosminet = new \App\Animals\CatFish('grosminet');

$nemo = new \App\Animals\ClownFish('nemo');

$bubulle = new \App\Animals\BubbleFish('bubulle');
$marin = new \App\Animals\BubbleFish('marin');
$dory = new \App\Animals\BubbleFish('dory');

$strip = new \App\Animals\Zebra('strip');

$tropico = new \App\Animals\Parrot('tropico');
$parrot2 = new \App\Animals\Parrot('parrot2');
$parrot3 = new \App\Animals\Parrot('parrot3');
$parrot4 = new \App\Animals\Parrot('parrot4');
$parrot5 = new \App\Animals\Parrot('parrot5');
$parrot6 = new \App\Animals\Parrot('parrot6');
$parrot7 = new \App\Animals\Parrot('parrot7');
$parrot8 = new \App\Animals\Parrot('parrot8');
$parrot9 = new \App\Animals\Parrot('parrot9');
$parrot10 = new \App\Animals\Parrot('parrot10');

$christophe = new \App\Animals\Dove('christophe');
$vasco = new \App\Animals\Dove('vasco');

$moby = new \App\Animals\Whale('moby dick');

$babar = new \App\Animals\Elephant('babar');
$celeste = new \App\Animals\Elephant('celeste');

?>
<br>
<?php
$animals = array($maurice, $jean, $pierre, $paul, $jacques, $oscar, $grosminet, $bubulle, $marin, $dory, $nemo, $babar, $celeste, $strip, $tropico, $parrot2, $parrot3, $parrot4, $parrot5, $parrot6, $parrot7, $parrot8, $parrot9, $parrot10, $christophe, $vasco);
//echo '<pre>';
//print_r($animals);
//echo '</pre>';
for ($i=0; $i < COUNT($animals); $i++) {
    echo $animals[$i]->presentation() . '<br>';
}
?>

