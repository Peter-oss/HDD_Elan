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


