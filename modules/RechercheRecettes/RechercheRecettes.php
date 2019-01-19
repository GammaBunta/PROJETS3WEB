<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_RechercheRecettes.php');

    class RechercheRecettes extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_RechercheRecettes();
        }

        public function index(){

            if(isset($_GET['action'])){
                $action=htmlspecialchars($_GET['action']);
            }else{
                $action='';
            }
            switch($action){

                case 'rechercheSpeciale':
                    $this->controleur->rechercheSpeciale();
                    break;

                case 'rechercheNormale':
                    $this->controleur->rechercheNormale();
                    break;

                case 'affichageSpecial':
                    $this->controleur->affichageSpecial();
                    break;

                case 'rechercheNav':
                    $this->controleur->rechercheNav();
                    break;

                default:

                    $this->controleur->init();
                    break;
            }
        }





    }

 ?>
