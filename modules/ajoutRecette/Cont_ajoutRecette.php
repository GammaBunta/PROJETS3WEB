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
            $idRecette = $this->modele->publier();
            header('Location: index.php?module=Recettes&action=affichageSpecial&id='.$idRecette);
            exit();


        }

    }


 ?>
