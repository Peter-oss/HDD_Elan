<?php


class Livre {

private string $titre;
private int $nbPages;
private int $annee;
private float $prix;
private Auteur $auteur; //injection objet

public function __construct (string $titre, int $nbPages, int $annee, float $prix, Auteur $auteur) {
    $this->titre = $titre;
    $this->nbPages = $nbPages;
    $this->annee = $annee;
    $this->prix = $prix;
    $this->auteur = $auteur;
    $auteur -> ajouterLivre($this); //le livre sur lequel je suis en train de travailler, ajouté au tableau
}
    

    public function __toString() {
    return $this->titre." ". $this->nbPages." ".$this->annee." ".$this->prix; //impression dans le navigateur
    }
//
    public function getTitre() //lit les données
    {
        return $this->titre;
    }
    public function setTitre($titre) //modifie les données
    {
        $this->titre = $titre;
        return $this;
    }
//
    public function getAuteur() //lit les données
    {
        return $this->titre;
    }
    public function setAuteur($auteur) //modifie les données
    {
        $this->auteur = $auteur;
        return $this;
    }
//
    public function getnbPages() //lit les données
    {
        return $this->nbPages;
    }
    public function setnbPages($nbPages) //modifie les données
    {
        $this->nbPages = $nbPages;
        return $this;
    }
//
    public function getAnnee() //lit les donnees
    {
        return $this->annee;
    }
    public function setAnnee($annee) //ecrit les données
    {
        $this->annee = $annee;
        return $this;
    }
//
    public function getPrix() //lit les données
    {
        return $this->prix;
    }
    public function setPrix($prix) //écrit les données
    {
        $this->prix = $prix;
        return $this;
    }
}

/*
    public function getInfos() {
        return "<h2>Livres Bibliographie</h2><br>";
        echo $titre." ".$annee." ".$nbPages." ".$prix." ".$nomPrenom;          
        }
//
    public function afficherBibliographie() {
        return "Livres de ".$this->auteur."<br>";
        echo nouveauLivre0 ->getInfos();
        echo nouveauLivre1 ->getInfos();
        echo nouveauLivre2 ->getInfos();
        echo nouveauLivre3 ->getInfos();
        }}
*/

?>