#Exo-8 Nom du ou des personnages qui ont pris le plus de casques dans la bataille 'Bataille du village gaulois'.

#Version 1

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

#Version 2

SELECT p.nom_personnage, SUM(pc.qte) AS nb_casques
FROM personnage p, bataille b, prendre_casque pc
WHERE p.id_personnage = pc.id_personnage
AND pc.id_bataille = b.id_bataille
AND b.nom_bataille = 'Bataille du village gaulois'
GROUP BY p.id_personnage
HAVING nb_casques >= ALL(
SELECT SUM(pc.qte)
    FROM prendre_casque pc, bataille b
    WHERE b.id_bataille = pc.id_bataille
    AND b.nom_bataille = 'Bataille du village gaulois'
    GROUP BY pc.id_personnage
)

#Ici Having au lieu de Where, requete imbriquée avec sous-requete, à utiliser si plusieurs personnages ont pris le mm nb de casques.
#Cette version est à préférer si des personnages ont les memes scores.