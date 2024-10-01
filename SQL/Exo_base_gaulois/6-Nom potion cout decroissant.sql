#Exo-6 Nom des potions + coût de réalisation de la potion (trié par coût décroissant).

SELECT nom_potion, cout_ingredient
FROM potion
JOIN ingredient
ON potion.id_potion = ingredient.id_ingredient
JOIN composer
ON ingredient.id_ingredient = composer.id_potion
ORDER BY cout_ingredient DESC;