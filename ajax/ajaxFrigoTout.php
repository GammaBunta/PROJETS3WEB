<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $array = $modele->getToutIngredients($_GET['famille']);
    $compteur=0;
    foreach($array as $item){
        $idcollapse="item".$compteur;
      $id =$item['idingr'];
      $idquantite = "quantite".$id;
      $iddate = "date".$id;
       echo utf8_encode(' <li class="list-group-item list-group-item-action list-group-item-success text-left col-12">'.$item['nomingr'].'
                            <button type="button" class="btn btn-success float-right" data-toggle="collapse" data-target="#'.$idcollapse.'" aria-expanded="false" aria-controls="'.$idcollapse.'">
                            +
                            </button>
                                <div class="container collapse mt-4 p-1" id="'.$idcollapse.'" required>
                                  <label for="dte">Date de peremption :</label>
                                  <div class = "row">
                                    <div class="col-sm-5">
                                      <input id="'.$iddate.'" type="date"  name="date" class="date" required>
                                    </div>
                                  </div>
                                  <label for="quantite">Quantite :</label>
                                  <div class = "row">

                                    <div class="col-sm-5">
                                      <input class="form-control" type="number" min="1" id="'.$idquantite.'"  min="0" max="64" name="quantite" required>
                                    </div>
                                  </div>
                                  <div class = "row">
                                    <div class="col-12 mt-2">
                                      <button id="submit" onclick="submitAjoutFrigo(\''.$id.'\')" class="btn btn-success float-right">Ajouter</button>
                                    </div>
                                  </div>
                                  <input id="idingr" name="idingr" type="hidden" value="'.$id.'">
                                </div>
                              </li>



                          ');
                          $compteur++;

        }
?>
