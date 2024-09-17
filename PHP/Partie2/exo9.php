<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>
<p>afficherRadio($nomsRadio);</p>
<p>Masculin, Féminin et Autre</p>

<?php

$elements = [
    "Masculin" => "",
    "Féminin"   => "",
    "Autre"    => "checked"
];

function afficherRadio($elements) {


foreach($elements as $value => $option) {

echo "<input type='radio' name=".$value." ".$option." ".$value."/>";

echo $value."<br>";
}
}

afficherRadio($elements);

//echo "Garçon ou fille ? <input type=radio name=sexe value='G'/>Garçon<input type=radio name=sexe value='F'/>Fille<br/>";

