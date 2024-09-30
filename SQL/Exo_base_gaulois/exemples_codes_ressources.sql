-- Exercice 1 :
-- 1) Nombre de gaulois par lieu (trié par nombre de gaulois décroissant)

SELECT NOM_LIEU, COUNT(v.ID_LIEU) AS NbVil
FROM villageois v, lieu l
WHERE l.ID_LIEU = v.ID_LIEU
GROUP BY ID_LIEU
ORDER BY NbVillageois DESC

-- Exercice 2
-- 2) Nom des gaulois + spécialité + village

SELECT NOM, NOM_SPECIALITE, NOM_LIEU
FROM villageois v, specialite s, lieu l
WHERE v.ID_SPECIALITE = s.ID_SPECIALITE
AND l.ID_LIEU = v.ID_LIEU

-- Exercice 3
-- 3) Nom des spécialités avec nombre de gaulois par spécialité (trié par nombre de gaulois décroissant)

SELECT NOM_SPECIALITE, COUNT(v.ID_VILLAGEOIS) AS nb_gaulois
FROM villageois v, specialite s, lieu l
WHERE v.ID_SPECIALITE = s.ID_SPECIALITE
GROUP BY NOM_SPECIALITE
ORDER BY nb_gaulois DESC

-- Exercice 4
-- 4) Nom des batailles + lieu de la plus récente à la plus ancienne (dates au format jj/mm/aaaa)

SELECT NOM_BATAILLE, NOM_LIEU, DATE_FORMAT(DATE_BATAILLE, "%d/%m/%Y")
FROM bataille b, lieu l
WHERE l.ID_LIEU = b.ID.LIEU
ORDER BY DATE_BATAILLE DESC

-- Exercice 5
-- 5) Nom des potions + coût de réalisation de la potion (trié par coût décroissant)

SELECT NOM_POTION, SUM(i.COUT_INGREDIENT * c.QTE) AS cout
FROM ingredient i, compose c, potion p 
WHERE c.ID_POTION = p.ID_potion 
AND c.ID_INGREDIENT = i.ID_INGREDIENT
GROUP BY NOM_POTION
ORDER BY cout DESC

-- Exercice 6
-- 6) Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Potion V'

SELECT NOM_INGREDIENT, COUT_INGREDIENT, c.QTE
FROM ingredient i INNER JOIN compose 
ON c.ID_INGREDIENT = i.ID_INGREDIENT
INNER JOIN potion p
ON c.ID_POTION = p.ID_potion 
WHERE p.NOM_POTION =  "Potion V"

-- Exercice 7
-- 7) Nom du ou des villageois qui ont pris le plus de casques dans la bataille 'Babaorum'

SELECT NOM, SUM(pc.QTE) AS nbCasques
FROM villageois v, prise_casque pc, bataille b 
WHERE v.ID_VILLAGEOIS = pc.ID_VILLAGEOIS
AND pc.ID_BATAILLE = b.ID_BATAILLE 
AND b.NOM_BATAILLE = "Babaorum"
GROUP BY v.NOM 
ORDER BY nbCasques DESC 
LIMIT 1

-- Exercice 8 
-- 8) Nom des villageois et la quantité de potion bue (en les classant du plus grand buveur au plus
-- petit)

SELECT NOM, DOSE
FROM villageois v, boit b
WHERE v.ID_VILLAGEOIS = b.ID_VILLAGEOIS
ORDER BY b.ID_VILLAGEOIS DESC 

-- Exercice 9
-- 9) Nom de la bataille où le nombre de casques pris a été le plus important

CREATE VIEW nombre_casques_bataille
SELECT b.NOM_BATAILLE, SUM(pc.QTE) AS nbCasques
FROM bataille b, prise_casque pc
WHERE pc.ID_BATAILLE = b.ID_BATAILLE
GROUP BY b.NOM_BATAILLE 
ORDER BY nbCasques DESC

SELECT nbc.NOM_BATAILLE
FROM nombre_casques_bataille nbc
WHERE nbc.nbCasques = (SELECT MAX(nbc.nbCasques)
								FROM nombre_casques_bataille nbc)

-- Exercice 10
-- 10) Combien existe-t-il de casques de chaque type et quel est leur coût total ? (classés par nombre
-- décroissant)

SELECT tc.NOM_TYPE_CASQUE, SUM(c.ID_TYPE_CASQUE) AS NbCasques, c.COUT_CASQUE
FROM casque c, type_casque tc
WHERE c.ID_TYPE_CASQUE = tc.ID_TYPE_CASQUE
GROUP BY tc.NOM_TYPE_CASQUE, c.COUT_CASQUE
ORDER BY c.COUT_CASQUE DESC

-- Exercice 11
-- 11) Noms des potions dont un des ingrédients est la cerise

SELECT NOM_POTION, NOM_INGREDIENT
FROM potion p, compose c, ingredient i
WHERE p.ID_POTION = c.ID_POTION
AND c.ID_INGREDIENT = i.ID_INGREDIENT
AND i.NOM_INGREDIENT = "cerise"

-- Exercice 12
-- 12) Nom du / des village(s) possédant le plus d'habitants

CREATE VIEW nombre_habitants
SELECT l.NOM_LIEU, COUNT(v.ID_LIEU) AS NbHabitants
FROM lieu l INNER JOIN villageois v
ON l.ID_LIEU = v.ID_LIEU
GROUP BY l.NOM_LIEU 

SELECT NOM_LIEU, NbHabitants
FROM nombre_habitants nh
WHERE nh.NbHabitants = (SELECT MAX(nh.NbHabitants)
											FROM nombre_habitants nh)

-- Exercice 13
-- 13) Noms des villageois qui n'ont jamais bu de potion

SELECT NOM
FROM villageois v, peut p
WHERE v.ID_VILLAGEOIS = p.ID_VILLAGEOIS
AND p.A_LE_DROIT = FALSE

-- Exercice 14
-- 14) Noms des villages qui contiennent la particule 'um'

SELECT NOM_LIEU
FROM lieu l
WHERE l.NOM_LIEU LIKE '%um%'

-- Exercice 15
-- 15) Nom du / des villageois qui n'ont pas le droit de boire la potion 'Rajeunissement II'

SELECT NOM
FROM villageois v, peut p
WHERE v.ID_VILLAGEOIS = p.ID_VILLAGEOIS
AND p.ID_POTION = 1
AND p.A_LE_DROIT = FALSE
