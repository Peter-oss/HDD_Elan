<?php

//Il y avait une erreur de variable qui empechait l'affichage des comptes par titulaire, corrigé par les collègues
//Meme exercice que Livres
//source : https://github.com/Articvolt/PHP-Banque-POO/blob/master/README.md

class Titulaire {  //pour création de l'objet Titulaire
private string $titulaire; //Nom Prenom
// private string $prenom;
private DateTime $dateDeNaissance;  //format US
private string $ville;
private array $comptes; //création tableau qui va contenir le titulaire et ses comptes


public function __construct(string $titulaire, string $dateDeNaissance, string $ville) {
    $this-> titulaire = $titulaire;
    //$this->prenom = $prenom;
    $this->dateDeNaissance = new DateTime ($dateDeNaissance);
    $this->ville = $ville;
    $this->comptes = []; //construction du tableau vide du titulaire auquel les comptes bancaires seront rattachés
}

    public function __toString() { //pour l'impression dans le navigateur
    return $this->titulaire;
    }
//
    public function getTitulaire() //getter (lit les données)
    {
        return $this->titulaire;
    }
    public function setTitulaire($titulaire) //setter (ecrit les données)
    {
        $this->titulaire = $titulaire;
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
    public function ajouterCompte (Compte $libelle) { 
            $this -> comptes [] = $libelle; //ajout compte bancaire au tableau du titulaire, le titulaire peut avoir plusieurs comptes bancaires
    }
//
    public function afficherCompte() {
        $resultat = "<h2>comptes bancaires de $this->titulaire</h2>";
            foreach ($this -> comptes as $compte) {
            $resultat.= $compte."<br>";
    }
    return $resultat; //afficher les comptes bancaires du titulaire
    }
}
?>