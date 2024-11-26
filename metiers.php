<?php
abstract class Developpeur
{

    private $prenom, $age, $competence;

    function __construct($prenom, $age, $competence)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->competence = $competence;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCompetence()
    {
        return $this->competence;
    }

    public function __toString()
    {
        return $this->prenom . "   " . $this->age . "   " . $this->competence;
    }
}

class Freelance extends Developpeur
{

    private $tauxHoraire;

    public function __construct()
    {
        //a completer
    }

    public function getTauxHoraire()
    {
        return $this->tauxHoraire;
    }

    public function __toString()
    {
        return parent::__toString() . "  " . $this->tauxHoraire;
    }
}

class Prestataire extends Developpeur
{

    private $lentreprise;

    public function __construct()
    {
        //a completer
    }

    public function gettauxHoraire()
    {
        return $this->lentreprise->getTauxHoraire();
    }

    public function __toString()
    {
        return parent::__toString() . "  " . $this->getTauxHoraire();
    }
}

class Entreprise
{

    private $nom, $tauxHoraire;

    function __construct($nom, $tauxHoraire)
    {
        $this->nom = $nom;
        $this->tauxHoraire = $tauxHoraire;
    }
    public function getTauxHoraire()
    {
        return $this->tauxHoraire;
    }
}

class Equipe extends SplHeap
{

    public function compare($p1, $p2)
    {
        //a completer
    }

    public function moyenneAge()
    {
        //a completer
    }

    public function estVide()
    {
        return $this->isEmpty();
    }

    public function effectif()
    {
        //a completer
    }

    public function effectifParCompetence($competence)
    {
        //a completer
    }
    public function tauxHoraireMoyen()
    {
        //a completer
    }
}
