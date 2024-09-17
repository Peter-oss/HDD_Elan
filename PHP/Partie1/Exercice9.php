<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<p>Affichage :</p>
<p>Age : 32</p>
<p>Sexe : F</p>
<p>La personne est imposable.</p>

<?php

echo"<h1>Résultat :</h1>";

//déclaration des variables

$age = 35;
$sexe = "H";

//algorithme, attention = est une affectation et == est une égalité !!!

echo "Age : $age ans<br>";
echo "Sexe : $sexe<br>";


if($age >= 18 && $age <= 35 && $sexe == "F") {
    echo "La personne est imposable";
} 
 else if($age > 20 && $sexe == "H") {
    echo "La personne est imposable";} 
else {
        echo "La personne est non-impossible";}