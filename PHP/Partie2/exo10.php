<!--inclure les fichiers dont vous avez besoin des autres exercices !! include=php-->

<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<?php

require "exo5.php"; //récupération afficherForm() de l'exo5.php
require "exo6.php"; //récupération alimenterListeDeroulante();

// echo "<h1>Résultat avec les fonctions définies précedemment : </h1>";

//coordonnées personnelles :

$nomsInput = array("Nom","Prénom","Adresse mail", "ville");

afficherForm($nomsInput);


//sexe :

echo "Garçon ou fille ? <input type=radio name=sexe value='G'/>Garçon<input type=radio name=sexe value='F'/>Fille<br/><br>";

echo "Formation visée :<br><br>";

$elements = array("Développeur logiciel","Désigner web","Intégrateur", "Chef de projet");

alimenterListeDeroulante($elements)." <br>";

//bouton de soumission :

echo "<input type=submit value=Soumettre>";