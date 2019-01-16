<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_Accueil.php');
    require_once('Modele_Accueil.php');

    class Controleur_Accueil extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_Accueil();
            $this->modele = new Modele_Accueil();
        }

        public function init(){
            if(isset($_SESSION['id'])){
                $this->vue->afficheInitCo();
            }else{
                $this->vue->afficheInitPasCo();
            }
        }



    }


 ?>
