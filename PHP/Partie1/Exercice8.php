<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>
<p>Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …</p>

<?php

//solution 1 avec for i=1 to 10...

$i = 1; //increment
$valeur = 8; //valeur à multiplier

echo"<h1>Résultat :</h1>";
echo "<br>";
echo"<h1>Méthode avec boucle For :</h1>";
echo "<br><br>";
for($i = 1; $i <= 10; $i++) {
    echo "$i que multiplie $valeur donne :".($i * $valeur)."<br>";
    }
echo "<br><br>";
echo"<h1>Méthode avec boucle while</h1>";
echo "<br><br>";

//solution 2 avec while $i <= 10
$i = 1; //util mm var que l'ex precedent, tant que la valeur n'est pas égale à 10
while($i <= 10) {
    echo "$i que multiplie $valeur donne :".($i * $valeur)."<br>";
    $i++; //attention, incrementation obligatoire sinon bouche infinie et plantage navigateur
}