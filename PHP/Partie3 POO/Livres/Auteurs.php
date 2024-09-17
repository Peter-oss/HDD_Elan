<?php

//Attention à la ponctuation et la syntaxe
//Attention, $nomPrenom, de preference indiquer deux variables séparées $nom et $prenom, si jamais quelqu'un demande une extraction de tous les auteurs ayant le meme nom

class Auteur {  //pour création de l'objet Auteur

private string $nomPrenom;
private DateTime $dateDeNaissance;  //format US
private array $livres; //création tableau qui va contenir l'auteur et ses livres


public function __construct(string $nomPrenom, string $dateDeNaissance) {
    $this->nomPrenom = $nomPrenom;
    $this->dateDeNaissance = new DateTime ($dateDeNaissance);
    $this->livres = []; //construction du tableau auteur auquel les livres seront ajoutés
}

    public function __toString() { //pour l'impression dans le navigateur
    return $this->nomPrenom;
    }
//
    public function getNomPrenom() //getter (lit les données)
    {
        return $this->nomPrenom;
    }
    public function setNomPrenom($nomPrenom) //setter (ecrit les données)
    {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }
//
    public function getdateDeNaissance()  //getter (lit les données)
    {
    return $this->dateDeNaissance;
    }
    public function setdateDeNaissance($dateDeNaissance)  //setter (ecrit les données)
    {
    $this->dateDeNaissance = $dateDeNaissance;
    return $this;
    }
//
    public function ajouterLivre (Livre $livre) {
            $this -> livres [] = $livre; //push le livre dans le tableau de l'auteur, ajout du livre en fonction de l'auteur pour édition bibliographie par auteur par la suite
    }
//
    public function afficherBibliographie() {
        $resultat = "<h2>livres de $this</h2>";
            foreach ($this -> livres as $livre) {
            $resultat.= $livre."<br>";
    }
    return $resultat;
    }
}
//
?>