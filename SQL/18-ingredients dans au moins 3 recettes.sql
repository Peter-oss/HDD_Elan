SELECT ingredient.id_ingredient, COUNT(recette.id_recette) AS recette_count
FROM recette, ingredient
GROUP BY ingredient.id_ingredient
HAVING recette_count >= 3;

#mysql Trouver les ingrédients qui sont utilisés dans au moins 3 recettes