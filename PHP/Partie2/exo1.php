<h1>Exercice 1</h1>
<p>Créer une fonction permettant de convertir et en rouge un texte passé en argument</p>

<h2>Résultat :</h2>

<style> /*Normalement fichier CSS à part*/
    .red {
        color: red;
    }
</style>
    
    
<?php

$texte = "Montexte en paramètre";
$texte2 = "Montexte en argument";

//A l'intérieur des "  ", ' ' comme guillemets


echo convertirMajRouge($texte); //ne pas mettre echo dans la fonction mais au debut de la fonction
function convertirMajRouge($texte) {  //() parametres ou arguments, elements permettant de faire fonctionner la fonction
    $result = mb_strtoupper($texte); //convertit chaine en upper case, attn caractères accentués, prendre mb_strtoupper
    $result = "<p class = 'red'>.$result";  //coloration texte et concatenation uniquement sur la variable, appelle CSS red
    return $result; //retour de la valeur et affichage de la valeur
}
echo "<br>";

echo convertirMajRouge($texte2); //réutilisation fonction pour 2eme string

//en une ligne

function convertirMajRouge2($texte) {
    return "<p class = 'red'>".mb_strtoupper($texte)."</p>"; //return peut etre remplacé par echo, mais la bonne pretique dit qu'il faut utiliser return
} //une fonction est censée renvoyer qqchose d'où return
//les couleurs sont nommées ici, red, blue, yellow ou green

echo convertirMajRouge2($texte);

echo convertirMajColor($texte, 'shit'); //fonction parametrable shit fonctionne, étonnant non ?

//choisit une couleur

function convertirMajColor($texte, $color) {
    return "<p style = 'color:$color'>".mb_strtoupper($texte)."</p>"; //sans passer par une classe déterminée, ici on choisit la couleur qu'on veut
}
//les couleurs sont nommées ici, red, blue, yellow ou green
// il existe aussi des couleurs comme #CDFB12 (jaune sale) par exemple, notation utilisée en stype CSS

//balise de fin PHP ci après :

?>