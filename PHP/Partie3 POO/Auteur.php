<?php

class Auteur {

private string $nom;
private string $prenom;
private DateTime $dateDeNaissance;


public function __construct(string $nom, string $prenom, string $dateDeNaissance) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateDeNaissance = new DateTime ($dateDeNaissance);
}

    public function __toString() {
    return $this->nom." ". $this->prenom."  ";
    }
//
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
//
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getInfos()
    {
    return "Titre : ". $this->titre." ".$this->nbPages." pages / ".$this->prix."<br>";
    }
}

$nA = new Auteur ("King", "Stephen", "21-09-1941");

?>