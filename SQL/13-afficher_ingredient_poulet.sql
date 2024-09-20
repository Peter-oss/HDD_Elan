SELECT
    recette.nom_recette,
    cuisiner.id_ingredient
    
FROM
    cuisiner
        INNER JOIN recette
            ON cuisiner.id_recette = recette.id_recette
WHERE cuisiner.id_ingredient = 40;

#40 = poulet par portions de 100 grammes
#Afficher les recettes qui contiennent l’ingrédient « Poulet »