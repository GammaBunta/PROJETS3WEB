<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_ajoutRecette.php');

    class ajoutRecette extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_ajoutRecette();
        }

        public function index(){
            $this->controleur->init();
        }


    }

 ?>
