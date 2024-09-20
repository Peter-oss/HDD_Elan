SELECT recette.nom_recette, categorie.type_categorie, recette.tempsPreparationMns
FROM recette INNER JOIN categorie ON recette.id_categorie = categorie.id_categorie
ORDER BY tempsPreparationMns DESC;

#Afficher toutes les recettes disponibles (nom de la recette, catégorie et temps de préparation) triées de façon décroissante sur la durée de réalisation