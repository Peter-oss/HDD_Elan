<?php
    session_start (); //A la différence d'index.php, nous aurons besoin ici de parcourir le tableau de session, il est donc nécessaire d'appeler la fonction session_start() en début de fichier afin de récupérer, comme dit plus haut, la session correspondante à l'utilisateur.
    //ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"> <!-- Vers le cosmetique-->
        <title>Récapitulatif des produits</title>
    </head>
    <body>

        <h1><br><br>Récapitulatif des produits<br><br></h1>
        <?php
            if(!isset($_SESSION['products']) || empty($_SESSION['products'])){ //test pour verifier l'existence de la clé "products"
                echo "<p>Aucun produit en session...</p><br>";
            }
            else{
                echo "<table>",
                        "<thead>",
                            "<tr>",
                            "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix</th>",
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                           "</tr>",
                        "</thead>",
                    "</tbody>";
                $totalGeneral = 0; //déclaration variable et remise à zéro de celle-ci
                $qtProduits = 0; //quantité de types de produits
                foreach($_SESSION['products'] as $index => $product){
                            echo "<tr>",
                                "<td>".$index."</td>",
                                "<td>".$product['name']."</td>",
                                "<td>".number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                                "<td> <a class='pblanc' href='traitement.php?action=down-qtt&id=$index'>  -  </a>".$product['qtt']."<a class='pblanc' href='traitement.php?action=up-qtt&id=$index'>  +  </a></td>",
                                "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                                "<td><a class='pblanc' href='traitement.php?action=delete&id=$index'>Supprimer</a></td>",
                            "</tr>";
                            $totalGeneral += $product['total']; //on additionne tous les totaux de chaque produit (opérateur combiné)
                            $qtProduits += 1;
                }
                            echo "<tr>",
                                "<td colspan=4>Total général : </td>",
                                "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td",
                                "<tr>",
                            "</tbody>",
                        "</table>";
                            echo "<br>";
                            echo "Nombre de produits saisis : ".$qtProduits;
                            echo "<br><br>";
                            }
        ?>

</div> <!-- suppression de tout le contenu de la table -->
    <div id="lien">
        <div class="lien" >
            <a class="pblanc" href="traitement.php?action=deleteAll">Vider la liste des produits saisis !</a><br>  
        </div>

<!-- Bouton de navigation vers index.php -->

        <nav> <!-- boutons de navigation-->
            <ul> 
			<ul style="list-style-type:none; padding: 0; align-items: center; margin-right: 20px;">
                <li> <a class="pblanc" href="http://localhost/peter.conche/appweb/index.php">Saisie de nouveaux produits</a></li>
                <br><br>
            </ul>    
        </nav>   
        
    </body>
</html>