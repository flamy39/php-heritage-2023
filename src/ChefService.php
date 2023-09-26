<?php

namespace App;

use App\Employe;

class ChefService extends Employe
{
    private string $service;

    public function __construct(string $prenom, string $nom, int $age, string $service)
    {
        parent::__construct($prenom, $nom, $age);
        $this->service = $service;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function presenter(): string
    {
        return "Bonjour, je suis {$this->prenom} {$this->nom}, j'ai {$this->age} et je suis le chef du service {$this->service}";
    }

}

