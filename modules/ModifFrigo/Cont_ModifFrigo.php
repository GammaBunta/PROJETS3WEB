<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_ModifFrigo.php');
    require_once('Modele_ModifFrigo.php');

    class Controleur_ModifFrigo extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_ModifFrigo();
            $this->modele = new Modele_ModifFrigo();
        }

        public function init(){
            $tab = $this->modele->getLaitiers();
            $this->vue-> afficheInit($tab);
        }
    }


 ?>