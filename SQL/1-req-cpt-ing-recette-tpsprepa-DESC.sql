SELECT recette.id_recette, recette.nom_recette, recette.tempsPreparationMns, COUNT(cuisiner.id_recette) AS nbIngredientsingredient
FROM recette
INNER JOIN cuisiner ON recette.id_recette = cuisiner.id_recette
GROUP BY recette.id_recette
ORDER BY tempsPreparationMns DESC;