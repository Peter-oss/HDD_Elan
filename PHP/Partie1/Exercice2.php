<h1>Exercice 2</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".</p>
<p>Ecrire un algorythme permettant de compter le nombre de mots contenus dans cette phrase.</p>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($chaineDeCaracteres); // uniquement chaines de caracteres
echo "<h1>Resultat :</h1>";
echo "la phrase contient $nbMots mots.<br>";
echo "<br>";