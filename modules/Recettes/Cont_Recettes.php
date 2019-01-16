<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_Recettes.php');
    require_once('Modele_Recettes.php');

    class Controleur_Recettes extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_Recettes();
            $this->modele = new Modele_Recettes();
        }

        public function init(){
            $tab = $this ->modele->toutesRecette();
            $this->vue-> afficheInit($tab);
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


        public function affichageSpecial(){
            $id = $_GET['id'];
            $ingr = $this->modele->infoIngrRecette($id);
            $info = $this->modele->infoRecette($id);
            $this->vue->affichageRecette($info,$ingr);
        }
    }


 ?>
