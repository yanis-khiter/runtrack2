SELECT salles.nom, etage.nom FROM `salles` 
INNER JOIN `etage` ON etage.id = salles.id_etage 