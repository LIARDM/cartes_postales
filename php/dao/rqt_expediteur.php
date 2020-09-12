<?php
require_once 'db.php';

/**
 * Classe d'accès aux données Expediteur des cartes postales.
 */
class RqtExpediteur
{
    /**
     * Récupère la liste des expéditeurs.
     */
    public function fetchSender()
    {
        $rqt = "SELECT DISTINCT expediteur FROM cartes_postales.cartes ORDER BY expediteur ASC";

        $db = new db();
        $resultat = $db->executeQuery($rqt);

        return $resultat;
    }
}

?>