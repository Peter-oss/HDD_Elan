#Exo-7 Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion Santé. id_potion=3

/*
#Source : exercice recettes

SELECT 
    recette.nom_recette AS 'Nom de la Recette',
    ingredient.nom_ingredient AS 'Ingrédients',
    cuisiner.`quantité` AS 'Quantité',
    ingredient.uniteMesure AS 'Unité',
  ingredient.cout_ingredient * cuisiner.`quantité` AS cout_global
   
FROM 
    recette
JOIN 
    cuisiner ON recette.id_recette = cuisiner.id_recette
JOIN 
    ingredient ON cuisiner.id_ingredient = ingredient.id_ingredient
WHERE 
    recette.nom_recette = 'Pâtes à la "carbonara" à la française';
*/

SELECT 
nom_potion, 
cout_ingredient AS cout_igredient,
nom_ingredient AS nb_ingredient,
qte
FROM potion
INNER JOIN composer
ON composer.id_potion = potion.id_potion
INNER JOIN ingredient
ON composer.id_ingredient = ingredient.id_ingredient
WHERE potion.id_potion = 3;

