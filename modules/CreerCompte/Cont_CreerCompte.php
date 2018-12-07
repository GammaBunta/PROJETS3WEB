<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_CreerCompte.php');
    require_once('Modele_CreerCompte.php');

    class Controleur_CreerCompte extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_CreerCompte();
            $this->modele = new Modele_CreerCompte();
        }

        public function init(){
            $this->vue-> afficheInit();
        }

        public function creerCompte(){
  
            if(isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['email'])){
                if($this->modele->connecte($_POST['login'],  $_POST['mdp'], $_POST['email'])){
                    $this->vue->connecte();
                }

            }

        }
    }


 ?>
