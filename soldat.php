<?php

class Soldat 
{ 

private $taille;
private $age; 
private $esperancesDeVie; 

public static $nbMatricule = 1; 

public function __construct($taille, $age, $esperancesDeVie)
{
    $this->matricule = self::$nbMatricule++;  
    $this->taille = $taille; 
    $this->age = $age; 
    $this->esperancesDeVie = $esperancesDeVie; 
}

public function setTaille($taille)
{
    $this->taille = $taille; 
}

public function getTaille()
{
    return $this->taille; 
}

public function setAge($age)
{
    $this->age = $age; 
}

public function getAge()
{
    return $this->age = $age; 
}

public function setEsperancesVie($esperancesDeVie)
{
    $this->EsperancesDeVie = $esperancesDeVie; 
}

public function getEsperancesDeVies()
{
    return $this->esperancesDeVies; 
}

// public function whoami(){
    // return get_class($this);
// }

}




