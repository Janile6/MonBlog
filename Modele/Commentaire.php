<?php

    require_once 'Framework/Modele.php';

    class Commentaire extends Modele
    {
        public function getCommentaires($idBillet)
        {
            $sql = 'SELECT com_id as id, com_date as date, com_auteur as auteur, com_contenu as contenu from t_commentaire where bil_id = ?';
            $commentaires = $this->executerRequete($sql, array($idBillet));
            
            return $commentaires;
        }

        public function AjouterCommentaire($auteur, $contenu, $idBillet)
        {
            $sql = 'INSERT INTO t_commentaire(com_date, com_auteur, com_contenu, bil_id) values (?, ?, ?, ?)';
            $date = date(DATE_W3C);
            $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
        }
    }
    