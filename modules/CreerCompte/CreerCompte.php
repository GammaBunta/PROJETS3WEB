<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_CreerCompte.php');

    class CreerCompte extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_CreerCompte();
        }

        public function index(){
            $action = '';
            if(isset($_GET['action'])){
                $action = htmlspecialchars($_GET['action']);
            }
            switch ($action) {
                case 'creer':
                    $this->controleur->creerCompte();
                    break;
                
                default:
                    $this->controleur->init();
                    break;
            }

        }


    }

 ?>