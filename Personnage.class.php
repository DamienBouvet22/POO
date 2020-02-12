<?php

class Personnage
{
    private $_degats; // Les dégâts du personnage.
    private $_experience; // L'expérience du personnage.
    private $_force; // La force du personnage (plus elle est grande, plus l'attaque est puissante).


    public function afficherExperience()
    {
        echo $this->_experience;
    }
    public function gagnerExperience()
    {
        $this->_experience = $this->_experience + 1;
    }
    public function frapper(Personnage $persoAFrapper) {
        $persoAFrapper->_degats += $this->_force;
    }
    public function afficherDegats()
    {
        echo $this->_degats;
    }
}

