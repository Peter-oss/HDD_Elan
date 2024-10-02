#Exo-8 Nom du ou des personnages qui ont pris le plus de casques dans la bataille 'Bataille du village gaulois'.
#Les lettres indiquées après les noms de 'tables' sont des alias.

SELECT nom_personnage, SUM(pc.qte) AS nbCasques
FROM personnage v, prendre_casque pc, bataille b 
WHERE v.id_personnage = pc.id_personnage
AND pc.ID_BATAILLE = b.ID_BATAILLE 
AND b.NOM_BATAILLE = "Bataille du village gaulois"
GROUP BY v.nom_personnage 
ORDER BY nbCasques DESC
LIMIT 1;

#Premier jet.
#Requete imbriquée
#Celui qui a récupéré le plus de casques : LIMIT 1; celui qui en a le plus.