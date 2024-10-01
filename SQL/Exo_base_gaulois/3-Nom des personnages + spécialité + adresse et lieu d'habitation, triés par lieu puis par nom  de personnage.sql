#Nom des personnages + spécialité + adresse et lieu d'habitation, triés par lieu puis par nom de personnage

SELECT NOM_personnage, NOM_SPECIALITE, NOM_LIEU
FROM personnage v, specialite s, lieu l
WHERE v.ID_SPECIALITE = s.ID_SPECIALITE
AND l.ID_LIEU = v.ID_LIEU;