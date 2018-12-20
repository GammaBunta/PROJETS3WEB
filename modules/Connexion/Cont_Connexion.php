<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_Connexion.php');
    require_once('Modele_Connexion.php');

    class Controleur_Connexion extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_Connexion();
            $this->modele = new Modele_Connexion();
        }

        public function init(){
            $this->vue-> afficheInit();
        }

        public function connexion(){
                if(isset($_POST['login']) && isset($_POST['mdp'])){
                    if($this->modele->connecte($_POST['login'],  $_POST['mdp'])){
                         header('Location: index.php'); 
                         exit();
                    }
                    else{
                        $this->vue->setErreur("Login ou mot de passe incorrect");
                        $this->vue->afficheInit();
                    }
                }
            
        }

        public function deconnexion(){
            $this->modele->deconnexion();
            $this->vue->afficheInit();
        }
    }


 ?>
