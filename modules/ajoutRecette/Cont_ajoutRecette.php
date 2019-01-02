<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_ajoutRecette.php');
    require_once('Modele_ajoutRecette.php');

    class Controleur_ajoutRecette extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_ajoutRecette();
            $this->modele = new Modele_ajoutRecette();
        }

        public function init(){
            $this->vue-> afficheInit();
        }


        public function publier(){
            if(isset($_POST['nomRecette'])){
                $this->modele->publier();
            }else{
                echo 'pas de nom';
            }

        }

    }


 ?>
