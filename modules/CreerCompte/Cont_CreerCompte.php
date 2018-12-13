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
            echo'0 if';
            if(isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['mdp2']) && isset($_POST['email'])){
                if($this->modele->creer() !== true){
                    $this->vue-> afficheInit();
                }
                else{
                    header('Location: index.php'); 
                    exit();
                }

            }




        }
    }


 ?>
