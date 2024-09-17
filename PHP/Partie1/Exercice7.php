<h1>Exercice 7</h1>


<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>
<p>Poussin : entre 6 et 7 ans</p>
<p>Pupille : entre 8 et 9 ans</p>
<p>Minime : entre 10 et 11 ans</p>
<p>Cadet : à partir de 12 ans</p>
<p>Si la catégorie n’est pas gérée, merci de le préciser.</p>
<p>Affichage :</p>
<p>L’enfant qui a 10 ans appartient à la catégorie "Minime"</p>

<h1>Résultat :</h1>

<?php

//Déclaration variables
$age = 7;

//gestion de l'age et affectation, ne pas oublier "break" sinon plantage du navigateur

echo "L'enfant est agé de : $age ans.<br>";
switch (true) {
    case $age >= 12: echo "l'enfant appartient à la catégorie Cadet.<br>"; break; //boolean:si la condition est vrai
    case $age >= 10 and $age < 12: echo "l'enfant appartient à la catégorie Minime.<br>"; break; //boolean:si la condition est vrai
    case $age >= 8 and $age < 10: echo "l'enfant appartient à la catégorie Pupille.<br>"; break; //boolean:si la condition est vrai
    case $age >= 6 and $age < 8: echo "l'enfant appartient à la catégorie Poussin.<br>"; break;   //boolean:si la condition est vrai
    default: echo "Age non pris en charge, l'enfant est trop jeune.<br>"; //si tous les tests echouent
}