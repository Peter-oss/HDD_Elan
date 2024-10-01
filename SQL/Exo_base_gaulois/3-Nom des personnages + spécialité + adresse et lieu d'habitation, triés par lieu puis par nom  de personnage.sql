#Exo-3 Nom des personnages + spécialité + adresse et lieu d'habitation, triés par lieu puis par nom de personnage

SELECT DISTINCT nom_personnage, nom_specialite, nom_lieu
FROM personnage
JOIN specialite
ON personnage.id_specialite = specialite.id_specialite
JOIN lieu
ON personnage.id_lieu = lieu.id_lieu;