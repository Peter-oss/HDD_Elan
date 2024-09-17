<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>
<p>Affichage :</p>
<p>Montant à payer : 152 €</p>
<p>Montant versé : 200 €</p>
<p>Reste à payer : 48 €</p>
<p>***************************************************</p>
<p>Rendu de monnaie :</p>
<p>4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €</p>

<h1>Résultat :</h1>

<p>Le rendu de monnaie donne la chose suivante :</p>

<?php

//saisie des variables déclarées

$mtAPayer = 152; //montant à payer
$mtVerse =  200; //montant donné par le client
$aRendre = $mtVerse - $mtAPayer; //reste à rendre

$nbBilletsPieces = 0; //reinitialisation des pièces et billets à rendre
$nb10 = 0;
$nb5 = 0;
$nb2 = 0;
$nb1 = 0;

//$stockBillets = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.01]; //stock de pieces et de billets disponibles.
//$stockBillets = [10, 5, 2, 1]; //stock de pieces et de billets disponibles V2.

//algorithme

// echo "Le prix à payer par le client : $mtAPayer €<br>";
// echo "L'argent donné par le client : $mtVerse €<br>";
// echo "<br>";
// echo "Reste à rendre au client : $ARendre €<br><br>";


//Version personnelle :
//echo "<h3>Méthode foreach</h3>";

/*foreach($stockBillets as $billet) {
    $nbBilletsPieces = floor($ARendre / $billet); //floor () arrondi d'un "float" vers l'entier, on ne rend que des billets entiers.
    if ($nbBilletsPieces <> 0) {echo "$nbBilletsPieces fois $billet € /";}
    $ARendre = $ARendre - ($nbBilletsPieces * $billet);
}*/
// $aRendre-=10;

//Methode while (systeme de boucle), autre méthode :

while($aRendre >= 10){
    $nb10++;
    $aRendre = $aRendre - 10;
}
echo "$nb10 billet(s) de 10 €<br>";


while($aRendre >= 5){
    $nb5++;
    $aRendre = $aRendre - 5;
}
echo "$nb5 billet(s) de 5 €<br>";


while($aRendre >= 2){
    $nb2++;
    $aRendre = $aRendre - 2;
}
echo "$nb2 piece(2) de 2 €<br>";


while($aRendre >= 1){
    $nb1++;
    $aRendre = $aRendre - 2;
}
echo "$nb1 piece(2) de 1 €<br>";