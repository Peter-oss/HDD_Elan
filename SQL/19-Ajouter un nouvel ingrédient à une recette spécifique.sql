-- Ajouter un nouvel ingrédient
INSERT INTO ingredient (id_ingredient, nom_ingredient, descrption, cout_ingredient, uniteMesure) VALUES (id_ingredient, 'Tomate de luxe', 'Legume tomate', 1, 'La pièce');

-- Associer l'ingrédient à une recette
INSERT INTO cuisiner (id_recette, id_ingredient, quantité) VALUES (1, 44, 3);

#Ajouter un nouvel ingrédient à une recette spécifique
#id_recette = 1 = Tartare d'avocat et saumon, juste pour l'exemple