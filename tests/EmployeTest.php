<?php

// Autoloading
require "./vendor/autoload.php";

$employe = new \App\Employe("Jean","Dupond",45);
echo $employe->presenter();
