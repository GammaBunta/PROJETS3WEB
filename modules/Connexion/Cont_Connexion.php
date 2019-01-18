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
            $tok = $this->genereTokenSession();
            $this->vue-> afficheInit($tok);
        }

        public function connexion(){
                if(isset($_POST['login']) && isset($_POST['mdp'])){
                    if($this->modele->connecte($_POST['login'],  $_POST['mdp'])){
                         echo'<script>location.replace("index.php"); </script>';
                    }
                    if($this->modele->connecte($_POST['login'], $_POST['mdp'])=="non"){
                            echo "token expiré";
                    }
                    else{
                        $this->vue->setErreur("Login ou mot de passe incorrect");
                        $tok = $this->genereTokenSession();
                        $this->vue->afficheInit($tok);
                    }
                }

        }

        public function deconnexion(){
            $this->modele->deconnexion();
            echo'<script>location.replace("index.php"); </script>';
        }
    }
 ?>
