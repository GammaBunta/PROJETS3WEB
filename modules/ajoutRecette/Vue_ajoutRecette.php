<?php
require_once('./ClassesGeneriques/vue_generique.php');
class Vue_ajoutRecette extends VueGenerique{

    public function __construct(){
        parent::__construct();
    }


    public function afficheInit(){
        echo '
        <head>
        <?php include "./composants/head.php"; ?>
         <script type="text/javascript" src="../scripts/ajoutRecette.js"> </script>

        <title>Frigo</title>
        </head>


        <body>
            <main class=" padding-bottom padding-top-xl">
                <div class="container mt-5">
                    <div class="row">
                     <div id="ul1"  class="col-2">
                            <form>
                                <div class="form-group">
                                    <label>Nom de la recette</label>
                                    <input type="text" class="form-control" id="nomRecette" placeholder="Nom de la Recette">
                                </div>
                                <div class="form-group">
                                    <label>Niveau</label>
                                        <select class="form-control-sm" id="niveau">
                                        <option>Très Facile</option>
                                        <option>Facile</option>
                                        <option>Intermédiaire</option>
                                        <option>Difficile</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                      <label>Image</label></label>
                                      <input type="file" class="form-control-file" id="fichierImage">
                                </div>

                                <div class="form-check">
                                    <label>Végétarien</label>
                                      <input class="form-check-input" type="radio" name="gridRadios" id="vegetarien" value="option1" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Oui
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="pasvegetarien" value="option2">
                                      <label class="form-check-label" for="gridRadios2">
                                        Non
                                      </label>
                                </div>

                                <div class="form-check">
                                    <label>Sans Gluten</label>
                                      <input class="form-check-input" type="radio" name="gridRadios" id="sansGluten" value="option1" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Oui
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="avecGluten" value="option2">
                                      <label class="form-check-label" for="gridRadios2">
                                        Non
                                      </label>
                                </div>


                                <div class="form-check">
                                    <label>Instructions de la recette</label>
                                    <textarea class="form-control" id="texteRecette" rows="3"></textarea>
                                </div>

                                <div class="form-check">

                                    <label></label>
                                </div>






                            </form>
                        </div>
                    </div>
                </div>


        </main>
        </body>';
    }

}

?>
