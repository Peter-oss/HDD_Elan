#Exo-7 Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Santé'. Potion=3

SELECT 
nom_potion, 
cout_ingredient AS cout_ingredient,
nom_ingredient AS nb_ingredient,
qte,
cout_ingredient * qte AS cout_total
FROM potion
INNER JOIN composer
ON composer.id_potion = potion.id_potion
INNER JOIN ingredient
ON composer.id_ingredient = ingredient.id_ingredient
WHERE potion.id_potion = 3;

