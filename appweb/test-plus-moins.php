<?php
session_start();
//Initialisation des quantités pour les produits (exemple)
//Source : Copilot, interdit mais tout de meme interessant
if (!isset($_SESSION['quantites'])) {
    $_SESSION['quantites'] = [
        'produit1' => 1,
        'produit2' => 2,
        'produit3' => 3
    ];
}
// Gestion des actions "+" et "-"
if (isset($_GET['action']) && isset($_GET['produit'])) {
    $produit = $_GET['produit'];
    if ($_GET['action'] == 'plus') {
        $_SESSION['quantites'][$produit]++;
    } elseif ($_GET['action'] == 'moins' && $_SESSION['quantites'][$produit] > 0) {
        $_SESSION['quantites'][$produit]--;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Modifier Quantités</title>
    </head>
        <body>
            <table border="1">
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                </tr>
                <?php foreach ($_SESSION['quantites'] as $produit => $quantite) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($produit); ?></td>
                    <td>
                        <a href="?action=moins&produit=<?php echo urlencode($produit); ?>">-</a>
                        <?php echo $quantite; ?>
                        <a href="?action=plus&produit=<?php echo urlencode($produit); ?>">+</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </body>
</html>