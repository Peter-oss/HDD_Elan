<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/</p>

<h2>Résultat :</h2>

<?php

//Saisie des données et des variables :

//Tableau de départ :

$capitales = array(
    'France' => array('capitale' => "Paris", 'url'     => "<a target='_blank' href=https://fr.wikipedia.org/wiki/Paris>Lien</a>"),
    'Allemagne' => array('capitale' => "Berlin", 'url' => "<a target='_blank' href=https://fr.wikipedia.org/wiki/Berlin>Lien</a>"),
    'USA' => array('capitale' => "Washington", 'url'   => "<a target='_blank' href=https://fr.wikipedia.org/wiki/Washington>Lien</a>"),
    'Italie' => array('capitale' => "Rome", 'url'      => "<a target='_blank' href=https://fr.wikipedia.org/wiki/Rome>Lien</a>"),
    'Espagne' => array('capitale' => "Madrid", 'url'   => "<a target='_blank' href=https://fr.wikipedia.org/wiki/Madrid>Lien</a>")
);

//Pages Wikipédia des capitales : (à convertir en liens _blank)

//Paris         = https://fr.wikipedia.org/wiki/Paris
//Berlin        = https://fr.wikipedia.org/wiki/Berlin
//Washington    = https://fr.wikipedia.org/wiki/Washington
//Rome          = https://fr.wikipedia.org/wiki/Rome
//Madrid        = https://fr.wikipedia.org/wiki/Madrid

//Algorithme :

//Les liens doivent s'ouvrir dans un nouvel onglet et doivent etre triés sur "asort" "value"
//exemple : Echo "<a target='_blank' href=https://elan-formation.fr/accueil>Cliquez pour aller chez Elan Formation</a>";

function afficherTableHTML ($capitales) {
    ksort($capitales); 
    $result = "<table border=1>  
                <thead>    
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Link Wiki</th>
                    </tr>
                <tbody>";
                foreach ($capitales as $pays => $capitale) {
                        
                    $result .= "<tr> 
                                    <td>".mb_strtoupper($pays)."</td> 
                                    <td>".$capitale["capitale"]."</td>
                                    <td>".$capitale["url"]."<td>
                                </tr>";
                    }
                    $result .= "</body></table";  
                    return $result;
}

echo afficherTableHTML ($capitales);