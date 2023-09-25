<?php

require "./vendor/autoload.php";

$patron = new \App\Patron("Pierre","Martin",37,"RS 6");
echo $patron->presenter(); // Appel à la méthode héritée de la classe Employe
echo PHP_EOL;
echo $patron->deplacer();