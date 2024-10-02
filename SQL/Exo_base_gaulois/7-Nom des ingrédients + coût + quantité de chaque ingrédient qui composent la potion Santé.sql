#Exo-7 Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Santé'. Potion=3

SELECT 
cout_ingredient AS cout_unitaire_de_chaque_ingredient,
nom_ingredient AS nom_ingredient,
qte AS Quantités,
cout_ingredient * qte AS cout_total_de_chaque_ingredient
FROM potion
INNER JOIN composer
ON composer.id_potion = potion.id_potion
INNER JOIN ingredient
ON composer.id_ingredient = ingredient.id_ingredient
WHERE potion.id_potion = 3;