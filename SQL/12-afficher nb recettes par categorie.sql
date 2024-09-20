#Afficher le nombre de recettes par catégories : X entrées, Y plats, Z desserts

SELECT  categorie.id_categorie
    ,   categorie.type_categorie
    ,   COUNT(recette.id_recette) AS 'NbRecettes par catégorie'
FROM    categorie   categorie
    LEFT JOIN
        recette
        ON  categorie.id_categorie = recette.id_categorie
GROUP BY categorie.id_categorie
    ,   categorie.type_categorie;



