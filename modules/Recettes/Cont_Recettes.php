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
            $id = $_GET['id'];
            $ingr = $this->modele->infoIngrRecette($id);
            $info = $this->modele->infoRecette($id);
            $this->vue->affichageRecette($info,$ingr);
        }
    }


 ?>
