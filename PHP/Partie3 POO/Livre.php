<?php


class Livre {

private string $titre;
private int $nbPages;
private int $annee;
private float $prix;
private Auteur $auteur;


public function __construct (string $titre, int $nbPages, int $annee, float $prix, string $nom, string $prenom) {
    $this->titre = $titre;
    $this->nbPages = $nbPages;
    $this->annee = $annee;
    $this->prix = $prix;
    $this->nom = $nom;
    $this->prenom = $prenom;}

    public function __toString() {
    return $this->titre." ". $this->nbPages." ".$this->annee." ".$this->prix." ".$this->nom." ".$this->prenom;
    }
//
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }
//
    public function getnbPages()
    {
        return $this->nbPages;
    }
    public function setnbPages($nbpages)
    {
        $this->nbPages = $nbPages;
        return $this;
    }
//
    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($annee)
    {
        $this->annee = $annee;
        return $this;
    }
//
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }
//
    public function getNom()   
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;}
//
    public function getPrenom()   
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prix = $prenom;
        return $this;}
//
    public function afficherBibliographie() {
        return "Livres de ".$this->auteur."<br>";
        echo $nL0->getInfos();
        echo $nL1->getInfos();
        echo $nL2->getInfos();
        echo $nL3->getInfos();
        }
}


?>

