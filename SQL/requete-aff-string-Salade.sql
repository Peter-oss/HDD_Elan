SELECT recette.id_recette, recette.nom_recette, recette.tempsPreparationMns FROM recette WHERE  recette.nom_recette LIKE '%Salade%';

# Source :  https://sql.sh/cours/where/like
# Afficher les recettes dont le nom contient le mot « Salade » (peu importe où est situé le mot en question)