<h1>Exercice 4</h1>

<h1>Sujet :</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<p>La phrase « Engage le jeu que je le gagne » est palindrome</p>

<h1>Définition d'un palindrome :</h1> 

<p>source : https://www.laculturegenerale.com/palindrome-definition-exemples-liste/</p>

<p>les palindromes sont des textes ou des mots qui peuvent se lire dans les deux sens. Le palindrome est un jeu littéraire qui s’appuie sur la symétrie : un mot ou un groupe de mots doit être identique, par les lettres, par les syllabes ou par le son produit, quand il est lu de gauche à droite et de droite à gauche. En d’autres termes, le mot lu à l’envers doit être le même que celui lu à l’endroit. Aucune règle ne contraint l’auteur d’un palindrome (un palindromiste) à respecter les espaces ou les accents. Le plus souvent, l’ordre des lettres est le même de gauche à droite et de droite à gauche. 

« Palindrome » peut être un adjectif.</p>

<h1>Exemples de palindromes :</h1>

<p>La phrase « Ésope reste ici et se repose », lue de gauche à droite ou de droite à gauche, est identique.
« Été », « kayak » ou « ici » sont des mots palindromes.
« 1001 » est un nombre palindrome.
« Noyon », « Selles », « Senones » ou « Laval » sont des noms de ville palindromes.
Le « 02/02/2020 » est une date palindrome.</p>

<?php

echo "<h1>Résultat :</h1>"; //proposition de solution en PHP

$originalPalindromeToTest = "Engage le jeu que je le gagne"; // source https://drawne.com/standard-palindrome-php/
$palindrome = strtolower(preg_replace("([^A-Za-z0-9])", "", $originalPalindromeToTest )); //"preg_replace" enleve espaces dans string
$palindromeReversed = strtolower(strrev($palindrome)); //change caracteres to lower case
echo "Phrase originale : $originalPalindromeToTest<br><br>";
if ($palindrome == $palindromeReversed){
echo "$originalPalindromeToTest est un palindrome.";
}else{
echo "$originalPalindromeToTest n'est pas un palindrome.";
};