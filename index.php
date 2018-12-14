<?php
      session_start();
<<<<<<< HEAD
=======
             require_once('./composants/head.php');
>>>>>>> Samuel
      require_once('./modules/Frigo/Frigo.php');
      require_once('./modules/Connexion/Connexion.php');
      require_once('./modules/Accueil/Accueil.php');
      require_once('./modules/Recettes/Recettes.php');
      require_once('./modules/CreerCompte/CreerCompte.php');
      require_once('./composants/head.php');

      require_once('./modules/CreerCompte/CreerCompte.php');


       if(isset($_GET['module'])){
               $module= htmlspecialchars($_GET['module']);
       }else{
           $module='';
       }


       switch($module){

           case 'Accueil':
           case 'Frigo':
           case 'Connexion':
           case 'Recettes':
           case 'CreerCompte':
               $mod = new $module();
               $mod -> index();
               $vue = $mod->getAffichage();

            break;


           default:
              $mod = new Accueil();
              $mod -> index();
              $vue = $mod->getAffichage();
            break;

       }

<<<<<<< HEAD
           include('./composants/header.php');
=======

       require_once('./composants/header.php');
>>>>>>> Samuel
       echo $vue;

?>

<?php
    include('./composants/footer.php');
?>
