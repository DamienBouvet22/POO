<?php
function chargerClasse($classe)
{
    require $classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->frapper($perso2); // $perso1 frappe $perso2
$perso1->gagnerExperience(); // $perso1 gagne de l'expérience

$perso2->frapper($perso1); // $perso2 frappe $perso1
$perso2->gagnerExperience(); // $perso2 gagne de l'expérience

$perso1->afficherExperience();
$perso2->afficherExperience();

$perso1->afficherDegats();