<!-- PHP (officiellement, ce sigle est un acronyme récursif pour PHP Hypertext Preprocessor ) est un langage de scripts généraliste et Open Source, spécialement conçu pour le développement d'applications web. Il peut être intégré facilement au HTML. -->

<!-- Partie 1 tutoriel initiations PHP -->

<h1>Introduction generale PHP</h1>
<?php

/*
    ouvrir PHP en interface web : http://localhost/plateau_num/ après avoir démarré laragon
    algorithme, attention = est une affectation et == est une égalité !!! erreur classique en dev.
*/

// Variables principales :

//attention au camelcase pour les variables

$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres2 = "mon prix est très interessant"; //string
$chaineDeCaracteres3 = "mon prix est de";
$entier = 50; //integer
$flottant = 9.99; //float
$boolean = true; //boolean (true or false)

//POO programmation orientée object



$date = new DateTime();  // programmation orientée objet

// affichage après declaration de variables à l'écran


echo "test<br>"; // <br> à la fin d'une chaine de caracteres pour retour chariot

echo $chaineDeCaracteres."<br>";
echo $chaineDeCaracteres2."<br>";
echo $chaineDeCaracteres3." ".$entier." euros<br>";

echo "$chaineDeCaracteres3 $entier euros<br>";

// Fonctions
$nbCaracteres = strlen($chaineDeCaracteres); // uniquement chaines de caracteres
echo $nbCaracteres."<br>";
echo "la phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

//conv ch en maj

$chaineMajuscules = strtoupper($chaineDeCaracteres); //commande base hors caracteres spéciaux
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>"; //special caracteres accentués

//compter nb de mots

echo "la phrase contient ".str_word_count($chaineDeCaracteres)." mots<br>";

// Premier parametrage tableaux, 2 versions :

$tableau1 = array("texte 1", "texte 2", "texte 3"); // arrayV1
$tableau2 = ["texte 1", "texte 2"]; // arrayV2
$tailleTABLEAU1 = count($tableau1); // nombre d'éléments

echo "le tableau 1 contient $tailleTABLEAU1 éléments<br>";

echo $tableau1[0]."<br>"; // affiche élément1 du tableau 1, comme tjs à 0, si cela affiche offset, on est en dehors du tableau

$notes = [12, 14, 9, 8,  19];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = $sommeNotes / $nbNotes;
echo "La moyenne est de $moyenne<br>";

//$average = round($sum / count($notes), 2); // Calcul de la moyenne arrondie à deux décimales

function get_average($array) { /*parametrage fonction réutilisable*/
    $sum = array_sum($array);
    $average = $sum / count($array);
    return $average;
}

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2); //si on ne met pas 2 cela va afficher un arrondi à 0 décimales
echo "La moyenne est de $moyenne<br>";

//op maths

$nbArticles = 5;
$prix = 10.99;
$pht = $nbArticles * $prix;
echo "Total HT $pht €<br>";

//TTC

$tauxTVA = 0.20;
$totalTTC = $pht * (1+$tauxTVA);
echo $totalTTC." €<br>";

//affiche le typede variable

echo gettype ($nbNotes)."<br>"; //si aff double, nombre à virgule, array etc

//affiche le type de variable et sa valeur

echo var_dump($chaineMajuscules)."<br>";

//structures de controle et les boucles

//parcours du tableau

//conditions avec if, attention prevoir toutes les possibilités

$prenom = "Georges";
$age = 22.5;
if($age < 18) {
    $resultat = "mineur";
} else {
    $resultat = "majeur";
}
echo "$prenom est $resultat<br>";

// Ternaire, le condition if sur une seule ligne

$result = $age >= 18 ? "majeur" : "mineur"; //condition ? exprSiVrai : exprSiFaux;
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")." <br>"; //version courte sur 1 ligne optimisation

/*en fonction de l'age affichage categorie, par de ternaire possible attention syntaxe !!
p > 30a senior
p > 20a cadet
sinon junior*/

if(gettype($age) == "integer" || "double") {
    if($age >= 30) { //si
        $resultat = "senior";
    } elseif($age >= 20) {
        $resultat = "cadet"; //sinon si
    } else {
        $resultat = "junior";// sinon
    }
    echo $resultat." <br>";}
    else {
        //echo "saisie incorrecte";
    }

//en cas de saisie d'une chaine de caractères pour $age il affichera "junior" ce qui est faux. Gettype permet de tester la qualité de la variable saisie.
//attention en cas de saisis pour $age 12.5 il faut double ou integer "double" || "integer", voir OR. (opérateur logique).


//exercice sur si switch/case, reservé pour les égalités.
/*si la valeur est 1 --> ok
si la valeur est 0 --> ko
sinon afficher valeur non gérée.
*/
$valeur = 99; //equiv IF
switch($valeur) {
    case 0: echo "ok!<br>"; break;
    case 1: echo "ko!<br>"; break;
    default: echo "valeur non gérée!<br>";
}    

// solution de contournement switch case reservé egalités :

$age = "aa";

if(gettype($age) == "integer" || "double") {
switch (true) {
    case $age >= 30: echo "senior<br>"; break; //boolean:si la condition est vrai
    case $age >= 20: echo "cadet<br>"; break;    
    default: echo "junior<br>";
}
} else {
    //echo "veuillez saisir un age numérique<br>";
}

//boucles, traitement itératifs
// afficher les chiffres de 1-10

//for i=, while, for each

//for i=, $i = $i +1

for($i = 1; $i <= 10; $i++) {
    echo $i."<br>";
    }

    $i = 1; //utilise la meme variable que l'exercice precedent
while($i <= 10) {
    echo $i."<br>";
    $i++; //attention, incrementation obligatoire sinon bouche infinie
}

//for each, tableau

/*$range = range(1,10);
var_dump($range);*/

foreach(range(1,10) as $valeur) {
    echo $valeur."<br>";
}

//exercices sur les tableaux à afficher selon 3 methodes

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
//echo $marques[2];
//var_dump($marques);

//affichage tableau marques de voitures methode 1
echo "<h3>Méthode for</h3>";
$nbMarques = count($marques);
for ($i = 0; $i < $nbMarques; $i++) {
        echo $marques[$i]."<br>";
}

//affichage tableau marques de voitures methode 2
echo "<h3>Méthode While</H3>";
$i = 0; //pour un while la valeur $i est à mettre à zéro sinon cela ne fonctionnera pas
while($i < $nbMarques) {
    echo $marques[$i]."<br>";
    $i++;
}

//affichage tableau marques de voitures methode 3

echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}

//tableaux associatifs
//clé - valeur

$formateurs = [
    "stephane" => "mulhouse", //1 clé unique par valeur
    "virgile" => "strasbourg",
    "micka" => "strasbourg",
    "dominique" => "colmar"
];

echo var_dump($formateurs)."<br>";

foreach($formateurs as $prenom => $ville) {
    echo "$prenom<br>";
}

foreach($formateurs as $prenom => $ville) {
    echo "$prenom habite $ville<br>";
}

//mb_strtoupper : mettre tout en majuscules, noms des villes.
//ucfirst : premiere lettre du prenom en majuscule

//tri du tableau par ordre alphabétique, à executer avant affichage

ksort($formateurs);  //tri sur clé
krsort($formateurs);  //tri inversé sur clé
asort($formateurs);  //tri sur la valeur
arsort($formateurs); //tri inversé sur la valeurs

foreach($formateurs as $prenom => $ville) {
    echo ucfirst($prenom)." habite ".mb_strtoupper($ville)."<br>"; //ucfirst = upper case first
}

//api, service genre météo

$clients = [

    "stephane" => [
        "adresse" => "10 rue de la Gare",
        "cp" => "67000",
        "ville" => "STRASBOURG",
        "tel" =>  "0988776666"
    ],
    "virgile" => [
        "adresse" => "1 rue principale",
        "cp" => "68100",
        "ville" => "MULHOUSE",
        "tel" =>  "0677889999"
    ],
];

//var_dump($clients);

echo $clients["stephane"]["cp"]." ".$clients["stephane"]["ville"]."<br><br>";



foreach($clients as $prenom => $coordonnees) {   //coordonnées est un tableau
    echo ucfirst($prenom)." habite ".
            $coordonnees["adresse"]." ".$coordonnees["cp"].
            " ".$coordonnees["ville"]." et a comme numero de téléphone : ".$coordonnees["tel"]."<br><br>"; //concatenation
        }

//creation de fonctions personnalisées pouvaant etre appelees n'importe ou et n'importe quand, parentheses obligatoires
//la fonction peut etre declaree ou l'on veut dans l'aggo ce n'est pas comme une decl de variable

echo afficherMessage();

function afficherMessage () : string { //renvoi oblig chaine de caracteres
            $message = "voici mon message<br>";
            return $message;
}
echo calculerCarre (89);
function calculerCarre ($nombre) {  //en option test sur valeur gettype
    // if (gettype($nombre) == "integer") {
        $resultat = $nombre * $nombre."<br>";
        return $resultat."<br><br>";
    // } else {
    // return "Erreur : la valeur doit etre un entier !<br>"}
    }

echo pow(9, 2)."<br><br>"; //autre façon de noter au carré, fct puissance

//fonction à partir d'un tableau, array = tableau



//calcul moyenne

function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);
    return $moyenne;
}

echo calculerMoyenne([9, 10.5, 11, 18, 12])."<br>";
echo calculerMoyenne([19, 10, 3, 8, 19])."<br>";
echo "<br>";

//affectation tableau de notes à des eleves

$eleves = [
    "cindy" => [12, 9, 19, 17, 12, 13],
    "pascal" => [8, 9, 12, 10, 17]
];

foreach($eleves as $prenom => $notes) {
    echo "la moyenne de $prenom est : ".calculerMoyenne($notes)."<br>";
}
echo "<br>";

//function pair ou impair

echo pairOuImpair(4);
echo pairOuImpair(5);

function pairOuImpair($nombre) : string {
if($nombre % 2 == 0) {
    $resultat = "pair<br>";
} else {
    $resultat = "impair<br>";
}
    return "$nombre est $resultat";
}

//fonction qui repete mot boucle equivalent str_repeat

echo repeterMot("Youpi", 6);

function repeterMot(string $mot, int $nbRepetitions) {
    $resultat="";
    foreach(range(1, $nbRepetitions) as $valeur) { //$valeur non utilisé, nécessaire pour presentation
            $resultat .= $mot." "; //concatenation
    }

    return $resultat;
}
echo "<br><br>";

echo str_repeat("Bidule"."<br>", 10);
echo "<br><br>";

//fonction qui repete nom string avec variantes

//echo repeterMot("youpi", 6, "-");
//echo repeterMot("hourra", 10, "/") ;
//function repeterMot(string $mot, int $nbRepetitions, string $separateur) {
//}

