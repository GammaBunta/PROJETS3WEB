<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $array = $modele->getIngredients($_GET['famille']);
    echo '<ul>';
    foreach($array as $item){
        echo "<li>".$item['nomingr']."</li>";
    }
    echo '</ul>';
?>
