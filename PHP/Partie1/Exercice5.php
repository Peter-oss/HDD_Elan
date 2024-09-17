<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales. Affichage :
Montant en francs : 100
100 francs = 15.24 €</p>
<p>1€ = 6.55957 Francs</p>


<?php

echo"<h1>Résultat :</h1>";

$montantFrancs = 100;
$montantEuros = round($montantFrancs / 6.55957, 2); // Calcul de conversion Francs en Euros.
echo "$montantFrancs Francs, donnent $montantEuros Euros !";