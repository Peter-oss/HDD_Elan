<?php

//Il y avait une erreur de variable qui empechait l'affichage des comptes par titulaire, corrigé par les collègues
//Meme logique que l'exercice Livres
//source : https://github.com/Articvolt/PHP-Banque-POO/blob/master/README.md

class Compte {

private string $libelle;
private float $solde;
private string $devise;
private Titulaire $titulaire; //injection objet class Titulaire

public function __construct (string $libelle, float $solde , string $devise , Titulaire $titulaire) {
    $this->libelle = $libelle;   //références du compte bancaire
    $this->solde = $solde;
    $this->devise = $devise;
    $this->titulaire = $titulaire;
    $titulaire -> ajouterCompte($this); //le compte bancaire sur lequel je suis en train de travailler, ajouté au tableau
}
    public function __toString() {
    return $this->libelle." ". $this->solde." ".$this->devise; //impression dans le navigateur
    }
//
    public function getLibelle()                             //lit les données
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)                     //modifie les données
    {
        $this->libelle = $libelle;
        return $this;
    }
//
    public function getSolde()                               //lit le solde banque
    {
        return $this->solde;
    }
    public function setSolde($solde)                         //modifie le solde banque
    {
        $this->solde = $solde;
        return $this;
    }
//
    public function getDevise()                              //lit les données
    {
        return $this->devise;
    }
    public function setDevise($devise)                       //modifie les devises du compte si nécessaire
    {
        $this->devise = $devise;
        return $this;
    }
// source : https://github.com/Articvolt/PHP-Banque-POO/blob/master/Compte.php
    public function crediter(float $montant) {               //fonction pour créditer, augmenter le solde
        $this->solde += $montant;                            // += : permet d'additionner le montant au solde
}
// source : https://github.com/Articvolt/PHP-Banque-POO/blob/master/Compte.php
    public function debiter(float $montant) {                 //fonction pour débiter, diminuer le solde
        $this->solde -= $montant;                             // -= : permet de soustraire le montant du solde
}
// source : https://github.com/Articvolt/PHP-Banque-POO/blob/master/Compte.php
    public function virement(float $montant, Compte $compte) {
        if ($montant < $this->solde) {                        //le virement ne peut etre effectué que s'il y a une prov suffisante
            echo "Virement de $montant € a été effectué<br>"; //succes du virement
            $this->debiter($montant);                         // réutilisation des fonctions précédentes
            $compte->crediter($montant);                      // réutilisation des fonctions précédentes
        } else echo "Vous n'avez pas assez d'argent";         //condition pour faire un virement entre les comptes : avoir assez de fric !       
}
}
?>