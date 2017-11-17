<?php

require_once('soldat.php'); 
require_once('tirailleurs.php');
require_once('cavalier.php');
require_once('bataillon.php');
require_once('arbaletrie.php')

for($i = 0; $i < 50; $i++){
    $bataillon[] = new Tirailleurs("21","test" , "test2" , "test3");
    new Cavalier("21","test" , "test2" , "test3");
}
    
    $bataillon = array(
        new Tirailleurs("21","test" , "test2" , "test3"),
        new Cavalier("21","test" , "test2" , "test3")
    );
    
var_dump($bataillon); 


// $bataillon[3]->whoami();