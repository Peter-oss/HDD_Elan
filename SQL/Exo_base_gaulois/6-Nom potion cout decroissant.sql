#Exo-6 Nom des potions + coût de réalisation de la potion (trié par coût décroissant).

SELECT NOM_POTION, SUM(i.COUT_INGREDIENT * c.QTE) AS cout
FROM ingredient i, composer c, potion p 
WHERE c.ID_POTION = p.ID_potion 
AND c.ID_INGREDIENT = i.ID_INGREDIENT
GROUP BY NOM_POTION
ORDER BY cout DESC;