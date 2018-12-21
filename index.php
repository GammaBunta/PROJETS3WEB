<?php
      session_start();
      require_once('./composants/head.php');
      require_once('./modules/Frigo/Frigo.php');
      require_once('./modules/Connexion/Connexion.php');
      require_once('./modules/Accueil/Accueil.php');
      require_once('./modules/Recettes/Recettes.php');
      require_once('./modules/CreerCompte/CreerCompte.php');
      require_once('./modules/ajoutRecette/ajoutRecette.php');
      require_once('./composants/head.php');
      require_once('./modules/ModifFrigo/ModifFrigo.php');

    /*


     // AFFICHE TABLE INGREDIENT
     /*$result= $bdd -> query ('select * from Ingredient');
     $res = $result->fetchAll();
     foreach($res as $item){
        echo $item['nomingr'].' '.$item['unite'].' '.$item['protide'].' '.$item['lipide'].' '.$item['glucide'].' '.$item['calorie'].' '.$item['congele'].' '.$item['famille'];
        echo '<br>';
    }*/

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
           case 'ModifFrigo':
           case 'Recettes':
           case 'CreerCompte':
           case 'ajoutRecette':
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


       require_once('./composants/header.php');
       echo $vue;

?>

<?php
    include('./composants/footer.php');
?>
