SELECT 
    recette.nom_recette AS 'Recette',
    ingredient.nom_ingredient AS 'Ingrédient',
    cuisiner.`quantité` AS 'Quantité',
    ingredient.uniteMesure AS 'Unité'
FROM 
    recette
JOIN 
    cuisiner ON recette.id_recette = cuisiner.id_recette
JOIN 
    ingredient ON cuisiner.id_ingredient = ingredient.id_ingredient
WHERE 
    recette.nom_recette = 'Pâtes à la "carbonara" à la française';

#Afficher le détail de la recette n°5 (liste des ingrédients, quantités et prix)