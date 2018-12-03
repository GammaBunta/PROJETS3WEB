<?php

    class ModuleGenerique{

        protected $controleur;

        public function getAffichage(){

            return $this->controleur->getAffichage();
        }
    }

?>
