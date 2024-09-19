SELECT SUM(ingredient.cout_ingredient * cuisiner.quantité) AS cout_global,
recette.nom_recette AS nom
FROM ingredient
JOIN cuisiner ON ingredient.id_ingredient = cuisiner.id_ingredient
JOIN recette ON cuisiner.id_recette = recette.id_recette
WHERE recette.nom_recette = 'Pâtes à la "carbonara" à la française';