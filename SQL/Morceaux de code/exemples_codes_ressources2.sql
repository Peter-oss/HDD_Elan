[1] Nombre de gaulois par lieu (trié par nombre de gaulois décroissant)
SELECT nom_lieu, count(nom_personnage)
FROM lieu
JOIN personnage
ON lieu.id_lieu = personnage.id_lieu
GROUP BY nom_lieu
ORDER BY COUNT(nom_personnage) DESC 

[2] Nom des gaulois + spécialité + village
SELECT DISTINCT nom_personnage, nom_specialite, nom_lieu
FROM personnage
JOIN specialite
ON personnage.id_specialite = specialite.id_specialite
JOIN lieu
ON personnage.id_lieu = lieu.id_lieu

[3] Nom des spécialités avec nombre de gaulois par spécialité
(trié par nombre de gaulois décroissant)
SELECT nom_specialite, count(nom_personnage)
FROM specialite
JOIN personnage
ON specialite.id_specialite = personnage.id_specialite
GROUP BY nom_specialite
ORDER BY COUNT(nom_personnage) DESC  

[4]Nom des batailles + lieu de la plus récente à la plus ancienne
(dates au format jj/mm/aaaa)
SELECT nom_bataille, nom_lieu, date_format(date_bataille, "%d/%m/%Y")
FROM lieu
JOIN bataille
ON lieu.id_lieu = bataille.id_lieu
ORDER BY date_bataille DESC

[5]Nom des potions + coût de réalisation de la potion (trié par coût décroissant)
SELECT nom_potion, cout_ingredient
FROM potion
JOIN ingredient
ON potion.id_potion = ingredient.id_ingredient
JOIN composer
ON ingredient.id_ingredient = composer.id_potion
ORDER BY cout_ingredient DESC

[6]Nom des ingrédients + coût + quantité
de chaque ingrédient qui composent la potion 'Miel'
SELECT 
SELECT 
nom_potion, 
cout_ingredient AS cout_igredient,
nom_ingredient AS nb_ingredient,
qte
FROM potion
INNER JOIN composer
ON composer.id_potion = potion.id_potion
INNER JOIN ingredient
ON composer.id_ingredient = ingredient.id_ingredient
WHERE potion.id_potion = 1

[7]Nom du ou des villageois qui ont pris le plus de casques dans la bataille 'Bagarre du siècle'
SELECT nom_personnage, nom_bataille, SUM(qte) AS nb_casques
FROM personnage, bataille, prendre_casque
WHERE personnage.id_personnage = prendre_casque.id_personnage
AND prendre_casque.id_personnage = bataille.id_bataille
AND bataille.nom_bataille = 'Bagarre du siècle'
GROUP BY bataille.nom_bataille

[8] Nom des villageois et la quantité de potion bue (en les classant du plus grand buveur au plus petit)
SELECT DISTINCT nom_personnage, dose_boire
FROM personnage, boire
WHERE personnage.id_personnage = boire.id_potion
ORDER BY boire.dose_boire DESC

[9]Nom de la bataille où le nombre de casques pris a été le plus important
SELECT nom_bataille, SUM(qte) AS nb_casques
FROM bataille, prendre_casque
WHERE bataille.id_bataille = prendre_casque.id_bataille
GROUP BY bataille.id_bataille
HAVING nb_casques>= ALL(
SELECT SUM(prendre_casque.qte)
FROM bataille, prendre_casque
WHERE bataille.id_bataille = prendre_casque.id_bataille
GROUP BY bataille.id_bataille
)

[10]Combien existe-t-il de casques de chaque type et quel est leur coût total ? 
(classés par nombre décroissant)
SELECT 
nom_type_casque AS nom, 
COUNT(id_casque) AS nb_casques,
SUM(cout_casque) AS cout_total
FROM type_casque
LEFT JOIN casque
ON type_casque.id_type_casque = casque.id_type_casque
GROUP BY type_casque.id_type_casque
ORDER BY nb_casques DESC

[11]Noms des potions dont un des ingrédients est la cerise
SELECT nom_potion, nom_ingredient
FROM potion  
INNER JOIN composer 
ON potion.id_potion = composer.id_potion
INNER JOIN ingredient
ON composer.id_ingredient = ingredient.id_ingredient
AND ingredient.nom_ingredient LIKE "%Carotte%" 

[12]Nom du / des village(s) possédant le plus dhabitants
SELECT nom_lieu, COUNT(id_personnage) AS nb_personnage
FROM personnage, lieu
WHERE personnage.id_lieu = lieu.id_lieu
GROUP BY lieu.id_lieu
HAVING nb_personnage >= ALL(
SELECT COUNT(id_personnage)
FROM personnage, lieu
WHERE personnage.id_lieu = lieu.id_lieu
GROUP BY lieu.id_lieu
)
[13]Noms des villageois qui nont jamais bu de potion
SELECT DISTINCT nom_personnage, dose_boire
FROM personnage
left JOIN boire
ON personnage.id_personnage = boire.id_personnage
left JOIN potion
ON boire.id_potion = potion.id_potion
WHERE boire.id_personnage IS NULL

[14]Noms des villages qui contiennent la particule 'um'
SELECT nom_lieu
FROM lieu
WHERE lieu.nom_lieu LIKE '%um%'

[15]Nom du / des villageois qui nont pas le droit de boire la potion 'Rajeunissement II'
SELECT nom_personnage
from personnage
where personnage.id_personnage NOT IN (
    SELECT id_personnage
    FROM autoriser_boire, potion
    WHERE potion.id_potion = autoriser_boire.id_potion
    AND potion.nom_potion = "Magique"
)

-- SELECT DISTINCT nom_personnage, dose_boire AS autorisé_boire
-- FROM personnage
-- left JOIN boire
-- ON personnage.id_personnage = boire.id_personnage
-- left JOIN autoriser_boire
-- ON boire.id_personnage = autoriser_boire.id_personnage
-- WHERE boire.id_personnage IS NULL

-- SELECT DISTINCT nom_personnage, dose_boire AS autorisé_boire
-- FROM personnage
-- left JOIN boire
-- ON personnage.id_personnage = boire.id_personnage
-- left JOIN autoriser_boire
-- ON boire.id_personnage = autoriser_boire.id_personnage
-- LEFT JOIN potion
-- ON autoriser_boire.id_potion = potion.id_potion
-- AND potion.nom_potion LIKE "%Magique%"

-- SELECT DISTINCT nom_personnage, dose_boire AS autorisé_boire, nom_potion
-- FROM personnage
-- left JOIN boire
-- ON personnage.id_personnage = boire.id_personnage
-- left JOIN autoriser_boire
-- ON boire.id_personnage = autoriser_boire.id_personnage
-- LEFT JOIN potion
-- ON autoriser_boire.id_potion = potion.id_potion
-- WHERE potion.nom_potion LIKE "%Rajeunissement II%"

-- SELECT DISTINCT nom_personnage, dose_boire AS autorisé_boire, nom_potion
-- FROM personnage
-- left JOIN boire
-- ON personnage.id_personnage = boire.id_personnage
-- left JOIN autoriser_boire
-- ON boire.id_personnage = autoriser_boire.id_personnage
-- AND autoriser_boire.id_personnage IS NOT NULL
-- LEFT JOIN potion
-- ON autoriser_boire.id_potion = potion.id_potion
-- WHERE potion.nom_potion LIKE "%Rajeunissement II%"

-- SELECT DISTINCT nom_personnage, nom_potion
-- FROM personnage
-- left JOIN autoriser_boire
-- ON personnage.id_personnage = autoriser_boire.id_personnage
-- LEFT JOIN potion
-- ON autoriser_boire.id_potion = potion.id_potion
-- WHERE potion.nom_potion = "Magique"
-- AND autoriser_boire.id_personnage IS null

