<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Compte.php');

    class Compte extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Compte();
        }

        public function index(){
          $action = '';
          if(isset($_GET['action'])){
              $action = htmlspecialchars($_GET['action']);
          }
          switch ($action) {
              case 'pseudo':
                  $this->controleur->pseudo();
                  $this->controleur->init();
                  break;

              case'email':
                   $this->controleur->email();
                   $this->controleur->init();
                  break;

              case'mdp':
                  $this->controleur->mdp();
                  $this->controleur->init();
                  break;

              default:
                  $this->controleur->init();
                  break;
          }
        }


    }

 ?>
