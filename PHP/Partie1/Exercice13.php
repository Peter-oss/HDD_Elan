h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h1>Résultat :</h1>

<?php

//Définition des variables et des données

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = 0; //compte le nombre d'éléments du tableau
$sommeNotes = 0; //additionne les notes du tableau
$moyenne = 0; //moyenne arrondie à la 2eme décimale

//Algorithme
//exercice tiré du cours

$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2); //si on ne met pas 2 cela va afficher un arrondi à 0 décimales
    echo "Les notes obtenues par l’élève sont : ";
foreach($notes as $valeur) {
    echo $valeur." ";
}
    echo "<br>";
    echo "Sa moyenne générale est donc de : $moyenne<br>";