<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <code>$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];</code><br>

Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en majuscules et que le tableau est trié par ordre alphabétique du nom du pays) grâce à une fonction personnalisée.</p>

<h2>Résultat :</h2>

<!-- creation tableau HTML en pur html avec declaration des valeurs dans le corps, ce n'est pas le but recherché -->
<!-- Organisation et structure tableau HTML -->

<!--<table border=1>                                            Creation tableau HTML avec bordure
    <thead>                                                     Entete tableau HTML
        <tr>                                                    tr=table row, ligne
                <th>Pays</th>                                   th=table head, affiché automatiquement centré et en gras
                <th>Capitales</th>
        </tr>
        <tbody>                                                 tbody=table body, corps du tableau
            <tr>
                <td>France</td>                                 td=table data, astuce pour afficher 2*mm ligne, td*2=abbr Emet
                <td>Paris</td> 
            </tr>
            <tr>
                <td>Allemagne</td>                              td=table data
                <td>Berlin</td> 
            </tr>
            <tr>
                <td>USA</td>                                    td=table data
                <td>Washington</td> 
            </tr>
        </tbody>
    </thead>

</table> -->

<?php

//ci-dessus tableau associatif , key => value, attention rappel 1 clé peut avoir plusieurs valeurs, il ne peut pas y avoir plusieurs clés dans le meme tableau

//déclarations variables et valeurs :

$capitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"]; //Le tableau peut aussi etre affiché en colonnes quand beaucoup de données

//creation function affichage contenu tableau foreach, une boucle

//Rappel sur affichage contenu tableau clé, valeur :
/*foreach($capitales as $pays => $capitale) {
        echo "Le pays $pays a comme capitale : $capitale<br>";
}*/

echo afficherTableHTML($capitales);

function afficherTableHTML ($capitales) {
    ksort($capitales); //tri sur clé "pays" de a à z, krsort c'est l'inverse de z à a, asort valeur ou arsort
    $result = "<table border=1>  
                <thead>    
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                <tbody>";
            foreach ($capitales as $pays => $capitale) {
            //.= equivalent $result = $result +, variables numériques, attention ici "string", donc concaténation = .
            
                    $result .= "<tr> 
                                    <td>".mb_strtoupper($pays)."</td> 
                                    <td>$capitale</td>
                                </tr>";
                    }
                    $result .= "</body></table";  //Attention = est une affectation et .= est une concatenation de "string"
                    return $result;
}

echo "<br><br>";

//Notez que le nom du pays s'affichera en majuscules et que le tableau est trié par ordre alphabétique du nom du pays
//Variante par rapport à l'exercice precedent :
//Variante <td>".mb_strtoupper($pays)."<td> mettre les pays en majuscules
//Variante <td>".ucfirst($capitale)."<td> mettre la première lettre des capitales en majuscule, attention ne prend pas en cpte les caracteres accentués, ucfirst

?>