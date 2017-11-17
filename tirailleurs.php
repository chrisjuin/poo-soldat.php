<?php

class Tirailleurs extends Soldat
{
    private $armes; 

    public function __construct($taille, $age, $esperancesDeVie, $armes)
    {
        parent::__construct($taille, $age, $esperancesDeVie);
        $this->armes = $armes; 
}

}