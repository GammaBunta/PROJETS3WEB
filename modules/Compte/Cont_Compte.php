<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_Compte.php');
    require_once('Modele_Compte.php');

    class Controleur_Compte extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_Compte();
            $this->modele = new Modele_Compte();
        }

        public function init(){
            $tab = $this->modele->getInfos();
            $this->vue-> afficheInit($tab);
        }

        public function pseudo(){
            if(isset($_POST['pseudo'])){
                if(!$this->modele->pseudo()){
                       $this->vue->setErreur("Ce pseudo existe déjà");
                }
            }
        }

        public function email(){
          $err;
          if (isset($_POST['email'])) {
              $email = htmlspecialchars($_POST['email']);
              if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                  $err = "Adresse email incorrecte.";
              }
          }

          if (empty($err)) {
               if(isset($_POST['email'])){
                   if(!$this->modele->email()){
                          $this->vue->setErreur("cet Email existe déjà");
                          $tab = $this->modele->getInfos();
                          $this->vue-> afficheInit($tab);
                   }
               }
          }
          else{
            $this->vue->setErreur($err);

          }
        }

        public function mdp(){
          $err;
          if (isset($_POST['mdp1']) && isset($_POST['mdp2'])) {

              $m = htmlspecialchars($_POST['mdp1']);
              $m2 = htmlspecialchars($_POST['mdp2']);

              if (empty($m) or empty($m2)) {
                  $err = "Les champs de saisie nommés <em>'Mot de passe'</em> sont vides, ces deux champs sont à remplir obligatoirement.\n";
              } else if ($m !== $m2) {
                      $err = "Le second mot de passe que vous avez tapé est différent du premier, les deux mots de passe doivent être identiques.\n";
              }
          }
          else{
              $err = "Veuillez remplir tous les champs";
          }
          if (empty($err)) {
              if(isset($_POST['mdp1']) && isset($_POST['mdp2'])){
                  $this->modele->mdp();
              }
          }
          else{
            $this->vue->setErreur($err);
          }
        }
    }


 ?>
