<h1>Exercice 3</h1>

<h1>Ancienne version :</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui.</p>

<h1>Nouvelle version :</h1>

<p>Soit la phrase "Notre formation DL commence demain.</p>

<h1>Sujet :</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<?php

echo "<h1>Resultat :</h1>";
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
echo "ancienne version : $chaineDeCaracteres.<br><br>";
$chaineDeCaracteres = str_replace("aujourd'hui","demain",$chaineDeCaracteres); //PHP str_replace() Function
echo "la nouvelle version :  $chaineDeCaracteres.<br>";