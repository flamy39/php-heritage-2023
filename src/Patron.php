<?php

namespace App;

// La classe Patron hérite de la classe Employe
class Patron extends Employe
{
    private string $voiture;

    public function __construct(string $prenom, string $nom, int $age, string $voiture)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($prenom,$nom,$age);
        $this->voiture = $voiture;
    }

    // Redéfinir la méthode presenter() héritée de Employe
    public function presenter() : string {
        return "Bonjour, je me nomme {$this->prenom} {$this->nom} et je suis le BOSS !";
    }

    public function deplacer() : string {
        return "Je me déplace en {$this->voiture}";
    }

}