#Nombre de personnages par lieu (trié par nombre de personnages décroissant).

SELECT id_lieu, COUNT(*) AS nombre_de_personnages
FROM personnage
GROUP BY id_lieu
ORDER BY nombre_de_personnages DESC;