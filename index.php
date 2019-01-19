<?php
      session_start();
      require_once('./composants/head.php');
      require_once('./modules/Compte/Compte.php');
      require_once('./modules/Frigo/Frigo.php');
      require_once('./modules/Connexion/Connexion.php');
      require_once('./modules/Accueil/Accueil.php');
      require_once('./modules/Recettes/Recettes.php');
      require_once('./modules/CreerCompte/CreerCompte.php');
      require_once('./modules/ajoutRecette/ajoutRecette.php');
       require_once('./modules/RechercheRecettes/RechercheRecettes.php');


       if(isset($_GET['module'])){
               $module= htmlspecialchars($_GET['module']);
       }else{
           $module='';
       }


       switch($module){

           case 'Compte':
           case 'Frigo':
           case 'Connexion':
           case 'Recettes':
           case 'CreerCompte':
           case 'ajoutRecette':

               $mod = new $module();
               $mod -> index();
               $vue = $mod->getAffichage();
               require_once('./composants/header.php');
               echo $vue;
               require_once('./composants/footer.php');

            break;

            //changement de style du footer (collé ou pas en bas de page)
            case 'RechercheRecettes':
            case 'Accueil':
                 $mod = new $module();
                 $mod -> index();
                 $vue = $mod->getAffichage();
                 require_once('./composants/header.php');
                 echo $vue;
            break;



           default:
              $mod = new Accueil();
              $mod -> index();
              $vue = $mod->getAffichage();
              require_once('./composants/header.php');
              echo $vue;
            break;

       }



?>
