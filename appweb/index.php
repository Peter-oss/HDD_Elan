<?php
    session_start (); //A la différence d'index.php, nous aurons besoin ici de parcourir le tableau de session, il est donc nécessaire d'appeler la fonction session_start() en début de fichier afin de récupérer, comme dit plus haut, la session correspondante à l'utilisateur.
    ini_set('display_errors', 0);
    $totalQuantite = 0;
    if(isset($_SESSION['products'])){
        foreach($_SESSION['products'] as $index => $product) {
            $totalQuantite += $product['qtt'];
        }    
    }
    if(isset($_GET['action'])){
        if(isset($_POST['submit'])){
            if($name && $price &&$qtt){
                $_SESSION['message'] = "Produit enregistré avec succès !";
                unset($GLOBALS['message']);
            }
            else $_SESSION['message'] = "Les données saisies sont incorrectes !";
            unset($GLOBALS['message']);    
        }
        else 
        $_SESSION['message'] = "Vous devez soumettre le formulaire !";    
    }    
     $message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"> <!-- Vers le cosmetique-->
        <title>Ajout produit</title>
    </head>
    <body>
        <h1>Ajouter un produit<br><br></h1>
        <form action="traitement.php?action=addProduct" method="post"> <!-- action=méthode d'ajout du produit, important car lien avec traitement.php -->
            <p>
                <label>
                    Nom du produit :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <!-- Identification du produit -->
                    <input type="text" name="name"> <!-- zone de saisie -->
                </label>
            </p>
            <br>
            <p>
                <label>
                    Prix du produit (en €)  : <!-- prix avec virgule -->
                    <input type="float" name="price"> <!-- zone de saisie -->
                </label>
            </p>
            <br>
            <p>
                <label>
                    Quantité désirée :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <!-- un entier -->
                    <input type="number" name="qtt" value="1"> <!-- au moins une pièce commandée -->
                </label>
            </p>
            <br><br>
            <p>
                <label>
                    Ajouter le produit :
                    <input type="submit" name="submit"> <!-- pour valider le formulaire -->
                </label>
            </p>
        </form>
        <br><br>
        <nav>

<!-- bouton de navigation vers recap.php -->

            <ul> 
			<ul style="list-style-type:none; padding: 0; align-items: center; margin-right: 20px;">
                    		<br><br>
                    		<li> <a class="pblanc" href="http://localhost/peter.conche/appweb/recap.php">Lister les produits saisis</a></li>
            </ul>    
        </nav>
        <br><br>
        <?php echo "Nombre de produits saisis : ".count ($_SESSION['products']); ?> <!-- compte le nb de lignes de produits dans la table -->
        <br><br>        
        
    </body>
</html>
<?php
//var_dump($_POST); //(controle) les données saisies par le client sont provisoirement stockées dans un tableau dont le contenu est édité par var_dump
/*
Les superglobales PHP comme $_POST représentent des tables ou des array
Afin d'accéder à toutes les informations pouvant être transmises par le client au serveur,
PHP dispose de plusieurs variables dites "superglobales". Toutes les superglobales sont du type tableau,
proposant ainsi une manière simple d'y regrouper plusieurs informations sous forme de paires "clé / valeur".
*/
?>