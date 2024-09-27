SELECT recette.nom_recette
FROM recette
LEFT JOIN cuisiner ON recette.id_recette = cuisiner.id_recette
WHERE cuisiner.id_recette IS NULL;

#Trouver les recettes qui ne nécessitent aucun ingrédient (par exemple la recette de la tasse d’eau chaude qui consiste à verser de l’eau chaude dans une tasse)