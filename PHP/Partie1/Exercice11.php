<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
<p>Exemple :</p>
    
<p>Tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes » Affichage (attention à utiliser une liste à puces)</p>
<p>Il y a 4 marques de voitures dans le tableau :</p>
<p>Peugeot</p>
<p>Renault</p>
<p>BMW</p>
<p>Mercedes</p>

<?php

//La reponse à cet exercice sort du cours légèrement customisé

//Déclaration variables

$voitures = ["Peugeot", "Renault", "BMW", "Mercedes"]; //le tableau brut de décoffrage
$nbMarques = count($voitures); //compte le nombre d'éléments dans le tableau
$i = 0; //Increment de boucle d'affichage

echo "<h1>Résultat :</h1>";

//Algoritme

for ($i = 0; $i < $nbMarques; $i++) { //La boucle pour afficher séquentiellement les éléments du tableau
    
    echo "<ul>";
    echo "<li>".$voitures[$i]."</li>";
    echo "</ul>";
}
