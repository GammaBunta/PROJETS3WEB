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
            $tok = $this->genereTokenSession();
            $this->vue-> afficheInit($tok);
        }


        public function publier(){
            $idRecette = $this->modele->publier();

            if($idRecette == false){
                header('Location: index.php');

            }else{
                header('Location: index.php?module=Recettes&action=affichageSpecial&id='.$idRecette);
            }
            exit();


        }

    }


 ?>
