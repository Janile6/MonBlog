<?php
    require_once 'Requete.php';
    require_once 'Vue.php';

    abstract class Controleur
    {
        private $action;

        protected $requete;

        public function setRequete(Requete $requete)
        {
            $this->requete = $requete;
        }

        public function executerAction($action)
        {
            if(method_exists($this, $action))
            {
                $this->action = $action;
                $this->{$this->action}();
            }
            else
            {
                $classControleur = get_class($this);
                throw new Exception("Action '$action' non définie dans la classe '$classControleur'");
            }
        }

        public abstract function index();

        protected function genererVue($donneesVue = array())
        {
            $classControleur = get_class($this);
            $controleur = str_replace("Controleur", "", $classControleur);
            $vue = new Vue($this->action, $controleur);
            $vue->generer($donneesVue);
        }
    }