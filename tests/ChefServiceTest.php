<?php

// Autoloading
require "./vendor/autoload.php";

$chefService = new \App\ChefService("Alain","DURAND",38,"Informatique");
echo $chefService->presenter();