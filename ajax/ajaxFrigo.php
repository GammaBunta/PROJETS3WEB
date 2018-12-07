<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $array = $modele->getIngredients($_GET['famille']);

    foreach($array as $item){
       echo utf8_encode(' <li href="#"  class="list-group-item list-group-item-action list-group-item-success text-left">'.$item['nomingr'].'<button type="button" onclick="ajoutCuisiner(\''.$item['nomingr'].'\')" class="btn btn-success float-right" >+</button></li>');

    }

?>
