<h1>Exo 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant :
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
Affichage
bool(true)
string(5) "texte"
int(10)
float(25.369)
array(2) { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }</p>

<H2>Le résultat</H2>

<?php

//Données attention utiliser var_dump au lieu de gettype

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach ($tableauValeurs as $value) {
    echo var_dump($value)."<br>";
}


