<h1>Exercice 11</h1>

<?php

//Sources :
//https://www.developpez.net/forums/d1022889/php/langage/afficher-date-toute-lettre/
//copilot (je sais c'est pas bien).

$usDate = '2024-08-01';

function formaterDateFr($usDate) {
$dateTime = DateTime::createFromFormat('Y-m-d', $usDate); //inversion date et conversion en date française
$frenchDate = $dateTime->format('d-m-Y');

echo "date format US/GB ".$usDate."<br>";
echo "date format Fr ".$frenchDate."<br><br>";
echo "ce qui nous donne en date française développée : ";

$date_souhaite=$frenchDate;
$date_explode = explode("-", $date_souhaite); //démontage date en j-m-année
$jour=$date_explode[0];
$jour2=$jour;
$mois=$date_explode[1];
$annee=$date_explode[2];
 
$newTimestamp = mktime(12,0,0,$mois,$jour,$annee); // Créé le timestamp pour la date (a midi)
 
//Un tableau avec les jours en Français
$Jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
 //Pareil pour les mois en FR
$Mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

//affichage du résultat

//Afficher le libellé du jour
echo $Jour[date("w", $newTimestamp)].", le ";
//Affichier jour
echo $jour2." ";
// Afficher le libellé du mois
echo $Mois[date("n", $newTimestamp)]." ";
//Année
echo $annee;
}

formaterDateFr($usDate);














