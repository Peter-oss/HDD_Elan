SELECT recette.nom_recette, categorie.type_categorie, recette.tempsPreparationMns
FROM recette INNER JOIN categorie ON recette.id_categorie = categorie.id_categorie
ORDER BY tempsPreparationMns DESC;


test sql