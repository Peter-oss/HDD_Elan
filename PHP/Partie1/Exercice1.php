<h1>Exercice 1</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui.</p>
<p>Ecrire un algorythme permettant de compter le nombre de caracteres contenus dans cette phrase (espaces inclus).</p>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($chaineDeCaracteres); // uniquement chaines de caracteres
echo "<h1>Resultat :</h1>";
echo "la phrase contient $nbCaracteres caractères<br>";
echo "<br>";