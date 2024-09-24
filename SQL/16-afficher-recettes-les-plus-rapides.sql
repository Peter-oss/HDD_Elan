SELECT nom_recette, tempsPreparationMns
FROM recette
ORDER BY tempsPreparationMns ASC
LIMIT 1;

#Afficher la / les recette(s) les plus rapides à préparer (en minutes)
#dans cet exemple il y a une seule recette à 5 minutes

#Afficher la / les recette(s) les plus rapides à préparer

SELECT nom_recette, tempsPreparationMns
FROM recette
ORDER BY tempsPreparationMns ASC
LIMIT 5;

#Afficher la / les recette(s) les plus rapides à préparer (en minutes)
#dans cet exemple il y a les 5 recettes prennnat le moins de temps