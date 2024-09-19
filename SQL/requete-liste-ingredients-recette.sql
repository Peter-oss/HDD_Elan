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

#Insérer une nouvelle recette : « Pâtes à la carbonara » dont la durée de réalisation est de 20 min avec 
#les instructions de votre choix. Pensez à alimenter votre base de données en conséquence afin de 
#pouvoir lister les détails de cette recettes (ingrédients)

#La présentation n'est pas géniale mais ça marche