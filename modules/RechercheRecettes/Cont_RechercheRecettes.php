<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_RechercheRecettes.php');
    require_once('Modele_RechercheRecettes.php');

    class Controleur_RechercheRecettes extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_RechercheRecettes();
            $this->modele = new Modele_RechercheRecettes();
        }

        public function init(){
            $tab = $this ->modele->toutesRecette();
            $this->vue->afficheInit($tab);
        }

        public function rechercheNormale(){
            $tab = $this->modele->rechercheNormale();
            $this->vue->afficheInit($tab);
        }

        public function rechercheSpeciale(){
            $array=explode(',',$_GET['ingredients']);
            $tab = $this->modele->rechercheSpeciale($array);
            $this->vue->afficheInit($tab);
        }

        public function rechercheNav(){
            $tab = $this->modele->rechercheParNom();
            $this->vue->afficheInit($tab);
        }



    }


 ?>
