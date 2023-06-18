<?php
require_once "./vendor/autoload.php";

$routes= NEW AltoRouter;

require_once "./config/route.php";

//cherche la route correspondante

$routetrouvee = $routes->match();


//si la route est vraiment trouver alors on execcute la fonction qui se trouve dans la definition "Funtion()"
if ($routetrouvee != null) {
    $routetrouvee['target']();

}else{

    require_once "./view/error/404.php";




    // $erreur = 404;
    // //la methode heredoc pour les chaine de caracters
    // echo <<<fardat
    // <p class="fs-1 text-bg-danger text-center">ERREUR $erreur page introuvable</p>
    // fardat;



    // //sans la methode heredoc

    // echo "<P class=\"fs-1 text-bg-danger\">Error".$erreur."page introuvable</P>";
}








    require_once "./include/footer.php";
