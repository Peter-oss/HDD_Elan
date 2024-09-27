UPDATE 
    recette
SET 
    recette.tempsPreparationMns = recette.tempsPreparationMns - 5;

#Mettez à jour toutes les recettes en diminuant leur temps de préparation de 5 minutes
#Source : https://datascientest.com/update-sql-tout-savoir
#Cette commande affichera une mise en garde car absence de 'Where' optionnel.