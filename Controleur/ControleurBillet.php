<?php

    require_once 'Framework/Controleur.php';
    require_once 'Modele/Billet.php';
    require_once 'Modele/Commentaire.php';

    class ControleurBillet extends Controleur
    {
        private $billet;
        private $commentaire;

        public function __construct()
        {
            $this->billet = new Billet();
            $this->commentaire = new Commentaire();
        }

        public function index()
        {
            $idBillet = $this->requete->getParametre("id");
            $billet = $this->billet->getBillet($idBillet);
            $commentaires = $this->commentaire->getCommentaires($idBillet);

            $this->genererVue(array('billet' => $billet, 'commentaires' => $commentaires));
        }

        public function Commenter()
        {
            $idBillet = $this->requete->getParametre("id");
            $auteur = $this->requete->getParametre("auteur");
            $contenu = $this->requete->getParametre("contenu");
            $this->commentaire->AjouterCommentaire($auteur, $contenu, $idBillet);
            $this->executerAction("index");
        }
    }

?>