<?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Accueil extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit(){
            echo '
<body>
 	<main class="text-center padding-bottom padding-top-xl" style="margin-bottom: 140px;">
        <div class="container mt-5">
          <div class="row">
            <img src="Images/imageIndex.jpg" class="img-fluid rounded mx-auto d-block" alt="Courses">
          </div>
          <div class="row">
              <div class="col-4 mt-4 ">
                    <h4 id="titre" class="text-light bg-success border border-secondary mb-0">
                      Recettes
                    </h4>
                    <div class="bg-light border border-secondary">
                      <p class="mt-1">
                        Haec igitur prima lex amicitiae sanciatur, ut ab amicis
                       <hr>
                       <a href="index.php?module=Recettes" class="mb-1">Recettes</a>
                    </p>
                    </div>
              </div>

              <div class="col-4 mt-4 ">
                    <h4 id="titre" class="text-light bg-success border border-secondary mb-0">
                      Frigo
                    </h4>
                    <div class="bg-light border border-secondary" >
                      <p class="mt-1">
                          Haec igitur prima lex amicitiae sanciatur, ut ab amicis
                         <hr>
                         <a href="index.php?module=Frigo" class="mb-1">Mon Frigo</a>
                      </p>
                    </div>
              </div>

              <div class="col-4 mt-4 ">
                    <h4 id="titre" class="col- text-light bg-success border border-secondary mb-0">
                      Liste de Course
                    </h4>
                    <div class="bg-light border border-secondary">
                      <p class="mt-1">
                        Haec igitur prima lex amicitiae sanciatur, ut ab amicis
                       <hr>
                       <a href="index.php?module=Liste" class="mb-1">Faire ma liste</a>
                    </p>
                    </div>

              </div>

          </div>
  </main>
</body>';
        }
    }
?>
