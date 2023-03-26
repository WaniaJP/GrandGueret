


<?php
echo json_encode(getVilleParSonde());

function getVilleParSonde(){
    require('connectBD.php'); //$pdo est défini dans ce fichier
    $sql = "SELECT u.ville, count(s.id_utilisateur_id) as'nombre' FROM sondage s RIGHT JOIN utilisateur u ON s.id_utilisateur_id = u.id GROUP BY 1 ORDER BY 2;";

    try {
        $commande = $pdo->prepare($sql);
        $bool = $commande->execute();
        if ($bool) {
            $resultat = $commande->fetchAll(PDO::FETCH_ASSOC); //tableau d'enregistrements
            if(count($resultat) > 0){
            return $resultat;
            }
            else return false;
        }
    }
    catch (PDOException $e) {
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die(); // On arrête tout.
    }
}

?>