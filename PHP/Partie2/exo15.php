<h1>Exo 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.
Affichage
L’adresse elan@elan-formation.fr est une adresse e-mail valide
L’adresse contact@elan est une adresse e-mail invalide</p>

<H2>Le résultat</H2>

<?php

//Sources
//https://www.php.net/manual/fr/filter.examples.validation.php

$email_a = 'elan@elan-formation.fr';
$email_b = 'contact@elan';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est considérée comme valide.<br>";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est considérée comme valide.<br>";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.";
}