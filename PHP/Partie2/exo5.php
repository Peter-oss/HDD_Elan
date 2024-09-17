<!-- <h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");</p>
<p>afficherInput($nomsInput);</p> -->

<?php

//reprise champs HTML en PHP

$nomsInput = array("Nom","Prénom","Ville", "ecole", "université");

function afficherForm ($nomsInput) {


echo "<form method=POST>";

foreach($nomsInput as $value){
echo "<label>".$value."</label><br><input type=text name=nomsInput[]><br>";
}



//echo "<input type=submit value=Soumettre>";

echo "</form>";
}

// afficherForm($nomsInput);