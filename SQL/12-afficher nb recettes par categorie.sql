#Afficher le nombre de recettes par catégories : X entrées, Y plats, Z desserts
#Categories d'options disponibles :
#4-Entree
#5-Plat
#6-Dessert

/*
SELECT recette.id_recette, recette.nom_recette, recette.tempsPreparationMns, COUNT(cuisiner.id_recette) AS nbIngredientsingredient
FROM recette
INNER JOIN cuisiner ON recette.id_recette = cuisiner.id_recette
GROUP BY recette.id_recette
ORDER BY tempsPreparationMns DESC;
*/

SELECT  categorie.id_categorie
    ,   categorie.type_categorie
    ,   COUNT(recette.id_recette) AS 'NbRecettes par catégorie'
FROM    categorie   categorie
    LEFT JOIN
        recette
        ON  categorie.id_categorie = recette.id_categorie
GROUP BY categorie.id_categorie
    ,   categorie.type_categorie;



