<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2) Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €</p>

<?php

echo "<h1>Resultat :</h1>";

//déclaration variables

$puArticle = 9.99;
$qtArticle = 5;
$tauxTVA = 0.2;
$mtTTCArticle = 0; //je liste toutes les variables dans un premier temps

//calcul TTC

$mtTTCArticle = round(($puArticle*$qtArticle)*(1+$tauxTVA), 2); // Calcul du TTC

echo "Prix unitaire de l’article : $puArticle €<br>"; //affichage du résultat
echo "Quantité : $qtArticle<br>";
echo "Taux de TVA :".($tauxTVA*100)." %<br>";
echo "Le montant de la facture à régler est de : $mtTTCArticle €";