SELECT ingredient.id_ingredient, ingredient.nom_ingredient, COUNT(recette.id_recette) AS recette_count
FROM ingredient
INNER JOIN cuisiner  ON ingredient.id_ingredient = cuisiner.id_ingredient
INNER JOIN recette ON cuisiner.id_recette = recette.id_recette
GROUP BY ingredient.id_ingredient
HAVING recette_count >= 3;

#mysql Trouver les ingrédients qui sont utilisés dans au moins 3 recettes
#utiliser nb de inner joint inferieur d1 au nbs de tables utilisées.