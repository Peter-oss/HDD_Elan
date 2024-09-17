<!-- <h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>
<p>Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</p> -->

<?php



//Déclaration de valeurs



//exemple en statique :

//echo "<h1>Résultat en statique</h1>";

//echo "Civilité : ";
//echo "<select name=select>";
//echo "<option value=Option 1>Monsieur</option>";
//echo "<option value=Option 2>Madame</option>";
//echo "<option value=Option 3>Mademoiselle</option>";
//echo "</select><br/>";

//exemple en dynamique :

$elements = array("Monsieur","Madame","Mademoiselle");
echo "<h1>Résultat :</h1>";

function alimenterListeDeroulante($elements) {

//echo "Civilité : ";
echo "<select name=select>";
foreach($elements as $value){
    echo "<option value='$value'>".$value."</option>";
    }
}

// alimenterListeDeroulante($elements);



