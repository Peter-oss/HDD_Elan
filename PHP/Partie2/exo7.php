<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>
<p>genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées. Affichage</p>
<p>choix 1, choix 2, choix 3</p>

<?php

//Source "bac à sable" et cours
//Case à cocher :
//    <input type="checkbox" name="checkbox_1" checked="checked" />
//    <input type="checkbox" name="checkbox_2" />
//    <input type="checkbox" name="checkbox_3" /><br />


$elements = [
                    "choix 1" => "",
                    "choix 2" => "checked",
                    "choix 3" => "",
                    "choix 4" => ""
];

function genererCheckbox($elements) {
  
    echo "<form method=POST action=test.php enctype=multipart/form-data>";
    echo "Case à cocher :<br><br>";
        foreach($elements as $value => $option) {
                echo $value."<input type='checkbox' name=".$value." ".$option." /><br>";
        }
    }

genererCheckbox($elements);


