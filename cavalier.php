<?php

class Cavalier extends Soldat
{
    private $cheval; 

    public function __construct($taille, $age, $esperancesDeVie, $cheval)
    {
        parent::__construct($taille, $age, $esperancesDeVie);
        $this->cheval = $cheval; 
    }
}