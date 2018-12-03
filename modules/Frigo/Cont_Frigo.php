<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_Frigo.php');
    require_once('Modele_Frigo.php');

    class Controleur_Frigo extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_Frigo();
            $this->modele = new Modele_Frigo();
        }

    }


 ?>
