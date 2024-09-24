SELECT recette.nom_recette
FROM recette
JOIN cuisiner ON recette.id_recette = cuisiner.id_recette
JOIN ingredient ON cuisiner.id_ingredient = ingredient.id_ingredient
GROUP BY recette.nom_recette
HAVING MAX(ingredient.cout_ingredient) <= 2;

#Afficher les recettes qui ne nécessitent pas d’ingrédients coûtant plus de 2€ par unité de mesure
#Source : https://www.bing.com/chat?q=MySQL+Afficher+les+recettes+qui+ne+n%c3%a9cessitent+pas+d%27ingr%c3%a9dients+co%c3%bbtant+plus+de+2%e2%82%ac+par+unit%c3%a9+de+mesure&sendquery=1&FORM=SCCODX