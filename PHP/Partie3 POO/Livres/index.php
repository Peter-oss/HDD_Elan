<?php

include 'Livres.php';
include 'Auteurs.php';

$nouvelAuteur0 = new Auteur ("King Stephen", "09/21/1941");
$nouvelAuteur1 = new Auteur ("Poe Edgar Allan", "01/19/1809");


$nouveauLivre0 = new Livre ("Ca", 1138, 1986, 20, $nouvelAuteur0);
$nouveauLivre1 = new Livre ("Simetierre", 374, 1983, 15, $nouvelAuteur0);
$nouveauLivre2 = new Livre ("Le Fléau", 823, 1978, 14, $nouvelAuteur0);
$nouveauLivre3 = new Livre ("Shining", 447, 1977, 16, $nouvelAuteur0);
$nouveauLivre4 = new Livre ("The Fall of the House of Usher", 588, 1839, 50, $nouvelAuteur1);

echo $nouvelAuteur0 -> afficherBibliographie();
echo $nouvelAuteur1 -> afficherBibliographie();
?>