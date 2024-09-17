<h1>Exercice 12</h1>

<p>partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>
<p>Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG</p>
<p>Affichage :</p>
<p>Salut Mickaël</p>
<p>Hola Virgile</p>
<p>Hello Marie-Claire</p>
<h1>Résultat de base:</h1>

<?php

//Déclaration variables

$personnes = [
    "Mickaël" => "Salut",
    "Virgile" => "Hola",
    "Marie-Claire" => "Hello"];


//echo var_dump($personnes)."<br>"; //Dump complet du tableau, brut de décoffrage

//Algorithme

foreach($personnes as $prenom => $sal) {
    echo "$sal $prenom<br>";}

//Algorithme variante tri sur prénom

    ksort($personnes);  //tri sur clé

echo "<h1>Résultat après tri sur le prénom:</h1>";

foreach($personnes as $prenom => $sal) {
    echo "$sal $prenom<br>";}