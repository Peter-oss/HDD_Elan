SELECT recette.nom_recette, cuisiner.quantité
FROM cuisiner
INNER JOIN recette ON cuisiner.id_recette = recette.id_recette
WHERE cuisiner.id_ingredient = 1;

#Source : https://www.bing.com/chat?q=copilot+mysql+ingredients+par+recette&sendquery=1&FORM=SCCODX
#Pour obtenir la liste des recettes utilisant un ingrédient spécifique :

