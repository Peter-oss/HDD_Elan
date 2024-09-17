<?php

//Il y avait une erreur de variable qui empechait l'affichage des comptes par titulaire, corrigé par les collègues
//Meme exercice que Livres
//surce : https://github.com/Articvolt/PHP-Banque-POO/blob/master/README.md

include 'Titulaire.php';            //lien vers d'autres PHP
include 'CompteBancaire.php';       //lien vers d'autres PHP

$nouveauTitulaire0 = new Titulaire ("CONCHE Peter", "1965/07/31", "Mulhouse"); //creation

$nouveauCompte0 = new Compte ("Compte Courant 143000A", 1000, "Euro", $nouveauTitulaire0); //creation
$nouveauCompte1 = new Compte ("Compte Courant 143000B", 500, "Euro", $nouveauTitulaire0);  //creation
$nouveauCompte2 = new Compte ("Compte Epargne 143000E", 200, "Euro", $nouveauTitulaire0);  //creation
$nouveauCompte3 = new Compte ("Compte Devises 143000D", 1000, "USD", $nouveauTitulaire0);  //creation
// $nouveauCompte4 = new Compte ("", 0, "", $nouveauTitulaire0); //compte vide

echo $nouveauTitulaire0 -> afficherCompte();                                               //liste de tous les comptes bancaires pour un titulaire donné
var_dump ($nouveauCompte1->getSolde());                                                    //informations pour le compte donné    
$nouveauCompte1->virement(50, $nouveauCompte2);                                            //opération de virement en cours
var_dump ($nouveauCompte1);                                                                //informations pour le compte donné
$nouveauCompte1->virement(5000, $nouveauCompte2);                                          //apres mise en place test si assez d'argent sur le compte

?>