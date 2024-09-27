SELECT SUM(ingredient.cout_ingredient * cuisiner.quantité) AS cout_global,
recette.nom_recette AS nom
FROM ingredient
JOIN cuisiner ON ingredient.id_ingredient = cuisiner.id_ingredient
JOIN recette ON cuisiner.id_recette = recette.id_recette
WHERE recette.nom_recette = 'Pâtes à la "carbonara" à la française';

#Insérer une nouvelle recette : « Pâtes à la carbonara » dont la durée de réalisation est de 20 min avec les instructions de votre choix. Pensez à alimenter votre base de données en conséquence afin de pouvoir lister les détails de cette recettes (ingrédients)