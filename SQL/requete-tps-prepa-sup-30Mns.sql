SELECT recette.id_recette, recette.nom_recette, recette.tempsPreparationMns FROM recette WHERE  recette.tempsPreparationMns >= 30;

# affiche les recettes dont le temps de préparation est supérieur ou égal à 30 minutes