SELECT nom_recette, tempsPreparationMns
FROM recette
WHERE tempsPreparationMns = (
    SELECT MIN(tempsPreparationMns)
    FROM recette
);

#Affiche les recettes ayant le temps de preparation le plus court.
#source : https://www.bing.com/chat?q=MySQL%20Afficher%20l%20%2F%20les%20recettes%20les%20plus%20rapides%20%C3%A0%20pr%C3%A9parer&qs=ds&form=SCCODX
#Afficher la / les recette(s) les plus rapides à préparer (en minutes), ex-aequo si plusieurs recettes.