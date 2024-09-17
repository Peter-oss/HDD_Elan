<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>
<p>Exemple :
repeterImage($url,4);</p>

<?php

//example sans fonction :

echo "<h1>Resultat sans fonction</h1<br>";

echo "<br>";

$url = "http://my.mobirise.com/data/userpic/764.jpg";


$nbAffichage = 4;
for($i = 1; $i <= $nbAffichage; $i++) {
echo "<img src = ".$url.">";
}
echo "<br><br>";

//exemple avec fonction :

echo "<h1>Resultat avec fonction</h1<br>";

echo "<br>";

function repeterImage($url,$nbAffichage) {
    $nbAffichage = 4;
    for($i = 1; $i <= $nbAffichage; $i++) {
    echo "<img src = ".$url.">";
    }
}

repeterImage($url,$nbAffichage);