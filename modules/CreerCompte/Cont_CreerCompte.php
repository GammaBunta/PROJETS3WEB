<?php
    require_once('./ClassesGeneriques/controleur_generique.php');
    require_once('Vue_CreerCompte.php');
    require_once('Modele_CreerCompte.php');

    class Controleur_CreerCompte extends ControleurGenerique{
        private $modele;

        public function __construct(){
            $this->vue= new Vue_CreerCompte();
            $this->modele = new Modele_CreerCompte();
        }

        public function init(){
            $this->vue-> afficheInit();
        }

        public function creerCompte(){
                $err;
                if (isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['mdp2']) && isset($_POST['email'])) {

                    $m = htmlspecialchars($_POST['mdp']);
                    $m2 = htmlspecialchars($_POST['mdp2']);
                    $email = htmlspecialchars($_POST['email']);
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                        echo'oui';
                        $err = "Adresse email incorrecte.";
                    }

                    else if (empty($m) or empty($m2)) {
                        $err = "Les champs de saisie nommés <em>'Mot de passe'</em> sont vides, ces deux champs sont à remplir obligatoirement.\n";
                    } else if ($m !== $m2) {
                            $err = "Le second mot de passe que vous avez tapé est différent du premier, les deux mots de passe doivent être identiques.\n";
                    }
                }
                else{
                    $err = "Veuillez remplir tous les champs";
                }

                if (empty($err)) {

                    if(isset($_POST['login']) && isset($_POST['email'])){
                        if($this->modele->creer() !== true){
                            $err = "Adresse mail ou login déjà existant";
                            $this->vue->setErreur($err);
                            $this->vue-> afficheInit();
                        }
                        else{
                            header('Location: index.php');
                            exit();
                        }

                    }
                }
                else{
                    $this->vue->setErreur($err);
                    $this->vue->afficheInit();
                }




        }
    }


 ?>
