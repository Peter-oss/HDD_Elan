#Exo-5 Nom, date et lieu des batailles, classées de la plus récente à la plus ancienne (dates affichées au format jj/mm/aaaa)

SELECT nom_bataille, nom_lieu, date_format(date_bataille, "%d/%m/%Y")
FROM lieu
JOIN bataille
ON lieu.id_lieu = bataille.id_lieu
ORDER BY date_bataille DESC;
