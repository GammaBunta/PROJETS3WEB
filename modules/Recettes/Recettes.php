<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Recettes.php');

    class Recettes extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Recettes();
        }

        public function index(){
            $this->controleur->init();
        }


    }

 ?>
