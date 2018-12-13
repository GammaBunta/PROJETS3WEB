<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Connexion.php');

    class Connexion extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Connexion();
        }

        public function index(){
            $action = '';
            if(isset($_GET['action'])){
                $action = htmlspecialchars($_GET['action']);
            }
            if(isset($_SESSION['login'])){
                $action = "deconnexion";
            }
            switch ($action) {
                case 'connecte':
                    $this->controleur->connexion();
                    break;

                case'deconnexion':
                     $this->controleur->deconnexion();
                    break;

                default:
                    $this->controleur->init();
                    break;
            }
        }


    }

 ?>