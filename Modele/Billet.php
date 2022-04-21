<?php

    require_once 'Framework/Modele.php';

    class Billet extends Modele
    {
        public function getBillets()
        {
            $sql = 'SELECT bil_id as id, bil_date as date, bil_titre as titre, bil_contenu as contenu from t_billet order by bil_id desc';
            $billets = $this->executerRequete($sql);
            return $billets;
        }

        public function getBillet($idBillet)
        {
            $sql = 'SELECT bil_id as id, bil_date as date, bil_titre as titre, bil_contenu as contenu from t_billet where bil_id = ?';
            $billet = $this->executerRequete($sql, array($idBillet));
            if($billet->rowCount() == 1)
                return $billet->fetch();
            else    
                throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet' ");
        }
    }