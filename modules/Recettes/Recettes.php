<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Recettes.php');

    class Recettes extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Recettes();
        }

        public function index(){


            if(isset($_GET['action'])){
                $action=htmlspecialchars($_GET['action']);
            }else{
                $action='';
            }

            var_dump($action);

            switch($action){

                case 'rechercheSpeciale':
                    echo 'speciale';
                    $this->controleur->rechercheSpeciale();
                    break;

                default:
                    $this->controleur->init();
                    break;
            }
        }





    }

 ?>
