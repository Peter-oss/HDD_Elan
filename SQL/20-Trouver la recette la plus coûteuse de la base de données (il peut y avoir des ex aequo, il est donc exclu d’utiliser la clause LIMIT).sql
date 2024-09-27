#Trouver la recette la plus coûteuse de la base de données (il peut y avoir des ex aequo, il est donc exclu d’utiliser la clause LIMIT)





#Trouver ci-après temps minimal ex-aequo de preparation

SELECT nom_recette, tempsPreparationMns
FROM recette
WHERE tempsPreparationMns = (
    SELECT MIN(tempsPreparationMns)
    FROM recette
);

#Lister cout de revient pour chaque recette ci-après :

SELECT recette.nom_recette, SUM(ingredient.cout_ingredient * cuisiner.quantité) AS cout_total
FROM recette
JOIN cuisiner ON recette.id_recette = cuisiner.id_recette
JOIN ingredient ON cuisiner.id_ingredient = ingredient.id_ingredient
GROUP BY recette.nom_recette;

#Les verres d'eau ne sont pas affichés car n'ayant aucun ingredient / cout

