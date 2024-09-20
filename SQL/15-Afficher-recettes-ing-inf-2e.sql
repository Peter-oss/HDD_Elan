SELECT r.nom_recette
FROM recettes r
JOIN composition c ON r.id_recette = c.id_recette
JOIN ingredients i ON c.id_ingredient = i.id_ingredient
GROUP BY r.nom_recette
HAVING MAX(i.prix_unite) <= 2;

#Afficher les recettes qui ne nécessitent pas d’ingrédients coûtant plus de 2€ par unité de mesure
#Source : https://www.bing.com/chat?q=MySQL+Afficher+les+recettes+qui+ne+n%c3%a9cessitent+pas+d%27ingr%c3%a9dients+co%c3%bbtant+plus+de+2%e2%82%ac+par+unit%c3%a9+de+mesure&sendquery=1&FORM=SCCODX