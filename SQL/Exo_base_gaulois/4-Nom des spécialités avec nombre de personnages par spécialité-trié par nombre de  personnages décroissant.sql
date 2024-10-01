#Nom des spécialités avec nombre de personnages par spécialité (trié par nombre de personnages décroissant).

SELECT nom_specialite, count(nom_personnage)
FROM specialite
JOIN personnage
ON specialite.id_specialite = personnage.id_specialite
GROUP BY nom_specialite
ORDER BY COUNT(nom_personnage) DESC